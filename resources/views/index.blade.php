<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gama Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat" />
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="resources/js/script.js"></script>
  </head>
  <body>
    <video autoplay muted loop id="myVideo">
        <source src="./assets/img/HYMNE AIRLANGGA   -   2022.mp4" type="video/mp4">
    </video>
    <nav class="navbar navbar-expand-sm fixed-top">
      <div class="container" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="./assets/img/logo gama wisata.png" alt="Logo" style="width: 250px" class="rounded-pill" />
          </a>
        </div>
        <div class="collapse navbar-collapse" id="nav-col">
          <ul class="navbar-nav navbar-right">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news">News</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" style="padding-top: 70px" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/img/gama_wisata.png" alt="Logo Gama Wisata" class="d-block a" />
        </div>
        <div class="carousel-item">
          <img src="./assets/img/gama_wisata2.png" alt="Logo Wonderfull Indonesia" class="d-block" />
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <div class="container" id="">
        <div class="jumbotron padd100" id="Produk">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top mt-3" src="./assets/img/box-seam.svg" alt="Card image" style="width:20%">
                        </div>
                        <div class="card-body">
                            <div class="judul-card" >
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
                            <img class="card-img-top mt-3" src="./assets/img/tag.svg" alt="Card image" style="width:20%">
                        </div>
                        <div class="card-body">
                          <div class="judul-card" >
                            Promo Gamawisata
                          </div>
                          <div class="isi-card">
                              <p>Promo Gamawisata dengan mengklik dibawah ini.</p>
                              <a class="btn btn-primary" href="https://promo.gamawisata.com/" role="button">Read More</a>
                          </div>  
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="text-center">
                            <img class="card-img-top mt-3" src="./assets/img/whatsapp.svg" alt="Card image" style="width:20%">
                        </div>
                        <div class="card-body">
                          <div class="judul-card" >
                            Customer Service
                          </div>
                          <div class="isi-card">
                              <p>Pertanyaan beserta Order bisa melalui CS Solusi wisata dan perjalanan anda</p>
                              <a class="btn btn-primary" href="https://api.whatsapp.com/send?phone=6287845664888" role="button">Whatsapp</a>
                          </div>  
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="container padd100" id="News">
            <div class="header-news mb-3">News</div>
            <div class="news-line mb-3"></div>
            <div class="news">
                <img src="./assets/img/news.png" alt="News">
                <div class="news-title" mt-3>
                  News Title
                </div>
                <div class="news-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit iste aliquam adipisci ullam, quaerat odit iusto ad quam nulla non excepturi ipsam cum molestias ex eligendi omnis, ut suscipit fuga. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla veritatis quaerat qui molestias porro sunt ex reprehenderit perferendis quos cum, ea quod dolorum molestiae labore! Quisquam commodi modi ratione nulla! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio possimus odio dolores labore, perferendis porro id, delectus aperiam, maxime illum at quo culpa temporibus quas! Eligendi obcaecati dolorem corrupti velit.</div>
                <div class="btn-position">
                  <div class="btn-news" href="#" role="button">Read More</div>
                </div>
            </div>
          </div>
            <div class="jumbotron padd100" id="Sosmed">
              <div class="header-sosmed">Sosial Media</div>
              <div class="sosmed-line mb-3"></div>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="text-center">
                                <img class="card-img-top mt-3" src="./assets/img/Sosmed.png" alt="Card image" style="width:70%">
                            </div>
                            <div class="card-body">
                            <h4 class="card-title">Instagram</h4>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, sed!</p>
                            <button type="button" class="btn btn-primary">Read More...</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="text-center">
                                <img class="card-img-top mt-3" src="./assets/img/Sosmed.png" alt="Card image" style="width:70%">
                            </div>
                            <div class="card-body">
                            <h4 class="card-title">Facebook</h4>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, sed!</p>
                            <button type="button" class="btn btn-primary">Read More...</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="text-center">
                                <img class="card-img-top mt-3" src="./assets/img/Sosmed.png" alt="Card image" style="width:70%">
                            </div>
                            <div class="card-body">
                            <h4 class="card-title">Tiktok</h4>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, sed!</p>
                            <button type="button" class="btn btn-primary">Read More...</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
    </div>
    <footer class="text-center text-white mt-4" id="CostomerService" style="background-color: #e1e1e1;">
        <div class="container pt-4">
          <section class="mb-4">
            <a class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.facebook.com/PT.Gama.Wisata"
              role="button"
              data-mdb-ripple-color="dark">
              <img src="./assets/img/facebook.svg" style="height: 35px;">
            </a>
            <a class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.instagram.com/gama_wisata/?hl=id"
              role="button"
              data-mdb-ripple-color="dark">
              <img src="./assets/img/instagram.svg" style="height: 35px;">
            </a>
            <a class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://api.whatsapp.com/send?phone=6287845664888"
              role="button"
              data-mdb-ripple-color="dark">
              <img src="./assets/img/whatsapp.svg" style="height: 35px;">
            </a>
            <a class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="https://www.tiktok.com/@gama_wisata"
              role="button"
              data-mdb-ripple-color="dark">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
