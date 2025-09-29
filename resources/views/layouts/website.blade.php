<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>ARTA BJJ Mita - ブラジリアン柔術</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="心も身体も強くなる格闘技ブラジリアン柔術。初心者大歓迎、女性限定クラスもあり。東京都港区芝のARTA BJJ Mitaで、安全で楽しく柔術を学びませんか？">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="ARTA BJJ Mita - ブラジリアン柔術">
    <meta property="og:description" content="心も身体も強くなる格闘技ブラジリアン柔術。初心者大歓迎、女性限定クラスもあり。東京都港区芝のARTA BJJ Mitaで、安全で楽しく柔術を学びませんか？">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/hero-image.jpg') }}">
    <meta property="og:site_name" content="ARTA BJJ Mita">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ARTA BJJ Mita - ブラジリアン柔術">
    <meta name="twitter:description" content="心も身体も強くなる格闘技ブラジリアン柔術。初心者大歓迎、女性限定クラスもあり。東京都港区芝のARTA BJJ Mitaで、安全で楽しく柔術を学びませんか？">
    <meta name="twitter:image" content="{{ asset('images/hero-image.jpg') }}">

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
        @include('layouts.header')

        <main class="main-content">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    @stack('scripts')

</body>
</html>
