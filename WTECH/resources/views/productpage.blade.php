@extends('layouts.app')

@section('content')
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6"><img class="card-img mb-4 mb-md-0 rounded-5" src="{{ asset('storage/' . $product->image) }}" alt="..." ></div>
        <div class="col-md-6 bg-dark rounded-5 p-5 ">
            <h1 class="display-4 text">{{ $product->title }}</h1>
            <div class="fs-5 mb-5">
                <p class="text">{{ $product->price }}</p>
            </div>
            <p class="text">{{ $product->description }}</p>
            <div class="d-flex">
                <form action="/cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-primary file-btn p-2 text-dark border-dark">Add to cart
                <i class="bi bi-cart"></i>
                </button>
                </form>
            </div>
        </div>
        </div>
    </div>
    <hr class="custom-line">

    <div class="accordion" id="accordionPanelsStayOpen">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed accordiontext" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            System requirements
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body bg-dark text-light">
                {{$product->system_requirements}}
            </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed accordiontext" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                More info about the game
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body bg-dark text-light">
                    {{$product->more_info}}
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed accordiontext" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                Other
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body bg-dark text-light">
                TITLE: {{$product -> title}}<br>
                GENRE:
                @foreach ($product->tags as $tag)
                    @if ($tag->category == 'genre')
                        {{ $tag->tag }}
                    @endif
                @endforeach
                <br>
                DEVELOPER:
                @foreach ($product->tags as $tag)
                    @if ($tag->category == 'developer')
                        {{ $tag->tag }}
                    @endif
                @endforeach
                <br>
                Platform: {{$product->platform}}<br>
                RELEASE DATE: {{$product->release_date}}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection