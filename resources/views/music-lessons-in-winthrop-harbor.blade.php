@extends('layouts.app')

@section('title', 'Music Lessons Winthrop Harbor | Kenosha Academy of Performing Arts')
@section('description', 'Piano Lessons Winthrop Harbor, Voice Lessons Winthrop Harbor, & More. ')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container pb-5">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h2 class="pt-5 text-center">Music Lessons in Winthrop Harbor</h2>
                    <h5 class="p-2 rounded" style="background: yellow;"><em>Kenosha Academy of Performing Arts located in Kenosha, WI welcomes families from all surrounding areas including Winthrop Harbor.</em></h5>
                    <p>
                        At our Academy of Performing Arts we offer private lessons for voice, drums, piano in winthrop harbor. Our university trained instructors in music & education are ready to pour into your kids their knowledge, experience, and love of the arts. We have multiple teacher choices for each instrument so your child can find the perfect fit. Schedule a complimentary trial lesson by calling us at
                        <a href="tel:+2626053951">262-605-3951</a>.
                    </p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/voice-lessons-winthrop-harbor.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Voice Lessons Winthrop Harbor</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-pink shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/piano-lessons-winthrop-harbor.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Piano Lessons Winthrop Harbor </p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-orange shadow">ENROLL</button></a>
                </div>
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/guitar-lessons-winthrop-harbor.jpg" alt="guitar" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Guitar Lessons Winthrop Harbor</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-teal shadow">ENROLL</button></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/violin-lessons-winthrop-harbor.jpg" alt="guitar" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Violin Lessons Winthrop Harbor</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-green shadow">ENROLL</button></a>--}}
{{--                </div>--}}
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/drum-lessons-winthrop-harbor.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Drum Lessons Winthrop Harbor</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-pink shadow">ENROLL</button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-teal p-5 text-center text-white">
        <div class="container">
            <h3>More Than Music Lessons in Winthrop Harbor</h3>
            Our students feel safe and inspired to grow as musicians. Through quality music lessons in Winthrop Harbor we teach life lessons that build community, leadership skills, self confidence, motivation, and creative thinking. Our students set attainable goals which give them confidence and cultivates a lifelong passion for music and the arts.
        </div>
    </div>

    <div class="bg-white py-5 text-center">
        <div class="container">
            <div class="my-4">
                <h3>Meet Our Instructors & Learn More About Music Lessons In Winthrop Harbor</h3>
                <a href="/about"><button class="btn btn-kapa-teal-outline shadow">LEARN MORE</button></a>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>


@endsection
