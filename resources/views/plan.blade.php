@extends('layouts.website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/first.css') }}?time={{ time() }}" type='text/css' media='all' />
@endpush

@section('content')

@include('layouts.view-hero', [
    'screen_data' => [
        'title' => '会員プラン',
        'title_en' => 'Member plan',
    ]
])

{{-- 見学・無料体験 --}}
<section class="">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">見学・無料体験</h3>
        </div>
        <div class="section-body" style="max-width: 650px; margin: 0 auto;">
            <p>「柔術ってどんなスポーツ？」</p>
            <p>「道場の雰囲気を見てみたい」</p>
            <p>「実際に柔術を体験してみたい」</p>
            <p>そんな方々の為にも、カルペディエム三田では、見学・体験を受け付けております！</p>
            <p>事前に問い合わせの申込フォームからご予約ください。</p>
            <p>レンタル胴衣も無料でお貸しする事が出来ます。どのクラスでも可能ですし、トレーニング中の強制等はございません。お気軽に足をお運びくださいませ。</p>
            <p>※ご予約の上、クラス開始10分前に来館ください。</p>
            <p>※ブラジリアン柔術経験者、また入会の意思がない方はビジター料￥4,000をお支払い頂きます。</p>
        </div>
    </div>
</section>


@endsection

@include('components.styles')
@include('components.scripts')
