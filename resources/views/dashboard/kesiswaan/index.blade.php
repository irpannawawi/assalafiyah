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
                                    <h5 class="m-b-10">Dashboard</h5>
                                    <p class="m-b-0">Welcome to Material Able</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                                    <h5>Siswa Aktif </h5>
                                    <span>menampilkan list siswa aktif </span>
                                    <div class="card-header-right">
                                        <a href="tambah_siswa" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah
                                            Siswa</a>
                                    </div>
                                </div>
                                <div class="card-block table-border-style">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="col-md-1">#</th>
                                                    <th>Nama</th>
                                                    <th>No. Induk</th>
                                                    <th>Jenjang</th>
                                                    <th>Kelas</th>
                                                    <th>Ruang</th>
                                                    <th>No. Hp</th>
                                                    <th class="col-md-2">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $row)
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>{{ $row->nama_lengkap }}</td>
                                                        <td>{{ $row->no_induk }}</td>
                                                        <td>{{ $row->jenjang_pendidikan }}</td>
                                                        <td>{{ $row->kelas_id }}</td>
                                                        <td>{{ $row->ruang_id }}</td>
                                                        <td>{{ $row->no_hp }}</td>
                                                        <td>
                                                            <div class="btn-group-justify ">
                                                                <button id="detail" class="btn btn-primary btn-sm btn-flat"
                                                                    data-toggle="modal" data-target="#modal-add"
                                                                    data-namalengkap="{{ $row->nama_lengkap }}"
                                                                    data-nohp="{{ $row->no_hp }}"
                                                                    data-jenjang="{{ $row->jenjang_pendidikan }}"
                                                                    data-jk="{{ $row->jenis_kelamin }}"
                                                                    data-us="{{ $row->agama }}"
                                                                    data-agama="{{ $row->ukuran_seragam }}"
                                                                    data-gd="{{ $row->golongan_darah }}"
                                                                    data-tl="{{ $row->tanggal_lahir }}"
                                                                    data-tmptl="{{ $row->tempat_lahir }}"
                                                                    data-as="{{ $row->asal_sekolah }}"
                                                                    data-skhun="{{ $row->no_skhun }}"
                                                                    data-nisn="{{ $row->no_nisn }}"
                                                                    data-un="{{ $row->no_un }}"
                                                                    data-ijazah="{{ $row->no_ijazah }}"
                                                                    data-anakke="{{ $row->anakke }}"
                                                                    data-jmls="{{ $row->jmlh_saudara }}"
                                                                    data-kk="{{ $row->no_kk }}"
                                                                    data-na="{{ $row->nama_ayah }}"
                                                                    data-ni="{{ $row->nama_ibu }}"
                                                                    data-nika="{{ $row->nik_ayah }}"
                                                                    data-niki="{{ $row->nik_ibu }}"
                                                                    data-tla="{{ $row->tl_ayah }}"
                                                                    data-tli="{{ $row->tl_ibu }}"
                                                                    data-tgla="{{ $row->tgl_ayah }}"
                                                                    data-tgli="{{ $row->tgl_ibu }}"
                                                                    data-pa="{{ $row->pekerjaan_ayah }}"
                                                                    data-pi="{{ $row->pekerjaan_ibu }}"
                                                                    data-nohpa="{{ $row->no_hp_ayah }}"
                                                                    data-nohpi="{{ $row->no_hp_ibu }}"
                                                                    data-hsla="{{ $row->penghasilan_ayah }}"
                                                                    data-hsli="{{ $row->penghasilan_ibu }}"
                                                                    data-status="{{ $row->status_siswa }}">
                                                                    Lihat</button>
                                                                <a href="/update_siswa/{{ $row->id }}"
                                                                    class="btn btn-sm btn-info waves-effect waves-light">Edit</a>
                                                                <a href="/delete_data_siswa/{{ $row->id }}"
                                                                    class="btn btn-sm btn-danger waves-effect waves-light">Hapus</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
    <div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form name="frm_add" id="frm_add" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail data siswa</h4>
                    </div>
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input name="nama_lengkap" type="text" class="form-control" id="namalengkap"readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="nohp" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenjang Pendidikan</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="jenjang" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="jk" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Ukuran Seragam</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="us" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="agama" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Golongan Darah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="gd" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="tmptl" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="tl" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Asal Sekolah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="as" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No SKHUN</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="skhun" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No NISN</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="nisn" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No Ujian Nasional</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="un" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No Ijazah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="ijazah" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Anak ke</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="anakke" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jumlah Saudara</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="jmls" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No. KK</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="kk" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Ayah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="na" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Ibu</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="ni" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK Ayah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="nika" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIK Ibu</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="niki" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat lahir Ayah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="tla" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat lahir Ibu</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="tli" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal lahir Ayah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="tgla" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal lahir Ibu</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="tgli" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="pa" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="pi" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No. Telp Ayah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="nohpa" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No. Telp Ibu</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="nohpi" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Penghasilan Ayah</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="hsla" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Penghasilan Ibu</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="hsli" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status Siswa</label>
                            <div class="col-sm-10">
                                <input name="no_hp" type="text" class="form-control" id="status" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
