@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-white m-0">Your Shopping Cart</h1>
                <a href="/home" class="text-white" style="text-decoration: none">
                    <h2 class="text-white m-0">Continue shopping</h2>
                </a>
            </div>

            <div class="cartcard rounded-3 mb-4">
                <div class="cartcard-body p-3 d-none d-md-block">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                            <h5 class="mb-0 text text-center">Picture</h5>
                        </div>

                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <h5 class="mb-0 text text-center ">Product</h5>
                        </div>

                        <div class="col-md-3 col-lg-3 col-xl-2">
                            <h5 class="mb-0 text text-center">Amount</h5>

                        </div>

                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h5 class="mb-0 text">Price</h5>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1">
                        </div>
                    </div>
                </div>
            </div>

            <hr class="custom-line">

            @foreach($cartItems as $cartItem)
            <div class="cartcard rounded-3 mb-4">
                <div class="cartcard-body p-3">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                            <img height="200px"
                                src="{{ asset('storage/' . Str::after($cartItem->product->images()->first()->image_path, 'public/')) }}">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                            <p class="mb-0 text-center text">{{$cartItem->product->title}}</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <form action="{{route('cart.update', $cartItem->id)}}" method="POST">
                                @csrf
                                <input type="hidden" class="product-id" value="{{$cartItem->id}}">
                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input min="1" name="quantity" value="{{$cartItem->quantity}}" type="number"
                                    class="form-control form-control-sm text-center">

                                <button class="btn btn-link px-2"
                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h5 class="mb-0 text text-center text-md-start product-price">
                                {{$cartItem->product->price * $cartItem->quantity}} €</h5>
                            </form>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 d-flex justify-content-center">
                            <form action="{{route('cart.destroy', $cartItem->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <hr class="custom-line">

            <div class="row d-flex justify-content-end">
                <div class="col-md-2">
                    <h3 class="mb-0 text text-center">Subtotal: </h3>
                </div>
                <div class="col-md-2">
                    <h3 class="mb-0 text text-center total-price">{{$totalprice}} €</h3>
                </div>
            </div>
            <form action="{{ route('shipping') }}" method="get">
                <div class="row d-flex justify-content-end">
                    <div class="col-md-2">
                        <button type="submit"
                            class="btn btn-primary file-btn p-2 text-dark border-dark w-100 mt-3">CHECK OUT</button>
                    </div>
                </div>
                <form>
                <div class="d-flex justify-content-end">
                <span class="text-white ">{{ session('result') }}</span></div>
        </div>
    </div>
</div>


<script>
async function postData(url = "", data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
        method: "POST", // *GET, POST, PUT, DELETE, etc.
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        },
        body: JSON.stringify(data), // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

document.querySelectorAll("input[type=number]").forEach((input) => {
    input.addEventListener("change", (e) => {
        // get the value of the input field
        const quantityVal = e.target.value;
        // get the id of the product
        const productId = e.target.parentNode.querySelector(".product-id").value;
        // send the data to the server
        postData("/cart/" + productId, {
            quantity: quantityVal
        }).then((data) => {
            // update the price of the product
            // fix floating point number
            data.price = data.price.toFixed(2);
            e.target.parentNode.parentNode.parentNode.querySelector(".product-price")
                .innerHTML = data.price + " €";
            // update the total price
            updateTotalPrice();
        });
    });
});

function updateTotalPrice() {
    const totalPrice = document.querySelector(".total-price");
    const products = document.querySelectorAll(".product-price");
    let total = 0;
    products.forEach((product) => {
        // remove traling € from the price

        tempPrice = product.innerHTML.replace(" €", "");
        total += parseFloat(tempPrice);
    });
    // fix floating point number
    total = total.toFixed(2);
    totalPrice.innerHTML = total + " €";
}
</script>

@endsection