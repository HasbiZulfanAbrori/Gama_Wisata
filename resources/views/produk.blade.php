<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gama Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
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
    <section id="text-header">
      <div class="container">
          <h1 class="text-center mb-2">Produk Kami</h1>
      </div>        
    </section>
    <div class="container mt-3" id="Produk">
        <div class="produk mb-3">
            <img src="./assets/img/airplane.svg" alt="Tiket Pesawat">
            <div class="produk-title mb-2" >
              Tiket Pesawat
            </div>
            <div class="produk-text">Gama Wisata menyediakan layanan untuk pembelian tiket pesawat baik untuk tujuan domestik maupun internasional. Saat ini Gama Wisata telah menjadi agent resmi IATA (International Air Transport Association) yang merupakan organisasi perdagangan internasional yang terdiri dari maskapai-maskapai penerbangan.
                Pelayanan tiket pesawat kami lakukan dari hari Senin sampai dengan hari Minggu jam 08.00 - 21.00 WIB, Selain Tiket Pesawat Gama Wisata juga menyediakan tiket kereta untuk tujuan di seluruh Indonesia.</div>
        </div>
        <div class="produk  mb-3">
            <img src="./assets/img/train-front.svg" alt="Tiket Kereta Api">
            <div class="produk-title mb-2" >
                Tiket Kereta Api
            </div>
            <div class="produk-text">Kebutuhan transportasi darat khusunya kereta api juga memberikan peluang yang besar kepada para penumpang, Gama Wisata, selain menyediakan tiket pesawat juga melayani penjualan tiket kereta api, kami membuka layanan tiket kereta api setiap hari Senin sampai dengan Minggu pukul 08.00 - 21.00</div>
        </div>
        <div class="produk  mb-3">
            <img src="./assets/img/building.svg" alt="Voucher Hotel">
            <div class="produk-title mb-2" >
                Voucher Hotel
            </div>
            <div class="produk-text">Gama Wisata kini menyediakan fasilitas agar para pelanggan dapat melakukan pemeanan kamar di 250.000 hotel yang tersebar di seluruh penjuru dunia dengan lebih cepat, lebih mudah, lebih murah.
                Dengan jaringan global dan koneksi yang kuat di Singapura, Kuala Lumpur, Beijing, Hongkong, Dubai, Bangkok, Osaka, Sydney, Melbourne, Paris, London, Roma serta ratusan kota-kota besar di seluruh dunia, pemesanan hotel melalui Gama Wisata adalah pilihan yang bijak dan tepat.
                Sebagai biro perjalanan wisata yang berpengalaman dan berdiri sejak tahun 2002,  kami siap memberikan pelayanan penuh kepada pelanggan yang mengalami kendala dan permasalahan dangan reservasi hotel</div>
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
