<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script>
        (function (exports, d) {
            var _isReady = false,
                _event,
                _fns = [];

            function onReady(event) {
                d.removeEventListener("DOMContentLoaded", onReady);
                _isReady = true;
                _event = event;
                _fns.forEach(function (_fn) {
                    var fn = _fn[0],
                        context = _fn[1];
                    fn.call(context || exports, window.jQuery);
                });
            }

            function onReadyIe(event) {
                if (d.readyState === "complete") {
                    d.detachEvent("onreadystatechange", onReadyIe);
                    _isReady = true;
                    _event = event;
                    _fns.forEach(function (_fn) {
                        var fn = _fn[0],
                            context = _fn[1];
                        fn.call(context || exports, event);
                    });
                }
            }

            d.addEventListener && d.addEventListener("DOMContentLoaded", onReady) ||
            d.attachEvent && d.attachEvent("onreadystatechange", onReadyIe);

            function domReady(fn, context) {
                if (_isReady) {
                    fn.call(context, _event);
                }

                _fns.push([fn, context]);
            }

            exports.mesmerizeDomReady = domReady;
        })(window, document);
    </script>

    <title>@yield('title', 'アルタ三田 - ブラジリアン柔術')</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//www.google.com' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />

    <!-- Emoji Support -->
    <script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/carpediem-mita.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.3"}};
    /*! This file is auto-generated */
    !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
    /* ]]> */
    </script>

    <!-- WordPress Styles -->
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <!-- Global Styles -->
    <style id='global-styles-inline-css' type='text/css'>
        body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;}
    </style>

    <!-- CSS Files -->
    <link rel='stylesheet' href='{{ asset('css/theme-bundle.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('css/mesmerize-style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('css/elementor-icons.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('css/elementor-frontend.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('css/swiper.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.css' type='text/css' media='all' />

    <!-- Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CMuli%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic&subset=latin%2Clatin-ext&display=swap' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&display=auto' type='text/css' media='all' />

    <!-- Custom Styles -->
    <style id='mesmerize-style-inline-css' type='text/css'>
        img.logo.dark, img.custom-logo{width:auto;max-height:50px !important;}
        /** cached kirki style */
        @media screen and (min-width: 768px){.header-homepage{background-position:center center;}}
        .mesmerize-front-page .header-separator .svg-white-bg{fill:#ffffff!important;}
        .mesmerize-front-page .header-separator svg{height:57px!important;}
        .header.color-overlay:before{background:#000000;}
        .header .background-overlay,.header.color-overlay::before{opacity:0.6;}
        .header.color-overlay:after{filter:invert(0%) ;}
        .header-homepage .header-description-row{padding-top:40%;padding-bottom:10%;}
        .inner-header-description{padding-top:8%;padding-bottom:8%;}
        .mesmerize-front-page .navigation-bar.bordered{border-bottom-color:rgba(255, 255, 255, 0.5);border-bottom-width:1px;border-bottom-style:solid;}
        .mesmerize-inner-page .navigation-bar.bordered{border-bottom-color:rgb(0,0,0);border-bottom-width:1px;border-bottom-style:solid;}
        @media screen and (max-width:767px){.header-homepage .header-description-row{padding-top:80%;padding-bottom:80%;}}
        @media only screen and (min-width: 768px){.header-content .align-holder{width:85%!important;}.inner-header-description{text-align:center!important;}}
    </style>

    <!-- Additional CSS -->
    @stack('styles')

    <!-- JavaScript -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate.min.js') }}"></script>

    <!-- WordPress Compatibility -->
    <script type="text/javascript">
        // WordPress compatibility
        window.wp = window.wp || {};
        window.wp.media = window.wp.media || {};
        window.wp.media.view = window.wp.media.view || {};
        window.wp.media.view.Modal = window.wp.media.view.Modal || function() {};

        // jQuery ready function
        jQuery(document).ready(function($) {
            // Initialize any WordPress-specific functionality here
        });
    </script>

    @stack('head-scripts')
</head>
<body class="home page-template-default page page-id-19 wp-embed-responsive mesmerize-front-page mesmerize-content-padding colibri-wp-theme overlap-first-section mesmerize-front-page-with-slider custom-background">

    <!-- Header -->
    @include('components.header')

    <!-- Main Content -->
    <main id="content" class="site-content">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- JavaScript Files -->
    <script type="text/javascript" src="{{ asset('js/mesmerize-child.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.js"></script>
    <script type="text/javascript" defer src="{{ asset('js/theme-bundle.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/elementor-frontend.js') }}"></script>

    <!-- Additional Scripts -->
    @stack('scripts')

    <!-- Custom Background Styles -->
    <style type="text/css" id="custom-background-css">
        body.custom-background { background-color: #ffffff; }
    </style>

</body>
</html>
