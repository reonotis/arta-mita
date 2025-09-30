@extends('layouts.website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/instructor.css') }}?time={{ time() }}" type='text/css' media='all' />
@endpush

@section('content')

@include('layouts.view-hero', [
    'screen_data' => [
        'title' => 'インストラクター一覧',
        'title_en' => 'Instructors',
        'background_image' => asset('images/inner-hero/ARTA0910.jpg'),
    ]
])

@php
    $instructors = [
        [
            'name' => 'ジェゴ エンリケ',
            'role' => 'チーフインストラクター / 黒帯',
            'ribbon_color' => '#111',
            'image' => asset('images/instructors/ARTA0487.jpg'),
            'bullets' => [
                'JBJJF 全日本柔術選手権 優勝（黒帯マスター部 2021）',
                'ASJJF ジャパンオープン 優勝（黒帯ライトフェザー級 2021）',
                'IBJJF アジアオープン 優勝（黒帯ライトフェザー級 2019） 5連覇中',
            ],
        ],
        [
            'name' => '岡泉 海',
            'role' => 'サブチーフインストラクター / 黒帯',
            'ribbon_color' => '#111',
            'image' => asset('images/instructors/ARTA0379.jpg'),
            'bullets' => [
                'JBJJF 全日本柔術選手権 優勝（紫帯ライトフェザー級 2024）',
                'IBJJF アジア選手権 優勝（紫帯ライトフェザー級 2023）',
                'JBJJF GroundImpact 優勝（紫帯ライトフェザー級 2022）',
            ],
        ],
        [
            'name' => '石黒 翔也',
            'role' => 'インストラクター / 黒帯',
            'ribbon_color' => '#111',
            'image' => asset('images/instructors/ARTA0445.jpg'),
            'bullets' => [
                'IBJJF 世界選手権 予選通過、国内大会多数優勝（ライトフェザー級 2023）',
                'IBJJF アジア選手権 優勝（紫帯ライトフェザー級 2024）',
                'IBJJF ドーハ選手権 優勝（青帯ライトフェザー級 2023）',
            ],
        ],
        [
            'name' => 'ダニロ 浜崎',
            'role' => 'インストラクター / 黒帯',
            'ribbon_color' => '#111',
            'image' => asset('images/instructors/ARTA0488.jpg'),
            'bullets' => [
                'JBJJF 全日本柔術選手権 優勝（紫帯フェザー 2022）',
                'JBJJF GroundImpact 優勝（青帯 上半期）',
                'KIT06 プロマッチ 出場',
            ],
        ],
        [
            'name' => '高橋 逸樹',
            'role' => 'インストラクター / 紫帯',
            'ribbon_color' => '#7a1b9a',
            'image' => asset('images/instructors/ARTA0499.jpg'),
            'bullets' => [
                'JBJF ASIAN Jiu-Jitsu Championship 2024 準優勝（青帯ライトフェザー）',
                'JBJJF 全日本ブラジリアン柔術オープントーナメント 優勝',
                'ADU DHABI GRAND SLAM JIU JITSU WORLD TOUR TOKYO 3位（青帯 2023）',
            ],
        ],
        [
            'name' => '鈴木 太陽',
            'role' => 'インストラクター / 茶帯',
            'ribbon_color' => '#703f0f',
            'image' => asset('images/instructors/ARTA0569.jpg'),
            'bullets' => [
                '第25回全日本ブラジリアン柔術選手権 アダルト紫帯フェザー級 ３位',
                '第10回全日本ノーギ柔術オープントーナメント アダルト茶帯オープンクラス　優勝',
                '第26回全日本ブラジリアン柔術選手権 アダルト茶帯ライト級　準優勝',
            ],
        ],
    ];
@endphp

{{-- インストラクター一覧 --}}
<section class="instructor-section">
    <div class="content-wrapper">

        <div class="instructor-grid">
            @foreach ($instructors as $ins)
                <div class="instr-card">
                    <div class="instr-image">
                        <img src="{{ $ins['image'] }}" alt="{{ $ins['name'] }}">
                    </div>

                    <div class="instr-body">
                        <div class="instr-ribbon" style="background-color: {{ $ins['ribbon_color'] }}; --ribbon-color: {{ $ins['ribbon_color'] }};">
                            <span>{{ $ins['role'] }}</span>
                            <div class="instr-ribbon-tail">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="instr-name">{{ $ins['name'] }}</div>
                        <ul class="instr-bullets">
                            @foreach ($ins['bullets'] as $b)
                                <li>{{ $b }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection

@include('components.styles')
@include('components.scripts')
