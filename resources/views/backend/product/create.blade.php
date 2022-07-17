@extends('backend.layouts.master')
@section('title', 'Create New Product')
@section('cssStyle')
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>
@endsection

@section('backend')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Product</h1>
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
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add new product goes here</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.storeProduct') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Main Category:<span class="text-danger">*</span></label>
                                            <select class="form-control  select2bs4" style="width: 100%;" name="category_id"
                                                required>
                                                <option value="">--select category--</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Subcategory:</label>
                                            <select class="form-control  select2bs4" data-placeholder="Select subcategory"
                                                style="width: 100%" name="subcategory_id">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Child Category:</label>
                                            <select class="form-control  select2bs4"
                                                data-placeholder="Select Child Category" style="width: 100%"
                                                name="childcategory_id">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Brand:</label>
                                            <select class="form-control  select2bs4" style="width: 100%;" name="brand_id">
                                                <option value="">--select brand--</option>
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="product_name">Product name:<span class="text-danger">*</span></label>
                                    <textarea rows="2" type="text" name="name" class="form-control" id="product_name"
                                        placeholder="Enter product name">{{ old('name') }}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="buying">Buying price:</label>
                                            <input type="number" name="buying" class="form-control" id="buying"
                                                placeholder="Buying price" value="{{ old('buying') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="selling">Selling price:<span class="text-danger">*</span></label>
                                            <input type="number" name="selling" class="form-control" id="selling"
                                                placeholder="Selling price" value="{{ old('selling') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="discount">Discount:</label>
                                            <input type="number" name="discount" class="form-control" id="discount"
                                                placeholder="Discount" value="{{ old('discount') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="discount">Discount price:</label>
                                            <input type="text" readonly name="discount_price" class="form-control"
                                                id="discount_price" placeholder="Discount price" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="quantity">Quantity:<span class="text-danger">*</span></label>
                                            <input type="number" name="quantity" class="form-control" id="quantity"
                                                placeholder="Quantity" value="{{ old('quantity') }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="additional_charge">additional_charge:</label>
                                            <input type="number" name="additional_charge" class="form-control"
                                                id="additional_charge" placeholder="additional_charge"
                                                value="{{ old('additional_charge') }}" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="product_details">Product details:<span
                                            class="text-danger">*</span></label>
                                    <textarea type="text" name="details" class="form-control" id="summernote1"
                                        rows="10">{{ old('details') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="product_details">Product Specefication:<span
                                        class="text-danger">*</span></label>
                                    <textarea type="text" name="specification" class="form-control" id="summernote"
                                        rows="10">{{ old('specefication') }}</textarea>
                                </div>
                                <hr>
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Product Images:(400x320)<span
                                                class="text-danger">*</span>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="input-group hdtuto control-group lst increment">
                                                <input type="file" name="image[]" class="myfrm form-control">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success" type="button"><i
                                                            class="far fa-plus-square"></i> Add</button>
                                                </div>
                                            </div>

                                            <div class="clone hide">
                                                <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                                    <input type="file" name="image[]" class="myfrm form-control">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-danger" type="button"> <i
                                                                class="far fa-minus-square"></i> Remove </button>

                                                    </div>
                                                </div>
                                            </div>
                                            @error('images[]')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Product Size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- checkbox -->
                                            @foreach ($sizes as $size)
                                                <div class="col-sm-2">
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox" id="{{ $size->size }}" name="sizes[]"
                                                                value="{{ $size->id }}">
                                                            <label for="{{ $size->size }}"> {{ $size->size }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Product Color</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- checkbox -->
                                            @foreach ($colors as $color)
                                                <div class="col-sm-2">
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-success d-inline">
                                                            <input type="checkbox" id="{{ $color->color }}"
                                                                name="colors[]" value="{{ $color->id }}">
                                                            <label for="{{ $color->color }}"
                                                                style="color: {{ $color->color_code }}">
                                                                {{ $color->color }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Bangla<span
                                                class="text-danger">*</span>
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="product_name">__Product name:<span class="text-danger">*</span></label>
                                            <textarea rows="2" type="text" name="bn_name" class="form-control" id="product_name"
                                                placeholder="Enter product name">{{ old('bn_name') }}</textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="selling">Selling price:<span class="text-danger">*</span></label>
                                                    <input type="text" name="bn_selling" class="form-control" id=""
                                                        placeholder="Selling price" value="{{ old('bn_selling') }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="discount">__Discount:</label>
                                                    <input type="text" name="bn_discount" class="form-control"
                                                        placeholder="Discount" value="{{ old('bn_discount') }}" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="discount">__Discount price:</label>
                                                    <input type="text" name="bn_discount_price" class="form-control"
                                                        id="" placeholder="Discount price" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="additional_charge">__Additional_charge:</label>
                                                    <input type="text" name="bn_additional_charge" class="form-control"
                                                        id="additional_charge" placeholder="additional_charge"
                                                        value="{{ old('bn_additional_charge') }}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="product_details">__Product details:<span
                                                    class="text-danger">*</span></label>
                                            <textarea type="text" name="bn_details" class="form-control" id="summernote2"
                                                rows="10">{{ old('bn_details') }}</textarea>
                                        </div>
        
                                        <div class="form-group">
                                            <label for="product_details">__Product Specefication:<span
                                                class="text-danger">*</span></label>
                                            <textarea type="text" name="bn_specification" class="form-control" id="summernote3"
                                                rows="10">{{ old('bn_specefication') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('jsScript')


    <!-- summernote Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()
            $('#summernote1').summernote()
        })
    </script>

    {{-- submenu dependency --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/get-subcategory/') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="subcategory_id"]').empty();
                            var f = $('select[name="Childcategory_id"]').empty();
                            $('select[name="subcategory_id"]').append(
                                '<option selected>==Select==</option>');
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>');
                                $('select[name="childcategory_id"]').append(
                                    '<option value="" selected>--select childcategory--</option>'
                                );
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                $('select[name="subcategory_id"]').on('change', function() {
                    var subcategory_id = $(this).val();
                    if (subcategory_id) {
                        $.ajax({
                            url: "{{ url('/get-childcategory/') }}/" + category_id +
                                "/" + subcategory_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                var d = $('select[name="childcategory_id"]').empty();
                                
                                $.each(data, function(key, value) {
                                    $('select[name="childcategory_id"]').append(
                                        '<option value="' + value.id +
                                        '">' + value
                                        .name + '</option>');
                                });
                            },
                        });
                    } else {
                        alert('danger');
                    }
                });
            });
        });
    </script>

    {{-- for multiple file insertion --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function() {
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".hdtuto").remove();
            });
            $('#images').on('change', function() {
                multiImgPreview(this, 'div.imgPreview');
            });
        });
    </script>

    {{-- for discount price --}}
    <script type="text/javascript">
        $(function() {
            $("#selling, #discount").on("keydown keyup", sum);

            function sum() {
                var selling = Number($("#selling").val());
                var discount = Number($("#discount").val());
                if (discount > 0) {
                    var discount_price = (selling * discount) / 100;
                    $("#discount_price").val(selling - discount);
                }
            }
        });
    </script>
@endsection
