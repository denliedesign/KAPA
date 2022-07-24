@extends('layouts.app')

@section('title', 'Music Lessons in Lake County IL | Kenosha Academy of Performing Arts')
@section('description', 'Guitar Lessons & Piano Lessons in Lake County IL, And More!')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container pb-5">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h2 class="pt-5 text-center">Lake County Music Lessons</h2>
                    <p>
                        Our Academy of Performing Arts offers guitar, violin, piano, drums, and voice lessons with qualified music instructors. Call us at <a href="tel:+2626053951">262-605-3951</a> for a <strong>free trial music lesson</strong> today!
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/guitar-lessons-in-lake-county-il.jpg" alt="guitar" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Lake County Guitar Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-teal shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/piano-lessons-in-lake-county-il.jpg" alt="piano" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Lake County Piano Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-orange shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/voice-lessons-in-lake-county-il.jpg" alt="voice" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Lake County Voice Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-pink shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/violin-lessons-in-lake-county-il.jpg" alt="violin" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Lake County Violin Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-green shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/drum-lessons-in-lake-county-il.jpg" alt="drum" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Lake County Drum Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-green shadow">ENROLL</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-teal p-5 text-center text-white">
        <div class="container">
            <h3>More Than Music</h3>
            We do more than give quality music lessons in Lake County IL. We teach our students life lessons that build confidence, leadership skills, creativity, and perseverance. At our Academy, we provide a safe environment for our musicians to grow and be inspired, creating a lifelong passion for music and the arts.
        </div>
    </div>

    <div class="bg-white py-5 text-center">
        <div class="container">
            <div class="my-4">
                <h3>Meet Our Instructors & Learn More About Music Lessons In Lake County IL</h3>
                <a href="/about"><button class="btn btn-kapa-teal-outline shadow">LEARN MORE</button></a>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>


@endsection
