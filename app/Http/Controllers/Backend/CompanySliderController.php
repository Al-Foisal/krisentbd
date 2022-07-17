<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CompanySlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CompanySliderController extends Controller
{
    public function allSlider() {
        $sliders = CompanySlider::all();

        return view('backend.company_slider.all-slider', compact('sliders'));
    }

    public function createSlider() {
        return view('backend.company_slider.create-slider');
    }

    public function storeSlider(Request $request) {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/company_slider/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
            }

        }

        CompanySlider::create([
            'image' => $final_name1,
        ]);

        return redirect()->back()->withToastSuccess("Slider added!!");

    }

    public function editSlider(CompanySlider $slider) {
        return view('backend.company_slider.edit-slider', compact('slider'));
    }

    public function updateSlider(Request $request, CompanySlider $slider) {
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {
                $image_path = public_path($slider->image);

                if (File::exists($image_path)) {
                    File::delete($image_path);
                }

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/company_slider/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);

                $slider->update(['image' => $final_name1]);
            }

        }

        return redirect()->back()->withToastSuccess("Slider added!!");

    }

    public function deleteSlider(CompanySlider $slider) {
        $image_path = public_path($slider->image);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $slider->delete();

        return redirect()->route('admin.allCompanySlider')->withToastSuccess('Slideer deleted');
    }
}
