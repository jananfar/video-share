<h1 class="new-video-title">
    <i class="fa fa-bolt"></i>
    محبوب‌ترین‌ها
</h1>
<div class="row">
    @foreach ($mostPopularVideos as $video)
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
