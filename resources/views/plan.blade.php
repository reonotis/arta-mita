@extends('layouts.website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/plan.css') }}?time={{ time() }}" type='text/css' media='all' />
@endpush

@section('content')

@include('layouts.view-hero', [
    'screen_data' => [
        'title' => '会員プラン',
        'title_en' => 'Member plan',
        'background_image' => asset('images/inner-hero/会員プラン.jpg'),
    ]
])

@php
    $plans = [
        [
            'title' => 'フルタイムコース',
            'image' => asset('images/plan/男性フルタイム会員.jpg'),
            'target' => '18歳以上の方',
            'admission_fee' => '11,000円',
            'monthly_fee' => '19,800円',
        ], [
            'title' => '8Daysコース',
            'image' => asset('images/plan/男性８デイズ会員.jpg'),
            'target' => '18歳以上の方',
            'admission_fee' => '11,000円',
            'monthly_fee' => '17,600円',
        ], [
            'title' => '学生コース',
            'image' => asset('images/plan/学生会員.jpg'),
            'target' => '中学生〜大学4年生',
            'admission_fee' => '11,000円',
            'monthly_fee' => '17,600円',
        ], [
            'title' => 'キッズコース',
            'image' => asset('images/plan/キッズ会員.jpg'),
            'target' => '5歳〜小学6年生',
            'admission_fee' => '11,000円',
            'monthly_fee' => '17,600円',
        ], [
            'title' => '法人コース',
            'image' => asset('images/plan/法人会員.jpg'),
            'target' => '法人・団体の方5名～20名',
            'admission_fee' => '11,000円',
            'monthly_fee' => '77,000円（5名）～275,000円（20名）',
        ],
    ];
@endphp

{{-- 各種プラン --}}
<section class="plan-section">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">各種プラン</h3>
        </div>
        <div class="plan-intro">
            <p>ご入会時には下記費用が必要になります。当ジムでのご入会手続き時にお支払いをお願い致します。</p>
            <ul class="plan-intro-list">
                <li>ご入会金</li>
                <li>当月会費</li>
                <li>翌月会費</li>
            </ul>
            {{-- <p>各会員のご入会時に必要な費用については、各会員ページ内にある「ご入会について」をご確認ください。</p> --}}
        </div>
        @foreach ($plans as $plan)
            <div class="plan-card">
                <div class="plan-hero" style="background-image: url('{{ $plan['image'] }}');">
                    <h2 class="plan-hero-title">{{ $plan['title'] }}</h2>
                </div>
                <div class="plan-table-wrap">
                    <table class="plan-table">
                        <tbody>
                            <tr>
                                <th>対象</th>
                                <td>{{ $plan['target'] }}</td>
                            </tr>
                            <tr>
                                <th>入会金</th>
                                <td>{{ $plan['admission_fee'] }}</td>
                            </tr>
                            <tr>
                                <th>月会費</th>
                                <td>{{ $plan['monthly_fee'] }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
</section>


@endsection

@include('components.styles')
@include('components.scripts')
