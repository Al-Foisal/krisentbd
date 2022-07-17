@extends('backend.layouts.master')
@section('title', 'Product List')

@section('backend')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                            <a href="{{ route('admin.createProduct') }}" class="btn btn-outline-primary">Create New
                                Product</a>
                            <br>
                            <br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Subcategory</th>
                                        <th>Child Category</th>
                                        <th>Brand</th>
                                        <th>Buying Price</th>
                                        <th>Selling Price</th>
                                        <th>Discount Percentages</th>
                                        <th>Discount Price</th>
                                        <th>Product Quantity</th>
                                        <th>Additional Charge</th>
                                        <th>Details</th>
                                        <th>Specification</th>
                                        <th>Product Images</th>
                                        <th>Product Size</th>
                                        <th>Product Color</th>
                                        <th>__Name</th>
                                        <th>__Selling Price</th>
                                        <th>__Discount Percentages</th>
                                        <th>__Discount Price</th>
                                        <th>__Details</th>
                                        <th>__Specification</th>
                                        <th>Created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="d-flex justify-content-between">
                                                <a href="{{ route('admin.editProduct', $product->id) }}"
                                                    class="btn btn-info btn-xs mr-2"> <i class="fas fa-edit"></i> </a>
                                                @if ($product->status === 1)
                                                    <form action="{{ route('admin.inactiveProduct', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit"
                                                            onclick="return(confirm('Are you sure want to INACTIVE this item?'))"
                                                            class="btn btn-danger btn-xs mr-2"> <i
                                                                class="far fa-thumbs-down"></i>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.activeProduct', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit"
                                                            onclick="return(confirm('Are you sure want to Active this item?'))"
                                                            class="btn btn-info btn-xs mr-2"> <i class="far fa-thumbs-up"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                                <form action="{{ route('admin.deleteProduct', $product->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        onclick="return(confirm('Are you sure want to delete this item?'))"
                                                        class="btn btn-danger btn-xs"> <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->is_active }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->subcategory->name ?? '' }}</td>
                                            <td>{{ $product->childcategory->name ?? '' }}</td>
                                            <td>{{ $product->brand->brand ?? '' }}</td>
                                            <td>{{ $product->buying }}</td>
                                            <td>{{ $product->selling }}</td>
                                            <td>{{ $product->discount . '%' }}</td>
                                            <td>{{ $product->discount_price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->additional_charge }}</td>
                                            <td>{!! $product->details !!}</td>
                                            <td>{!! $product->specification !!}</td>
                                            <td>
                                                @foreach ($product->images as $image)
                                                    <img src="{{ asset($image->image) }}" height="100px" width="100px"
                                                        alt="">
                                                    <br>
                                                    <br>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($product->sizes as $size)
                                                    {{ $size->size }},
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($product->colors as $color)
                                                    {{ $color->color }},
                                                @endforeach
                                            </td>


                                            <td>{{ $product->bn_name }}</td>
                                            <td>{{ $product->bn_selling }}</td>
                                            <td>{{ $product->bn_discount }}</td>
                                            <td>{{ $product->bn_discount_price }}</td>
                                            <td>{{ $product->bn_details }}</td>
                                            <td>{{ $product->bn_specification }}</td>
                                            <td>{{ $product->created_at }}</td>

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
