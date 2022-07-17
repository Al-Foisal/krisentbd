@extends('backend.layouts.master')
@section('title', 'Brand List')
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
                    <h1>Brand</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Brand</li>
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
                            <a href="{{ route('admin.brands.create') }}" class="btn btn-outline-primary">Add Brand </a>
                            <br>
                            <br>
                            <table id="" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Brand</th>
                                        <th>__Brand</th>
                                        <th>Products</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        @php
                                            $product = DB::table('products')
                                                ->where('brand_id', $brand->id)
                                                ->where('status', 1)
                                                ->where('discount_price', '!=', 'null')
                                                ->count();
                                        @endphp
                                        <tr>
                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('admin.brands.edit', $brand) }}"
                                                    class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('admin.brands.destroy', $brand) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return(confirm('Are you sure want to delete this item?'))"
                                                        class="btn btn-danger btn-xs"> <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $brand->brand }}</td>
                                            <td>{{ $brand->bn_brand }}</td>
                                            <td>{{ $brand->products_count }}</td>
                                            <td>{{ $brand->created_at }}</td>
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
