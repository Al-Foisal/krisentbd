@extends('backend.layouts.master')
@section('title', 'Blog Comments List')
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
                    <h1>Blog Comments</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item">Blog</li>
                        <li class="breadcrumb-item active">Blog Comments</li>
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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Is Approved?</th>
                                        <th>Blog Name</th>
                                        <th>Commenter Comment</th>
                                        <th>Commenter Name</th>
                                        <th>Commenter Email</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            @if($comment->is_approved === 0)
                                            <td>
                                                <form action="{{ route('admin.comments.approve', $comment) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit"
                                                        onclick="return(confirm('Are you sure want to approve this item?'))"
                                                        class="btn btn-success btn-xs"> <i class="fas fa-thumbs-up"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            @else
                                            <td>{{ $comment->is_approved == 0 ? 'N' : 'Y' }}</td>
                                            @endif
                                            <td>{{ $comment->blog->name }}</td>
                                            <td>{{ $comment->comment }}</td>
                                            <td>{{ $comment->name }}</td>
                                            <td>{{ $comment->email }}</td>
                                            <td>{{ $comment->created_at }}</td>

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
