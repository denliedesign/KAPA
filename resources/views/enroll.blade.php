@extends('layouts.app')

@section('title', 'Classes | Kenosha Academy of Performing Arts')
@section('description', 'Learn About Our Classes And Find A Fit For You.')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">


                <div class="mx-2">
                    <div class="row">
                        <div class="col-sm" id="enroll-form">
                            <h2 class="pt-5 text-center">Enroll</h2>
                            <div class="bg-kapa-orange text-left mb-4 p-4">
                                <div class="bg-white rounded p-4 shadow">
                                    <strong><ion-icon name="call"></ion-icon> Call:</strong> 262.605.3951
                                    <br><strong><ion-icon name="phone-portrait-outline"></ion-icon> Text:</strong> 262.383.4812
                                    <br><strong><ion-icon name="mail"></ion-icon> Email:</strong> ahackett@kenoshadancemusicdrama.com
                                    <br><strong><ion-icon name="navigate"></ion-icon> Visit:</strong> 7600 75th Street Suite 121, Kenosha, WI 53142
                                    <br><br>Or fill out the form to start enrolling. We’ll call you back within 1 business day to help you finish signing up.
                                </div>
                            </div>
                            @include('contact.create')
                        </div>
                        <div class="col-sm pt-5 d-flex justify-content-center">
                            <img src="/images/enroll-img.jpg" alt="dancer outside" class="img-fluid shadow rounded" style="max-height: 750px;">
                        </div>
                    </div>
                </div>


        </div>
    </div>


@endsection
