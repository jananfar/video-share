<h1 class="new-video-title">
    <i class="fa fa-bolt"></i>
    @lang('videos.layout.most-viewed-videos')
</h1>
<div class="row">
    @foreach ($mostViewedVideos as $video)
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
