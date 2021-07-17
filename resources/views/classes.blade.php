@extends('layouts.app')

@section('title', 'Classes | Kenosha Academy of Performing Arts')
@section('description', 'Learn About Our Classes And Find A Fit For You.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h2 class="pt-5 text-center">Classes</h2>
            <div class="d-flex justify-content-center">
                <ul class="nav pt-2 pb-5">
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark underline-teal" href="#class-1-2">Ages 1-2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark underline-orange" href="#class-3-4">Ages 3-4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark underline-pink" href="#class-5-6">Ages 5-6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark underline-green" href="#class-7-up">Ages 7 & Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 rounded shadow text-dark underline-teal" href="#class-teens">Teens</a>
                    </li>
                </ul>
            </div>

            <div id="class-1-2" class="text-center">
                <p class="lead mb-0" style="font-size: 2em;">Programs for Ages 1 to 2</p>
                <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank"><button class="btn btn-kapa-teal shadow">DOWNLOAD SCHEDULE</button></a>
                <div class="row">
                    <div class="col-sm my-1"></div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Mommy and Me</p>
                        <p class="mb-0">
                            This dance class is designed for those ready to start learning…with a parent! Our curriculum incorporates ballet into basic body moves, fun dance steps, and movement-focused games, which will kick-start your little movers’ success!
                        </p>
                    </div>
                    <div class="col-sm my-1"></div>
                </div>
            </div>

            <div id="class-3-4" class="pt-5 text-center">
                <p class="lead mb-0" style="font-size: 2em;">Programs for Ages 3 to 4</p>
                <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank"><button class="btn btn-kapa-orange shadow">DOWNLOAD SCHEDULE</button></a>
                <div class="row">
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Tippy Toes</p>
                        <p class="mb-0">
                            Tippy Toes is a creative movement class designed to enhance gross motor development, listening skills, musicality, and nurture the creative spirit.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Dancing Kids</p>
                        <p class="mb-0">
                            Children learn basic tap dance and ballet movements, locomotor skills, and creative movement through the use of fun, catchy songs that help them to remember dance terminology.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Tumbling Tots</p>
                        <p class="mb-0">
                            Our Tumbling Tots classes will introduce students to physical activities that will engage their imagination while developing gross motor strength, coordination and early acrobatic fundamentals.
                        </p>
                    </div>
                </div>
            </div>

            <div id="class-5-6" class="pt-5 text-center">
                <p class="lead mb-0" style="font-size: 2em;">Programs for Ages 5 to 6</p>
                <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank"><button class="btn btn-kapa-pink shadow">DOWNLOAD SCHEDULE</button></a>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Kinder Ballet/Jazz</p>
                        <p class="mb-0">
                            Kinder Dance classes are designed to be developmentally appropriate for the for the 5 year old dance student, capture their attention and inspire a love of dance. Classes include Ballet/Tap or Ballet/Jazz combinations.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Pom Pon Kids</p>
                        <p class="mb-0">
                            Poms are a form of drill team technique that combines high energy based moves with a jazz or hip hop style. Technique includes jumps, turns, leaps and team building.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Musical Theater Dance</p>
                        <p class="mb-0">
                            This class will focus on learning proper dance technique while exploring the various dance styles used in Broadway shows. Musical Theater combines jazz technique with other varieties to create a “Broadway” style of dance.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Dance Kids Ballet/Jazz</p>
                        <p class="mb-0">
                            The Academy’s Dance Kids classes are designed to expand on what dancers have learned in the Kinder Dance Class series. Classes are either Ballet/Tap combo or a Ballet/Jazz combo.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Hippity Hop</p>
                        <p class="mb-0">
                            A high-energy beginner level class that uses the latest sounds in pop music together with choreography influenced by some of today’s hottest videos.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Kinder/1st Grade Acrobatic Dance</p>
                        <p class="mb-0">
                            Acrobatic Dance, or acro as it is commonly referred to by dancers and dance professionals, is the beautiful fusion of classic dance technique and the precision and athleticism of acrobatic elements. Often defined by unique choreography, acro dancers seamlessly blend musicality, emotional expression, line and extension with acrobatic movements in a dance context.
                        </p>
                    </div>
                </div>
            </div>

            <div id="class-7-up" class="pt-5 text-center">
                <p class="lead mb-0" style="font-size: 2em;">Classes for Ages 7+</p>
                <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank"><button class="btn btn-kapa-green shadow">DOWNLOAD SCHEDULE</button></a>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Ballet</p>
                        <p class="mb-0">
                            Ballet is a classical dance form demanding grace and precision and employing formalized steps and gestures set in intricate, flowing patterns to create expression through movement. It teaches strength, co-ordination, flexibility, creativity, and musicality.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Contemporary</p>
                        <p class="mb-0">
                            Contemporary Dance combines ballet, jazz and modern techniques. Dancers learn choreography centered on feeling and emotion, and movements characterized by fluidity and grace, set to a diverse spectrum of music.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Jazz</p>
                        <p class="mb-0">
                            Our jazz dance classes include intensive strengthening warm ups, isolations, stretching techniques to elongate and encourage muscle strength, across the floor movements, leaps, turns and center combination work to fun and upbeat, recognizable music.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Dance Kids Ballet/Jazz</p>
                        <p class="mb-0">
                            The Academy’s Dance Kids classes are designed to expand on what dancers have learned in the Kinder Dance Class series. Classes are either Ballet/Tap combo or a Ballet/Jazz combo.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Tap</p>
                        <p class="mb-0">
                            Students explore rhythms and syncopations, learn technical tap dance steps and vocabulary. Tap dance helps children of all ages develop better coordination, balance and timing.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Hip Hop</p>
                        <p class="mb-0">
                            A high-energy class that uses the latest sounds in pop music together with choreography influenced by some of today’s hottest videos.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Acrobatic Dance</p>
                        <p class="mb-0">
                            Acrobatic Dance, or acro as it is commonly referred to by dancers and dance professionals, is the beautiful fusion of classic dance technique and the precision and athleticism of acrobatic elements. Often defined by unique choreography, acro dancers seamlessly blend musicality, emotional expression, line and extension with acrobatic movements in a dance context.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Dance Team</p>
                        <p class="mb-0">
                            Dance Team combines high energy based moves with a jazz or hip hop style. Technique includes jumps, turns, leaps and team building.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Musical Theater Dance</p>
                        <p class="mb-0">
                            Classes focus on developing performance technique and facial expression. Students will also gain a great technique base of core strength, jumps, leaps, and turns.
                        </p>
                    </div>
                </div>
            </div>

            <div id="class-teens" class="pt-5 text-center">
                <p class="lead mb-0" style="font-size: 2em;">Teen Classes</p>
                <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank"><button class="btn btn-kapa-teal shadow">DOWNLOAD SCHEDULE</button></a>
                <div class="row">
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Teen Ballet</p>
                        <p class="mb-0">
                            Our Teen program is designed for the 11 years old and up who is at a Intermediate level or unable to dedicate multiple days per week to ballet as required in our graded classes.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Teen Jazz</p>
                        <p class="mb-0">
                            Our jazz dance classes include intensive strengthening warm ups, isolations, stretching techniques to elongate and encourage muscle strength, across the floor movements, leaps, turns and center combination work to fun and upbeat, recognizable music.
                        </p>
                    </div>
                    <div class="col-sm my-1">
                        <p class="fw-bold text-uppercase mb-0">Teen Contemporary</p>
                        <p class="mb-0">
                            Contemporary Dance combines ballet, jazz and modern techniques. Dancers learn choreography centered on feeling and emotion, and movements characterized by fluidity and grace, set to a diverse spectrum of music.
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </div>


@endsection
