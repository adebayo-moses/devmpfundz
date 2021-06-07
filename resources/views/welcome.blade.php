@extends('layouts.app')

@section('title')
    <title>Home | MP Fundz </title>
@endsection

@section('main')

    @include('includes.side_menu')

    <section class="banner-section">
        <div class="container">
            <div class="banner-text">
                <h2>Watch, earn and upload unlimited content</h2>
                <a href="{{route('register')}}" title="">Create my account</a>
            </div><!--banner-text end-->
            <h3 class="headline">Video of the Day by <a href="#" title="">macromedia</a></h3>
        </div>
    </section><!--banner-section end-->

    <section class="services-sec">
        <div class="container">
            <div class="services-row">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-col">
                            <img src="{{asset('assets/images/sv1.png')}}" alt="">
                            <h3>Get paid watching videos</h3>
                            <p>Make money from the comfort of your home catching cruise with videos</p>
                        </div><!--service-col end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-col">
                            <img src="{{asset('assets/images/sv2.png')}}" alt="">
                            <h3>Grow your audience/business</h3>
                            <p>Upload your content and wait while our growing audience do the magic. </p>
                        </div><!--service-col end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="service-col">
                            <img src="{{asset('assets/images/sv3.png')}}" alt="">
                            <h3>Simple transfer from YouTube</h3>
                            <p>Upload your videos from YouTube with an easy link copy/paste.</p>
                        </div><!--service-col end-->
                    </div>
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="service-col">
                            <img src="{{asset('assets/images/sv4.png')}}" alt="">
                            <h3>Make money with Amazon </h3>
                            <p>Extra income through Amazon Affiliates on your channel.</p>
                        </div><!--service-col end-->
                    </div> --}}
                </div>
            </div><!--services-row end-->
        </div>
    </section><!--services-sec end-->

    <section class="vds-main">
        <div class="vidz-row">
            <div class="container">
                <div class="vidz_sec">
                    <h3>Featured Videos</h3>
                    <div class="vidz_list">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide1.png')}}" alt="">
                                            <span class="vid-time">10:21</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Kingdom Come: Deliverance Funny Moments and Fails</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">newfox media</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>686K views .<small class="posted_dt">1 week ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide2.png')}}" alt="">
                                            <span class="vid-time">13:49</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">DR DISRESPECT - Before They Were Famous - Twitch Streamer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Eros Now</a> </h4>
                                        <span>283K views .<small class="posted_dt">3 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide3.png')}}" alt="">
                                            <span class="vid-time">2:54</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Top Perectly Timed Twitch Moments 2017 #7</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Animal Planet</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>2.6M views .<small class="posted_dt">2 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide4.png')}}" alt="">
                                            <span class="vid-time">5:25</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Top 5 Amazing Bridge Block ever in PUBG</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Maketzi</a> </h4>
                                        <span>612K views .<small class="posted_dt">5 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide5.png')}}" alt="">
                                            <span class="vid-time">4:01</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Trailer Park Boys Season 12 - Official Trailer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">ScereBro</a> </h4>
                                        <span>45K views .<small class="posted_dt">3 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide6.png')}}" alt="">
                                            <span class="vid-time">6:20</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">A day in the life of a Google software engineer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">MathChief</a> </h4>
                                        <span>86K views .<small class="posted_dt">6 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide7.png')}}" alt="">
                                            <span class="vid-time">8:16</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Avengers: Infinity War - Gym Workout motivation 2019</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">RealLifeLore</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>144K views .<small class="posted_dt">6 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide8.png')}}" alt="">
                                            <span class="vid-time">29:32</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">How the Universe Works - The Milky Way Galaxy - Space</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Loskes</a></h4>
                                        <span>408K views .<small class="posted_dt">19 hours ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                        </div>
                    </div><!--vidz_list end-->
                </div><!--vidz_videos end-->
            </div>
        </div><!--vidz-row end-->
        <div class="vidz-row">
            <div class="container">
                <div class="vidz_sec">
                    <h3>New Videos</h3>
                    <div class="vidz_list">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide13.png')}}" alt="">
                                            <span class="vid-time">10:21</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Kingdom Come: Deliverance Funny Moments and Fails</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">newfox media</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>686K views .<small class="posted_dt">1 week ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide14.png')}}" alt="">
                                            <span class="vid-time">13:49</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">DR DISRESPECT - Before They Were Famous - Twitch Streamer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Eros Now</a> </h4>
                                        <span>283K views .<small class="posted_dt">3 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide15.png')}}" alt="">
                                            <span class="vid-time">2:54</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Top Perectly Timed Twitch Moments 2017 #7</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Animal Planet</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>2.6M views .<small class="posted_dt">2 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide16.png')}}" alt="">
                                            <span class="vid-time">5:25</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Top 5 Amazing Bridge Block ever in PUBG</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Maketzi</a> </h4>
                                        <span>612K views .<small class="posted_dt">5 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide17.png')}}" alt="">
                                            <span class="vid-time">4:01</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Trailer Park Boys Season 12 - Official Trailer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">ScereBro</a> </h4>
                                        <span>45K views .<small class="posted_dt">3 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide18.png')}}" alt="">
                                            <span class="vid-time">6:20</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">A day in the life of a Google software engineer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">MathChief</a> </h4>
                                        <span>86K views .<small class="posted_dt">6 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide19.png')}}" alt="">
                                            <span class="vid-time">8:16</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Avengers: Infinity War - Gym Workout motivation 2019</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">RealLifeLore</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>144K views .<small class="posted_dt">6 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide20.png')}}" alt="">
                                            <span class="vid-time">29:32</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">How the Universe Works - The Milky Way Galaxy - Space</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Loskes</a></h4>
                                        <span>408K views .<small class="posted_dt">19 hours ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                        </div>
                    </div><!--vidz_list end-->
                </div><!--vidz_videos end-->
            </div>
        </div><!--vidz-row end-->
        <div class="vidz-row">
            <div class="container">
                <div class="vidz_sec">
                    <h3>Popular Videos</h3>
                    <div class="vidz_list">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide1.png')}}" alt="">
                                            <span class="vid-time">10:21</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Kingdom Come: Deliverance Funny Moments and Fails</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">newfox media</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>686K views .<small class="posted_dt">1 week ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide2.png')}}" alt="">
                                            <span class="vid-time">13:49</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">DR DISRESPECT - Before They Were Famous - Twitch Streamer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Eros Now</a> </h4>
                                        <span>283K views .<small class="posted_dt">3 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide3.png')}}" alt="">
                                            <span class="vid-time">2:54</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Top Perectly Timed Twitch Moments 2017 #7</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Animal Planet</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>2.6M views .<small class="posted_dt">2 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide4.png')}}" alt="">
                                            <span class="vid-time">5:25</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Top 5 Amazing Bridge Block ever in PUBG</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Maketzi</a> </h4>
                                        <span>612K views .<small class="posted_dt">5 months ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide5.png')}}" alt="">
                                            <span class="vid-time">4:01</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Trailer Park Boys Season 12 - Official Trailer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">ScereBro</a> </h4>
                                        <span>45K views .<small class="posted_dt">3 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide6.png')}}" alt="">
                                            <span class="vid-time">6:20</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">A day in the life of a Google software engineer</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">MathChief</a> </h4>
                                        <span>86K views .<small class="posted_dt">6 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide7.png')}}" alt="">
                                            <span class="vid-time">8:16</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">Avengers: Infinity War - Gym Workout motivation 2019</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">RealLifeLore</a> <span class="verify_ic"><i class="icon-tick"></i></span></h4>
                                        <span>144K views .<small class="posted_dt">6 days ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 full_wdth">
                                <div class="videoo">
                                    <div class="vid_thumbainl">
                                        <a href="single_video_page.html" title="">
                                            <img src="{{asset('assets/images/resources/vide8.png')}}" alt="">
                                            <span class="vid-time">29:32</span>
                                            <span class="watch_later">
                                                <i class="icon-watch_later_fill"></i>
                                            </span>
                                        </a>
                                    </div><!--vid_thumbnail end-->
                                    <div class="video_info">
                                        <h3><a href="single_video_page.html" title="">How the Universe Works - The Milky Way Galaxy - Space</a></h3>
                                        <h4><a href="Single_Channel_Home.html" title="">Loskes</a></h4>
                                        <span>408K views .<small class="posted_dt">19 hours ago</small></span>
                                    </div>
                                </div><!--videoo end-->
                            </div>
                        </div>
                    </div><!--vidz_list end-->
                </div><!--vidz_videos end-->
            </div>
        </div><!--vidz-row end-->
    </section><!--vds-main end-->

    <section class="more_items_sec text-center">
        <div class="container">
            <a href="{{route('register')}}" title="" class="btn-default">Join Now</a>
        </div>
    </section><!--more_items_sec end-->


@endsection