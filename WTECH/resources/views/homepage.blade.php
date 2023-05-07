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
            @foreach ($product->tags as $tag)
                @if ($tag->tag == 'popular')
                    <div class="carousel-item active">
                        <img src="{{ 'storage/' . Str::after($product->images->first()->image_path, 'public/') }}" class="d-block center w-100" alt="...">
                    </div>
                @endif
            @endforeach
            <!--<div class="carousel-item active">
                <img src="..." class="d-block center w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>-->
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
        @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-5 col-6">
                <a href="/productpage/{{ ($product->title) }}" class="card-link">
                    <div class="card card-product">
                        <img src="{{ 'storage/' . Str::after($product->images->first()->image_path, 'public/') }}" class="card-img-top" alt="{{ $product->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->title }}</h5>
                            <span class="text-av">Available</span>
                            <span class="card-text">{{ $product->price }}</span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
