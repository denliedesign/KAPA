@extends('layouts.app')

@section('title', 'Music Lessons Lake County | Kenosha Academy of Performing Arts')
@section('description', 'Piano Lessons in Lake County, Voice Lessons in Lake County, & Drums.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container pb-5">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h2 class="pt-5 text-center">KAPA<br>Music Lessons Lake County</h2>
                    <p>
                        At our Academy of Performing Arts we provide quality one on one music lessons in Lake County IL for all ages. Our university trained instructors are experienced in piano, voice, and the drums. Find the teacher that best suits you with multiple instructors for each instrument.
                        <br><br>
                        Star your FREE trial today, call 262-605-3951
                    </p>
                </div>
            </div>
            <div class="row text-center">
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/guitar-lessons-lake-county.jpg" alt="guitar" class="img-fluid shadow rounded" style="max-height: 160px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Guitar Lessons Lake County</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-teal shadow">ENROLL</button></a>--}}
{{--                </div>--}}
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/piano-lessons-lake-county.jpg" alt="piano" class="img-fluid shadow rounded" style="max-height: 160px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Piano Lessons Lake County</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-orange shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/voice-lessons-lake-county.jpg" alt="voice" class="img-fluid shadow rounded" style="max-height: 160px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Voice Lessons Lake County</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-pink shadow">ENROLL</button></a>
                </div>
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/violin-lessons-lake-county.jpg" alt="violin" class="img-fluid shadow rounded" style="max-height: 160px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Violin Lessons Lake County</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-green shadow">ENROLL</button></a>--}}
{{--                </div>--}}
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/drum-lessons-lake-county.jpg" alt="drum" class="img-fluid shadow rounded" style="max-height: 160px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Drum Lessons Lake County</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-teal shadow">ENROLL</button></a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <div class="">
                        <h3>Learn More About Music Lessons in Lake County</h3>
                        <a href="/about"><button class="btn btn-lg btn-kapa-orange shadow">Meet our KAPA Instructors</button></a>
                    </div>
                </div>
                <div class="col-sm">
                    <img src="/images/staff-pamela.png" alt="" class="img-fluid shadow rounded">
                    <img src="/images/staff-todd.png" alt="" class="img-fluid shadow rounded">
                </div>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>


@endsection
