<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\BlogTag;
use App\Models\Client;
use App\Models\CompanySlider;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Distributor;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller {
    public function companyHome() {
        $data                   = [];
        $data['is_company']     = true;
        $data['company_slider'] = CompanySlider::orderBy('id', 'DESC')->get();
        $data['products']       = Product::with('images')->activeStatus()->decending()->limit(10)->get();
        $data['services']       = Service::orderBy('id', 'DESC')->limit(4)->get();
        $data['testimonials']   = Testimonial::orderBy('id', 'DESC')->get();
        $data['counter']        = Counter::find(1);
        $data['blogs']          = Blog::where('front_page', 1)->get();

        return view('frontend.company.index', $data);
    }

    public function companyAbout() {
        $data               = [];
        $data['is_company'] = true;
        $data['abouts']     = About::all();
        $data['clients']    = Client::all();

        return view('frontend.company.about', $data);
    }

    public function companyService() {
        $data               = [];
        $data['is_company'] = true;
        $data['services']   = Service::all();

        return view('frontend.company.service', $data);
    }

    public function companyServiceDetails($locale,$id) {
        $data               = [];
        $data['is_company'] = true;
        $data['service']    = Service::findOrFail($id);

        return view('frontend.company.service-details', $data);
    }

    public function gallery() {
        $is_company = true;
        $gallery    = Gallery::orderBy('id', 'DESC')->get();

        return view('frontend.company.gallery', compact('gallery', 'is_company'));
    }

    public function companyBlog() {
        $data               = [];
        $data['is_company'] = true;
        $data['blogs']      = Blog::with('blogComments')->orderBy('id', 'DESC')->paginate(18);

        return view('frontend.company.blog.blog', $data);
    }

    public function companyBlogDetails($locale, $id) {
        $data                 = [];
        $data['is_company']   = true;
        $data['blog']         = Blog::with('blogCategories', 'blogTags', 'blogComments')->where('id', $id)->first();
        $data['blogCategory'] = BlogCategory::all();
        $data['blogTag']      = BlogTag::all();
        $data['recentBlog']   = Blog::orderBy('id', 'DESC')->limit(5)->get();

        return view('frontend.company.blog.blog-details', $data);
    }

    public function categoryBlog($locale, $id) {
        // dd($locale, $id);
        $data               = [];
        $data['is_company'] = true;
        $data['category']   = BlogCategory::with('blogs')->where('id', $id)->first();

        return view('frontend.company.blog.category-blog', $data);
    }

    public function tagBlog($locale, $id) {
        $data               = [];
        $data['is_company'] = true;
        $data['tag']        = BlogTag::with('blogs')->where('id', $id)->first();

        return view('frontend.company.blog.tag-blog', $data);
    }

    public function companyBlogCommentStore($locale, Request $request) {

        BlogComment::create([
            'blog_id'     => $request->blog_id,
            'name'        => $request->name,
            'email'       => $request->email,
            'comment'     => $request->comment,
            'is_approved' => 0,
        ]);

        return redirect()->back()->withToastSuccess(__('Your Comments Added Successfully Wait for Approval!!'));

    }

    public function companyDistributor() {
        $data               = [];
        $data['is_company'] = true;
        $data['super']      = Distributor::where('type', 1)->limit(8)->get();
        $data['main']       = Distributor::where('type', 2)->limit(8)->get();
        $data['sub']        = Distributor::where('type', 3)->limit(8)->get();

        return view('frontend.company.distributor', $data);
    }

    public function companyAllDistributors($locale, $type) {
        $data                 = [];
        $data['is_company']   = true;
        $data['distributors'] = Distributor::where('type', $type)->get();
        $data['type']         = $type;

        return view('frontend.company.all-distributor', $data);
    }

    public function contact() {
        $data               = [];
        $data['is_company'] = true;

        return view('frontend.company.contact', $data);
    }

    public function storeContact($locale, Request $request) {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        Contact::create($request->all());

        return redirect()->back()->withToastSuccess(__('Your Message Sent Successfully!'));
    }

    public function page($locale, $slug) {
        $page = Page::where('slug', $slug)->where('status', 1)->first();
        $is_shop=true;
        return view('frontend.shop.page', compact('page', 'is_shop'));
    }

}
