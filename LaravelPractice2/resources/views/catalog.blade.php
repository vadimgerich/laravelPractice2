@extends('mainpage')

@section('main-content')
    <!-- Sidebar -->
    <div id="mySidenav" class="sidenav container">
        <form method="get" action={{route('catalog')}}>
            <label for="product_search">
                <h4>Пошук:</h4>
            </label>
            <input type="text" name="product_search">
            <hr>
            <h4>Ціна</h4><br>
            <div id="row" style="display: inline-block">
                <label for="price_min">Від:</label>
                <input type="number" class="price-input" name="price_min" value="0">
                <label for="price_max">До:</label>
                <input type="number" class="price-input" name="price_max" value="99999">
            </div>
            <hr>
            <input type="submit" class="btn btn-alert">
        </form>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="main">
        <h1>Catalog content</h1><br>
        <section class="pb-4">
            <div class="bg-white border rounded-5">
                <section class="w-100  p-4" style="background-color: #eee; border-radius: .5rem .5rem 0 0;">
                    <div class="row">
                        @foreach($products as $key=>$product)
                            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                                <div class="card text-black">
                                    <img
                                        src="{{url('storage/products_images/'.$product->SKU.'/'.$product->image)}}"
                                        class="card-img-top"
                                        alt="iPhone"
                                    >
                                    <div class="card-body">
                                        <div class="text-center mt-1">
                                            <h4 class="card-title">{{$product->product_name}}</h4>
                                        </div>

                                        <div class="text-left">
                                            <h5>
                                                Ціна продажу: {{$product->selling_price}}
                                            </h5>
                                        </div>

                                        <div>
                                            <button
                                                type="button"
                                                class="btn btn-primary flex-fill ms-1 col-md-12"
                                                data-mdb-ripple-color="dark">
                                                    View product page
                                            </button><br><br>
                                            <button
                                                type="button"
                                                class="btn btn-danger flex-fill ms-1 col-md-12 add_to_cart"
                                                data-id="{{$product->id}}">
                                                    Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($key % 3 == 2)
                                &nbsp;<br><hr>
                            @endif
                        @endforeach
                    </div>
                </section>
            </div>
        </section>
    </div>

    <style>
        tr {
            border: 2px;
        }

        .price-input {
            width: 87px;
            height: 40px;
        }
        /* The side navigation menu */
        .sidenav {
            height: 100%; /* 100% Full-height */
            width: 300px; /* 0 width - change this with JavaScript */
            position: fixed; /* Stay in place */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color: #56baed; /* Black*/
            overflow-x: hidden; /* Disable horizontal scroll */
            padding-top: 60px; /* Place content 60px from the top */
            transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: #f1f1f1;
        }

        /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
        #main {
            margin-left: 305px;
            padding: 30px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
@endsection
