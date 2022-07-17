<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $galleries = Gallery::orderBy('id', 'DESC')->get();

        return view('backend.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'image'   => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title'   => 'required',
            'title.*' => 'required',
            'bn_title'   => 'required',
            'bn_title.*' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        #file insertion area
        $files = [];

        if ($request->hasfile('image')) {

            foreach ($request->file('image') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('images/gallery/'), $name);
                $files[] = 'images/gallery/' . $name;
            }

        }

        foreach ($files as $key => $f) {
            Gallery::create(['title' => $request->title[$key],'bn_title' => $request->bn_title[$key], 'image' => $f]);
        }

        return redirect()->route('admin.galleries.index')->withToastSuccess('Images Added Successfully!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery) {
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery) {
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'title' => 'required',
            'bn_title' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {
                $image_path = public_path($gallery->image);

                if (File::exists($image_path)) {
                    File::delete($image_path);
                }

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/gallery/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                $gallery->update([
                    'image' => $final_name1,
                ]);

            }

        }

        $gallery->update([
            'title' => $request->title,
            'bn_title' => $request->bn_title,
        ]);

        return redirect()->route('admin.galleries.index')->withToastSuccess('Gallery Image Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery) {
        $image_path = public_path($gallery->image);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')->withToastSuccess('Gallery Image deleted Successfully!!');

    }

}
