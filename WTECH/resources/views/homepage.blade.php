@extends('layouts.app')

@section('content')
<div class="container mt-5">
            <h2 class="text-new mb-4">NEW RELEASES</h2>
            <div id="carouselIndicators" class="carousel slide bg-secondary rounded mx-auto w-85" data-bs-ride="carousel" style="height: 273px">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded" style="width: 1192; height: 273px; background-color: #ABABAB"> 
                    <div class="carousel-item active">
                        <img src="..." class="d-block center w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        
        
        <div class="container mt-5">
            <h2 class="text-new mb-4">CATALOGUE</h2>
            <div class="row justify-content-around">
                <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                    <a href="productpage.html">
                        <div class="card card-product">
                            <img src="..." class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <h5 class="card-title">Product 1</h5>
                                <span class="text-av">Available</span>
                                <span class="card-text">$10.00</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                    <a href="productpage.html">
                        <div class="card card-product">
                            <img src="..." class="card-img-top" alt="Product 2">
                            <div class="card-body">
                                <h5 class="card-title">Product 2</h5>
                                <span class="text-av">Available</span>
                                <span class="card-text">$10.00</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                    <a href="productpage.html">
                        <div class="card card-product">
                            <img src="..." class="card-img-top" alt="Product 3">
                            <div class="card-body">
                                <h5 class="card-title">Product 3</h5>
                                <span class="text-av">Available</span>
                                <span class="card-text">$10.00</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                    <a href="productpage.html">
                        <div class="card card-product">
                            <img src="..." class="card-img-top" alt="Product 4">
                            <div class="card-body">
                                <h5 class="card-title">Product 4</h5>
                                <span class="text-av">Available</span>
                                <span class="card-text">$10.00</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                    <a href="productpage.html">
                        <div class="card card-product">
                            <img src="..." class="card-img-top" alt="Product 5">
                            <div class="card-body">
                                <h5 class="card-title">Product 5</h5>
                                <span class="text-av">Available</span>
                                <span class="card-text">$10.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
@endsection
