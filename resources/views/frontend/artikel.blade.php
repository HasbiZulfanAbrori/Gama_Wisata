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
            {{$artikel->keterangan_news}}
        </div>
    </div>
    @include('frontend.template.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>