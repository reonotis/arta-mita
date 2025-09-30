
@php
    $route_num = match (Route::currentRouteName()) {
        'admin_home' => 1,
        'admin_information' => 2,
        'admin_trial' => 6,
        'admin_contact' => 7,
        default => 0,
    };
@endphp

<header>
    <div class="header flex-center-center">
        <a href="{{ route('admin_home') }}" class="@if($route_num === 1) active @endif">HOME</a>
        <a href="{{ route('admin_information') }}" class="@if($route_num === 2) active @endif">お知らせ</a>
{{--        <a href="" class="@if($route_num === 3) active @endif">インストラクター</a>--}}
{{--        <a href="" class="@if($route_num === 4) active @endif">コース</a>--}}
        <a href="{{ route('admin_trial') }}" class="@if($route_num === 6) active @endif">体験</a>
        <a href="{{ route('admin_contact') }}" class="@if($route_num === 7) active @endif">問い合わせ</a>
    </div>
</header>
