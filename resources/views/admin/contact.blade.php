@extends('layouts.admin.app')

@push('styles')
@endpush

@section('content')

<div class="content-wrapper" style="max-width: 1300px; margin: 2rem auto;">
    <div class="trial-list">
        <h2>体験予約一覧</h2>
        <table class="list-table">
            <thead>
                <tr>
                    <th>日時</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>問い合わせ内容</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->created_at->format('Y/m/d H:i') }}</td>
                        <td>{{ $contact->name }}&nbsp;様</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ App\Models\Contact::CONTACT_TYPE_LIST[$contact->contact_type] }}</td>
                        <td>{{ $contact->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
