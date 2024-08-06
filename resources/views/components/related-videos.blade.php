<div id="related-posts">
    @foreach ($videos as $video)
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
    @endforeach
</div>
