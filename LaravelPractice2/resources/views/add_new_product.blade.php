@extends('adminsite')

@section('content')
    <h1>Creating product page</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form action="{{route('doadd_product')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row" class="form-control">
                <label for="product_name" class="col-md-3">Enter product title:</label>
                <div class="col-md-5">
                    <input class="form-control input-md" type="text" id="product_name" name="product_name">
                </div>
            </div><br>

            <div class="row" class="form-control">
                <label for="product_sku" class="col-md-3">Enter product SKU:</label>
                <div class="col-md-5">
                    <input class="form-control input-md" type="text" id="product_sku" name="product_sku">
                </div>
            </div><br>

            <div class="row" class="form-control">
                <label for="product_photo" class="col-md-3">Photo:</label>
                <div class="col-md-5">
                    <input type="file" id="product_photo" name="product_photo">
                </div>
            </div><br>

            <div class="row" class="form-control">
                <label for="product_buying_price" class="col-md-3">Buying price:</label>
                <div class="col-md-5">
                    <input class="form-control input-md" type="text" id="product_buying_price" name="product_buying_price">
                </div>
            </div><br>

            <div class="row" class="form-control">
                <label for="product_selling_price" class="col-md-3">Selling price:</label>
                <div class="col-md-5">
                    <input class="form-control input-md" type="text" id="product_selling_price" name="product_selling_price">
                </div>
            </div><br>
            <hr>

            <div class="row" class="form-control">
                <label for="product_discount" class="col-md-3">Discount:</label>
                <div class="col-md-5">
                    <input class="form-control input-md" type="text" id="product_discount" name="product_discount">
                </div>
            </div><br>
            <button type="submit" class="btn btn-success">Submit </button>
        </form>
    </div><br>

@endsection
