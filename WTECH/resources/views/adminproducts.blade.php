@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <form class="d-flex" action="{{ route('adminproducts-filter') }}" method="GET">
                <input class="form-control border-dark" type="search" placeholder="Search" name="search" aria-label="Search">
            </form>
        </div>
        <div class="col">
            <form action="{{ route('admin-add') }}" method="GET">
                <button type="submit" class="btn btn-primary btn-sm mt-1 ml-2"> + </button>
            </form>
        </div>
        <div class="col pages-admin">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
<div class="container mt-5">
    @foreach ($products as $product)
        <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
                <div class="card card-admin shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row">
                    <div class="col-9">
                        <span class="card-title card-title-admin">{{ $product->title }}</span>
                    </div>
                    <div class="col-3 border-sm-start-none border-start">
                        <div class="d-flex flex-column mt-4">
                            <form action="{{ route('admin-delete', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-primary btn-sm button-custom" type="submit">-</button>
                            </form>
                            <form action="{{ route('admin-edit', $product->id) }}" method="get">
                                <button class="btn btn-outline-primary btn-sm mt-2" type="submit">E</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
