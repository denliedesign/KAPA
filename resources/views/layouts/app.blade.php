<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Kenosha Academy of Performing Arts">
    <meta property="og:description" content="Through quality dance and music lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.">
{{--    <meta property="og:image" content="">--}}
{{--    <meta property="og:url" content="">--}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="description" content="@yield('description', 'Through quality dance and music lessons we teach life lessons that foster community, develop leadership skills, self confidence, motivation, and creative thinking.')">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/2021-style.css">

    <title>@yield('title', 'Kenosha Academy of Performing Arts | Dance & Music Lessons Kenosha WI')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">



    <meta name="msapplication-TileColor" content="#30393e">
    <meta name="theme-color" content="#30393e">
    <meta name="google-site-verification" content="pEj8FQ1at3uraMLV77FgIB99LibvKtfCd2E3Jr8B2Hw" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179317965-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-179317965-2');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HZ3HZD9MVB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-HZ3HZD9MVB');
    </script>

    <!-- Meta Pixel Code -->

    <script>

        !function(f,b,e,v,n,t,s)

        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

            n.callMethod.apply(n,arguments):n.queue.push(arguments)};

            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

            n.queue=[];t=b.createElement(e);t.async=!0;

            t.src=v;s=b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t,s)}(window, document,'script',

            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1839682929600703');

        fbq('track', 'PageView');

    </script>

    <noscript><img height="1" width="1" style="display:none"

                   src="https://www.facebook.com/tr?id=1839682929600703&ev=PageView&noscript=1"

        /></noscript>

    <!-- End Meta Pixel Code -->

{{--    <img src="https://servedby.ipromote.com/ad/?src=pixel_cid&nid=2482&cid=T7VJY1WDF8F&cat=11902" width="1" height="1" border="0" alt="" style="position: absolute; visibility: hidden;">--}}

    @if(session()->has('message'))
        <div class="alert alert-success mb-0" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
    @endif

<!-- Trial Modal -->
    <div class="modal fade" id="trialModal" tabindex="-1" aria-labelledby="trialModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <iframe
                    src="https://link.enrollio.ai/widget/form/vgkmZbCuGMDWuEC4LGQh"
                    style="width:100%;height:100%;border:none;border-radius:13px"
                    id="inline-vgkmZbCuGMDWuEC4LGQh"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Website Free Trial Class Form"
                    data-height="867"
                    data-layout-iframe-id="inline-vgkmZbCuGMDWuEC4LGQh"
                    data-form-id="vgkmZbCuGMDWuEC4LGQh"
                    title="Website Free Trial Class Form"
                >
                </iframe>
                <script src="https://link.enrollio.ai/js/form_embed.js"></script>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Lead Modal -->
    <div class="modal fade" id="leadModal" tabindex="-1" aria-labelledby="leadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <iframe
                    src="https://link.enrollio.ai/widget/form/2M7ZlzcYqd0AZ5xDSmYe"
                    style="width:100%;height:100%;border:none;border-radius:4px"
                    id="inline-2M7ZlzcYqd0AZ5xDSmYe"
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Website Lead Capture Form"
                    data-height="638"
                    data-layout-iframe-id="inline-2M7ZlzcYqd0AZ5xDSmYe"
                    data-form-id="2M7ZlzcYqd0AZ5xDSmYe"
                    title="Website Lead Capture Form"
                >
                </iframe>
                <script src="https://link.enrollio.ai/js/form_embed.js"></script>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    @include('top')
    @include('header-21')
    @yield('content')
    @include('footer-21')

</head>

<!-- Start of Async Drift Code -->
{{--<script>--}}
{{--    "use strict";--}}

{{--    !function() {--}}
{{--        var t = window.driftt = window.drift = window.driftt || [];--}}
{{--        if (!t.init) {--}}
{{--            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));--}}
{{--            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],--}}
{{--                t.factory = function(e) {--}}
{{--                    return function() {--}}
{{--                        var n = Array.prototype.slice.call(arguments);--}}
{{--                        return n.unshift(e), t.push(n), t;--}}
{{--                    };--}}
{{--                }, t.methods.forEach(function(e) {--}}
{{--                t[e] = t.factory(e);--}}
{{--            }), t.load = function(t) {--}}
{{--                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");--}}
{{--                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";--}}
{{--                var i = document.getElementsByTagName("script")[0];--}}
{{--                i.parentNode.insertBefore(o, i);--}}
{{--            };--}}
{{--        }--}}
{{--    }();--}}
{{--    drift.SNIPPET_VERSION = '0.3.1';--}}
{{--    drift.load('bi96fic7adpe');--}}
{{--</script>--}}
<!-- End of Async Drift Code -->

{{--<chat-widget style="--chat-widget-primary-color: #1C8F91; --chat-widget-active-color:#1C8F91--}}
{{--;--chat-widget-bubble-color: #1C8F91" location-id="SFUCfS0n61zJppMfKcwS" heading="Have--}}
{{--a question about our studio?" sub-heading="Enter your question below and we'll get back to you--}}

{{--shortly!" prompt-msg="Hi there, have a question about our programs? Text us here." success---}}
{{--             msg="Someone from our studio will contact you back shortly!" prompt---}}
{{--             avatar="https://firebasestorage.googleapis.com/v0/b/highlevel---}}
{{--backend.appspot.com/o/locationPhotos%2FSFUCfS0n61zJppMfKcwS%2Fchat-widget-person?--}}

{{--alt=media&token=18963adc-078f-4c28-9a1f-c61bd2a25d01" agency-name="StudioHub"--}}
{{--             agency-website="getmorestudents.net" ></chat-widget> <script--}}

{{--    src="https://widgets.leadconnectorhq.com/loader.js" data-resources---}}
{{--    url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" > </script>--}}

<chat-widget
    location-id="mfLlyQjdNK8QrDXLAQCG"
    style="--chat-widget-primary-color: #1D8D8F; --chat-widget-active-color:#1D8D8F ;--chat-widget-bubble-color: #1D8D8F ;"
    sub-heading="Enter your question below and a team member will get right back to you!"
    prompt-msg="Hi! It's Miss Ann with Kenosha Academy of Performing Arts. How can I help?"
    success-msg="One of our team members will contact you shortly!"
    prompt-avatar="https://firebasestorage.googleapis.com/v0/b/highlevel-backend.appspot.com/o/locationPhotos%2FmfLlyQjdNK8QrDXLAQCG%2Fchat-widget-person?alt=media&token=980a7be5-3e86-4111-ab72-bd1c4cdf289f"
    locale="en-us"
    primary-color="#1D8D8F">
</chat-widget>
<script
    src="https://widgets.leadconnectorhq.com/loader.js"
    data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" >
</script>

<body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="js/script.js"></script>

<script>
    tinymce.init({
        selector: '#mytextarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#article-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#post-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#generals-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#ads-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#handbooks-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#memories-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#performances-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#rehearsals-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#seniors-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#tickets-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#photos-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#volunteers-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#update-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });

    tinymce.init({
        selector: '#fest-textarea',
        plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });
</script>

</body>
</html>

