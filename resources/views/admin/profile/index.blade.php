<?php
use Illuminate\Support\Str;
?>
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
                                <li class="breadcrumb-item active">DATA PROFILE</li>
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
                        <div class="card-tools">
                            <a href="{{route('profile.create')}}" class="btn btn-succes">Tambah Data <i
                                    class="fas fa-plus-square"></i> </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="Table">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Tentang Kami</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Gambar1</th>
                                    <th>Akreditasi</th>
                                    <th>Gambar2</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profile as $p)
                                <tr>
                                    {{-- <td>{{$p->id}}.</td> --}}
                                    <td>{{$p->tentang_kami}}</td>
                                    <td>{{$p->visi}}</td>
                                    <td>{{$p->misi}}</td>
                                    <td><img class="img-fluid" src="{{asset('gambar1/'.$p->gambar1)}}"
                                            style="width : 70%" alt="gambar1"></td>
                                    <td>{{$p->akreditasi}}</td>
                                    <td><img class="img-fluid" src="{{asset('gambar2/'.$p->gambar2)}}"
                                            style="width : 70%" alt="gambar2"></td>
                                    <td>
                                        <a class="btn btn-primary" href="/profile/{{$p->id}}/edit">Edit</a>
                                        <a class="btn btn-danger" href="/profile/{{$p->id}}/destroy">Destroy</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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