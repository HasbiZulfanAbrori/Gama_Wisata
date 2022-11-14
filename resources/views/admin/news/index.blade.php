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
    @include('admin.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.sidebar')

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
                                <li class="breadcrumb-item active">DATA NEWS</li>
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
                            <a href="{{route('news.create')}}" class="btn btn-succes">Tambah Data <i
                                    class="fas fa-plus-square"></i> </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                {{-- <th>No</th> --}}
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($news as $n)
                            <tr>
                                {{-- <td>{{$n->id}}.</td> --}}
                                <td>{{$n->judul_news}}</td>
                                <td><img class="img-fluid" src="{{asset('gambar_news/'.$n->gambar_news)}}"
                                        style="width : 70%" alt="gambar"></td>
                                <td>{{$n->keterangan_news}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/news/{{$n->id}}/edit">Edit</a>
                                    <a class="btn btn-danger" href="/news/{{$n->id}}/destroy">Destroy</a>
                                </td>
                            </tr>
                            @endforeach
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
            @include('admin.footer')
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('admin.script')

</body>

</html>