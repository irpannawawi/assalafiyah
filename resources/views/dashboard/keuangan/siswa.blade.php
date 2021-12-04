@extends ('dashboard.layout')
@section('content')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">

            <div class="pcoded-content">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Data Keuangan Siswa</h5>
                                    <p class="m-b-0">Welcome to Material Able</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-group"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/keuangan">Keuangan</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/dataKeuanganSiswa">Data Keuangan Siswa</a>
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
                            <!-- Basic table card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Data Keuangan Siswa</h5>
                                    <span>Menampilkan list Siswa</span>
                                </div>
                                <div class="card-block table-border-style"  style="min-height: 740px">
                                    <div class="table-responsive">

                                        <table class="table table-bordered table-striped">
                                            <thead class="ark">
                                                <tr>
                                                    <th nowrap style="text-align: center;"><a href="#" style="border-radius: 30px;" class="mb-0">No</a ></th>
                                                    <th nowrap style="text-align: center;"><i class="fa fa-sort"></i> <a style="border-radius: 30px;" class="mb-0" href="/dataSiswa?order=nama">Nama</a></th>
                                                    <th nowrap style="text-align: center;"><i class="fa fa-sort"></i> <a style="border-radius: 30px;" class="mb-0" href="/dataSiswa?order=nip">No. Induk</a></th>
                                                    <th nowrap style="text-align: center;"><i class="fa fa-sort"></i> <a style="border-radius: 30px;" class="mb-0" href="/dataSiswa?order=email">Jenjang</a></th>
                                                    <th nowrap style="text-align: center;"><i class="fa fa-sort"></i><a style="border-radius: 30px;" class="mb-0 " href="/dataSiswa?order=mapel">Kelas</a></th>
                                                    <th nowrap style="text-align: center;"><i class="fa fa-sort"></i><a style="border-radius: 30px;" class="mb-0 " href="/dataSiswa?order=mapel">Ruang</a></th>
                                                    <th nowrap style="text-align: center;"><i class="fa fa-sort"></i><a style="border-radius: 30px;" class="mb-0 " href="/dataSiswa?order=mapel">Program</a></th>
                                                    <th nowrap style="text-align: center;"><i class="fa fa-sort"></i><a style="border-radius: 30px;" class="mb-0 " href="/dataSiswa?order=mapel">No. Hp</a></th>
                                                    <th >Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                        <th scope="row">1</th>
                                                        <td>Rudi</td>
                                                        <td>2158005512218</td>
                                                        <td>SMK</td>
                                                        <td>XI</td>
                                                        <td>A</td>
                                                        <td>Teknik Kekeliruan Jaringan</td>
                                                        <td>085221548354</td>
                                                        <td>
                                                           <button data-toggle="modal" data-target="#modal-view"
                                                           class="btn btn-sm btn-info" >Lihat</button> 
                                                        </td>
                                                    </tr>
                                           </tbody>
                                        </table>
                                        <!-- pagination -->
                                    </div>
                                </div>
                                        <div class="btn-group m-3">
                                            <a href="/dataSiswa?page=" class="btn btn-sm btn-info">&lt;&lt;</a>
                                            <a href="/dataSiswa?page=" class="btn btn-sm btn-disabled" disabled>1</a>
                                            <a href="/dataSiswa?page=" class="btn btn-sm btn-info">2</a>
                                            <a href="/dataSiswa?page=" class="btn btn-sm btn-info">3</a>
                                            <a href="/dataSiswa?page=" class="btn btn-sm btn-info">4</a>
                                            <a href="/dataSiswa?page=" class="btn btn-sm btn-info">&gt;&gt;</a>
                                        </div>
                            </div>
                            <!-- Basic table card end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- modal add data-->
    <div class="modal inmodal fade" id="modal-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Profil siswa</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-5">
                                <table class="table">
                                     <tr>
                                        <th>Nama</th>
                                        <td>Rudi</td>
                                    </tr>
                                    <tr>
                                        <th>No. Induk</th>
                                        <td>12564822168</td>
                                    </tr>
                                     <tr>
                                        <th>NISN</th>
                                        <td>2132138</td>
                                    </tr>
                                     
                                     <tr>
                                        <th>Jenjang</th>
                                        <td>SMK</td>
                                    </tr>
                                     <tr>
                                        <th>Kelas</th>
                                        <td>XI</td>
                                    </tr>
                                     <tr>
                                        <th>Ruang</th>
                                        <td>A</td>
                                    </tr>
                                     <tr>
                                        <th>Program</th>
                                        <td>Teknik</td>
                                    </tr>
                                     <tr>
                                        <th>No. Hp</th>
                                        <td>0285469684</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-7">
                                <img src="{{asset('images')}}/barcode-sample.png" alt="" class="img-fluid">
                                <p align="center">No. Kartu 21521565325213</p>
                                <table class="table table-bordered  table-striped">
                                    <tr class="bg-dark">
                                        <td style="color: white;">Saldo E-Saku</td>
                                    </tr>
                                    <tr>    
                                        <td>Rp. 600.000,-</td>
                                    </tr>
                                    <tr class="bg-dark">
                                        <td style="color: white;">Saldo Wali</td>
                                    </tr>
                                    <tr>    
                                        <td>Rp. 20.000.000,-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
        </div>
    </div>
@endsection
