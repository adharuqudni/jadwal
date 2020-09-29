@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="container m-auto">
        <h1><b>Selamat Datang Di Jadwalku</b></h1>
        <h2 style="font-size: 24px">Jadwalku adalah tempat kamu menulis jadwal dan kamu akan di bangunkan oleh dia tenang saja</h2>
        <div class="regis text-center">
            <a href="login" type="button" class="btn btn-custom">Log in</a>
            <a href="register"  type="button" class="btn btn-custom">Sign up</a>
        </div>
    </div>
@endsection
