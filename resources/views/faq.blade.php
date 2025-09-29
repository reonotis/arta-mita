@extends('layouts.website')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}?time={{ time() }}" type='text/css' media='all' />
@endpush

@section('content')

@include('layouts.view-hero', [
    'screen_data' => [
        'title' => 'よくある質問',
        'title_en' => 'Q & A',
        'background_image' => asset('images/inner-hero/よくある質問.jpg'),
    ]
])

@php
    $faq_list = [
        [
            'question' => '全くの未経験ですができますか。',
            'answer' => "できます。\n未経験で始められる方が多いです。\n体験ご希望の方には、基本が学べるホワイトベルトクラスがおすすめです。",
        ],
        [
            'question' => '体験に必要な持ち物はありますか？',
            'answer' => "はい。必要です。\n予約無しの場合はビジター扱いとなり、¥4,000をお支払いいただいております。\n体験ご希望の方は下記のフォームよりお申し込みお願い致します。",
        ],
        [
            'question' => '体験の時、持ち物は何が必要ですか。',
            'answer' => "汗をかきますので、道着の下に着るTシャツとお飲み物をご持参ください。\n道着は初回体験のみ無料でお貸しできます。",
        ],
        [
            'question' => '入会時に必要な費用は？',
            'answer' => "入会金・当月会費・翌月会費が必要です。\n詳しくは会員プランのページをご確認ください。",
        ],
        [
            'question' => 'ビジターとして通うことはできますか。',
            'answer' => "はい、可能です。\n1日¥4,000からビジター利用可能です。",
        ],
        [
            'question' => '入会に必要な手続きを教えてください。',
            'answer' => "ipadにてご自身の情報を登録していただき、毎月の自動引き落としのためのクレジット登録をお願いしております。",
        ],
        [
            'question' => '休会の制度はありますか。',
            'answer' => "休会制度はございます。\n休会する場合は、休会希望月の前月の10日までにお手続きをお願いいたします。\n（例：１月10日までにお手続を完了頂きました場合、2月1日から休会となります。）\n休会中は休会費2,200円（税込）をお支払いいただきます。",
        ],
        [
            'question' => '退会はどのような手続きが必要ですか。',
            'answer' => "退会手続きは、退会希望月の前月の10日までに三田道場にてお手続をお願いいたします。\n（例：１月10日までにお手続を完了頂きました場合、1月末退会となります。）",
        ],
        [
            'question' => 'コースを変更するにはどうしたらよいですか。',
            'answer' => "受付にて、変更出来ますのでスタッフまでお声がけください。",
        ],
        [
            'question' => '始めるためには何が必要ですか。',
            'answer' => "柔術着と帯、中に着るラッシュガード（ピタッとしているもの）が必要です。\n店舗にてご購入いただけます。\nCarpeDiem道着　15,000円（税込）\nCarpeDiem帯　3,000円（税込）",
        ],
        [
            'question' => '利用開始が月の途中になる場合の会費はどうなりますか。',
            'answer' => "1日から10日までにご入会頂いた場合、初月会費3/3となります。\n11日から20日までにご入会頂いた場合、初月会費2/3となります。\n21日から20日までにご入会頂いた場合、初月会費1/3となります。",
        ],
        [
            'question' => '月会費の支払い日はいつですか。',
            'answer' => "お客様が選択されているお支払い方法により、ご案内が異なります。\n受付もしくはスタッフまでお問い合わせください。",
        ],
        [
            'question' => '他の支部のクラスに参加したいのですが、どうしたらよいですか。',
            'answer' => "CarpeDiemの会員様の場合、他支部への出稽古は1日1,000円の出稽古料をお支払いください。\nコロナ感染予防のため、支部によりましては出稽古を制限している場合がございますので出稽古される際には各道場にお問い合わせください。",
        ],
        [
            'question' => 'クラスを見学したいのですが、いつでも行っていいですか。',
            'answer' => "はい。クラスがある時間にご見学いただけます。\nタイムスケジュールをご確認の上、お越しくださいませ。",
        ],
        [
            'question' => '入会手続きの時間はどれくらいかかりますか。',
            'answer' => "15分から20分ほどお時間をいただいております。\n※混雑状況により手続き開始までにお待ちいただく場合がございます。",
        ],
    ];
@endphp

{{-- よくある質問 --}}
<section class="faq-section">
    <div class="content-wrapper">

        <ul class="faq-list">
            @foreach ($faq_list as $faq)
                <li class="faq-item">
                    <button class="faq-q open" type="button" onclick="this.classList.toggle('open'); this.nextElementSibling.classList.toggle('open')">
                        <span class="faq-q-label">Q</span>
                        <span class="faq-q-text">{{ $faq['question'] }}</span>
                        <span class="faq-toggle" aria-hidden="true"></span>
                    </button>
                    <div class="faq-a open">
                        <span class="faq-a-label">A</span>
                        <p class="faq-a-text">{{ $faq['answer'] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>


@endsection

@include('components.styles')
@include('components.scripts')
