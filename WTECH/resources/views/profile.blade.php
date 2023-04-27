@extends('layouts.app')

@section('content')
<h1 class="text-white">Your profile</h1>
<p class="text-white">
    Name: {{ Auth::user()->name }}<br>
    Surname: {{ Auth::user()->surname }}<br>
    E-mail: {{ Auth::user()->email }}
</p>
@endsection
