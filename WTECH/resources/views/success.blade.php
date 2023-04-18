@extends('layouts.app')

@section('content')
<meta http-equiv="refresh" content="3; url=/home">

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 ">
            <div class="alert alert-success text-center reg-custom-container text-white" role="alert">
                <span>{{ session('is_success') }}</span>
            </div>
        </div>
    </div>
</div>
@endsection