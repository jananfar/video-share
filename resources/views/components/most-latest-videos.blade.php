<h1 class="new-video-title">
    <i class="fa fa-bolt"></i>
    @lang('videos.layout.latest-videos')
</h1>
<div class="row">
    @foreach ($mostLatestVideos as $video)
        <x-video-box :video="$video"></x-video-box>
    @endforeach
</div>
