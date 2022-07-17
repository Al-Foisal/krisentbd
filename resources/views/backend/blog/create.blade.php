@extends('backend.layouts.master')
@section('title', 'Create Blog')

@section('backend')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create Blog</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Blog Image (880 x 450)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Blog Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter blog name" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Author Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter blog name" name="author">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Blog Details
                                                </h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <textarea id="summernote" name="details"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>

                                <div class="card">

                                    <div class="card-body">
                                        <!-- Minimal style -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- checkbox -->
                                                <div class="card-header  bg-info">
                                                    <h3 class="card-title">Select Blog's Categories</h3>
                                                </div>
                                                <div class="form-group">
                                                    @foreach ($blog_categories as $category)
                                                        <div class="icheck-danger">
                                                            <input type="checkbox" value="{{ $category->id }}"
                                                                id="{{ $category->name }}" name="categories[]">
                                                            <label for="{{ $category->name }}">
                                                                {{ $category->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- checkbox -->
                                                <div class="card-header  bg-info">
                                                    <h3 class="card-title">Select Blog's Tags</h3>
                                                </div>
                                                <div class="form-group">
                                                    @foreach ($blog_tags as $tag)
                                                        <div class="icheck-danger">
                                                            <input type="checkbox" value="{{ $tag->id }}"
                                                                id="{{ $tag->name }}" name="tags[]">
                                                            <label for="{{ $tag->name }}">
                                                                {{ $tag->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">

                                    <div class="card-body">
                                        <!-- Minimal style -->
                                        <div class="">
                                            <!-- checkbox -->
                                            <div class="card-header  bg-info">
                                                <h3 class="card-title">Bangla</h3>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">__Blog Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter blog name" name="bn_name">
                                            </div>
            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">__Author Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter blog name" name="bn_author">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-outline card-info">
                                                        <div class="card-header">
                                                            <h3 class="card-title">
                                                                __Blog Details
                                                            </h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <div class="card-body">
                                                            <textarea id="summernote1" name="bn_details"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('jsLink')
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
@endsection
@section('jsScript')
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
        })
    </script>
@endsection
