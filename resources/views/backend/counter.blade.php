@extends('backend.layouts.master')
@section('title', 'Company General Counter')
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
                    <h1>Company General Counter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Company General Counter</li>
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
                        <form action="{{ route('admin.storeCounter') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title One Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="one_count" value="{{ $counter->one_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title One</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="one_title" value="{{ $counter->one_title ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title One Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_one_count" value="{{ $counter->bn_one_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title One</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_one_title" value="{{ $counter->bn_one_title ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title Two Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="two_count" value="{{ $counter->two_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title Two</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="two_title" value="{{ $counter->two_title ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title Two Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_two_count" value="{{ $counter->bn_two_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title Two</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_two_title" value="{{ $counter->bn_two_title ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title Three Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="three_count" value="{{ $counter->three_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title Three</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="three_title" value="{{ $counter->three_title ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title Three Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_three_count" value="{{ $counter->bn_three_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title Three</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_three_title" value="{{ $counter->bn_three_title ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title Four Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="four_count" value="{{ $counter->four_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Counter Title Four</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="four_title" value="{{ $counter->four_title ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title Four Number</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_four_count" value="{{ $counter->bn_four_count ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">__Counter Title Four</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                name="bn_four_title" value="{{ $counter->bn_four_title ?? '' }}">
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
@endsection
@section('jsScript')
@endsection
