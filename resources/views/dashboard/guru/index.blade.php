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
                                    <h5 class="m-b-10">Data Guru</h5>
                                    <p class="m-b-0">Welcome to Material Able</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html"> <i class="fa fa-group"></i> </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/prsonalData">Prsonal Data</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/dataGuru">Data Guru</a>
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
                                    <h5>Data Guru</h5>
                                    <span>Menampilkan list Guru</span>
                                </div>
                                <div class="card-block table-border-style"  style="min-height: 740px">
                                    <div class="table-responsive">
                                        <a href="tambahGuru" class="btn btn-primary btn-sm waves-effect waves-light mb-2"><i class="fa fa-plus"></i>Tambah Guru</a>
                                        <a href="tambah_pegawai" class="btn btn-primary btn-sm waves-effect waves-light mb-2"><i class="fa fa-cloud-download"></i>Template</a>
                                        <a href="tambah_pegawai" class="btn btn-primary btn-sm waves-effect waves-light mb-2"><i class="fa fa-cloud-upload"></i>Import</a>

                                        <table class="table table-bordered table-striped">
                                            <thead class="ark">
                                                <tr>
                                                    <th style="text-align: center;"><a href="#" style="border-radius: 30px;" class="mb-0">No</a ></th>
                                                    <th style="text-align: center;"><i class="fa fa-sort"></i> <a style="border-radius: 30px;" class="mb-0" href="/dataGuru?order=nama">Nama</a></th>
                                                    <th style="text-align: center;"><i class="fa fa-sort"></i> <a style="border-radius: 30px;" class="mb-0" href="/dataGuru?order=nip">NIP</a></th>
                                                    <th style="text-align: center;"><i class="fa fa-sort"></i> <a style="border-radius: 30px;" class="mb-0" href="/dataGuru?order=email">Email</a></th>
                                                    <th style="text-align: center;"><i class="fa fa-sort"></i><a style="border-radius: 30px;" class="mb-0 " href="/dataGuru?order=mapel">Mata Pelajaran</a></th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $row)
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{ $row->nama }}</td>
                                                    <td>{{ $row->nip }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->mengajar }}</td>
                                                    <td nowrap>
                                                        <div class="btn-group">
                                                            <button id="detail" class="btn btn-primary btn-sm"
                                                                data-toggle="modal" data-target="#modal-detail"
                                                                data-lembaga="{{ $row->lembaga }}"
                                                                data-nip="{{ $row->nip }}"
                                                                data-nuptk="{{ $row->nuptk }}"
                                                                data-nama="{{ $row->nama }}"
                                                                data-jabatan="{{ $row->jabatan }}"
                                                                data-st="{{ $row->status_tetap }}"
                                                                data-sp="{{ $row->status_pegawai }}"
                                                                data-mengajar="{{ $row->mengajar }}"
                                                                data-mb="{{ $row->masa_bakti }}"
                                                                data-nsm="{{ $row->no_sk_mengajar }}"
                                                                data-tsm="{{ $row->thn_sk_mengajar }}"
                                                                data-psm="{{ $row->penerbit_sk_pengajar }}"
                                                                data-ktp="{{ $row->ktp }}"
                                                                data-npwp="{{ $row->npwp }}"
                                                                data-tl="{{ $row->tempat_lahir }}"
                                                                data-tgl="{{ $row->tgl_lahir }}"
                                                                data-jk="{{ $row->jenis_kelamin }}"
                                                                data-agama="{{ $row->agama }}"
                                                                data-gd="{{ $row->golongan_darah }}"
                                                                data-sn="{{ $row->status_nikah }}"
                                                                data-kwgn="{{ $row->kewarganegaraan }}"
                                                                data-nohp="{{ $row->no_hp }}"
                                                                data-email="{{ $row->email }}"
                                                                data-norek="{{ $row->no_rek }}"
                                                                data-provinsi="{{ $row->provinsi }}"
                                                                data-kabupaten="{{ $row->kabupaten }}"
                                                                data-kecamatan="{{ $row->kecamatan }}"
                                                                data-kelurahan="{{ $row->kelurahan }}"
                                                                data-jalan="{{ $row->jalan }}"
                                                                data-kp="{{ $row->kode_pos }}"
                                                                data-tinggi="{{ $row->tinggi }}"
                                                                data-berat="{{ $row->berat }}"
                                                                data-hobi="{{ $row->hobi }}"
                                                                data-pendidikan="{{ $row->pendidikan }}"
                                                                data-dk="{{ $row->data_keluarga }}"
                                                                >Lihat</button>
                                                            <a href="/update_pegawai/{{ $row->id }}"
                                                                class="btn btn-sm btn-info">Edit</a>
                                                            <a href="/delete_data_pegawai/{{ $row->id }}"
                                                                class="btn btn-sm btn-danger">del</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                           </tbody>
                                        </table>
                                        <!-- pagination -->
                                    </div>
                                </div>
                                        <div class="btn-group m-3">
                                            <a href="/dataGuru?page=" class="btn btn-sm btn-info">&lt;&lt;</a>
                                            <a href="/dataGuru?page=" class="btn btn-sm btn-disabled" disabled>1</a>
                                            <a href="/dataGuru?page=" class="btn btn-sm btn-info">2</a>
                                            <a href="/dataGuru?page=" class="btn btn-sm btn-info">3</a>
                                            <a href="/dataGuru?page=" class="btn btn-sm btn-info">4</a>
                                            <a href="/dataGuru?page=" class="btn btn-sm btn-info">&gt;&gt;</a>
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
        <div class="modal inmodal fade" id="modal-detail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <form name="frm_add" id="frm_add" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail data pegawai</h4>
                        </div>
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input name="nama"  id="nama" type="text" class="form-control"readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor HP</label>
                                <div class="col-sm-10">
                                    <input name="no_hp" id="nohp" type="text" class="form-control"readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Lembaga</label>
                                <div class="col-sm-10">
                                    <input name="lembaga" id="lembaga" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jabatan</label>
                                <div class="col-sm-10">
                                    <input name="jabatan" id="jabatan" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input name="jenis_kelamin" id="jk" type="text" class="form-control"readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input name="agama" id="agama" type="text" class="form-control"readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Golongan Darah</label>
                                <div class="col-sm-10">
                                    <input name="golongan_darah" id="gd" type="text" class="form-control"readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input name="tempat_lahir" id="tl" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input name="tgl_lahir" id="tgl" type="text" class="form-control"readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pedidikan</label>
                                <div class="col-sm-10">
                                    <input name="pendidikan" id="pendidikan" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nip</label>
                                <div class="col-sm-10">
                                    <input name="nip" id="nip" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">NUPTK</label>
                                <div class="col-sm-10">
                                    <input name="nuptk" id="nuptk" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Tetap</label>
                                <div class="col-sm-10">
                                    <input name="status_tetap" id="st" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Pegawai</label>
                                <div class="col-sm-10">
                                    <input name="status_pegawai" id="sp" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Mengajar</label>
                                <div class="col-sm-10">
                                    <input name="mengajar" id="mengajar" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">
                                    Masa Bakti</label>
                                <div class="col-sm-10">
                                    <input name="masa_bakti" id="mb" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No.SK Mengajar</label>
                                <div class="col-sm-10">
                                    <input name="no_sk_mengajar" id="nsm" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tahun SK Mengajar</label>
                                <div class="col-sm-10">
                                    <input name="thn_sk_mengajar" id="tsm" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Penerbit SK Mengajar </label>
                                <div class="col-sm-10">
                                    <input name="penerbit_sk_pengajar" id="psm" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. Ktp</label>
                                <div class="col-sm-10">
                                    <input name="ktp" type="text" id="ktp" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. NPWP</label>
                                <div class="col-sm-10">
                                    <input name="npwp" id="npwp" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Status Menikah</label>
                                <div class="col-sm-10">
                                    <input name="status_nikah" id="sn" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-10">
                                    <input name="kewarganegaraan" id="kwgn" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" id="email" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. Rekening</label>
                                <div class="col-sm-10">
                                    <input name="no_rek" id="norek" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Provinsi</label>
                                <div class="col-sm-10">
                                    <input name="provinsi" id="provinsi" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kabupaten</label>
                                <div class="col-sm-10">
                                    <input name="kabupaten" id="kabupaten" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input name="kecamatan" id="kecamatan" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-10">
                                    <input name="kelurahan" id="kelurahan" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jalan</label>
                                <div class="col-sm-10">
                                    <input name="jalan" id="jalan" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kode Pos</label>
                                <div class="col-sm-10">
                                    <input name="kode_pos" id="kp" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tinggi</label>
                                <div class="col-sm-10">
                                    <input name="tinggi" id="tinggi" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Berat</label>
                                <div class="col-sm-10">
                                    <input name="berat" id="berat" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hobi</label>
                                <div class="col-sm-10">
                                    <input name="hobi" id="hobi" type="text" class="form-control"readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Data Keluarga</label>
                                <div class="col-sm-10">
                                    <input name="data_keluarga" id="dk" type="text" class="form-control"readonly>
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
