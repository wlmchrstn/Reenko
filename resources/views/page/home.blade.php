@extends('layouts.app')

@section('title', 'Reenko - Home')

@section('head')
    <link rel="stylesheet" href="/css/post/index.css">
    <link rel="stylesheet" href="/css/comment/index.css">
    <link rel="stylesheet" href="/css/navbar/index.css">
    <link rel="stylesheet" href="/css/textarea/index.css">
    <link rel="stylesheet" href="/css/home/index.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
@endsection

@section('content')
    <div class="home-container">
        <div class="content-container">
            @include('component.navbar')
        </div>
        <div class="content-container">
            @include('component.textarea')
        </div>
        <div class="content-container content-post">
            @include('component.post')
        </div>
    </div>
@endsection