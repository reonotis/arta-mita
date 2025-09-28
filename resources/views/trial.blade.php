@extends('layouts.website')

@section('content')

{{-- 共通フォームスタイルを読み込み --}}
<link rel="stylesheet" href="{{ asset('css/form-styles.css') }}?time={{ time() }} }}">

{{-- モダンなコンタクトフォーム --}}
<section class="">
    <div class="contact-container">
        <div class="contact-form-wrapper">
            <div class="contact-title">
                <h1>体験申込</h1>
            </div>

            <div id="success-message" class="success-message" style="display: none;">
                体験申込を送信しました！ありがとうございます。
            </div>

            <form action="/trial" method="post" id="form">
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
                    <label>ご希望のコース</label>
                    <div class="radio-group">
                        @foreach(\App\Consts\CommonConsts::TRIAL_COURSE_LIST as $courseId => $courseName)
                        <label class="radio-option">
                            <input type="radio" name="course_id" value="{{ $courseId }}" required>
                            <span class="radio-custom"></span>
                            <span class="radio-text">{{ $courseName }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <label for="preferred_date">ご希望の日時</label>
                    <div class="flex-center-center" style="gap: 10px;">
                        <input type="date" name="preferred_date" id="preferred_date" required>
                        <select name="preferred_time" id="preferred_time" required>
                            <option value="">時間を選択</option>
                            <option value="06:00">06:00</option>
                            <option value="06:15">06:15</option>
                            <option value="06:30">06:30</option>
                            <option value="06:45">06:45</option>
                            <option value="07:00">07:00</option>
                            <option value="07:15">07:15</option>
                            <option value="07:30">07:30</option>
                            <option value="07:45">07:45</option>
                            <option value="08:00">08:00</option>
                            <option value="08:15">08:15</option>
                            <option value="08:30">08:30</option>
                            <option value="08:45">08:45</option>
                            <option value="09:00">09:00</option>
                            <option value="09:15">09:15</option>
                            <option value="09:30">09:30</option>
                            <option value="09:45">09:45</option>
                            <option value="10:00">10:00</option>
                            <option value="10:15">10:15</option>
                            <option value="10:30">10:30</option>
                            <option value="10:45">10:45</option>
                            <option value="11:00">11:00</option>
                            <option value="11:15">11:15</option>
                            <option value="11:30">11:30</option>
                            <option value="11:45">11:45</option>
                            <option value="12:00">12:00</option>
                            <option value="12:15">12:15</option>
                            <option value="12:30">12:30</option>
                            <option value="12:45">12:45</option>
                            <option value="13:00">13:00</option>
                            <option value="13:15">13:15</option>
                            <option value="13:30">13:30</option>
                            <option value="13:45">13:45</option>
                            <option value="14:00">14:00</option>
                            <option value="14:15">14:15</option>
                            <option value="14:30">14:30</option>
                            <option value="14:45">14:45</option>
                            <option value="15:00">15:00</option>
                            <option value="15:15">15:15</option>
                            <option value="15:30">15:30</option>
                            <option value="15:45">15:45</option>
                            <option value="16:00">16:00</option>
                            <option value="16:15">16:15</option>
                            <option value="16:30">16:30</option>
                            <option value="16:45">16:45</option>
                            <option value="17:00">17:00</option>
                            <option value="17:15">17:15</option>
                            <option value="17:30">17:30</option>
                            <option value="17:45">17:45</option>
                            <option value="18:00">18:00</option>
                            <option value="18:15">18:15</option>
                            <option value="18:30">18:30</option>
                            <option value="18:45">18:45</option>
                            <option value="19:00">19:00</option>
                            <option value="19:15">19:15</option>
                            <option value="19:30">19:30</option>
                            <option value="19:45">19:45</option>
                            <option value="20:00">20:00</option>
                            <option value="20:15">20:15</option>
                            <option value="20:30">20:30</option>
                            <option value="20:45">20:45</option>
                            <option value="21:00">21:00</option>
                        </select>
                    </div>
                    <p class="radio-note" style="color: #666; font-size: 14px; margin-top: 4px;">※コースの時間帯は画面下部のカレンダーからご確認下さい。</p>
                </div>

                <div class="flex-center-center">
                    <button type="submit" class="submit-btn" id="submit-btn">
                        送信する
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="trial-calendar-image">
        <img src="{{ asset('images/trial-calendar.png') }}" alt="basic-calendar" class="">
    </div>
</section>


{{-- 共通フォームJavaScriptを読み込み --}}
<script src="{{ asset('js/form-handler.js') }}?time={{ time() }} }}"></script>

@endsection

@include('components.styles')
@include('components.scripts')

<style>
    .trial-calendar-image {
        height: auto;
        width: 100%;
        max-width: 1000px;
        margin: 5rem auto 0;

        & > img {
            width: 100%;
            height: auto;
        }
    }
</style>
