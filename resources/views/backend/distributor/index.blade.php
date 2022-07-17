@extends('backend.layouts.master')
@section('title', 'Distributor List')
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
                    <h1>Distributor</h1>
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
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ route('admin.distributors.create') }}" class="btn btn-outline-primary">Add Distributor</a>
                            <br>
                            <br>
                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Type</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Short Details</th>
                                        
                                        <th>__Name</th>
                                        <th>__Phone</th>
                                        <th>__Address</th>
                                        <th>__Short Details</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($distributors as $distributor)
                                        <tr>
                                            <td>
                                                <a href="{{ route('admin.distributors.edit', $distributor) }}"
                                                    class="btn btn-info btn-xs"> <i class="fas fa-edit"></i> </a>
                                                <form action="{{ route('admin.distributors.destroy', $distributor) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return(confirm('Are you sure want to delete this item?'))"
                                                        class="btn btn-danger btn-xs"> <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>ll</td>
                                            <td><img src="{{ asset($distributor->image) }}" height="100px" width="100px"
                                                    alt=""></td>
                                            <td>{{ $distributor->name }}</td>
                                            <td>{{ $distributor->email }}</td>
                                            <td>{{ $distributor->phone }}</td>
                                            <td>{{ $distributor->address }}</td>
                                            <td>{!! $distributor->details !!}</td>
                                            <td>{{ $distributor->bn_name }}</td>
                                            <td>{{ $distributor->bn_phone }}</td>
                                            <td>{{ $distributor->bn_address }}</td>
                                            <td>{!! $distributor->bn_details !!}</td>
                                            <td>{{ $distributor->created_at }}</td>
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
