@extends('layouts.website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/class.css') }}?time={{ time() }}" type='text/css' media='all' />
@endpush

@section('content')

@include('layouts.view-hero', [
    'screen_data' => [
        'title' => 'クラスについて',
        'title_en' => 'Class',
        'background_image' => asset('images/inner-hero/コース一覧.jpg'),
    ]
])

@php
    $classes = [
        [
            'title' => 'All belt class',
            'image' => asset('images/plan/男性フルタイム会員.jpg'),
            'description' => "全ての帯色のメンバーさんにご参加いただけます。\n白帯から黒帯まで使える技術をレクチャーする、より実践的なクラスです。\n朝６時クラスや、夜２１時３０分と幅広い時間帯で受講可能です。\n出勤前や、出勤後に参加されるメンバーさんがほとんどです。\nテクニカルなレクチャーはもちろん、帯色に関係なく一緒に練習するので、先輩メンバーさんからもたくさんの学びがあるクラスとなっています。\n柔術経験者の方や、レベルアップしたい方など、より高度な柔術に挑戦したい人にピッタリのクラスになっています。是非参加してみて下さい。",
        ],  [
            'title' => 'White belt class/Basic class',
            'image' => asset('images/plan/男性８デイズ会員.jpg'),
            'description' => "初心者の方の為に「白帯限定クラス」「ベーシッククラス」があります。
ベーシッククラスは白帯限定クラスと同じ内容です。
こちらは、白帯ではない方も基礎を復習出来るために行われるクラスです。
柔術の基本・基礎となる動きを丁寧にレクチャーするクラスとなっています。",
        ],  [
            'title' => 'Grappling class',
            'image' => asset('images/hero-image.jpg'),
            'description' => "柔術着ではなくラッシュガードとショーツを着用して行うタイプのクラスとなります。
全ての帯色のメンバーさんにご参加いただけます。
荷物も少なく、柔術よりも手軽に始める事が出来るので人気も高いです。
初心者の方にも基礎となる「動き作り」を丁寧にレクチャーするクラスとなっています。
道着ありの柔術とはひと味違ったスピーディーな展開も魅力の一つ。
グラップリングの大会も増え、近年特に盛り上がり見せている競技です。　
道着ありの柔術とグラップリングを両方学ぶ事で、組技に対する理解がより深まります。グラップリングクラスも是非積極的に参加してみて下さい。",
        ],  [
            'title' => 'Kids class',
            'image' => asset('images/plan/キッズ会員.jpg'),
            'description' => "5歳〜中学3年生が対象です。　体格、体力、レベルの差などを考慮して2つのグループに分けてクラスを行っています。小さなお子様も安心です。
初めて運動を始めるキッズメンバーさんから、世界大会で実績を残すキッズメンバーさんまで、あらゆるレベルのメンバーさんが参加しています。
また、柔術だけでなく、礼節や団体行動中の振る舞いなど、成長の過程で身に付ける必要があるルールについても同様に指導していきます。
マットスペースのすぐ後ろにはガラス張りの見学スペースがあり、親御さんもクラスを見守れるようになっていますので安心です。是非ご参加下さい。",
        ],  [
            'title' => 'Colored belt class',
            'image' => asset('images/plan/法人会員.jpg'),
            'description' => "青帯以上限定のクラスとなります。
相手のリアクションに対する技など、応用テクニックをメインで指導します。
トーホールドや膝十字など、足関節の練習も積極的に行います。
柔術を更に深掘っていきたいという方にオススメのクラスです。",
        ],
    ];
@endphp

{{-- クラス一覧 --}}
<section class="class-section">
    <div class="content-wrapper">

        <div class="section-body">
            <h3 class="weekly-title">週間スケジュール</h3>
            <div class="basic-calendar-image">
                <img src="{{ asset('images/basic-calendar.png') }}?v=20251002" alt="basic-calendar" class="">
            </div>

            @foreach ($classes as $class)
                <div class="class-card">
                    <div class="class-card__inner">
                        <div class="class-card__media">
                            <img src="{{ $class['image'] }}" alt="{{ $class['title'] }}">
                        </div>
                        <div class="class-card__body">
                            <h2 class="class-card__title">{{ $class['title'] }}</h2>
                            <div class="class-card__divider"></div>
                            <p class="class-card__desc">{{ $class['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@include('components.styles')
@include('components.scripts')
