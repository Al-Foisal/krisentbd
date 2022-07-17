<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $blogs = Blog::with('postedBy')->orderBy('id', 'DESC')->paginate(20);

        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data                    = [];
        $data['blog_tags']       = BlogTag::all();
        $data['blog_categories'] = BlogCategory::all();

        return view('backend.blog.create', $data);
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
            'name'       => 'required',
            'details'    => 'required',
            'bn_author'  => 'required',
            'bn_name'    => 'required',
            'bn_details' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/blog/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);

            }

        }

        $blog = Blog::create([
            'image'      => $final_name1,
            'name'       => $request->name,
            'admin_id'   => auth()->guard('admin')->user()->id,
            'author'     => $request->author ?? auth()->guard('admin')->user()->name,
            'details'    => $request->details,
            'bn_name'    => $request->bn_name,
            'bn_author'  => $request->bn_author,
            'bn_details' => $request->bn_details,
        ]);

        $blog->blogTags()->sync($request->tags);
        $blog->blogCategories()->sync($request->categories);

        return redirect()->back()->withToastSuccess('New Blog Added Successfully!!');

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
    public function edit(Blog $blog) {
        $blog_tags       = BlogTag::all();
        $blog_categories = BlogCategory::all();

        return view('backend.blog.edit', compact('blog', 'blog_tags', 'blog_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog) {
        $validator = Validator::make($request->all(), [
            'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'name'       => 'required',
            'details'    => 'required',
            'bn_author'  => 'required',
            'bn_name'    => 'required',
            'bn_details' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {
                $image_path = public_path($blog->image);

                if (File::exists($image_path)) {
                    File::delete($image_path);
                }

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/blog/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                $blog->update([
                    'image' => $final_name1,
                ]);

            }

        }

        $blog->update([
            'name'       => $request->name,
            'author'     => $request->author ?? auth()->guard('admin')->user()->name,
            'details'    => $request->details,
            'bn_name'    => $request->bn_name,
            'bn_author'  => $request->bn_author,
            'bn_details' => $request->bn_details,
        ]);

        $blog->blogTags()->sync($request->tags);
        $blog->blogCategories()->sync($request->categories);

        return redirect()->route('admin.blogs.index')->withToastSuccess('Blog Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog) {
        $image_path = public_path($blog->image);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->withToastSuccess('Blog deleted Successfully!!');
    }

    public function showFront(Request $request, $id) {
        $blog = Blog::findOrFail($id);

        $blog->front_page = 1;
        $blog->save();

        return redirect()->route('admin.blogs.index')->withToastSuccess('Blog set for front page view!!');

    }

    public function removeFront(Request $request, $id) {
        $blog = Blog::findOrFail($id);

        $blog->front_page = 0;
        $blog->save();

        return redirect()->route('admin.blogs.index')->withToastSuccess('Blog remove from front page view!!');

    }

}
