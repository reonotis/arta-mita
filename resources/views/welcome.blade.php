@extends('layouts.website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}?time={{ time() }}" type='text/css' media='all' />
@endpush

@section('content')


<img src="{{ asset('images/hero-image.jpg') }}" alt="arta-mita" class="hero-image">

{{-- メインコンテンツセクション --}}
<section class="how-to-brazilian-jiu-jitsu">
    <div class="content-wrapper hero-content">
        <div class="section-title">
            <h3 class="">心も身体も強くなる格闘技</h3>
        </div>
        <div class="section-body " >
            <p>ブラジリアン柔術は、一般的なフィットネスジムとは違い、頭を使いながら身体も使う、論理性、戦略性の高いスポーツです。</p>
            <p>その論理性や戦略性が高い事から、老若男女問わず、世界中で急速に広がる人気を見せています。</p>
            <p>「柔術」または「BJJ」という名前で、アメリカやアジアを始めとした様々な国々で安全性、実用性、アート性、そしてオシャレさが評価され絶大な人気を誇っています。</p>
            <a href="{{ url('/') }}" class="submit-btn">初めての方へ</a>
        </div>
    </div>
</section>

{{-- 三田道場のご紹介セクション --}}
<section class="mita-info">
    <div class="content-wrapper">
        <div class="section-title">
            <h3>三田道場のご紹介​</h3>
        </div>

        <div class="flex-center-top mita-columns">
            {{-- 初心者大歓迎セクション --}}
            <div class="mita-column">
                <div class="mita-image">
                    <img src="{{ asset('images/mita-info/初心者大歓迎.jpg') }}" alt="初心者大歓迎" />
                </div>
                <div class="mita-content">
                    <h3 class="mita-heading">初心者大歓迎</h3>
                    <p>初心者の方でも女性の方でも安心、安全に通えるのが、アルタ三田道場です。在籍されているほとんどの方が、格闘技経験はなく、ゼロからスタートしている方ばかりです。初心者の方の為にも「白帯限定クラス」「ベーシッククラス」があり、「女性限定クラス」では女性インストラクターが指導します。どのクラスもスパーリングを強制することはありません。それぞれのペースで柔術を楽しみましょう！</p>
                </div>
            </div>

            {{-- 三田道場の強みセクション --}}
            <div class="mita-column">
                <div class="mita-image">
                    <img src="{{ asset('images/mita-info/三田道場の強み.jpg') }}" alt="三田道場の強み" />
                </div>
                <div class="mita-content">
                    <h3 class="mita-heading">三田道場の強み</h3>
                    <p>格闘技ジムは「汚い」「怖い」というイメージがあるかもしれませんが、アルタ三田道場は清潔なマット、ラウンジ、ロッカールームを完備しています。また、メンバーの皆さんは明るく、クラス中も笑顔が絶えません。安心して通える環境を整えています。</p>
                </div>
            </div>

            {{-- 完璧より前進セクション --}}
            <div class="mita-column">
                <div class="mita-image">
                    <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="完璧より前進" />
                </div>
                <div class="mita-content">
                    <h3 class="mita-heading">完璧より前進</h3>
                    <p>アルタ三田道場のスタッフは、現役の柔術家です。2021年JBJJF全日本選手権無差別級優勝者も在籍しています。私たちのモットーは「完璧より前進」です。完璧な日はなかなかありませんが、日々少しずつ前進していくことが大切です。柔術を始めたいと思っている方は、ぜひこの考え方で一緒に成長していきましょう。</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 各会員コース・料金のご案内​ --}}
<section class="course-info">
    <div class="content-wrapper">
        <div class="section-title">
            <h3>各会員コース・料金のご案内​</h3>
        </div>
        <div class="section-body">
            <div class="course-grid">
                {{-- All belt class --}}
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-info/AllBeltClass.jpg') }}" alt="All belt class" />
                    </div>
                    <div class="course-content">
                        <h4 class="course-title-en">All belt class</h4>
                        <h5 class="course-title-jp">学びと実践のクラス</h5>
                        <p>白帯から黒帯まで使える技術をレクチャーする、より実践的なクラスです。朝6時から夜21時30分と幅広い時間帯で開催しております。</p>
                    </div>
                </div>

                {{-- White belt class --}}
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-info/WhiteBeltClass.jpg') }}" alt="White belt class" />
                    </div>
                    <div class="course-content">
                        <h4 class="course-title-en">White belt class</h4>
                        <h5 class="course-title-jp">白帯の方限定のクラス</h5>
                        <p>運動経験が無かったり、初心者の方の為のクラスです。柔術をはじめるなら、このクラスからオススメします。</p>
                    </div>
                </div>

                {{-- Basic class --}}
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-info/BasicClass.jpg') }}" alt="Basic class" />
                    </div>
                    <div class="course-content">
                        <h4 class="course-title-en">Basic class</h4>
                        <h5 class="course-title-jp">基本を学ぶ為のクラス</h5>
                        <p>カリキュラムは白帯限定クラスと同じです。こちらは、白帯ではない方も基礎を復習出来るために行われるクラスです。</p>
                    </div>
                </div>

                {{-- Grappling class --}}
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-info/GrapplingClass.jpg') }}" alt="Grappling class" />
                    </div>
                    <div class="course-content">
                        <h4 class="course-title-en">Grappling class</h4>
                        <h5 class="course-title-jp">組技の幅を広げるクラス</h5>
                        <p>柔術着ではなくラッシュガードとショーツを着用して行うタイプのクラスとなります。荷物も少なく気軽に参加し易いクラスです。</p>
                    </div>
                </div>

                {{-- Kids class --}}
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-info/KidsClass.jpg') }}" alt="Kids class" />
                    </div>
                    <div class="course-content">
                        <h4 class="course-title-en">Kids class</h4>
                        <h5 class="course-title-jp">強い心と身体を作る柔術クラス</h5>
                        <p>5歳~中学3年生が対象です。体格、体力、レベルの差などを考慮して2つのグループに分けてクラスを行っています。</p>
                    </div>
                </div>

                {{-- Women class --}}
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('images/course-info/WomensOnlyClass.jpg') }}" alt="Women class" />
                    </div>
                    <div class="course-content">
                        <h4 class="course-title-en">Women class</h4>
                        <h5 class="course-title-jp">女性限定クラス</h5>
                        <p>女性の方だけが参加できるクラスです。女性インストラクターが指導し、安心して柔術を学べる環境を提供しています。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 週間 基本スケジュール​ --}}
<section class="">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">週間 基本スケジュール​</h3>
        </div>

        <div class="section-body">
            <div class="basic-calendar-image">
                <img src="{{ asset('images/basic-calendar.png') }}" alt="basic-calendar" class="">
            </div>
        </div>

    </div>
</section>

{{-- 感染症対策について​ --}}
<section class="">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">感染症対策について​</h3>
        </div>

        <div class="section-body" style="max-width: 650px; margin: 0 auto;">
            <p>ARTA Mitaでは通常の掃除に加え、換気・消毒を徹底しています。</p>
            <p>また、定期的に空調設備の清掃も行っております。</p>
            <p>入室前に受付で検温・アルコール消毒を実施します。熱がある場合は練習に参加する事はできません。</p>
            <p>会員カードによる入退室管理も行っています。</p>
        </div>
    </div>
</section>

{{-- アクセス --}}
<section class="access-section">
    <div class="content-wrapper">
        <div class="section-title">
            <h3>アクセス</h3>
        </div>
        <div class="access-content">
            <div class="access-info">
                <div class="access-item">
                    <h4 class="access-label">道場名</h4>
                    <p class="access-value">アルタ三田</p>
                </div>
                <div class="access-item">
                    <h4 class="access-label">住所</h4>
                    <p class="access-value">〒108-0014<br>東京都港区芝5-1-13 三ツ輪三田ビルB1</p>
                </div>
                <div class="access-item">
                    <h4 class="access-label">最寄り駅</h4>
                    <p class="access-value">JR「田町」駅 徒歩5分<br>都営地下鉄「三田」駅 徒歩5分<br>都営地下鉄「赤羽橋」駅 徒歩4分</p>
                </div>
                <div class="access-item">
                    <h4 class="access-label">営業時間</h4>
                    <p class="access-value">平日: 午前6時〜10時、午後5時〜10時<br>土日: 午前9時〜午後5時<br>祝日: 特別営業</p>
                </div>
            </div>
            <div class="access-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6484.190323315618!2d139.7451!3d35.650027!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bba78a7d499%3A0x4032a48f3726a3b4!2z5pel5pys44CB44CSMTA4LTAwMTQg5p2x5Lqs6YO95riv5Yy66Iqd77yV5LiB55uu77yR4oiS77yR77yT!5e0!3m2!1sja!2sus!4v1758946194931!5m2!1sja!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection

@include('components.styles')
@include('components.scripts')
