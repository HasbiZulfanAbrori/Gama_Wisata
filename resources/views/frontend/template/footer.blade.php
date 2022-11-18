<footer id="CostomerService" class="mt-5">
    <div class="container pt-4">
        <h3 style="text-align: center">Contact Us</h3>
        @foreach($contact_us as $contact)
        <div class="row row-top">
            <div class="col-6">
                <div style="text-align: center">
                    <img src="./assets/img/whatsapp.svg">
                    <p class="mt-3">{{$contact->no_telp}}</p>
                </div>
            </div>
            <div class="col-6">
                <div style="text-align: center">
                    <img src="./assets/img/geo-alt.svg">
                    <p class="mt-3">{{$contact->alamat}}</p>
                </div>
            </div>
        </div>
        @endforeach
        <div class="footer-line"></div>
        <div class="row d-flex justify-content-center mt-4 mb-4">
            <div class="col-4 text-align: center" style="width: 80px">
                <a href="https://www.facebook.com/PT.Gama.Wisata" role="button">
                    <img src="./assets/img/facebook.svg" style="width: 30px">
                </a>
            </div>
            <div class="col-4 text-align: center" style="width: 80px">
                <a href="https://www.instagram.com/gama_wisata/?hl=id" role="button">
                    <img src="./assets/img/instagram.svg" style="width: 30px">
                </a>
            </div>
            <div class="col-4 text-align: center" style="width: 80px">
                <a href="https://www.tiktok.com/@gama_wisata" role="button">
                    <img src="./assets/img/tiktok.svg" style="width: 30px">
                </a>
            </div>
        </div>
    </div>
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright:
        <a class="text-dark" href="https://gamawisata.com/">gamawisata.com</a>
    </div>
    <!-- Copyright -->
</footer>