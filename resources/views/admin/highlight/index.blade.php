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
                                <li class="breadcrumb-item active">DATA Highlight</li>
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
                            <a href="{{route('highlight.create')}}" class="btn btn-succes">Tambah Data<i
                                    class="fas fa-plus-square"></i> </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="Table">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Judul Highlight</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Deskripsi</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($highlight as $hl)
                                <tr>
                                    {{-- <td>{{$n->id}}.</td> --}}
                                    <td>{{$hl->judul_highlight}}</td>
                                    <td><img class="img-fluid" src="{{asset('gambar_highlight/'.$hl->gambar_highlight)}}"
                                            style="width : 70%" alt="gambar"></td>
                                    <td>{{$hl->deskripsi_highlight}}</td>
                                    <td>{{$hl->link}}</td>
                                    <td>{{$hl->created_at}}</td>
                                    <td>{{$hl->updated_at}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/highlight/{{$hl->id}}/edit">Edit</a>
                                        <a class="btn btn-danger mt-1" href="/highlight/{{$hl->id}}/destroy">Destroy</a>
                                        <div>
                                            @if($hl->is_active == 1)
                                            <span style="color:green">Publish</span>
                                            @else
                                            <span style="color:red">Unpublish</span>
                                            @endif
                                        </div>
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