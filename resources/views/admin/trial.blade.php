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
                    <th>コース</th>
                    <th>ステータス</th>
                    <th>編集</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trial as $item)
                    <tr>
                        <td>{{ $item->date_time->format('Y/m/d H:i') }}</td>
                        <td>{{ $item->name }}&nbsp;様</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ App\Consts\CommonConsts::TRIAL_COURSE_LIST[$item->course_id] }}</td>
                        <td>{{ App\Models\Trial::STATUS_LIST[$item->status] }}</td>
                        <td><a href="">編集</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection
