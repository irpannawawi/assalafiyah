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
                                <h5 class="m-b-10">Dashboard</h5>
                                <p class="m-b-0">Welcome to Sistem Informasi Sekolah SMK Assalafiyah Sleman</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/">Dashboard</a>
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
                                <!-- Material statustic card start -->
                                <!-- Card jumlah guru, siswa dan karyawan start -->
                                <div class="col-md-4">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block">
                                            <h6 class="m-b-0">Jumlah Guru</h6>
                                            <h4 class="m-t-15 m-b-15"><i class="fa fa-user m-r-15 "></i>7652</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block">
                                            <h6 class="m-b-0">Jumlah Siswa</h6>
                                            <h4 class="m-t-15 m-b-15"><i class="fa fa-user m-r-15 "></i>7652</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-center order-visitor-card">
                                        <div class="card-block">
                                            <h6 class="m-b-0">Jumlah Karyawan</h6>
                                            <h4 class="m-t-15 m-b-15"><i class="fa fa-user m-r-15 "></i>7652</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Material statustic card end -->
                                <!-- Card jumlah guru, siswa dan karyawan end -->
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- LINE CHART Guru dan Karyawan start --> 
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Data Presensi Guru dan Karyawan</h5>
                                        </div>
                                        <div class="card-body">
                                              <canvas id="presensiGuruKaryawan"></canvas>
                                        </div>
                                    </div>
                                    <!-- LINE CHART Guru dan Karyawan Ends -->
                                    <!-- LINE CHART Siswa start --> 
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Data Presensi Guru dan Karyawan</h5>
                                        </div>
                                        <div class="card-body">
                                              <canvas id="presensiSiswa"></canvas>
                                        </div>
                                    </div>
                                    <!-- LINE CHART Siswa Ends -->
                                </div>
                                <div class="col-md-2"> 
                                </div>
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
<script defer>
const ctx = document.getElementById('presensiGuruKaryawan').getContext('2d');
const labels = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
const data = {
  labels: labels,
  datasets: [{
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  },{
    label: 'My Second Dataset',
    data: [50, 41, 50, 42, 60, 75, 80],
    fill: false,
    borderColor: 'rgb(50, 50, 50)',
    tension: 0.1
  }]
};
const presensiGuruKaryawanChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    </script>

    <script defer>
const ctxSiswa = document.getElementById('presensiSiswa').getContext('2d');
const dataSiswa = {
  labels: labels,
  datasets: [{
    label: 'My First Dataset',
    data: [65, 59, 80, 81, 56, 55, 40],
    fill: false,
    borderColor: 'rgb(75, 192, 192)',
    tension: 0.1
  }]
};
const presensiSiswa = new Chart(ctxSiswa, {
    type: 'line',
    data: dataSiswa,
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
    </script>

@endsection