<div id="related-posts">
    @php($relatedVideos = $videos->reject(fn($video) => $video->slug == $videoSlug))

    @forelse ($relatedVideos as $video)
    <div class="related-video-item">
        <div class="thumb">
            <small class="time">{{ $video->getLengthInHumanAttribute($video->length) }}</small>
            <a href="{{ route('videos.show', $video->slug) }}">
                <img src="{{ $video->thumbnail }}">
            </a>
        </div>
        <a href="{{ route('videos.show', $video->slug) }}" class="title">
            {{ $video->title }}
        </a>
        <a class="channel-name" href="#">امیررضا جانانفر<span>
                <i class="fa fa-check-circle"></i>
            </span>
        </a>
    </div>
    @empty
    <div class="text-center">
        <span>@lang('videos.layout.related-videos-not-found')</span>
    </div>
    @endforelse
</div>