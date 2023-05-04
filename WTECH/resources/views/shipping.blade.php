@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-white mb-3">How would you like to get your order?</h1>
    <div class="row justify-content-center">
        <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
            <form action="{{ route('shipping') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="inputName" class="text-white col-sm-2 col-form-label h-4 px-4">Shipping</label>
                    <div class="col-sm-10">
                        <select class="form-select fluid-right" id="categorySelect" name='shippingMethod'>
                            <option selected value="">Select shipping method</option>
                            <option value="1">GLS shipping</option>
                            <option value="2">GLS parcelshop</option>
                            <option value="3">Packeta</option>
                        </select>
                    </div>
                    <div class="text-white mt-2">
                        <button class="btn text-white" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">Read more about
                            shipping options <i class="bi bi-arrow-down"></i></button>
                        <div class="collapse" id="collapse">
                            <ul>
                                <li>GSL Shipping</li>
                                <dd>GLS offers flexible shipping options, such as express delivery, home delivery or
                                    office delivery. In the event that the first delivery attempt is unsuccessful, you
                                    will receive a convenient SMS notification with options to adjust the delivery time
                                    or method according to your preference.</dd>
                                <li>GLS ParcelShop</li>
                                <dd>GLS ParcelShop is a convenient shipping option for e-commerce businesses and their
                                    customers. With a network of thousands of ParcelShops across Europe, packages can be
                                    easily dropped off or picked up at a nearby location.
                                    <br>Please note that the package will be held at the ParcelShop for up to 5 days
                                    before being returned to the sender
                                </dd>
                                <li>Packeta</li>
                                <dd>Delivery within <b>24 - 48 hours.</b> <br>Anyone can collect the package at the
                                    designated delivery point by providing the unique password sent to them.</dd>
                            </ul>
                        </div>
                    </div>
                </div>
                @error('shippingMethod')
                <div class="text-danger p-2">{{ $message }}</div>
                @enderror
        </div>

        <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
            <div class="form-group row">
                <label for="inputName" class="text-white col-sm-2 col-form-label h-4 px-4">Town / City</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control fluid-right" id="inputCity" name='town'
                        placeholder="Enter your city">

                </div>

            </div>
            @error('town')
            <div class="text-danger p-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
            <div class="form-group row">
                <label for="inputName" class="text-white col-sm-2 col-form-label h-4 px-4">Address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control fluid-right" name='address' id="inputAddress"
                        placeholder="Enter your address">
                </div>
            </div>
            @error('address')
            <div class="text-danger p-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
            <div class="form-group row">
                <label for="inputName" class="text-white col-sm-2 col-form-label h-4 px-4">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control fluid-right" name='phoneNumber' id="inputPhoneNumber"
                        placeholder="Enter your phone number (example: 09333333333)">
                </div>
            </div>
            @error('phoneNumber')
            <div class="text-danger p-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
            <div class="form-group row">
                <label for="inputName" class="text-white col-sm-2 col-form-label h-4 px-4">Payment</label>
                <div class="col-sm-10">
                    <select class="form-select fluid-right" name='payment' id="categorySelect">
                        <option selected value="">Select payment method</option>
                        <option value="1">Credit Card</option>
                        <option value="2">PayPal</option>
                        <option value="3">Cash on Delivery</option>
                    </select>
                </div>

            </div>
            @error('payment')
            <div class="text-danger p-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary submit-btn p-2 text-dark border-dark">SUBMIT</button>
        </div>
        </form>
    </div>
</div>
</div>
@endsection