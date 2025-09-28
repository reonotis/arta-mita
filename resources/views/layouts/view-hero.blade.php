{{-- 画面名セクション --}}
@if(isset($screen_data))
<div class="screen-name-section" style="background-image: url('{{ $screen_data['background_image'] ?? '' }}');">
    <div class="screen-name-container">
        <h1 class="screen-title">{{ $screen_data['title'] }}</h1>
        <h2 class="screen-title-en">{{ $screen_data['title_en'] }}</h2>
    </div>
</div>
@endif