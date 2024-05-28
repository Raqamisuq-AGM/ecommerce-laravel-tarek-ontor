@extends('partials.frontend.app')
@section('title')
{{ 'Wishlist' }}
@endsection

@section('content')
<main class="main">
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="d-icon-home"></i></a></li>
                <li>Wishlist</li>
            </ul>
        </div>
    </nav>
    <div class="page-content pt-10 pb-10 mb-2">
        <div class="container">
            <table class="shop-table wishlist-table mt-2 mb-4">
                <thead>
                    <tr>
                        <th class="product-name"><span>Product</span></th>
                        <th></th>
                        <th class="product-price"><span>Price</span></th>
                        <th class="product-stock-status"><span>Stock status</span></th>
                        <th class="product-add-to-cart"></th>
                        <th class="product-remove"></th>
                    </tr>
                </thead>
                <tbody class="wishlist-items-wrapper">
                    <tr>
                        <td class="product-thumbnail">
                            <a href="{{route('product.details',['slug'=>'1'])}}">
                                <figure>
                                    <img src="{{asset('frontend/images/products/product11.jpg')}}" width="100"
                                        height="100" alt="product">
                                </figure>
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="{{route('product.details',['slug'=>'1'])}}">Beige knitted elastic runner shoes</a>
                        </td>
                        <td class="product-price">
                            <span class="amount">$84.00</span>
                        </td>
                        <td class="product-stock-status">
                            <span class="wishlist-in-stock">In Stock</span>
                        </td>
                        <td class="product-add-to-cart">
                            <a href="product.html" class="btn-product btn-primary"><span>Add to cart</span></a>
                        </td>
                        <td class="product-remove">
                            <div>
                                <a href="#" class="remove" title="Remove this product"><i class="fas fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail">
                            <a href="{{route('product.details',['slug'=>'1'])}}">
                                <figure>
                                    <img src="{{asset('frontend/images/products/product12.jpg')}}" width="100"
                                        height="100" alt="product">
                                </figure>
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="{{route('product.details',['slug'=>'1'])}}">Sed diam nonummy nibh</a>
                        </td>
                        <td class="product-price">
                            <span class="amount">$84.00</span>
                        </td>
                        <td class="product-stock-status">
                            <span class="wishlist-in-stock">In Stock</span>
                        </td>
                        <td class="product-add-to-cart">
                            <a href="product.html" class="btn-product btn-primary"><span>Add to cart</span></a>
                        </td>
                        <td class="product-remove">
                            <div>
                                <a href="#" class="remove" title="Remove this product"><i class="fas fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail">
                            <a href="{{route('product.details',['slug'=>'1'])}}">
                                <figure>
                                    <img src="{{asset('frontend/images/products/product13.jpg')}}" width="100"
                                        height="100" alt="product">
                                </figure>
                            </a>
                        </td>
                        <td class="product-name">
                            <a href="{{route('product.details',['slug'=>'1'])}}">Lorem ipsum dolor sit amet,
                                consectetuer adipiscing
                                elit,</a>
                        </td>
                        <td class="product-price">
                            <span class="amount">$84.00</span>
                        </td>
                        <td class="product-stock-status">
                            <span class="wishlist-out-stock">Out of Stock</span>
                        </td>
                        <td class="product-add-to-cart">
                            <a href="product.html" class="btn-product btn-primary"><span>Add to cart</span></a>
                        </td>
                        <td class="product-remove">
                            <div>
                                <a href="#" class="remove" title="Remove this product"><i class="fas fa-times"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/sticky-icon/stickyicon.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.min.css')}}">
@endsection

@section('scripts')
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
<script src="{{asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('frontend/js/main.min.js')}}"></script>
@endsection