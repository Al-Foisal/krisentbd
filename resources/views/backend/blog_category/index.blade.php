@extends('backend.layouts.master')
@section('title', 'Category List')
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
                    <h1>Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                            <a href="{{ route('admin.blog-categories.create') }}" class="btn btn-outline-primary">Add Category </a>
                            <br>
                            <br>
                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Category</th>
                                        <th>__Category</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)

                                    
                                        <tr>
                                            <td>
                                                <form action="{{ route('admin.blog-categories.destroy', $category) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return(confirm('Are you sure want to delete this item?'))"
                                                        class="btn btn-danger btn-xs"> <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->bn_name }}</td>
                                            <td>{{ $category->created_at }}</td>
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
