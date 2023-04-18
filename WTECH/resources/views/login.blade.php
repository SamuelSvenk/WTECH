@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-white mb-3">Sign In</h1>
    <div class="row justify-content-center">

        <div class="container p-2 mb-3 rounded-3 secondary-container md-3">
            <form action="{{ route('check') }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="inputName" class="text-white col-sm-2 col-form-label h-4">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control fluid-right" id="email" placeholder="Enter your e-mail">
                    </div>
                </div>
        </div>

        <div class="container p-2 rounded-3 secondary-container md-3">
            <div class="form-group row">
                <label for="inputName" class="text-white col-sm-2 col-form-label h-4">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control fluid-right" id="password"
                        placeholder="Enter your password">
                </div>
            </div>
        </div>
        @if($errors->has('login'))
        <div class="alert alert-danger mt-3">{{ $errors->first('login') }}</div>
        @endif

    </div>
    <div class="d-flex justify-content-center mt-4">
        <button type="submit" value="Login" class="btn btn-primary submit-btn p-2 text-dark border-dark">LOG IN</button>
    </div>
    <div class="d-flex justify-content-center mt-1 small">
        <label class="text-white">Don't have an account? <a href="registration.html" class="imp-link">Create one</a></label>
    </div>
    </form>
</div>
</div>
@endsection