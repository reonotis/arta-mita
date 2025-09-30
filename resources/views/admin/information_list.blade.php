@extends('layouts.admin.app')

@push('styles')
@endpush

@section('content')

<div class="content-wrapper" style="max-width: 1300px; margin: 2rem auto;">
    <div class="trial-list">
        <h2>お知らせ一覧</h2>
        <table class="list-table">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>本文</th>
                    <th>ファイル</th>
                    <th>作成日時</th>
                    <th>状態</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($information_list as $information)
                    <tr>
                        <td>{{ $information->title }}</td>
                        <td>{{ $information->content }}</td>
                        <td>{{ $information->file_path }}</td>
                        <td>{{ $information->created_at->format('Y/m/d H:i') }}</td>
                        <td>{{ App\Models\Information::STATUS_LIST[$information->display_flg] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
