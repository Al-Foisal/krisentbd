<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog_tags = BlogTag::all();
        return view('backend.blog_tag.index', compact('blog_tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog_tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'name.*' => 'required',
            'bn_name' => 'required',
            'bn_name.*' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        foreach ($request->input('name') as $key => $f) {
            BlogTag::create(['name' => $request->name[$key],'bn_name' => $request->bn_name[$key]]);
        }

        return redirect()->route('admin.blog-tags.index')->withToastSuccess('Tags Added Successfully!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogTag $blog_tag)
    {
        $blog_tag->delete();
        return redirect()->back()->withToastSuccess('Tag deleted Successfully!!');
    }
}
