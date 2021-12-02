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


                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Basic Form Inputs card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Masukan Data Pegawai</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="form-group row">
                                                <h4 class="col-sm-12 sub-title">Form pegawai</h4>
                                            </div>
                                            <form action="/tambah_data_pegawai" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                    <div class="col-sm-10">
                                                        <input name="nama" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nomor HP</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_hp" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Lembaga</label>
                                                    <div class="col-sm-10">
                                                        <select name="lembaga" class="form-control">
                                                            <option value="PAUD">PAUD</option>
                                                            <option value="MTS">MTS</option>
                                                            <option value="MA">MA</option>
                                                            <option value="SMK">SMK</option>
                                                            <option value="Mahad Aly">Mahad Aly</option>
                                                            <option value="Takhassus">Takhassus</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jabatan </label>
                                                    <div class="col-sm-10">
                                                        <select name="jabatan" class="form-control">
                                                            <option value="Guru">Guru</option>
                                                            <option value="Kesiswaan">Kesiswaan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-10">
                                                        <select name="jenis_kelamin" class="form-control">
                                                            <option value="Laki">Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
       
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Agama </label>
                                                    <div class="col-sm-10">
                                                        <select name="agama" class="form-control">
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Buddha">Buddha</option>
                                                            <option value="Konghucu">Konghucu</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Golongan Darah </label>
                                                    <div class="col-sm-10">
                                                        <select name="golongan_darah" class="form-control">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="AB">AB</option>
                                                            <option value="O">O</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                    <div class="col-sm-10">
                                                        <input name="tempat_lahir" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                    <div class="col-sm-10">
                                                        <input name="tgl_lahir" type="text" class="form-control">
                                                    </div>
                                                </div>
 
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Pedidikan</label>
                                                    <div class="col-sm-10">
                                                        <input name="pendidikan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nip</label>
                                                    <div class="col-sm-10">
                                                        <input name="nip" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NUPTK</label>
                                                    <div class="col-sm-10">
                                                        <input name="nuptk" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Status Tetap</label>
                                                    <div class="col-sm-10">
                                                        <input name="status_tetap" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Status Pegawai</label>
                                                    <div class="col-sm-10">
                                                        <input name="status_pegawai" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Mengajar</label>
                                                    <div class="col-sm-10">
                                                        <input name="mengajar" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">
                                                        Masa Bakti</label>
                                                    <div class="col-sm-10">
                                                        <input name="masa_bakti" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No.SK Mengajar</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_sk_mengajar" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tahun SK Mengajar</label>
                                                    <div class="col-sm-10">
                                                        <input name="thn_sk_mengajar" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Penerbit SK Mengajar </label>
                                                    <div class="col-sm-10">
                                                        <input name="penerbit_sk_pengajar" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. Ktp</label>
                                                    <div class="col-sm-10">
                                                        <input name="ktp" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. NPWP</label>
                                                    <div class="col-sm-10">
                                                        <input name="npwp" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Status Menikah</label>
                                                    <div class="col-sm-10">
                                                        <input name="status_nikah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                                    <div class="col-sm-10">
                                                        <input name="kewarganegaraan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input name="email" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. Rekening</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_rek" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Provinsi</label>
                                                    <div class="col-sm-10">
                                                        <input name="provinsi" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kabupaten</label>
                                                    <div class="col-sm-10">
                                                        <input name="kabupaten" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kecamatan</label>
                                                    <div class="col-sm-10">
                                                        <input name="kecamatan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kelurahan</label>
                                                    <div class="col-sm-10">
                                                        <input name="kelurahan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jalan</label>
                                                    <div class="col-sm-10">
                                                        <input name="jalan" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kode Pos</label>
                                                    <div class="col-sm-10">
                                                        <input name="kode_pos" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tinggi</label>
                                                    <div class="col-sm-10">
                                                        <input name="tinggi" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Berat</label>
                                                    <div class="col-sm-10">
                                                        <input name="berat" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Hobi</label>
                                                    <div class="col-sm-10">
                                                        <input name="hobi" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Data Keluarga</label>
                                                    <div class="col-sm-10">
                                                        <input name="data_keluarga" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <div class="col-sm-12"  >
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20 float-right " data-toggle="tooltip" data-placement="right" title="" data-original-title="submit">Submit
                                                    </button>
                                                    </div></div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Basic Form Inputs card end -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
