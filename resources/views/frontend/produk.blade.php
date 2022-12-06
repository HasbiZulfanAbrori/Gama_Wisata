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
          <h1 class="text-center mb-2">Produk Kami</h1>
      </div>        
    </section>
    <div class="container mt-3" id="Produk">
        @foreach($produk as $p)
        <div class="produk mb-3">
            <img src="{{asset('gambar_produk/'.$p->gambar_produk)}}" alt="Tiket Pesawat">
            <div class="produk-title mb-2" >
              {{$p->nama_produk}}
            </div>
            <div class="produk-text">{!!$p->deskripsi_produk!!}</div>
        </div>
        @endforeach
    </div>
    @include('frontend.template.footer')
    @include('frontend.template.script')
  </body>
</html>
