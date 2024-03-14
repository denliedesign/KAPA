@extends('layouts.app')

@section('title', 'Contact Us | Kenosha Academy of Performing Arts')
@section('description', 'We are here to help!')

@section('content')

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

    <div class="bg-white">
        <div class="container">
            <h2 class="pt-5 pb-3 text-center">Contact Us</h2>
            <iframe
                src="https://link.enrollio.ai/widget/form/9KMta1vZbJ0QTlCknaaG"
                style="width:100%;height:100%;border:none;border-radius:4px"
                id="inline-9KMta1vZbJ0QTlCknaaG"
                data-layout="{'id':'INLINE'}"
                data-trigger-type="alwaysShow"
                data-trigger-value=""
                data-activation-type="alwaysActivated"
                data-activation-value=""
                data-deactivation-type="neverDeactivate"
                data-deactivation-value=""
                data-form-name="Website Contact Form"
                data-height="762"
                data-layout-iframe-id="inline-9KMta1vZbJ0QTlCknaaG"
                data-form-id="9KMta1vZbJ0QTlCknaaG"
                title="Website Contact Form"
            >
            </iframe>
            <script src="https://link.enrollio.ai/js/form_embed.js"></script>
        </div>
    </div>

    <div class="banner-wrap d-none d-md-block">
        <div class="banner"></div>
    </div>

@endsection
