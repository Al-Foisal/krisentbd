@extends('backend.layouts.master')
@section('title', 'Create Service')
@section('backend')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Service</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create Service</li>
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
                        <div class="bg-primary">All image will 1000x751</div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter service title" name="title">
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Details
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

<hr>
                                <div class="cart-body">
                                    <div class="card-header  bg-info">
                                        <h3 class="card-title">Bangla</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">__Title</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="bn_title">
                                    </div>
    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        Details
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

                            
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
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
            $('#summernote1').summernote()
            $('#summernote2').summernote()
            $('#summernote3').summernote()
        })
    </script>
@endsection
