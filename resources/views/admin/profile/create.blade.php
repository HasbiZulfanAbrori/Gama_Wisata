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
                                <li class="breadcrumb-item active">Data Profile</li>
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
                        <h3>Masukkan Data Profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Tentang Kami</label>
                                <input type="text" id="tentang_kami" name="tentang_kami" class="form-control"
                                    placeholder="Tentang Kami" required autofocus value="{{ old('nama') }}">
                            </div>
                            <div class="form-group">
                                <label for="nama">Visi</label>
                                <input type="text" id="visi" name="visi" class="form-control" placeholder="Visi" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Misi</label>
                                <input type="text" id="misi" name="misi" class="form-control" placeholder="Misi" required>
                            </div>
                            <div class="form-group">
                                <label for="">Masukkan Gambar 1</label>
                                <input type="file" name="gambar1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="mt-2" for="">Akreditasi</label>
                                <input type="hidden" id="akreditasi" name="akreditasi" class="form-control" required>
                                <trix-editor input="akreditasi"></trix-editor>
                            </div>
                            <div class="form-group">
                                <label for="">Masukkan Gambar 2</label>
                                <input type="file" name="gambar2" class="form-control" required>
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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