@extends('layouts.app')

@section('title', 'Music Lessons Kenosha WI | Kenosha Academy of Performing Arts')
@section('description', 'Kenosha Piano Lessons, Kenosha Voice Lessons, & More. ')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container pb-5">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h2 class="pt-5 text-center">More Than Just Music Lessons in Kenosha WI</h2>
                    <p>
                        <strong>Kenosha Academy of Performing Arts</strong> offers one on one 30 minute private music lessons in piano, drums or voice. All of our instructors are university trained in music and education. We have several teacher choices for each instrument so that your child is matched with a teacher who is a perfect fit. Schedule a complimentary trial lesson by calling us at
                        <a href="tel:+2626053951">262-605-3951</a>.
                    </p>
                </div>
            </div>
            <div class="row text-center">
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/kenosha-guitar-lessons.jpg" alt="guitar" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Kenosha Guitar Lessons</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-teal shadow">ENROLL</button></a>--}}
{{--                </div>--}}
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/kenosha-piano-lessons.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Kenosha Piano Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-orange shadow">ENROLL</button></a>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/kenosha-voice-lessons.jpg" alt="music" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    </div>
                    <p class="lead my-1" style="font-size: 1.25em;">Kenosha Voice Lessons</p>
                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-pink shadow">ENROLL</button></a>
                </div>
{{--                <div class="col-sm">--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <img src="/images/kenosha-violin-lessons.jpg" alt="guitar" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">--}}
{{--                    </div>--}}
{{--                    <p class="lead my-1" style="font-size: 1.25em;">Kenosha Violin Lessons</p>--}}
{{--                    <a href="/enroll" target="_blank"><button class="btn btn-kapa-green shadow">ENROLL</button></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div class="bg-teal p-5 text-center text-white">
        <div class="container">
            <h3>What We Believe</h3>
            We believe that all students deserve a place to feel safe and inspired to grow as artists. Through quality dance and music lessons in Kenosha WI we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking. Regardless of ability, all students will experience the joy of reaching his or her personal level of accomplishment and find a passion for the arts that will last a lifetime.
            <br><br>
            We strive to create a positive community for families through empathetic, attentive service and the understanding that each family’s educational needs are different. Parents will find a convenient location, friendly service, and welcoming atmosphere. We encourage a culture of interaction among families to create comfort, loyalty and value for everyone. Families stay with us become of our commitment to excellence and customer care.
        </div>
    </div>

    <div class="bg-white py-5 text-center">
        <div class="container">
{{--            <div class="my-4">--}}
{{--                <h3>Kenosha Guitar Lessons Instructors</h3>--}}
{{--                <div class="row">--}}
{{--                    @include('todd')--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="my-4">
                <h3>Kenosha Piano Lessons Instructors</h3>
                <div class="row">
                    @include('kristin')
                </div>
                <div class="row mt-4">
                    @include('pam')
                </div>
            </div>
            <div class="my-4">
                <small>For More On Music Lessons In Kenosha WI</small>
                <h3>See All Our Music Instructors</h3>
                <a href="/about"><button class="btn btn-kapa-teal-outline shadow">LEARN MORE</button></a>
            </div>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>


@endsection
