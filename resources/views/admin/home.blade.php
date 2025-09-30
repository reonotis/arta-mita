@extends('layouts.admin.app')

@push('styles')
@endpush

@section('content')

<div class="content-wrapper" style="max-width: 1300px; margin: 2rem auto;">
    <div class="trial-list">
        <h2>体験予約</h2>
        <div class="flex-start-center" style="gap: 1rem;">
            <p style="padding-left: 1rem;">1週間以内の体験予約が {{ $trial_count }} 件あります。</p>
            <a href="{{ route('admin_trial') }}">体験予約一覧はこちら</a>
        </div>
    </div>
</div>


<div class="content-wrapper" style="max-width: 1300px; margin: 2rem auto;">
    <div class="trial-list">
        <h2>問い合わせ</h2>
        <div class="flex-start-center" style="gap: 1rem;">
            <p style="padding-left: 1rem;">1週間以内に {{ $contact_count }} 件の問い合わせがありました。</p>
            <a href="{{ route('admin_contact') }}">問い合わせ一覧はこちら</a>
        </div>
    </div>
</div>


@endsection
