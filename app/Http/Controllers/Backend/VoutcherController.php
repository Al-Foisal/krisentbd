<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Voutcher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class VoutcherController extends Controller {
    public function voutcherList() {
        $voutcher_list = Voutcher::orderBy('id', 'DESC')->get();

        return view('backend.voutcher.voutcher-list', compact('voutcher_list'));
    }

    public function createVoutcher() {

        return view('backend.voutcher.create-voutcher');
    }

    public function storeVoutcher(Request $request) {
        $validator = Validator::make($request->all(), [
            'offer_amount'  => 'required|numeric',
            'min_amount'    => 'required|numeric',
            'validity_from' => 'required|after_or_equal:today',
            'validity_to'   => 'required|after_or_equal:today',
            'image'         => 'required|mimes:jpg,png',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/voutcher/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
            }

        }

        Voutcher::create([
            'offer_amount'  => $request->offer_amount,
            'min_amount'    => $request->min_amount,
            'validity_from' => $request->validity_from,
            'validity_to'   => $request->validity_to,
            'image'         => $final_name1,
            'external_link' => $request->external_link,
        ]);

        return redirect()->back()->withToastSuccess('New voutcher added successfully!!');
    }

    public function editVoutcher(Voutcher $voutcher) {

        return view('backend.voutcher.edit-voutcher', compact('voutcher'));
    }

    public function updateVoutcher(Request $request, Voutcher $voutcher) {
        $validator = Validator::make($request->all(), [
            'offer_amount'  => 'required',
            'min_amount'    => 'required',
            'validity_from' => 'required',
            'validity_to'   => 'required',
            'image'         => 'nullable|mimes:jpg,png',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {

                $image_path = public_path($voutcher->image);

                if (File::exists($image_path)) {
                    File::delete($image_path);
                }

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/voutcher/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                $voutcher->update(
                    [
                        'image' => $final_name1,
                    ]
                );
            }

        }

        $voutcher->update([
            'offer_amount'  => $request->offer_amount,
            'min_amount'    => $request->min_amount,
            'validity_from' => $request->validity_from,
            'validity_to'   => $request->validity_to,
            'external_link' => $request->external_link,
        ]);

        return redirect()->route('admin.voutcherList')->withToastSuccess('Voutcher updated successfully!!');
    }

    public function deleteVoutcher(Request $request, Voutcher $voutcher) {
        $image_path = public_path($voutcher->image);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $voutcher->delete();

        return redirect()->route('admin.voutcherList')->withToastSuccess('Voutcher deleted successfully!!');
    }

}
