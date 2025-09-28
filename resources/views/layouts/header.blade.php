@php
    $currentPath = request()->path();
    $currentUrl = request()->url();

    $menuItems = [
        [
        //     'title' => '初めての方へ',
        //     'url' => '#',
        //     'route' => 'first'
        // ],[
        //     'title' => '会員プラン',
        //     'url' => '#',
        //     'route' => 'plan'
        // ],[
        //     'title' => 'クラスについて',
        //     'url' => '#',
        //     'route' => 'classes'
        // ],[
        //     'title' => 'インストラクター一覧',
        //     'url' => '#',
        //     'route' => 'instructors'
        // ],[
        //     'title' => 'お客様の声',
        //     'url' => '#',
        //     'route' => 'testimonials'
        // ],[
        //     'title' => 'ビジター',
        //     'url' => '#',
        //     'route' => 'visitor'
        // ],[
        //     'title' => 'よくある質問',
        //     'url' => '#',
        //     'route' => 'faq'
        // ],[
            'title' => '体験申込',
            'url' => route('trial'),
            'route' => 'trial'
        ],[
            'title' => '問い合わせ',
            'url' => route('contact'),
            'route' => 'contact'
        ]
    ];


    // 現在のURLがアクティブかどうかを判定する関数
    function isActive($item, $currentPath, $currentUrl) {
        // ホームページの場合
        if ($currentPath === '/' && $item['route'] === 'home') {
            return true;
        }

        // ルート名で判定
        if (isset($item['route']) && $item['route'] !== '#') {
            try {
                return request()->routeIs($item['route'] . '*') || request()->routeIs($item['route']);
            } catch (Exception $e) {
                // ルートが存在しない場合はURLで判定
            }
        }

        // URLパスで判定
        if ($item['url'] !== '#') {
            $itemPath = parse_url($item['url'], PHP_URL_PATH);
            if ($itemPath && $itemPath !== '/') {
                return str_starts_with($currentPath, ltrim($itemPath, '/'));
            }
        }

        return false;
    }
@endphp

<div class="header-container">
    <div class="nav-bar">
        <div class="nav-wrapper">
            <div class="nav-content">
                <!-- ロゴセクション -->
                <div class="logo-section">
                    <a href="{{ url('/') }}" class="logo-link" rel="home" aria-current="page">
                        <img src="{{ asset('images/logo/header_logo.png') }}" class="logo-image" alt="アルタ三田" />
                    </a>
                </div>

                <!-- メニューセクション -->
                <div class="menu-section">
                    <!-- PC用メニュー -->
                    <ul class="pc-menu">
                        @foreach($menuItems as $item)
                            <li class="pc-menu-item {{ isActive($item, $currentPath, $currentUrl) ? 'active' : '' }}">
                                <a href="{{ $item['url'] }}" class="pc-menu-link {{ isActive($item, $currentPath, $currentUrl) ? 'active' : '' }}">{{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <!-- ハンバーガーメニューボタン -->
                    <button class="hamburger-btn" onclick="toggleOffcanvas()">
                        <div class="hamburger-icon">
                            <span></span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- オフキャンバスメニュー -->
    <div class="offcanvas-overlay" id="offcanvas-overlay" onclick="closeOffcanvas()"></div>
    <div class="offcanvas-menu" id="offcanvas-menu">
        <div class="offcanvas-header">
            <a href="{{ url('/') }}" class="logo-link">
                <img src="{{ asset('images/logo/header_logo.png') }}" class="offcanvas-logo" alt="アルタ三田" />
            </a>
        </div>
        <ul class="offcanvas-menu-list">
            @foreach($menuItems as $item)
                <li class="offcanvas-menu-item {{ isActive($item, $currentPath, $currentUrl) ? 'active' : '' }}">
                    <a href="{{ $item['url'] }}" class="offcanvas-menu-link {{ isActive($item, $currentPath, $currentUrl) ? 'active' : '' }}">{{ $item['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<script>
function toggleOffcanvas() {
    const offcanvas = document.getElementById('offcanvas-menu');
    const overlay = document.getElementById('offcanvas-overlay');

    offcanvas.classList.toggle('open');
    overlay.classList.toggle('show');
}

function closeOffcanvas() {
    const offcanvas = document.getElementById('offcanvas-menu');
    const overlay = document.getElementById('offcanvas-overlay');

    offcanvas.classList.remove('open');
    overlay.classList.remove('show');
}

// ESCキーでオフキャンバスを閉じる
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeOffcanvas();
    }
});
</script>
