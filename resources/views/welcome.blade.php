@extends('layouts.app')
@section('content')

    <div id="primary-bg">
        <div class="color-filter-pink"></div>
        <h2 id="primary-txt-mobile" class="d-md-none">dance & music lessons that teach life lessons</h2>
        <h2 id="primary-txt" class="d-none d-md-block">dance & music lessons that teach life lessons</h2>
        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-md-none btn-opacity"><div id="button-mobile" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>
        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-none d-md-block btn-opacity"><div id="button-tablet" class="shadow btn btn-lg btn-kapa-teal primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>
    </div>

{{--    @include('trial-modal')--}}

    <div class="container">
        <div id="next-steps">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
                <div class="next-step mt-3 mt-md-0 shadow">
                    <p class="txt-kapa-orange">Ready To Leap In?</p>
                    <a href="https://app.jackrabbitclass.com/regv2.asp?id=504663" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-orange btn-family">&#10097; Enroll today!</div></a>
                </div>
                <div class="next-step mt-3 mt-md-0 shadow">
                    <p class="txt-kapa-pink">Want To Give It A Try?</p>
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/s/trial-classes-kleuvjip" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-pink btn-family">&#10097; Schedule A Trial!</div></a>
                    {{--                    <div>--}}
{{--                        <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
{{--                    </div>--}}
                </div>
                <div class="next-step mt-3 mt-md-0 shadow">
                    <p class="txt-kapa-green">Still Have Questions?</p>
                    <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-green btn-family">&#10097; Contact Us!</div></a>
                </div>
            </div>
        </div>
    </div>

    <div id="vision" class="text-center text-white">
        <div class="container">
            <h2>What We Believe</h2>
            <p>
                We believe that all students deserve a place to feel safe and inspired to grow as artists. Through quality dance and music lessons in Kenosha WI we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking. Regardless of ability, all students will experience the joy of reaching his or her personal level of accomplishment and find a passion for the arts that will last a lifetime.
                <br><br>
                We strive to create a positive community for families through empathetic, attentive service and the understanding that each family’s educational needs are different. Parents will find a convenient location, friendly service, and welcoming atmosphere. We encourage a culture of interaction among families to create comfort, loyalty and value for everyone. Families stay with us become of our commitment to excellence and customer care.
            </p>
        </div>
    </div>

    <div class="bg-white pb-5" id="class-categories">
        <div class="container pb-5">
            <h2 class="text-center pt-5">Dance Classes</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-4">
                    <img src="/images/class-1-2.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes#class-1-2" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-teal btn-family mt-2" style="width: 100%;">Ages 1-2</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/class-3-4.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes#class-3-4" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-orange btn-family mt-2" style="width: 100%;">Ages 3-4</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/class-5-6.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes#class-5-6" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-pink btn-family mt-2" style="width: 100%;">Ages 5-6</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/class-7-up.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes#class-7-up" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-green btn-family mt-2" style="width: 100%;">Ages 7 & Up</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/class-teens.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes#class-teens" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-teal btn-family mt-2" style="width: 100%;">Teens</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/class-performance-companies.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-performing-classes" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-orange btn-family mt-2" style="width: 100%;">Performance Companies</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/class-specialty.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-specialty-classes" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-pink btn-family mt-2" style="width: 100%;">Specialty Classes</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/class-camps.png" alt="ages 1-4 dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-camps" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-green btn-family mt-2" style="width: 100%;">Camps</div></a>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <h2 class="text-center pt-5">Music Lessons in Kenosha WI</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-4 text-center">
                    <img src="/images/kenosha-piano-lessons.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-music-lessons" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-teal btn-family mt-2" style="width: 100%;">Piano</div></a>
                    <a style="text-decoration: none;" href="/music-lessons-kenosha"><small class="text-muted">Kenosha Piano Lessons</small></a>
                </div>
                <div class="col-sm mt-4 text-center">
                    <img src="/images/kenosha-voice-lessons.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-music-lessons" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-orange btn-family mt-2" style="width: 100%;">Voice</div></a>
                    <a style="text-decoration: none;" href="/music-lessons-kenosha"><small class="text-muted">Kenosha Voice Lessons</small></a>
                </div>
                <div class="col-sm mt-4 text-center">
                    <img src="/images/kenosha-guitar-lessons.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-music-lessons" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-pink btn-family mt-2" style="width: 100%;">Guitar</div></a>
                    <a style="text-decoration: none;" href="/music-lessons-kenosha"><small class="text-muted">Kenosha Guitar Lessons</small></a>
                </div>
                <div class="col-sm mt-4 text-center">
                    <img src="/images/kenosha-violin-lessons.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: 45% 60%; width: 100%;">
                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-music-lessons" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-green btn-family mt-2" style="width: 100%;">Violin</div></a>
                    <a style="text-decoration: none;" href="/music-lessons-kenosha"><small class="text-muted">Kenosha Violin Lessons</small></a>
                </div>
{{--                <div class="col-sm mt-4">--}}
{{--                    <img src="/images/drums.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-music-lessons" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-pink btn-family mt-2" style="width: 100%;">Drums</div></a>--}}
{{--                </div>--}}
{{--                <div class="col-sm mt-4">--}}
{{--                    <img src="/images/bass.jpg" alt="music instruments" class="img-fluid shadow rounded" style="max-height: 196.86px; object-fit: cover; object-position: -20% 0; width: 100%;">--}}
{{--                    <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-music-lessons" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-kapa-green btn-family mt-2" style="width: 100%;">Bass Guitar</div></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <div id="checklist-bg">
        <div class="color-filter-green"></div>
        <h2 class="secondary-txt d-none d-md-block">Parents <ion-icon name="heart"></ion-icon> KAPA...</h2>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                <p class="text-capitalize">
                    <ion-icon name="heart"></ion-icon> Safer Studio
                    <br><ion-icon name="heart"></ion-icon> Tech Enabled
                    <br><ion-icon name="heart"></ion-icon> Secured Facility
                    <br><ion-icon name="heart"></ion-icon> Written Curriculum
                    <br><ion-icon name="heart"></ion-icon> live stream app for parents to observe class
                </p>
            </div>
            <div class="col-sm">
                <p>
                    <ion-icon name="heart"></ion-icon> Full-Time Admin
                    <br><ion-icon name="heart"></ion-icon> YPAD Certified
                    <br><ion-icon name="heart"></ion-icon> Community Service
                    <br><ion-icon name="heart"></ion-icon> Background Checked
                    <br><ion-icon name="heart"></ion-icon> CPR Trained
                </p>
            </div>
{{--            <div class="col-sm">--}}
{{--                <p>--}}
{{--                    --}}
{{--                </p>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="d-flex justify-content-center mb-0">
                            <img src="/images/ballet-kenosha.png" alt="ballet kenosha logo" class="img-fluid">
                        </div>
                        <p class="mb-5">
                            Ballet Kenosha is our pre-professional ballet group. It has become an exciting addition to the local arts scene and provides a tremendous opportunity for young dancers, children and audience members alike to experience the magic of ballet.
                            <br><br>
                            Ballet Kenosha serves two purposes:
                            <br>• To increase exposure to and appreciation for classical performance arts in the community
                            <br>• To provide opportunities for area youth to gain training that mirrors that of the professional world. Each December, we stage a production of The Nutcracker. In the spring, we will produce a production of A Little Princess. Both productions will fulfill our mission to share beautiful classical performances with an eager audience. Students 5yrs old and up may audition for Ballet Kenosha.
                        </p>
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="">
                        <img src="/images/ballet-shoes.jpg" alt="pointe shoes for ballet" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mtjgd-bg" class="text-white">
        <div class="color-filter-blue"></div>
        <h2 class="secondary-txt">We're About More Than Just Great Dancing™</h2>
        <div>
            <div class="row tertiary-txt-pos">
                <div class="col-sm my-4">
                    “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                    <br>
                    <em>-Misty Lown</em>
                </div>
                <div class="col-sm">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: 100%; height: 100%; filter: invert(1);">
                    </div>
                    <h2 class="text-center">KAPA is a Safer Studio™</h2>
                    <p>
                        KAPA focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="max-height: 354.04px;">
                    </div>
                    <h2 class="text-center">KAPA is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked and CPR certified teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices
                    </p>
                </div>
            </div>
        </div>
    </div>

    @include('testimonials')

    <div id="call-to-action" class="bg-white pt-5 pb-1">
        <div class="text-center pt-2">
            <h2 class="txt-kapa-teal">Be A Part Of Our KAPA Family!</h2>
            {{--            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>--}}
        </div>
    </div>


@endsection
