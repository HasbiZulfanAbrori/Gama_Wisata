<!DOCTYPE html>
<html lang="en">

@include('frontend.template.head')

<body>
    @foreach($index as $index)
    <div>
        <section id="video">
            <div class="overlay"></div>
            <!-- Ubah link dalam "src" sesuai video yang diinginkan -->
            <video src="{{asset('video/'.$index->video)}}" class="img-fluid" loop muted autoplay></video>
        </section>
        <section id="header" class="my-4">
            <div class="container mx-auto">
                <h2 class="text-center mb-4">{{$index->judul}}</h2>
                <p class="text-center mb-4">{{$index->branding}}</p>
                <div class="mx-auto d-flex justify-content-center">
                    <a class="btn btn-primary" href="#Produk">Explore Now</a>
                </div>
            </div>
        </section>
    </div>
    @endforeach
    {{-- navbar --}}
    @include('frontend.template.navbar')
    {{-- ------ --}}
    <div class="container padd500" id="">
        <div class="jumbotron" id="Produk">
            <div class="row" style="justify-content: center">
                @foreach($highlight as $hl)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top mt-3" src="{{asset('gambar_highlight/'.$hl->gambar_highlight)}}"
                                alt="Card image" style="width:25%">
                        </div>
                        <div class="card-body">
                            <div class="judul-card">
                                {{$hl->judul_highlight}}
                            </div>
                            <div class="isi-card">
                                <p>{{$hl->deskripsi_highlight}}</p>
                                <a class="btn btn-primary" href="{{$hl->link}}" role="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container padd100" id="News">
            <div class="header-news mb-3">News</div>
            <div class="news-line mb-3"></div>
            @foreach($news->take(5) as $b)
            <div class="news mt-3">
                <img src="{{asset('gambar_news/'.$b->gambar_news)}}" alt="News">
                <div class="news-title" mt-3>
                    {{$b->judul_news}}
                </div>
                <div class="news-date mb-2">
                    {{$b->created_at}}
                </div>
                <div class="news-text">{!!Illuminate\Support\Str::of($b->keterangan_news)->words(25)!!}</div>
                <div class="btn">
                    <a href="{{ route('artikel', $b->id) }}" class="btn-news">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="jumbotron padd100" id="Sosmed">
            <div class="header-sosmed">Sosial Media</div>
            <div class="sosmed-line mb-3"></div>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="text-center">
                        </div>
                        <div class="card-body">
                            <h3 class="text-center mt-2">Instagram</h3>
                            <div class="embedsocial-hashtag" data-ref="1ab4dff5751ee7ee202f3630578c32b6837281fd"> <a
                                    class="feed-powered-by-es feed-powered-by-es-feed-new"
                                    href="https://embedsocial.com/social-media-aggregator/" target="_blank"
                                    title="Widget by EmbedSocial"> </a> </div>
                            <script>
                            (function(d, s, id) {
                                var js;
                                if (d.getElementById(id)) {
                                    return;
                                }
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://embedsocial.com/cdn/ht.js";
                                d.getElementsByTagName("head")[0].appendChild(js);
                            }(document, "script", "EmbedSocialHashtagScript"));
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="text-center">
                        </div>
                        <div class="card-body">
                            <h3 class="text-center mt-2">Facebook</h3>
                            <div class="embedsocial-hashtag" data-ref="1ab4dff5751ee7ee202f3630578c32b6837281fd"> <a
                                    class="feed-powered-by-es feed-powered-by-es-feed-new"
                                    href="https://embedsocial.com/social-media-aggregator/" target="_blank"
                                    title="Widget by EmbedSocial"><span>→</span> </a> </div>
                            <script>
                            (function(d, s, id) {
                                var js;
                                if (d.getElementById(id)) {
                                    return;
                                }
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://embedsocial.com/cdn/ht.js";
                                d.getElementsByTagName("head")[0].appendChild(js);
                            }(document, "script", "EmbedSocialHashtagScript"));
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="text-center">
                        </div>
                        <div class="card-body">
                            <h3 class="text-center mt-2">Instagram</h3>
                            <div class="embedsocial-hashtag" data-ref="1ab4dff5751ee7ee202f3630578c32b6837281fd"> <a
                                    class="feed-powered-by-es feed-powered-by-es-feed-new"
                                    href="https://embedsocial.com/social-media-aggregator/" target="_blank"
                                    title="Widget by EmbedSocial"><span>→</span> </a> </div>
                            <script>
                            (function(d, s, id) {
                                var js;
                                if (d.getElementById(id)) {
                                    return;
                                }
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://embedsocial.com/cdn/ht.js";
                                d.getElementsByTagName("head")[0].appendChild(js);
                            }(document, "script", "EmbedSocialHashtagScript"));
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.template.footer')
    @include('frontend.template.script')
</body>

</html>