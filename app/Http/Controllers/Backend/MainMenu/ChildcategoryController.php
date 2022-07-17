<?php

namespace App\Http\Controllers\Backend\MainMenu;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Childcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChildcategoryController extends Controller {
    public function childcategory() {
        $childcategories = Childcategory::with('subcategory', 'subcategory.category')->get();

        return view('backend.main_menu.childcategory.index', compact('childcategories'));
    }

    public function createChildcategory() {
        $categories = Category::where('status', 1)->get();

        return view('backend.main_menu.childcategory.create', compact('categories'));
    }

    public function storechildcategory(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:childcategories',
            'bn_name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        Childcategory::create([
            'name'           => $request->name,
            'bn_name'           => $request->bn_name,
            'category_id'    => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'status'         => 1,
        ]);

        return redirect()->route('admin.childcategory')->withToastSuccess('Childcategory added successfully!!');
    }

    public function editChildcategory($id) {
        $childcategory = Childcategory::with('subcategory', 'subcategory.category')->where('id', $id)->first();
        $categories    = Category::where('status', 1)->get();

        return view('backend.main_menu.childcategory.edit', compact('childcategory', 'categories'));
    }

    public function updateChildcategory(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:childcategories,name,' . $id,
            'bn_name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        $childcategory = Childcategory::where('id', $id)->first();

        $childcategory->update([
            'name'           => $request->name,
            'bn_name'           => $request->bn_name,
            'category_id'    => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
        ]);

        return redirect()->route('admin.childcategory')->withToastSuccess('Childcategory updated successfully!!');
    }

    public function activeChildcategory(Request $request, $id) {
        $childcategory = Childcategory::where('id', $id)->first();

        $childcategory->status = 1;
        $childcategory->save();

        return redirect()->route('admin.childcategory')->withToastSuccess('Childcategory activated successfully!!');
    }

    public function inactiveChildcategory(Request $request, $id) {
        $childcategory = Childcategory::where('id', $id)->first();

        $childcategory->status = 0;
        $childcategory->save();

        return redirect()->route('admin.childcategory')->withToastSuccess('Childcategory inactivated successfully!!');
    }

    public function deleteChildcategory(Request $request, $id) {
        $childcategory = Childcategory::where('id', $id)->first();

        $childcategory->delete();

        return redirect()->route('admin.childcategory')->withToastSuccess('Childcategory deleted successfully!!');
    }

}
