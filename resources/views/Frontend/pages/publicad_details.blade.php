<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MAPS</title>

    <meta name="keywords" content="Organic, Fresh Food, Farm Store">
    <meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/items/libs/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/items/libs/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/items/libs/font-material/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/items/libs/nivo-slider/css/nivo-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/items/libs/nivo-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/items/libs/nivo-slider/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/items/libs/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('frontend/items/libs/font-material/css/material-design-iconic-font.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/items/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/items/css/reponsive.css') }}">
</head>

<body class="home home-3">
    <div id="all">
        <!-- Main Content -->
        <div id="content" class="site-content">
            <!-- Breadcrumb -->
            <div id="breadcrumb">
                <div class="container">
                    <h2 class="title">{{ $publicad->name }}</h2>

                    <ul class="breadcrumb">
                        <li><a href="#" title="Home">Home</a></li>
                        <li><a href="#" title="Fruit">{{ $publicad->cname }}</a></li>
                        <li><span>{{ $publicad->name }}</span></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Page Content -->
                    <div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                        <div class="product-detail">
                            <div class="products-block layout-5">

                                <div class="product-item">
                                    <div class="product-title">{{ $publicad->name }}
                                    </div>
                                    <div class="row">
                                        <div class="product-left col-md-5 col-sm-5 col-xs-12">
                                            <div class="product-image horizontal">
                                                <div class="main-image">
                                                    <img class="img-responsive"
                                                        src="{{ asset('frontend/img/sini/' . $publicad->image) }}"
                                                        alt="Product Image">
                                                </div>

                                                <div class="thumb-images owl-theme owl-carousel">
                                                    <img class="img-responsive"
                                                        src="{{ asset('frontend/img/sini/' . $publicad->image) }}"
                                                        alt="Product Image">
                                                    <img class="img-responsive"
                                                        src="{{ asset('frontend/img/sini/' . $publicad->image) }}"
                                                        alt="Product Image">

                                                </div>
                                            </div>
                                        </div>



					<!-- Related Products -->
                    <div class="products-block related-products">
                        <div class="block-title">
                            <h2 class="title">Related <span>Products</span></h2>
                        </div>

                        <div class="block-content">
                            <div class="products owl-theme owl-carousel">
                                @foreach( $relatedpublicad as $item)
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="{{asset('frontend/img/sini/' . $item->image)}}" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-title">
                                        <a href="{{route('publicad.name' , $item->id)}}">
                                            {{$item->name}}
                                        </a>
                                    </div>

                                    <div class="product-rating">
                                        <div class="star on"></div>
                                        <div class="star on"></div>
                                        <div class="star on "></div>
                                        <div class="star on"></div>
                                        <div class="star"></div>
                                    </div>

                                    <div class="product-price">
                                        <span class="sale-price">{{$item->price}}
                                        </span>
                                        <span class="base-price">$90.00</span>
                                    </div>

                                    <div class="product-buttons">
                                        <a class="add-to-cart" href="#">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </a>

                                        <a class="add-wishlist" href="#">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>

                                        <a class="quickview" href="#">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
@endforeach




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


   <!-- Vendor JS -->
   <script src="{{ asset('frontend/items/libs/jquery/jquery.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/bootstrap/js/bootstrap.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/jquery.countdown/jquery.countdown.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/owl.carousel/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/slider-range/js/tmpl.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/slider-range/js/jquery.dependClass-0.1.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/slider-range/js/draggable-0.1.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/slider-range/js/jquery.slider.js') }}"></script>
   <script src="{{ asset('frontend/items/libs/elevatezoom/jquery.elevatezoom.js') }}"></script>

   <!-- Template CSS -->
   <script src="{{ asset('frontend/items/js/main.js') }}"></script>

</body>

</html>
