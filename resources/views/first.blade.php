@extends('layouts.website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/first.css') }}?time={{ time() }}" type='text/css' media='all' />
@endpush

@section('content')

@include('layouts.view-hero', [
    'screen_data' => [
        'title' => '初めての方へ',
        'title_en' => 'For the First time',
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

{{-- レッスンについて --}}
<section class="">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">レッスンについて</h3>
        </div>
        <div class="section-body" style="max-width: 650px; margin: 0 auto;">
            <p>ブラジリアン柔術の体験が初めての方も、スタッフが１から丁寧に指導をいたします。</p>
            <p>柔術に必要な動きを覚えるための基礎運動（ウォームアップ）から始まり、インストラクターの指導の下テクニックの練習を行います。</p>
            <p>運動経験がない方でも取り組み易いカリキュラムとなっております。</p>
        </div>
    </div>
</section>

{{-- 施設の紹介 --}}
<section class="facility-intro">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">施設の紹介</h3>
        </div>
        <div class="section-body">
            <div class="facility-grid">
                <div class="facility-item">
                    <div class="facility-image">
                        <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="店舗入り口">
                    </div>
                    <div class="facility-caption">
                        <h4>店舗入り口</h4>
                    </div>
                </div>

                <div class="facility-item">
                    <div class="facility-image">
                        <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="フロント">
                    </div>
                    <div class="facility-caption">
                        <h4>フロント</h4>
                    </div>
                </div>

                <div class="facility-item">
                    <div class="facility-image">
                        <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="ロッカー">
                    </div>
                    <div class="facility-caption">
                        <h4>ロッカー</h4>
                    </div>
                </div>

                <div class="facility-item">
                    <div class="facility-image">
                        <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="セーフティボックス(金庫)">
                    </div>
                    <div class="facility-caption">
                        <h4>セーフティボックス(金庫)</h4>
                    </div>
                </div>

                <div class="facility-item">
                    <div class="facility-image">
                        <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="シャワールーム">
                    </div>
                    <div class="facility-caption">
                        <h4>シャワールーム</h4>
                    </div>
                </div>

                <div class="facility-item">
                    <div class="facility-image">
                        <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="ラウンジ">
                    </div>
                    <div class="facility-caption">
                        <h4>ラウンジ</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 入会の流れ --}}
<section class="enrollment-flow">
    <div class="content-wrapper">
        <div class="section-title">
            <h3>入会の流れ</h3>
        </div>

        <div class="flex-center-top enrollment-columns">
            {{-- お問い合わせについて --}}
            <div class="enrollment-column">
                <div class="enrollment-image">
                    <img src="{{ asset('images/mita-info/初心者大歓迎.jpg') }}" alt="お問い合わせについて" />
                </div>
                <div class="enrollment-content">
                    <h3 class="enrollment-heading">お問い合わせについて</h3>
                    <p>ブラジリアン柔術に興味はあるけれど、不安や疑問がある方も、LINEアカウントからお気軽にお問い合わせください。無料体験の前に見学も可能です。何かご不明な点やご心配なことがございましたら、いつでもお気軽にお声がけください。</p>
                </div>
            </div>

            {{-- 無料体験について --}}
            <div class="enrollment-column">
                <div class="enrollment-image">
                    <img src="{{ asset('images/mita-info/三田道場の強み.jpg') }}" alt="無料体験について" />
                </div>
                <div class="enrollment-content">
                    <h3 class="enrollment-heading">無料体験について</h3>
                    <p>柔術を体験してみたい方や道場の雰囲気を見てみたい方には、お一人様一回限りで無料体験をご用意しております。初心者の方には白帯限定クラスをお勧めします。胴衣、帯、タオルはレンタル可能ですので、Tシャツとタオルをお持ちください。どのクラスでも体験可能で、ご自分のペースでトレーニングしていただけます。強制参加は一切ございません。</p>
                </div>
            </div>

            {{-- 入会について --}}
            <div class="enrollment-column">
                <div class="enrollment-image">
                    <img src="{{ asset('images/mita-info/完璧より前進.jpg') }}" alt="入会について" />
                </div>
                <div class="enrollment-content">
                    <h3 class="enrollment-heading">入会について</h3>
                    <p>入会をご希望の方は、道場のiPadを使用して手続きを行っていただけます。スタッフがサポートいたします。入会後はいつでも練習にご参加いただけます。また、後日改めてご来館いただいて入会手続きを行うことも可能です。胴衣やラッシュガードをお持ちでない方は、道場でもご購入いただけます。詳細についてはスタッフまでお問い合わせください。</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 見学・体験について --}}
<section class="trial-info">
    <div class="content-wrapper">
        <div class="section-title">
            <h3>見学・体験について</h3>
        </div>
        <div class="section-body">
            <div class="trial-sections">
                {{-- 見学について --}}
                <div class="trial-section">
                    <h4 class="trial-heading">見学について</h4>
                    <p class="trial-description">
                        CARPE DIEM BJJではミスマッチを極力なくすため見学をオススメしています。直接インストラクターにいろいろ聞きたい、などございましたら何度でもお気軽に足をお運びください。
                    </p>
                    <p class="trial-note">
                        ※ご連絡の上、クラス開始10分前に来館ください。
                    </p>
                </div>

                {{-- 体験について --}}
                <div class="trial-section">
                    <h4 class="trial-heading">体験について</h4>
                    <p class="trial-description">
                        お一人様1回に限りまして、CARPE DIEM BJJへ体験入門することが出来ます。レンタル胴衣も無料でお貸しする事が出来ます。どのクラスでも可能ですし、トレーニング中の強制等はございません。お気軽に足をお運びくださいませ。
                    </p>
                    <p class="trial-note">
                        ※ご予約の上、クラス開始10分前に来館ください。
                    </p>
                    <p class="trial-note">
                        ※ブラジリアン柔術経験者、また入会の意思がない方はビジター料￥4,000をお支払い頂きます。
                    </p>
                </div>
            </div>

            {{-- 問い合わせボタン --}}

            <div class="flex-center-center">
                <a href="{{ route('contact') }}" class="submit-btn trial-button">体験についての問い合わせ</a>
            </div>
        </div>
    </div>
</section>


{{-- 費用について --}}
<section class="">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">費用について</h3>
        </div>
        <div class="section-body" style="max-width: 650px; margin: 0 auto;">
        </div>
    </div>
</section>


{{-- 休会・退会・クラスコース変更について --}}
<section class="">
    <div class="content-wrapper">
        <div class="section-title">
            <h3 class="">休会・退会・クラスコース変更について</h3>
        </div>
        <div class="section-body" style="max-width: 650px; margin: 0 auto;">
        </div>
    </div>
</section>




@endsection

@include('components.styles')
@include('components.scripts')
