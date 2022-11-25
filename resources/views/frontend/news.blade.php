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
        @foreach($berita as $b)
        <div class="news mt-3">
            <img src="{{asset('gambar_news/'.$b->gambar_news)}}" alt="News">
            <div class="news-title" mt-3>
                {{$b->judul_news}}
            </div>
            <div class="artikel-date mb-4">
                {{$b->created_at}}
            </div>
            <div class="news-text">{!! Str::limit($b->keterangan_news, 200)!!}</div>
            <div class="btn-position">
                <a href="{{ route('artikel', $b->id) }}" class="btn-news">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    @include('frontend.template.footer')
    @include('frontend.template.script')
</body>

</html>