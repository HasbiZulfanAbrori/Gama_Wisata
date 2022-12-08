<!DOCTYPE html>
<html lang="en">

@include('frontend.template.head')

<body>
    <section id="bg-header">
        <div class="overlay"></div>
        <!-- Ubah link dalam "src" sesuai video yang diinginkan -->
        <img src="./assets/img/background.jpeg" alt="Background">
    </section>
    {{-- navbar --}}
    @include('frontend.template.navbar')
    {{-- ------ --}}
    <section id="text-header">
        <div class="container">
            <h1 class="text-center mb-2">News</h1>
        </div>
    </section>
    <div class="container">
        @foreach($news as $nw)
        <div class="news mt-3">
            <img src="{{asset('gambar_news/'.$nw->gambar_news)}}" alt="News">
            <div class="news-title m-2">
                {{$nw->judul_news}}
            </div>
            <div class="news-date mb-2 m-2">
                {{$nw->created_at}}
            </div>
            <div class="news-text m-2">{!! Str::words($nw->keterangan_news, 25)!!}</div>
            <div class="btn">
                <a href="{{ route('artikel', $nw->id) }}" class="btn-news">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    @include('frontend.template.footer')
    @include('frontend.template.script')
</body>

</html>