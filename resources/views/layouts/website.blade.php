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

    <title>アルタ三田 - ブラジリアン柔術</title>

    <meta name='robots' content='max-image-preview:large' />
    <link rel='dns-prefetch' href='//www.google.com' />
    <link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />

    @stack('head-scripts')

    @stack('styles')

    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('images/logo/favicon.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('images/logo/favicon.png') }}" />
</head>

<body class="home page-template-default page page-id-19 custom-background wp-custom-logo ja overlap-first-section mesmerize-front-page mesmerize-content-padding elementor-default elementor-kit-21 elementor-page elementor-page-19">

    @include('components.header')

    @yield('content')

    @include('components.footer')

    @stack('scripts')

</body>
</html>
