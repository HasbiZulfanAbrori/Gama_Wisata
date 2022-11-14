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
                                <li class="breadcrumb-item active">DATA INDEX</li>
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
                            <a href="{{route('index.create')}}" class="btn btn-succes">Tambah Data <i
                                    class="fas fa-plus-square"></i> </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Video</th>
                                <th>Judul</th>
                                <th>Branding</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($index as $i)
                            <tr>
                                <td><img class="img-fluid" src="{{asset('video/'.$i->video)}}" style="width : 70%"
                                        alt="video"></td>
                                <td>{{$i->judul}}</td>
                                <td>{{$i->branding}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/index/{{$i->id}}/edit">Edit</a>
                                    <a class="btn btn-danger" href="/index/{{$i->id}}/destroy">Destroy</a>
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