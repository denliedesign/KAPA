@extends('layouts.app')

@section('title', 'Classes | Kenosha Academy of Performing Arts')
@section('description', 'Learn About Our Classes And Find A Fit For You.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h3 class="text-center pt-5">Summer Calendar 2021</h3>
            <div class="text-center d-flex d-inline justify-content-center">
                <div class="mx-2 px-2"><a href="/images/Summer-Schedule-2021.pdf" target="_blank"><button class="btn shadow btn-kapa-orange btn-lg">View Summer Schedule PDF</button></a></div>
                <div class="mx-2 px-2"><a href="https://app.jackrabbitclass.com/regv2.asp?id=504663" target="_blank"><button class="btn shadow btn-kapa-pink btn-lg">Enroll Now!</button></a></div>
            </div>
            <img src="images/Summer-Schedule-2021-1.jpg" alt="summer schedule" class="img-thumbnail my-3">
            <img src="images/Summer-Schedule-2021-2.jpg" alt="summer schedule" class="img-thumbnail my-3">
            <img src="images/Summer-Schedule-2021-3.jpg" alt="summer schedule" class="img-thumbnail my-3">
            <img src="images/Summer-Schedule-2021-4.jpg" alt="summer schedule" class="img-thumbnail my-3">
            <img src="images/Summer-Schedule-2021-5.jpg" alt="summer schedule" class="img-thumbnail my-3">
        </div>
    </div>


@endsection
