<!DOCTYPE html>
<html lang="en">

@include('frontend.template.head')

<body>
    {{-- navbar --}}
    @include('frontend.template.navbar')
    {{-- ------ --}}
    <div class="container padd100" id="artikel">
        <div class="artikel-title mb-1">
            {{$artikel->judul_news}}
        </div>
        <div class="artikel-date mb-4">
            {{$artikel->created_at}}
        </div>
        <div class="artikel-top-img mb-3">
            <img src="{{asset('gambar_news/'.$artikel->gambar_news)}}" alt="Logo" style="width: 600px">
        </div>
        <div class="artikel-text mt-3">
            {!!$artikel->keterangan_news!!}
        </div>
    </div>
    @include('frontend.template.footer')
    @include('frontend.template.script')
</body>

</html>