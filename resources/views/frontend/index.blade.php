<!DOCTYPE html>
<html lang="en">

    @include('frontend.template.head')

<body>
    @foreach($index as $index)
    <div>
        <section id="video">
            <div class="overlay"></div>
            <!-- Ubah link dalam "src" sesuai video yang diinginkan -->
            <video src="{{asset('video/'.$index->video)}}" loop muted autoplay></video>
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
        <div class="jumbotron padd100" id="Produk">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top mt-3" src="./assets/img/box-seam.svg" alt="Card image"
                                style="width:20%">
                        </div>
                        <div class="card-body">
                            <div class="judul-card">
                                Produk Kami
                            </div>
                            <div class="isi-card">
                                <p>Produk Kami biro ticketing , perjalanan wisata dan Sewa Internet Java Mivi.</p>
                                <a class="btn btn-primary" href="/produk" role="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top mt-3" src="./assets/img/tag.svg" alt="Card image"
                                style="width:20%">
                        </div>
                        <div class="card-body">
                            <div class="judul-card">
                                Promo Gamawisata
                            </div>
                            <div class="isi-card">
                                <p>Promo Gamawisata dengan mengklik dibawah ini.</p>
                                <a class="btn btn-primary" href="https://promo.gamawisata.com/produk/"
                                    role="button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top mt-3" src="./assets/img/whatsapp.svg" alt="Card image"
                                style="width:20%">
                        </div>
                        <div class="card-body">
                            <div class="judul-card">
                                Customer Service
                            </div>
                            <div class="isi-card">
                                <p>Pertanyaan beserta Order bisa melalui CS Solusi wisata dan perjalanan anda</p>
                                <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=6287845664888"
                                    role="button">Whatsapp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container padd100" id="News">
            <div class="header-news mb-3">News</div>
            <div class="news-line mb-3"></div>
            @foreach($news as $b)
            <div class="news mt-3">
                <img src="{{asset('gambar_news/'.$b->gambar_news)}}" alt="News">
                <div class="news-title" mt-3>
                    {{$b->judul_news}}
                </div>
                <div class="news-text">{!!Illuminate\Support\Str::of($b->keterangan_news)->words(25)!!}</div>
                <div class="btn-position">
                    <a href="/artikel" class="btn-news">Read More</a>
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