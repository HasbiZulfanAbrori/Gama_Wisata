<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    @include('admin.template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Edit Data Produk</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-out-line">
                    <div class="card-header">
                        <h3>Edit Data Produk {{$editproduk->nama_produk}}</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('produk.update', $editproduk->id) }}"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" id="nama_produk" name="nama_produk" class="form-control" required
                                    value="{{$editproduk->nama_produk}}">
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label><br>
                                <img src="{{asset('gambar_produk/'.$editproduk->gambar_produk)}}" style="width: 70%"
                                    id="image" alt="">
                                <input type="file" name="gambar_produk" class="form-control mt-2"
                                    accept="gambar_produk/*"
                                    onchange="document.getElementById('gambar_produk').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea id="deskripsi_produk" name="deskripsi_produk" class="form-control" required
                                    value="{{$editproduk->deskripsi_produk}}">{{$editproduk->deskripsi_produk}}</textarea>
                            </div>
                            <div class="form-group">
                                <select class="form-select" name="is_active" id="is_active" required>
                                    <option disabled selected>--pilih status--</option>
                                    <option value="1" {{ $editproduk->is_active == '1' ? 'selected' : '' }}>Publish
                                    </option>
                                    <option value="0" {{ $editproduk->is_active == '0' ? 'selected' : '' }}>Unpublish
                                    </option>
                                </select>
                            </div>
                         <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            @include('admin.template.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('admin.template.script')

</body>

</html>