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
            <h1 class="text-center mb-2">Profil Gama Wisata</h1>
        </div>        
      </section>
    <div class="container mt-4">
      <div class="row">
        <div class="col-6">
          <div class="profile-title">
            Tentang kami
          </div>
          <div class="tentang-kami-line"></div>
          <div class="profile-text-bg mt-3">
            <div class="profile-text">
              PT Gama Wisata adalah badan usaha berbadan hukum dengan bentuk perseroan terbatas yang berkedudukan di Yogyakarta yang bergerak di bidang biro perjalanan wisata. Lahir dan berkembang dilingkungan kampus UGM Yogyakarta, PT Gama Wisata adalah anak perusahaan PT Gama Multi Usaha Mandiri, sebuah holding Company yang merupakan entitas dari Universitas Gadjah Mada.
            </div>
          </div>
          <div class="profile-text-bg mt-3">
            <div class="visi-misi">Visi</div>
            <div class="profile-text">
              Menjadi penyedia pengalaman wisata edukasi yang terkemuka, khususnya untuk kalangan UGM dan stakeholdernya
            </div>
          </div>
          <div class="profile-text-bg mt-3">
            <div class="visi-misi">Misi</div>
            <div class="profile-text">
              Memberikan layanan pada pelanggan dengan berorientasi pada kualitas yang prima dan harga yang kompetitif
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="profile-text-bg">
            <img class="card-img-top mt-3" src="./assets/img/example.png" alt="Card image" style="width:100%">
          </div>
        </div> 
      </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <div class="profile-text-bg">
                    <img class="card-img-top mt-3" src="./assets/img/example.png" alt="Card image" style="width:100%">
                </div>
            </div>
            <div class="col-6">
                <div class="profile-title">
                    Akreditasi
                </div>
                <div class="akreditasi-line"></div>
                <div class="profile-text-bg mt-4">
                    <div class="profile-text">
                        1. Saat ini kami telah menjadi agent resmi IATA (International Air Transport Association) dengan
                        nomor akreditasi 150 8291 1 untuk penjualan pasasi domestik dan 153 1198 4 untuk sektor
                        international.</div>
                    <div class="profile-text">
                        2. Selain sebagai agen IATA, kami juga merupakan agent resmi dari maskapai-maskapai domestik
                        yang ada di indonesia.</div>
                    <div class="profile-text">
                        3. PT Gama Wisata juga telah menjadi anggota ASITA (Association of Indonesia Tour & Travel
                        Agencies) sejak tahun 2004 dengan nomor keanggotaan 0139/XI/2004.</div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.template.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>