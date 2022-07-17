<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller {
    public function showProfile() {
        $is_shop = true;
        $user = User::with('userAddress')->where('id', auth()->user()->id)->first();

        return view('frontend.user.user-profile', compact('user','is_shop'));
    }

    public function storeProfile(Request $request, $id) {

        if (Auth::id() != $id) {
            return redirect()->back()->withToastError('Access denide!');
        }

        $files = [];

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            $profile = UserAddress::where('user_id', $id)->first();

            if (!empty($profile->image)) {
                $image_path = public_path($profile->image);

                if (File::exists($image_path)) {
                    File::delete($image_path);
                }

            }

            if ($image_file) {

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/customer/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);

            }

            UserAddress::updateOrCreate(
                ['user_id' => $id],
                [
                    'image' => $final_name1,
                ]
            );

        }

        UserAddress::updateOrCreate(
            ['user_id' => $id],
            [
                'name'     => $request->name,
                'phone'    => $request->phone,
                'email'    => $request->email,
                'city'     => $request->city,
                'area'     => $request->area,
                'zip_code' => $request->zip_code,
                'address'  => $request->address,
                'user_id'  => auth()->user()->id,
            ]
        );

        return redirect()->back()->withToastSuccess(__('Your profile updated Successfully!!'));
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('companyHome', app()->getLocale())->withToastSuccess(__('Logout successful!'));
    }

}
