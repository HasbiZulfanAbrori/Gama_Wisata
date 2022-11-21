<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gama Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="resources/js/script.js"></script>
</head>

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
                        {{$pf->akreditasi}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach @include('frontend.template.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>