<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyInfoController extends Controller
{
    public function showCompanyInfo()
    {
        $info = CompanyInfo::where('id', 1)->first();

        return view('backend.company-info', compact('info'));
    }

    public function storeCompanyInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'about' => 'required',
            'address' => 'required',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'about' => 'required',
            'bn_address' => 'required',
            'bn_about' => 'required',
            'bn_phone_one' => 'required',
            'bn_phone_two' => 'required',
            'bn_phone_three' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }
        CompanyInfo::updateOrcreate(
            ['id' => 1],
            [
                'about' => $request->about,
                'address' => $request->address,
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'phone_three' => $request->phone_three,
                'email' => $request->email,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
                'linkedin' => $request->linkedin,
                'pinterest' => $request->pinterest,

                'bn_about' => $request->bn_about,
                'bn_address' => $request->bn_address,
                'bn_phone_one' => $request->bn_phone_one,
                'bn_phone_two' => $request->bn_phone_two,
                'bn_phone_three' => $request->bn_phone_three,
            ]
        );

        if ($request->hasFile('logo')) {

            $image_file = $request->file('logo');

            if ($image_file) {

                $img_gen = hexdec(uniqid());
                $image_url = 'images/logo/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                CompanyInfo::updateOrcreate(
                    ['id' => 1],
                    [
                        'logo' => $final_name1,
                    ]
                );
            }
        }

        if ($request->hasFile('favicon')) {

            $image_file = $request->file('favicon');

            if ($image_file) {

                $img_gen = hexdec(uniqid());
                $image_url = 'images/logo/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                CompanyInfo::updateOrcreate(
                    ['id' => 1],
                    [
                        'favicon' => $final_name1,
                    ]
                );
            }
        }
        return redirect()->back()->withToastSuccess('Company Info Added Successfully!!');
    }
}
