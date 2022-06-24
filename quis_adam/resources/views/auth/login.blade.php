@extends('layouts.auth')

@section('content')
<div class="box-login">
    <img src="{{ asset('img/listrik.jpg') }}" class="logo" alt="" srcset="">
    <div style="padding-top: 20px;">PT PLN Persero </div>
    <div style="padding-top: 20px;">Electricity For A Better Life </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf @method('POST')
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button name="submit">Login</button>
    </form>
</div>
@endsection
