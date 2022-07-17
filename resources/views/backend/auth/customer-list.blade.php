@extends('backend.layouts.master')
@section('title', 'Customer List')

@section('backend')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Customer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Customer List</li>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Image</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $key => $customer)
                                        <tr>
                                            {{-- <td>
                                                <!-- Example single danger button -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        @if($admin->status == 0)
                                                        <form action="{{ route('admin.activeAdmin', $admin) }}" method="post">
                                                        @csrf
                                                            <button class="dropdown-item" type="submit">Active Admin</button>
                                                        </form>
                                                        @else
                                                        <form action="{{ route('admin.inactiveAdmin', $admin) }}" method="post">
                                                        @csrf
                                                            <button class="dropdown-item" type="submit">Inactive Admin</button>
                                                        </form>
                                                        @endif
                                                        <a class="dropdown-item" href="{{ route('admin.editAdmin', $admin) }}">Edit</a>
                                                        <form action="{{ route('admin.deleteAdmin', $admin) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                            <button class="dropdown-item" type="submit" onclick="return(confirm('Are you sure want to delete this item?'))">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td> --}}
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->userAddress->phone ?? 'N/A' }}</td>
                                            <td>{{ $customer->userAddress->address ?? 'N/A' }}</td>
                                            <td><img src="{{ asset($customer->userAddress->image ?? 'N/A') }}" height="50px" width="50px" alt="user"></td>
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