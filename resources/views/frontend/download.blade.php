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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>