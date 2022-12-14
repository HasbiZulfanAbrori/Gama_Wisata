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
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            {{-- Jumlah data --}}
            <div class="row" style="justify-content: center;margin: 5px">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 20px; font-weight:bold">Data News</h4>
                            <p class="card-text">Data...</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 20px; font-weight:bold">Data File Download</h4>
                            <p class="card-text">Data...</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 20px; font-weight:bold">Data Index</h4>
                            <p class="card-text">Data...</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 20px; font-weight:bold">Data Highlight</h4>
                            <p class="card-text">Data...</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="justify-content: center;margin: 5px">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 20px; font-weight:bold">Data Contact</h4>
                            <p class="card-text">Data...</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 20px; font-weight:bold">Data Produk</h4>
                            <p class="card-text">Data...</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 30px; font-weight:bold">John Doe</h4>
                            <p class="card-text">Data...</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Jumlah Data --}}

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