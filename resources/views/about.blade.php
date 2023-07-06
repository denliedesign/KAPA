@extends('layouts.app')

@section('title', 'Instructors | Kenosha Academy of Performing Arts')
@section('description', 'Learn About Our Team And How We Can Help You.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <section class="section-teachers container">
                <section>
                    <h2 class="pt-5 pb-3 text-center">What We Believe</h2>
                    <div class="row">
                        <div class="col-sm">
                            <div>
                                <video controls style="height: auto; width: 100%;">
                                    <source src="/images/kapa-studio-story.mp4" type="video/mp4">
                                </video>
{{--                                <iframe src="https://player.vimeo.com/video/252797638" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>--}}
                            </div>
                        </div>
                        <div class="col-sm d-flex align-items-center">
                            <p>
                                We believe that all students deserve a plan to feel safe and inspired to grow as artists. Through quality dance and music lessons in Kenosha WI we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking. Regardless of ability, all students will experience the joy of reaching his or her personal level of accomplishment and find a passion for the arts that will last a lifetime.
                                <br><br>
                                We strive to create a positive community for families through empathetic, attentive service and the understanding that each family’s educational needs are different. Parents will find a convenient location, friendly service, and welcoming atmosphere. We encourage a culture of interaction among families to create comfort, loyalty and value for everyone. Families stay with us because of our commitment to excellence and costumer care.
                            </p>
                        </div>
                    </div>
                    <h2 class="pt-5 pb-3 text-center">Meet The Team</h2>
                </section>
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-annie.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark">Annie Hackett <span class="fw-normal" style="font-size: 0.65em;">Owner & KAPA Director</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Ms. Hackett is the owner and artistic director of the Kenosha Academy of Dance, Music & Drama, is a member of the Actor’s Equity Association and is a former professor of dance at Carthage College. She has also been a guest teacher at Columbia College and Roosevelt University. She and her studio have been featured in Dance Magazine and Dance Teacher Magazine. In her 30 years as a dance educator Ms. Hackett has taught workshops, master classes and at studios in her home state of New York as well as Chicago and it’s surrounding suburbs. Her choreography has been seen at Chicago area theaters. Ms. Hackett’s performing career includes many productions at theaters such as The Chicago Shakespeare Theater (Chicago, IL), The Marriott Lincolnshire Theatre (Chicago, IL), The Drury Lane Theater (Oakbrook, IL) The Drury Lane Theater South (Evergreen Park, IL), and The Fireside Playhouse (Ft. Atkinson, WI).. She has also performed for Carnival Cruise Lines and many industrial shows for organizations like State Farm, Pepsi, Give Kids the World, and Kraftmaid. Ms. Hackett is a veteran of additional regional theatre productions in New York and Florida, and industrial shows internationally. Her company experience includes, The Zodiaque Dance Company (Buffalo, NY), Buffalo Inner City Ballet (Buffalo,NY) and The Greater Buffalo Opera Corps de Ballet (Buffalo, NY). She attended the State University of New York at Buffalo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="row mt-4">--}}
{{--                        @include('todd')--}}
{{--                    </div>--}}

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-susan.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionSusan">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSusan">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSusan" aria-expanded="true" aria-controls="collapseSusan">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark">Susan Myers <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseSusan" class="accordion-collapse collapse show" aria-labelledby="headingSusan" data-bs-parent="#accordionSusan">
                                        <div class="accordion-body">
                                            <p>
                                                Susan Ojala Myers began her dance training at the Academy of Movement and Music, in Oak Park, Illinois, under the direction of Stephanie Clemens. She performed with the Lyric Opera of Chicago, as well as Momenta! performing arts company, dancing both new and historic works. Early on in her career, Susan realized that her true passion was teaching. She has been working with dancers of all ages and abilities for over 20 years, on the east coast, as well as in the midwest. Besides teaching in the dance studio world, she runs several outreach dance programs in local schools. Susan began her college studies at CalArts, and completed her BA in dance performance at Northern Illinois University. She is proud to have earned her level two certification in Autism Movement Therapy in 2015. She teaches AMT classes throughout the Kenosha area, including Open Wings Learning Community, where she also sits on the board of directors. Susan and her husband, Eric, live in the Kenosha area with their three children.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-mitchell.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionMitchell">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingMitchell">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMitchell" aria-expanded="true" aria-controls="collapseMitchell">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark">Mitchell Haley <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseMitchell" class="accordion-collapse collapse show" aria-labelledby="headingMitchell" data-bs-parent="#accordionMitchell">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Born and raised in Harrodsburg, Kentucky Mitchell started his dance training at the age of 19 at Morehead State University (MSU). Here he performed with the MSU Dance Ensemble for 3 years, participated in the MSU Colorguard, choreographing for the spring concerts, and earned many awards for his choreography. He also was the lead male dancer in MSU production of “Grease” dancing under renowned choreographer Ron Hutchins. In 2011 he graduated with a B.A. in Business Administration and a Dance Minor. Afterwards he transferred into Western Kentucky University (WKU) to finish out his Dance degree. Here he participated in the WKU Dance Company performing events throughout the state and community, as well as choreographing for student shows. He also performed in the WKU production on “Oklahoma!” In 2013 he graduated with his B.A. in Dance from Western Kentucky University. Mitchell has also had the opportunity to train under the direction of: Carlos Dos Santos (Ailey), Richard Smith, Robert McKee, Laura Wade, Arcos Dance, MamLuft &Co, and Lexington Ballet. Since moving to Chicago Mitchell has received his 200 hour Yoga Certification and started freelance work. Mitchell is now in his 3rd season dancing with Inaside Chicago Dance as a performing apprentice and choreographer. He has also recently joined BISI Chicago Dance Company as a Company member and is a new company member with Jay-Son Tisa Dance Company.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-carley.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionCarley">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingCarley">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCarley" aria-expanded="true" aria-controls="collapseCarley">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark">Carley Klebba <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseCarley" class="accordion-collapse collapse show" aria-labelledby="headingCarley" data-bs-parent="#accordionCarley">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Carley began her training in Howell, MI where her primary focus was the Cecchetti Method of Ballet. She went on to earn her B.A. in dance from Grand Valley State University where she graduated with honors, and was the recipient of the Marlene Kenneway Love of Dance Scholarship. She has had the honor of working with notable choreographers such as Lauren Edson, Julie Blume, Autumn Eckman, Rebecca Lemme, Anna Liceica, Erica Fischbach, Eddy Ocampo, and Charles Askegard, to name a few. In addition to performing with the Grand Valley Dance Company throughout college she also performed with the The Grand Rapids Opera, and The Plymouth-Canton Metro Shores Ballet Company. After graduating Carley moved to Chicago to start working with LEVELdance, and she continued her training on a scholarship with Aerial Dance Chicago. She is currently dancing with Chicago Repertory Ballet and has enjoyed touring and performing with them the past two seasons. Carley loves teaching and sharing her love of ballet with her students throughout the Chicagoland area, and is excited to teach in Kenosha this year.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-charles.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionCharles">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingCharles">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCharles" aria-expanded="true" aria-controls="collapseCharles">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark">Charles Brown (Buzzy) <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseCharles" class="accordion-collapse collapse show" aria-labelledby="headingCharles" data-bs-parent="#accordionCharles">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Buzzy created/coached/ choreographed for college hip hop team, “Iluzion.” Capable of choreographing hip hop routines and combinations for all ages; he has provide workshops for multiple Studios, Camps, Schools and Teams that gives them a fun but still challenging style of hip hop to learn. Along with teaching dance, Buzzy is a physical education teacher in the Milwaukee Public School District and a current USATF athlete training to make the USA team for the next world and Olympic Games.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-jenna.jpg">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionJenna">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingJenna">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJenna" aria-expanded="true" aria-controls="collapseJenna">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">JENNA JOZEFOWSKI <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseJenna" class="accordion-collapse collapse show" aria-labelledby="headingJenna" data-bs-parent="#accordionJenna">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Jenna Jozefowski graduated from The University of Akron with a BA in Dance and a minor in Business Administration. During college, she performed with The University of Akron Dance Company where she was known for choreographing tap pieces for student performances. She is a member of the Midwest Committee of the Cecchetti Council of America and currently holds a Grade IV Teacher’s Certificate. Professionally, she has performed with Joel Hall Dancers II, RASA Dance Chicago and Chicago Dance Crash. She is currently working as an independent performance artist and choreographer; performing and presenting her work in Rebound Dance Festival, Dance Chicago, and Chicago Freelance Dance, and Inaside Chicago Dance’s Choreographic Sponsorship Event to name a few. She finds that getting herself to dance classes regularly inspires her own teaching, and can often be found taking class in Chicago during her free time. In addition to dance, Jenna is a NASM certified personal trainer and an RYT-200 certified yoga instructor through White Lotus Foundation and CorePower Yoga. She loves using her knowledge of anatomy, fitness, and wellness to enhance her students’ dance experience. Jenna looks forward to her 5th year teaching at Kenosha Academy of Performing Arts!--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-heather.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionHeather">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingHeather">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHeather" aria-expanded="true" aria-controls="collapseHeather">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">HEATHER CHENAULT <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseHeather" class="accordion-collapse collapse show" aria-labelledby="headingHeather" data-bs-parent="#accordionHeather">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Heather Chenault was born in Bowling Green, KY, where she studied dance at Dance Arts of Bowling Green from the age of 3 until she graduated high school in 2009. She then attended Western Kentucky University where she received a BA in Dance. At WKU she studied Ballet, Jazz, Modern, Choreography, Pedagogy, Improvisation, and joined the University’s dance company. Heather toured Civitavecchia and Tolfa, Italy with the WKU dance company. She studied at The Ailey School in NYC where she was able to perform at their Summer Sizzler Event. After graduating WKU in 2013, Heather joined Sideways Contemporary Dance Company in Atlanta, GA where she performed with the company for the 2013-2014 season. Heather is currently dancing with Jayson Tisa Dance Company in Chicago.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-jeri.jpg">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionJeri">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingJeri">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJeri" aria-expanded="true" aria-controls="collapseJeri">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Jeri Gray <span class="fw-normal" style="font-size: 0.65em;">Special Events Coordinator</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseJeri" class="accordion-collapse collapse show" aria-labelledby="headingJeri" data-bs-parent="#accordionJeri">
                                        <div class="accordion-body">
                                            <p>
                                                Bio coming soon!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="row mt-4">--}}
{{--                        @include('kristin')--}}
{{--                    </div>--}}

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-becky.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionKristin">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingBecky">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBecky" aria-expanded="true" aria-controls="collapseBecky">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Becky Mikos <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseBecky" class="accordion-collapse collapse show" aria-labelledby="headingBecky" data-bs-parent="#accordionBecky">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Becky Mikos (Chicago, IL) received her early training from the Judith Svalander School of Ballet in the Chicagoland area. She furthered her pre-professional training at intensives hosted by River North Dance Chicago, The Washington Ballet, Complexions Contemporary Ballet, and Lar Lubovitch Dance Company before going on to receive her BFA degree in Ballet and Modern dance from Texas Christian University in Fort Worth, TX. Professionally, Becky has performed with Spectrum Dance Theater in Seattle, WA under the direction of Donald Byrd as well as with Chicago-based companies Chicago Repertory Ballet (Wade Schaaf), LEVELdance (Eddy Ocampo) and Cerqua Rivera Dance Theater (Wilfredo Rivera). In 2012, she took her dance film, Collectors to the Reykjavik International Film Festival in Iceland. Currently, Becky continues to teach and choreograph while working full time in Marketing. This is her first time choreographing the Nutcracker on the Kenosha Academy of Performing Arts.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-annette.jpg">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionAnnette">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingAnnette">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnnette" aria-expanded="true" aria-controls="collapseAnnette">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Annette Thomann <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor, Education Manager</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseAnnette" class="accordion-collapse collapse show" aria-labelledby="headingAnnette" data-bs-parent="#accordionAnnette">
                                        <div class="accordion-body">
                                            <p>
                                                Annette Thomann received her BFA in dance performance, graduating magna cum laude, from Northern Illinois University. After graduation, she performed with several independent choreographers and became one of the founding members and Co-Artistic Director of Fox River Dance Company. In 2001, Annette began producing and directing her own annual dance performance, Freespace, a program in which pre-professional and professional students and choreographers collaborate and raise money for charity. Annette has been teaching and choreographing in the Chicagoland area and Wisconsin for over 20 years and formerly served as Ballet Mistress for RASA Dance Chicago, Executive Director and Director of Ballet for State Street Dance Studio, and Ballet Mistress and Company Administrator for NoMi Dance Chicago. In addition to teaching at Kenosha Academy of Performing Arts, she is the Ballet Mistress for Petite Pas Ballet School in Delafield, Wisconsin. Her choreography has been performed at the critically-acclaimed Dance Chicago Festival, Esencia Dance Festival and Chicago Freelance Dance.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-allison.jpg">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionAllison">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingAllison">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAllison" aria-expanded="true" aria-controls="collapseAllison">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Allison Bischoff <span class="fw-normal" style="font-size: 0.65em;">General Manager</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseAllison" class="accordion-collapse collapse show" aria-labelledby="headingAllison" data-bs-parent="#accordionAllison">
                                        <div class="accordion-body">
                                            <p>
                                                Bio coming soon!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-haley.jpg">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionHaley">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingHaley">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHaley" aria-expanded="true" aria-controls="collapseHaley">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Haley Moore <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor, Special Programs Director</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseHaley" class="accordion-collapse collapse show" aria-labelledby="headingHaley" data-bs-parent="#accordionHaley">
                                        <div class="accordion-body">
                                            <p>
                                                Haley Moore was born and raised in Kenosha, WI, she began her dance education at the age of 7. Haley studied dance at our very own Kenosha Academy of Performing Arts from age 12 until graduating high school. Following graduation, Haley attended the University of Wisconsin- Milwaukee where she earned her Bachelor’s in Fine Arts (BFA) through UWM Dance Department’s contemporary dance/choreography track. Throughout her time at UWM, she performed in several works and productions choreographed by fellow BAF students, resident MFA students, and UWM professors. Haley has recently moved back to the Kenosha area to return the gift of dance to students of her own. She is very excited to take over both STAR Leadership and NHSDA programs this year at KAPA.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-mai.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionMai">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingMai">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMai" aria-expanded="true" aria-controls="collapseMai">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Mai Claypool <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseMai" class="accordion-collapse collapse show" aria-labelledby="headingMai" data-bs-parent="#accordionMai">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Mai Claypool was born in Saitama, Japan. She trained at Kishi Ballet studio, The Matsuyama Ballet School in Tokyo, Japan, The Joffrey Ballet School and Steps on Broadway in NYC under the direction of Yoko Kishi, Yoko Morishita, David Howard, Finis Jhung, Michael O’Brian, Francesca Corkle and Eleanor D’Antuono. She has received awards from ballet competitions, such as the Hope Award and Achievement of Excellence. Mai danced with Lyric Opera of Chicago, Florida Dance Theatre and Metropolitan Ballet. She has turned her passion for dance towards teaching and spreading the joy of dance. She has been teaching ballet, pointe, variations, modern and contemporary at several schools in New York, Illinois, Florida and Japan. She is currently teaching at Hubbard Street Youth Program and The Joffrey Academy of Dance. Mai is an American Ballet Theatre® Certified Teacher in levels Primary through Level 7 of the ABT® National Training Curriculum.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-laura.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionLaura">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingLaura">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLaura" aria-expanded="true" aria-controls="collapseLaura">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Laura Williams <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseLaura" class="accordion-collapse collapse show" aria-labelledby="headingLaura" data-bs-parent="#accordionLaura">
                                        <div class="accordion-body">
                                            <p>
                                                Laura was born and raised in Muncie, IN where she started dancing at the age of 11. Laura studied Exercise Science at Ball State University in Muncie, IN and continued to work with her high school dance team by choreographing hip hop routines. In 2014 she began working for Inspire @ D.D.S (Dixie’s Dance Studio) where she taught hip hop and jazz classes. She worked closely with Inspire’s competition team by choreographing and cleaning/critiquing solos, hand picking and choreographing for a competitive Hip Hop Crew, working with the studio director on the studio production including 60+ dancers, and traveling to competitions throughout the U.S. In her last semester of school, Laura moved to Phoenix, Arizona where she completed an internship with Overcoming U: A Mindful Corporate Wellness, where she helped develop exercise and nutrition courses to be given to clients. She uses this knowledge while teaching her classes to make her dancers stronger and healthier. She continued to teach dance at Bricks Studio in Phoenix while completing her work with Overcoming U. At Bricks Studio, Laura took on the position of Recital Director for their 2018 Spring Recital. She spent her last year at Bricks Studio teaching beginning Ballet and Tap combo classes, recreational hip hop, a competitive Hip Hop Crew, ran the Mini Company rehearsals (ages 5-8), choreographed and cleaned solo routines, worked closely with the Company Director traveling to all competitions, all while ordering 800+ costumes and planning/directing the recital for the Spring. After the recital at Bricks Studio, Laura moved back to the midwest to be closer to family, but is excited to continue her journey in dance and inspiring children to find their love for dance!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-sarah-music.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionMiller">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingMiller">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMiller" aria-expanded="true" aria-controls="collapseMiller">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Sarah Miller <span class="fw-normal" style="font-size: 0.65em;">Music Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseMiller" class="accordion-collapse collapse show" aria-labelledby="headingMiller" data-bs-parent="#accordionMiller">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Sarah Miller, a native of Waukegan, IL, has taught throughout Chicagoland for over twelve years. She began her study of the violin at age five, at the Jack Benny Center for the Arts. She holds a Bachelor of Music in Violin Performance and a Bachelor of Science in Violin with an outside field of Mathematics from the Jacobs School of Music at Indiana University, as well as a Music Education Certificate from DePaul University. Her past instructors include Alison Dalton of the Chicago Symphony Orchestra and Henryk Kowalski of Indiana University. She has played in orchestras under the direction of Cliff Colnot, David Effron, Uriel Segal and Leonard Slatkin. She has performed in master classes for Gerardo Ribeiro, John Sharp, and David Taylor. Mrs. Miller was the orchestra director at Culver Elementary School in Niles, IL for four years. She currently teaches privately as well as performs in local orchestras. She lives in Kenosha with her husband and three children.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mt-4">--}}
{{--                       @include('pam')--}}
{{--                    </div>--}}

                    <div class="row mt-4">
                        @include('april')
                    </div>

{{--                    <div class="row mt-4">--}}
{{--                        <div class="col-sm-3 d-flex align-items-center justify-content-center">--}}
{{--                            <img class="img-fluid rounded shadow" src="images/staff-anna.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-9">--}}
{{--                            <div class="accordion" id="accordionAnna">--}}
{{--                                <div class="accordion-item">--}}
{{--                                    <h2 class="accordion-header" id="headingAnna">--}}
{{--                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAnna" aria-expanded="true" aria-controls="collapseAnna">--}}
{{--                                            <div>--}}
{{--                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Anna Lewis Brown <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>--}}
{{--                                            </div>--}}
{{--                                        </button>--}}
{{--                                    </h2>--}}
{{--                                    <div id="collapseAnna" class="accordion-collapse collapse show" aria-labelledby="headingAnna" data-bs-parent="#accordionAnna">--}}
{{--                                        <div class="accordion-body">--}}
{{--                                            <p>--}}
{{--                                                Formally dancing since the age of 4, Anna received the majority of her dance training from Dancenter-North in Libertyville Illinois. There she performed in their annual Nutcracker, Spring, and Summer shows from 1st-12th grade, and into college. She was a member of their Junior and Senior Ballet Performance Company, Sole-2-Souls Tap Company, Upstairs Jazz Company, and Pre-Professional Track Programs. In 2009 she began running their summer dance camps for 3 years. During her time training and dance, she also studied martial arts and received her black belt from Northshore Academy of Martial arts at the age of 14.--}}
{{--                                                <br><br>--}}
{{--                                                After graduating high-school Anna went on to perform with, and work for Chicago Christian Youth Theater, CYT. As of 2020 Anna has been coaching CYT Kenosha’s Project Dance Teams for 6 years, as well as choreographing her 12th musical with the company. In 2010 Anna first started working for Avenue Dancewear, which she has since taken over management of, and currently runs and operates. Anna still actively pursues any and all opportunities to continue strengthening her dance education and developing her strengths as a dancer, teacher, and performer.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-sarah-dance.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionSarah">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSarah">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSarah" aria-expanded="true" aria-controls="collapseSarah">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Sarah Nichols <span class="fw-normal" style="font-size: 0.65em;">Dance Instructor</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseSarah" class="accordion-collapse collapse show" aria-labelledby="headingSarah" data-bs-parent="#accordionSarah">
                                        <div class="accordion-body">
                                            <p>
                                                A Kenosha native, Sarah Nichols has studied dance since 1987 at Guy Singer Dance Studio with her primary focus being Tap. Sarah has competed in group and solo Jazz and Tap categories at the regional and national levels in Showstopper and I Love Dance competitions. Sarah has been sharing her love of dance, teaching children through adults, since 1998. Along with teaching dance, Sarah is a Director, Psychotherapist and Family Court Mediator at InterConnections, S.C., an out-patient mental health clinic in Kenosha, and a board member for Wisconsin InterProfessional Committee on Divorce (WIPCOD), a nonprofit organization in Wisconsin.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-3 d-flex align-items-center justify-content-center">
                            <img class="img-fluid rounded shadow" src="images/staff-sofia.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="accordion" id="accordionSofia">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSofia">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSofia" aria-expanded="true" aria-controls="collapseSofia">
                                            <div>
                                                <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark text-capitalize">Sofia Puterbaugh <span class="fw-normal" style="font-size: 0.65em;">HR & PR Coordinator</span></p>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="collapseSofia" class="accordion-collapse collapse show" aria-labelledby="headingSofia" data-bs-parent="#accordionSofia">
                                        <div class="accordion-body">
                                            <p>
                                                Sofia Puterbaugh is a graduate of University of Minnesota – Twin Cities with two degrees in Dance (BA) and Human Resources (BS), and an alumni of Kenosha Academy of Performing Arts! She has a passion for many different aspects of the arts: performing, teaching, choreography, and arts business. Sofia has been teaching dance for six years, and wants to create students who are passionate, compassionate, and creative. She wants to foster a classroom of love. Sofia is inspired to not only teach great dance technique, but works to develop thoughtful and driven problem solvers and kind human beings! Sofia’s choreography credits include many musical theatre productions for the Kenosha Unified School District: West Side Story, Peter Pan, and Alice in Wonderland. She also has taught at a variety of studios in the Midwest in styles of Ballet, Jazz, Musical Theatre, Contemporary, Modern, Lyrical, and Tap. She has appeared in works by Sidra Bell, Michel Kouakou, Carl Flink, and Angharad Davies. She has studied under amazing mentors including: Erin Thompson, Annie Hackett, Valerie Gonzalez and Holly Stanfield. Sofia has had the pleasure of working at a variety of artistic organizations. Her resume features Springboard for the Arts (MN), Northrop Auditorium (MN), Joffrey Ballet (IL), and See Chicago Dance (IL). Along with teaching, she works at Navy Pier in Chicago and KAPA as their HR & PR Coordinator!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection
