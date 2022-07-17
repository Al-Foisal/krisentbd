<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DistributorController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $distributors = Distributor::orderBy('id', 'DESC')->get()
        ;

        return view('backend.distributor.index', compact('distributors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.distributor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'image'      => 'required|image|mimes:jpeg,png,jpg,gif',
            'type'       => 'required',
            'name'       => 'required',
            'details'    => 'required|max:255',
            'phone'      => 'required',
            'address'    => 'required',
            'email'      => 'required',
            'bn_name'    => 'required',
            'bn_details' => 'required|max:255',
            'bn_phone'   => 'required',
            'bn_address' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/distributor/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);

            }

        }

        Distributor::create([
            'image'      => $final_name1,
            'type'       => $request->type,
            'name'       => $request->name,
            'details'    => $request->details,
            'phone'      => $request->phone,
            'address'    => $request->address,
            'email'      => $request->email,
            'bn_name'    => $request->bn_name,
            'bn_details' => $request->bn_details,
            'bn_phone'   => $request->bn_phone,
            'bn_address' => $request->bn_address,
        ]);

        return redirect()->back()->withToastSuccess('New Distributor Added Successfully!!');

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
    public function edit(Distributor $distributor) {
        return view('backend.distributor.edit', compact('distributor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distributor $distributor) {
        $validator = Validator::make($request->all(), [
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'type'       => 'required',
            'name'       => 'required',
            'details'    => 'required|max:255',
            'phone'      => 'required',
            'address'    => 'required',
            'email'      => 'required',
            'bn_name'    => 'required',
            'bn_details' => 'required|max:255',
            'bn_phone'   => 'required',
            'bn_address' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {
                $image_path = public_path($distributor->image);

                if (File::exists($image_path)) {
                    File::delete($image_path);
                }

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/distributor/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                $distributor->update([
                    'image' => $final_name1,
                ]);

            }

        }

        $distributor->update([
            'type'       => $request->type,
            'name'       => $request->name,
            'details'    => $request->details,
            'phone'      => $request->phone,
            'address'    => $request->address,
            'email'      => $request->email,
            'bn_name'    => $request->bn_name,
            'bn_details' => $request->bn_details,
            'bn_phone'   => $request->bn_phone,
            'bn_address' => $request->bn_address,
        ]);

        return redirect()->route('admin.distributors.index')->withToastSuccess('Distributor Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distributor $distrbutor) {

        $image_path = public_path($distrbutor->image);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $distrbutor->delete();

        return redirect()->route('admin.distrbutors.index')->withToastSuccess('Distrbutor deleted Successfully!!');

    }

}
