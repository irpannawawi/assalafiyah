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
                                <h5 class="m-b-10"><i class="fa fa-group"></i> Keuangan</h5>
                                <p class="m-b-0">SMK Assalafiyah Sleman</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/">Keuangan</a>
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
                            <div class="row">
                                <div class="col-md-3 card m-3" style="border: 1px solid #05d85c;">
                                    <a href="dataKeuanganSiswa">
                                        <div class="card-header">
                                            <h5>Data Keuangan Siswa</h5>
                                        </div>
                                        <div class="card-block">
                                            <img style="height: 300px" src="{{asset('images')}}/ilustrasi-siswa.png" class="img-fluid">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 card m-3" style="border: 1px solid #05d85c;">
                                    <a href="#">
                                        <div class="card-header">
                                            <h5>Data Keuangan Pegawai</h5>
                                        </div>
                                        <div class="card-block">
                                            <img style="height: 300px" src="{{asset('images')}}/ilustrasi-pegawai.png" class="img-fluid">
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