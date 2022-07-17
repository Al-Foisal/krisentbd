<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Childcategory;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ShopController extends Controller {
    public function shop() {
        $data              = [];
        $data['is_shop']   = true;
        $data['show_menu'] = 'show-always';
        $data['slider']    = Slider::all();
        $data['products']  = Product::with('images')->orderBy('id', 'DESC')->where('status', 1)->paginate(20);

        return view('frontend.shop.shop', $data);
    }

    public function categoryProduct($locale, $category, $sub = null, $child = null) {
        $data             = [];
        $data['is_shop']  = true;
        $data['category'] = $category = Category::where('slug', $category)->first();

        //category product
        $products = Product::with('images')->where('status', 1)->where('category_id', $category->id);

//category and subcategory product
        if ($sub !== null) {
            $data['subcategory'] = $subcategory = Subcategory::where('slug', $sub)->first();
            $products            = $products->where('subcategory_id', $subcategory->id);
        }

//category, subcategory and childcategory product
        if ($child !== null) {
            $data['childcategory'] = $childcategory = Childcategory::where('slug', $child)->first();
            $products              = $products->where('childcategory_id', $childcategory->id);
        }

        $order = request()->input('order');
        if ($order) {
            $products->orderBy('selling', $order);
        }

        $data['products'] = $products->paginate(20);
        $data['sub']      = $sub;
        $data['child']    = $child;

        return view('frontend.shop.category-product', $data);
    }

    public function ProductDetails($locale, $product) {
        $data            = [];
        $data['is_shop'] = true;
        $data['product'] = $product = Product::with('category', 'subcategory', 'childcategory', 'colors', 'sizes', 'images')->where('status', 1)->where('slug', $product)->first();

        $data['related_product'] = Product::with('images')->where('status', 1)->where('category_id', $product->category_id)->orderBy('id', 'DESC')->limit(10)->get();

        return view('frontend.shop.product-details', $data);
    }

    public function customerDashboard() {
        $data            = [];
        $data['is_shop'] = true;

        return view('frontend.user.dashboard', $data);
    }

    public function search(Request $request) {

        $search           = $request->input('search');
        $data             = [];
        $data['is_shop']  = true;
        $data['products'] = Product::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('details', 'LIKE', "%{$search}%")
            ->paginate(28);

        return view('frontend.shop.search-product', $data);
    }

}
