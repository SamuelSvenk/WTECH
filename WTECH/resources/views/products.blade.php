@extends('layouts.app')

<!--<link rel="stylesheet" href="{{ asset('css/products.css') }}">-->

@section('content')
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 d-none d-sm-block">
            <form action="{{route('filter')}}" method="get">
            <div class="card-filter card">
                <header class="card-header border-0">
                    <h6 class="title-text">PRICE</h6>
                </header>
                <div class="filter-content">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="number" name="price_min" class="form-control" placeholder="$0">
                            </div>
                            <div class="form-group">
                                <input type="number" name="price_max" class="form-control" placeholder="$1,000">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-filter mt-3">
                <header class="card-header border-0">
                    <h6 class="title-text">DEVS </h6>
                </header>
                <div class="filter-content">
                    <div class="card-body">
                            <label class="form-check">
                                <input class="form-check-input" name="activision" type="checkbox" value="activision">
                                <span class="text-label">
                                Activision
                                </span>
                            </label> 
                            <label class="form-check">
                                <input class="form-check-input" name="blizzard" type="checkbox" value="blizzard">
                                <span class="text-label">
                                Blizzard
                                </span>
                            </label>
                            <label class="form-check">
                                <input class="form-check-input" name="nintendo" type="checkbox" value="nintendo">
                                <span class="text-label">
                                Nintendo
                                </span>
                            </label>
                    </div>
                </div>
            </div>
            
            <div class="card card-filter mt-3">
                <header class="card-header border-0">
                    <h6 class="title-text">GENRES</h6>
                </header>
                <div class="filter-content">
                    <div class="card-body">
                    
                        <label class="form-check">
                            <input class="form-check-input" name="rpg" type="checkbox" value="rpg">
                            <span class="text-label">
                            RPG
                            </span>
                        </label> 
                        <label class="form-check">
                            <input class="form-check-input" name="moba" type="checkbox" value="moba">
                            <span class="text-label">
                            MOBA
                            </span>
                        </label>
                        <label class="form-check">
                            <input class="form-check-input" name="fps" type="checkbox" value="fps">
                            <span class="text-label">
                            FPS
                            </span>
                        </label>                    
        
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary submit-btn p-2 text-dark border-dark">SUBMIT</button>

            </form>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-8 col-12"> 
            <div class="row justify-content-start justify-content-lg-between justify-content-md-between">
                <div class="dropdown d-block d-sm-none">
                    <button class="btn nav-filter btn-secondary dropdown-toggle" type="button" id="filterButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter
                    </button>
                    <div class="dropdown-menu drop-filter" aria-labelledby="filterButton">
                        <h6 class="dropdown-header">Devs</h6>
                        <a class="dropdown-item drop-filter-item" href="#">Activision</a>
                        <a class="dropdown-item drop-filter-item" href="#">Blizzard</a>
                        <a class="dropdown-item drop-filter-item" href="#">Nintendo</a>
                        <div class="dropdown-divider drop-filter"></div>
                        <h6 class="dropdown-header">Genres</h6>
                        <a class="dropdown-item drop-filter-item" href="#">RPG</a>
                        <a class="dropdown-item drop-filter-item" href="#">MOBA</a>
                        <a class="dropdown-item drop-filter-item" href="#">FPS</a>
                    </div>
                </div>
                <div class="col-4 col-md-4">
                    <nav class="navbar nav-sort navbar-expand-lg">
                        <div class="container-fluid justify-content-around">
                            <div class="dropdown">
                            <button class="btn sort-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Sort By
                            </button>
                            <ul class="dropdown-menu drop-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item drop-item" href="#">Price: Low to High</a></li>
                                <li><a class="dropdown-item drop-item" href="#">Price: High to Low</a></li>
                                <li><a class="dropdown-item drop-item" href="#">Size: Small to Large</a></li>
                                <li><a class="dropdown-item drop-item" href="#">Size: Large to Small</a></li>
                                <li><a class="dropdown-item drop-item" href="#">Age: New to Old</a></li>
                                <li><a class="dropdown-item drop-item" href="#">Age: Old to New</a></li>
                            </ul>
                            </div>
                            <span class="navbar-text text-light" id="sortOption">Selected option</span>
                        </div>
                        </nav>
                        
                        <script>
                        $(document).ready(function() {
                            $('.dropdown-item').click(function() {
                            $('#sortOption').html($(this).text());
                            });
                        });
                        </script>
                        
                        
                </div>
                <div class="col-lg-5 col-md-5 col-4 pages">
                {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
            <div class="row products justify-content-center mt-3">
            @foreach ($products as $product)
                <div class="col-md-5 col-lg-4 col-xl-4 col-sm-6 col-6">
                    <a href="/productpage/{{ ($product->title) }}" class="card-link">
                        <div class="card card-product">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->title }}">
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

@section('scripts')
<!--
    <script>
        $(document).ready(function() {
            function applyFilters() {
                let price_min = $('input[placeholder="$0"]').val();
                let price_max = $('input[placeholder="$1,000"]').val();
                let devs = [];
                let genres = [];

                $('input[type="checkbox"]:checked').each(function() {
                    let checkboxLabel = $(this).next().text();

                    if (['activision', 'blizzard', 'nintendo'].includes(checkboxLabel)) {
                        devs.push(checkboxLabel);
                    } else if (['rpg', 'moba', 'fps'].includes(checkboxLabel)) {
                        genres.push(checkboxLabel);
                    }
                });

                $.get('/filtered-products', {
                    price_min: price_min,
                    price_max: price_max,
                    devs: devs,
                    genres: genres
                }, function(data) {

                    $('.products').html(data);
                });
            }

            // Make the request when a checkbox is clicked or unclicked
            $('input[type="checkbox"]').on('change', function() {
                applyFilters();
            });

            // Make the request when price inputs change
            $('input[placeholder="$0"], input[placeholder="$1,000"]').on('change', function() {
                applyFilters();
            });
        });
    </script>
-->
@endsection
