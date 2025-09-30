<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <title>ARTA BJJ Mita - 管理画面</title>

    <link rel="stylesheet" href="{{ asset('css/admin/styles.css') }}?time={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}?time={{ time() }}">
    @stack('head-scripts')
    @stack('styles')

    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('images/logo/favicon.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('images/logo/favicon.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('images/logo/favicon.png') }}" />
</head>

<body class="">
    @include('layouts.admin.header')

    <main class="main-content">
        @yield('content')
    </main>

</body>
</html>
