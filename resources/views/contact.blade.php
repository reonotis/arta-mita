@extends('layouts.website')

@section('content')

{{-- 共通フォームスタイルを読み込み --}}
<link rel="stylesheet" href="{{ asset('css/form-styles.css') }}?time={{ time() }}">

{{-- モダンな体験申込フォーム --}}
<section class="contact-container">
    <div class="contact-form-wrapper">
        <div class="contact-title">
            <h1>お問い合わせ</h1>
        </div>

        <div id="success-message" class="success-message" style="display: none;">
            メッセージを送信しました！ありがとうございます。
        </div>

        <form action="" method="post" id="form">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="email">問い合わせ内容</label>
                <div class="radio-group">
                    @foreach(App\Models\Contact::CONTACT_TYPE_LIST as $contactTypeId => $contactTypeName)
                    <label class="radio-option">
                        <input type="radio" name="contact_type" value="{{ $contactTypeId }}" required>
                        <span class="radio-custom"></span>
                        <span class="radio-text">{{ $contactTypeName }}</span>
                    </label>
                    @endforeach
                </div>
            </div>

            <div class="form-group">
                <label for="message">メッセージ</label>
                <textarea name="message" id="message" placeholder="お気軽にお問い合わせください..." required></textarea>
            </div>

            <div class="flex-center-center">
                <button type="submit" class="submit-btn" id="submit-btn">
                    送信する
                </button>
            </div>
        </form>
    </div>
</section>

{{-- 共通フォームJavaScriptを読み込み --}}
<script src="{{ asset('js/form-handler.js') }}?time={{ time() }}"></script>

@endsection

@include('components.styles')
@include('components.scripts')
