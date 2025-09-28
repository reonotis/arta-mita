<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="profile" href="http://gmpg.org/xfn/11">

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

    <div class="page-wrapper">
        @include('components.header')

        <main class="main-content">
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    @stack('scripts')

</body>
</html>
