@extends ('dashboard.layout')
@section ('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <div class="pcoded-content">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="page-header-title">
                                <h5 class="m-b-10"><i class="fa fa-folder"></i> Management</h5>
                                <p class="m-b-0">SMK Assalafiyah Sleman</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/">Management</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row col-8" style="margin: 0px auto;">
                                <div class="col-md-5 card m-1" style="border: 1px solid #05d85c; ">
                                    <a href="#">
                                        <div class="card-header">
                                            <h5>Mata Pelajaran</h5>
                                        </div>
                                        <div class="card-block">
                                            <p align="center" style="font-size: 60px;">
                                                <i class="fa fa-book"></i>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5 card m-1" style="border: 1px solid #05d85c;">
                                    <a href="dataKelas">
                                        <div class="card-header">
                                            <h5>Data Kelas</h5>
                                        </div>
                                        <div class="card-block">
                                            <p align="center" style="font-size: 60px;">
                                                <i class="fa fa-institution"></i>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5 card m-1" style="border: 1px solid #05d85c;">
                                    <a href="#">
                                        <div class="card-header">
                                            <h5>Jadwal Pelajaran</h5>
                                        </div>
                                        <div class="card-block">
                                            <p align="center" style="font-size: 60px;">
                                                <i class="fa fa-calendar"></i>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-5 card m-1" style="border: 1px solid #05d85c;">
                                    <a href="#">
                                        <div class="card-header">
                                            <h5>Jurnal Kelas</h5>
                                        </div>
                                        <div class="card-block">
                                            <p align="center" style="font-size: 60px;">
                                                <i class="fa fa-pencil-square"></i>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Page-body end -->
                    </div>
                    <div id="styleSelector"> </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection