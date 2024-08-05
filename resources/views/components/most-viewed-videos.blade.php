<h1 class="new-video-title">
    <i class="fa fa-bolt"></i>
    پربازدیدترین ویدیوها
</h1>
<div class="row">
    @foreach ($mostViewedVideos as $video)
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
