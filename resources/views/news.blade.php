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
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container" id="navbar">
            <a class="navbar-brand" href="/">
                <img src="./assets/img/logo gama wisata.png" alt="Logo" style="width: 250px" />
            </a>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/news">News</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="padd100"></div>
    <div class="container">
        <div class="header-news mb-3">News</div>
        @foreach($berita as $b)
        <div class="news mt-3">
            <img src="{{asset('gambar/'.$b->gambar)}}" alt="News">
            <div class="news-title" mt-3>
                {{$b->nama}}
            </div>
            <div class="news-text">{{$b->keterangan}}</div>
            <div class="btn-position">
                <a href="/artikel" class="btn-news">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    <footer class="text-center text-white mt-4" id="CostomerService" style="background-color: #e1e1e1;">
        <div class="container pt-4">
            <section class="mb-4">
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.facebook.com/PT.Gama.Wisata"
                    role="button" data-mdb-ripple-color="dark">
                    <img src="./assets/img/facebook.svg" style="height: 35px;">
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://www.instagram.com/gama_wisata/?hl=id" role="button" data-mdb-ripple-color="dark">
                    <img src="./assets/img/instagram.svg" style="height: 35px;">
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://api.whatsapp.com/send?phone=6287845664888" role="button" data-mdb-ripple-color="dark">
                    <img src="./assets/img/whatsapp.svg" style="height: 35px;">
                </a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.tiktok.com/@gama_wisata"
                    role="button" data-mdb-ripple-color="dark">
                    <img src="./assets/img/tiktok.svg" style="height: 35px;">
                </a>
            </section>
        </div>

        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="https://gamawisata.com/">gamawisata.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>