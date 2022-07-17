@extends('backend.layouts.master')
@section('title', 'Blog List')
@section('cssLink')
@endsection
@section('cssStyle')
@endsection

@section('backend')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-outline-primary">Create New
                                Blog</a>
                            <br>
                            <br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Blog Image</th>
                                        <th>Blog Name</th>
                                        <th>Blog Details</th>
                                        <th>Blog Author</th>
                                        <th>__Blog Name</th>
                                        <th>__Blog Details</th>
                                        <th>__Blog Author</th>
                                        <th>Relation With</th>
                                        <th>__Relation With</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td class="d-flex">
                                                <a href="{{ route('admin.blogs.edit', $blog) }}"
                                                    class="btn btn-info btn-xs mr-1"> <i class="fas fa-edit"></i> </a>
                                                @if ($blog->front_page == 1)
                                                    <form action="{{ route('admin.blogs.removeFront', $blog) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" title="Remove from front page view"
                                                            onclick="return(confirm('Are you sure want to change this item?'))"
                                                            class="btn btn-danger btn-xs mr-1"> <i class="far fa-thumbs-down"></i>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.blogs.showFront', $blog) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" title="Set from front page view"
                                                            onclick="return(confirm('Are you sure want to change this item?'))"
                                                            class="btn btn-success btn-xs mr-1"> <i class="far fa-thumbs-up"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return(confirm('Are you sure want to delete this item?'))"
                                                        class="btn btn-danger btn-xs mr-1"> <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td><img src="{{ asset($blog->image) }}" height="100px" width="200px"></td>
                                            <td>{{ $blog->name }}</td>
                                            <td>{!! \Illuminate\Support\Str::words($blog->details, 100, '...') !!}</td>
                                            <td>{{ $blog->author ?? $blog->postedBy->name }}</td>

                                            <td>{{ $blog->bn_name }}</td>
                                            <td>{!! \Illuminate\Support\Str::words($blog->bn_details, 100, '...') !!}</td>
                                            <td>{{ $blog->bn_author ?? $blog->postedBy->name }}</td>

                                            <td>
                                                @foreach ($blog->blogTags as $tag)
                                                    {{ $tag->name . ',' }} <br>
                                                @endforeach
                                                <hr>
                                                @foreach ($blog->blogCategories as $category)
                                                    {{ $category->name . ',' }} <br>
                                                @endforeach
                                            </td>

                                            <td>
                                                @foreach ($blog->blogTags as $bntag)
                                                    {{ $bntag->bn_name . ',' }} <br>
                                                @endforeach
                                                <hr>
                                                @foreach ($blog->blogCategories as $bncategory)
                                                    {{ $bncategory->bn_name . ',' }} <br>
                                                @endforeach
                                            </td>
                                            <td>{{ $blog->created_at }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('jsLink')
@endsection
@section('jsScript')
@endsection
