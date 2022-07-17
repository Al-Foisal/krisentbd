@extends('backend.layouts.master')
@section('title', 'Edit Distributor')
@section('backend')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Distributor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Distributor</li>
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
                        <form action="{{ route('admin.distributors.update', $distributor) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Distributor Type:<span class="text-danger">*</span></label>
                                            <select class="form-control  select2bs4" style="width: 100%;" name="type"
                                                required>
                                                <option value="">--select type--</option>
                                                <option value="1" @if($distributor->type === 1) {{ 'selected' }} @endif>Super Dealer</option>
                                                <option value="2" @if($distributor->type === 2) {{ 'selected' }} @endif>Main Dealer</option>
                                                <option value="3" @if($distributor->type === 3) {{ 'selected' }} @endif>Sub Dealer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image"
                                                        id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                value="{{ $distributor->name }}" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                            value="{{ $distributor->email }}" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ $distributor->phone }}" name="phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                    value="{{ $distributor->address }}" name="address">
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card card-outline card-info">
                                            <div class="card-header">
                                                <h3 class="card-title">
                                                    Short Details
                                                </h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <textarea class="form-control" name="details">{{ $distributor->details }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>

                                <div class="cart-body">
                                    <div class="card-header  bg-info">
                                        <h3 class="card-title">Bangla</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">__Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    value="{{ $distributor->bn_name }}" name="bn_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">__Phone</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    value="{{ $distributor->bn_phone }}" name="bn_phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">__Address</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            value="{{ $distributor->bn_address }}" name="bn_address">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card card-outline card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        __Short Details
                                                    </h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <textarea class="form-control" name="bn_details">{{ $distributor->bn_details }}</textarea>
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
