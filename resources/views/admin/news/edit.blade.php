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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Data News</li>
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
                        <h3>Edit Data News {{$editnews->nama}}</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('news.update', $editnews->id) }}"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Judul News</label>
                                <input type="text" id="judul_news" name="judul_news" class="form-control" placeholder="Judul News" required
                                    value="{{$editnews->judul_news}}">
                            </div>
                            <div class="form-group">
                                <label for="">Gambar</label><br>
                                <img src="{{asset('gambar_news/'.$editnews->gambar_news)}}" style="width: 70%"
                                    id="image" alt="">
                                <input type="file" name="gambar_news" class="form-control mt-2" accept="gambar_news/*"
                                    onchange="document.getElementById('gambar_news').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="hidden" id="keterangan_news" name="keterangan_news" class="form-control" required value="{{$editnews->keterangan_news}}">
                                <trix-editor input="keterangan_news">{!!$editnews->keterangan_news!!}</trix-editor>    
                            </div>
                            <div class="form-group">
                                <select class="form-select" name="is_active" id="is_active" required>
                                    <option disabled selected>--pilih status--</option>
                                    <option value="1" {{ $editnews->is_active == '1' ? 'selected' : '' }}>Publish
                                    </option>
                                    <option value="0" {{ $editnews->is_active == '0' ? 'selected' : '' }}>Unpublish
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