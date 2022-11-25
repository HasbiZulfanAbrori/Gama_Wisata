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
            <h1 class="text-center mb-2">Download File</h1>
        </div>
    </section>
    <div class="container mt-5">
          <div class="card-body">
            <table class="table table-bordered" id="Table">
                <thead>
                    <tr>
                        <th style="text-align : center">file</th>
                        <th style="text-align : center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($download as $n)
                    <tr>
                        <td><img class="img-fluid" src="./assets/img/file-pdf.svg" style="width : 10%">{{$n->nama_file}}</td>
                        <td style="text-align : center">
                            <a href="{{('file_download/'.$n->file_download)}}"><button class="btn btn-succes" type="button">Download</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
    </div>
    </div>
    @include('frontend.template.footer')
    @include('frontend.template.script')
</body>

</html>