<x-layout>
    <x-slot name="content">
        <div class="row">
            <div class="col-md-8">
                <div id="watch">
                    <h1 class="video-title">{{ $video->title }}</h1>
                    <div class="video-code">
                        <video style="height: 100%; width: 100%;" controls>
                            <source src="{{ $video->url }}" type="video/mp4">
                        </video>
                    </div>
                    <div style="margin: 10px 0px">
                        <p style="text-align: justify">
                            {{ $video->description }}
                        </p>
                    </div>
                    <div class="video-share">
                        <ul class="like">
                            <li>
                                <a class="deslike" href="#">1250
                                    <i class="fa fa-thumbs-down"></i>
                                </a>
                            </li>
                            <li>
                                <a class="like" href="#">1250
                                    <i class="fa fa-thumbs-up"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="social_link">
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="youtube" href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="linkedin" href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="google" href="#">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a class="rss" href="#">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="chanel-item">
                        <div class="chanel-thumb">
                            <a href="#">
                                <img src="{{ Vite::asset('resources/img/ch-1.jpg') }}">
                            </a>
                        </div>
                        <div class="chanel-info">
                            <a class="title" href="#">امیررضا جانانفر</a>
                            <span class="subscribers">436,414 اشتراک</span>
                        </div>
                        <a href="#" class="subscribe">اشتراک</a>
                    </div>
                    <div id="comments" class="post-comments">
                        <h3 class="post-box-title">
                            <span>19</span>
                            نظرات
                        </h3>
                        <ul class="comments-list">
                            <li>
                                <div class="post_author">
                                    <div class="img_in">
                                        <a href="#">
                                            <img src="{{ Vite::asset('resources/img/c1.jpg') }}">
                                        </a>
                                    </div>
                                    <a href="#" class="author-name">امیررضا جانانفر</a>
                                    <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </p>
                                <a href="#" class="reply">پاسخ</a>
                                <ul class="children">
                                    <li>
                                        <div class="post_author">
                                            <div class="img_in">
                                                <a href="#">
                                                    <img src="{{ Vite::asset('resources/img/c2.jpg') }}">
                                                </a>
                                            </div>
                                            <a href="#" class="author-name">بهمن نجاتی</a>
                                            <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                                        </div>
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است</p>
                                        <a href="#" class="reply">پاسخ</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="post_author">
                                    <div class="img_in">
                                        <a href="#">
                                            <img src="{{ Vite::asset('resources/img/c2.jpg') }}">
                                        </a>
                                    </div>
                                    <a href="#" class="author-name">بهمن نجاتی</a>
                                    <time datetime="2017-03-24T18:18">مرداد 27, 1397 - 11:00</time>
                                </div>
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </p>
                                <a href="#" class="reply">پاسخ</a>
                            </li>
                        </ul>
                        <h3 class="post-box-title">ارسال نظرات</h3>
                        <form>
                            <input type="text" class="form-control" name="name" placeholder="نام">
                            <input type="email" class="form-control" name="email" placeholder="ایمیل">
                            <input type="text" class="form-control" name="site" placeholder="سایت">
                            <textarea class="form-control" rows="8" name="message" placeholder="پیام"></textarea>
                            <button type="button" id="contact_submit" class="btn btn-dm">ارسال پیام</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <x-related-videos :video="$video" />
            </div>
        </div>
    </x-slot>
</x-layout>
