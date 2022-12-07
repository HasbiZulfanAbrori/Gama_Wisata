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
                                <li class="breadcrumb-item active">DATA CONTACT</li>
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
                            <a href="{{route('contact.create')}}" class="btn btn-succes">Tambah Data <i
                                    class="fas fa-plus-square"></i> </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="Table">
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>No Telepon</th>
                                    <th>Alamat</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contact_us as $n)
                                <tr>
                                    {{-- <td>{{$n->id}}.</td> --}}
                                    <td>{{$n->no_telp}}</td>
                                    <td>{{$n->alamat}}</td>
                                    <td>{{$n->created_at}}</td>
                                    <td>{{$n->updated_at}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/contact/{{$n->id}}/edit">Edit</a>
                                        <a class="btn btn-danger delete mt-1" href="#">Destroy</a>
                                        <div>
                                            @if($n->is_active == 1)
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
    <script>
        $('.delete').click(function(){
            var id = $(this).attr('data-id');
            swal({
                title: "Apakah Anda Yakin?",
                text: "Apakah Anda Yakin akan Menghapus Data?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/contact/"+id+"/destroy"
                    swal("Data Berhasil Dihapus", {
                    icon: "success",
                    });
                } else {
                    swal("Data Gagal Dihapus");
                }
            });
        })
    </script>
    @include('sweetalert::alert')

</body>

</html>