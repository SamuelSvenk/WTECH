@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-white mb-3">Create a New Account</h1>
    <div class="row justify-content-center">

        <form action="{{ route('register') }}" method="post">
            <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                @csrf
                <div class="form-group row">
                    <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter your name">
                    </div>
                </div>
            </div>

            <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                <div class="form-group row">
                    <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Surname</label>
                    <div class="col-sm-10">
                        <input type="text" name="surname" class="form-control" id="surname"
                            placeholder="Enter your surname">
                    </div>
                </div>
            </div>

            <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
                <div class="form-group row">
                    <label for="inputName" class="text-white col-sm-2 col-form-label h-4">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Enter your e-mail">
                    </div>
                </div>
            </div>

            <div class="container p-2 rounded-3 secondary-container md-3">

                <div class="form-group row">
                    <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter your password">
                    </div>
                </div>

            </div>

    </div>
    @if($errors->has('register'))
        <div class="alert alert-danger mt-3">{{ $errors->first('register') }}</div>
    @endif

    <div class="form-check mt-3">
        <input class="form-check-input custom-checkbox cursor-pointer" type="checkbox" name="chechbox" id="checkbox">
        <label class="form-check-label text-white cursor-pointer" for="agreeCheck">
            I agree with the Terms and Conditions
        </label>

    </div>
    <div class="d-flex justify-content-center mt-4">
        <button type="submit" class="btn btn-primary submit-btn p-2 text-dark border-dark">SUBMIT</button>
    </div>
    <div class="d-flex justify-content-center mt-1 small">
        <label class="text-white">Already have one? <a href="{{ route('login') }}" class="imp-link">Sign in</a></label>
    </div>
    </form>

</div>
@endsection