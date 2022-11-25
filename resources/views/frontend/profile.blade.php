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
            <h1 class="text-center mb-2">Profile Gama Wisata</h1>
        </div>
    </section>
    @foreach($profilefrontend as $pf)
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <div class="profile-title">
                    Tentang kami
                </div>
                <div class="tentang-kami-line"></div>
                <div class="profile-text-bg mt-3">
                    <div class="profile-text">
                        {{$pf->tentang_kami}}
                    </div>
                </div>
                <div class="profile-text-bg mt-3">
                    <div class="visi-misi">Visi</div>
                    <div class="profile-text">
                        {{$pf->visi}}
                    </div>
                </div>
                <div class="profile-text-bg mt-3">
                    <div class="visi-misi">Misi</div>
                    <div class="profile-text">
                        {{$pf->misi}}
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="profile-text-bg">
                    <img class="card-img-top mt-3" src="{{asset('gambar1/'.$pf->gambar1)}}" alt="Card image"
                        style="width:100%">
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <div class="profile-text-bg">
                    <img class="card-img-top mt-3" src="{{asset('gambar2/'.$pf->gambar2)}}" alt="Card image"
                        style="width:100%">
                </div>
            </div>
            <div class="col-6">
                <div class="profile-title">
                    Akreditasi
                </div>
                <div class="akreditasi-line mb-3"></div>
                <div class="profile-text-bg">
                    <div class="profile-text">
                        {!!$pf->akreditasi!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach @include('frontend.template.footer')
    @include('frontend.template.script')
</body>

</html>