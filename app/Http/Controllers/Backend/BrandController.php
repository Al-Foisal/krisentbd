<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $brands = Brand::withCount('products')->get();

        return view('backend.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.brand.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'brand'      => 'required|unique:brands',
            'brand.*'    => 'required',
            'bn_brand'   => 'required',
            'bn_brand.*' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        $files = [];

        foreach ($request->input('brand') as $key => $f) {
            Brand::create(['brand' => $request->brand[$key], 'bn_brand' => $request->bn_brand[$key]]);
        }

        return redirect()->route('admin.brands.index')->withToastSuccess('brands Added Successfully!!');
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
    public function edit(Brand $brand) {
        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand) {
        $validator = Validator::make($request->all(), [
            'brand'    => 'required|unique:brands,brand,' . $brand->id,
            'bn_brand' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        $brand->update([
            'brand' => $request->brand,
            'bn_brand' => $request->bn_brand,
        ]);

        return redirect()->route('admin.brands.index')->withToastSuccess('brands Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand) {

        $brand->delete();

        return redirect()->route('admin.brands.index')->withToastSuccess('brands Deleted Successfully!!');

    }

    // public function activeInMall(Request $request, Brand $mall) {
    //     $mall->mall = 1;
    //     $mall->save();

    //     return redirect()->back()->withToastSuccess('This brand added to mall successfully!!');
    // }

    // public function inactiveInMall(Request $request, Brand $mall) {
    //     $mall->mall = 0;
    //     $mall->save();

    //     return redirect()->back()->withToastSuccess('This brand remove from mall successfully!!');
    // }

}
