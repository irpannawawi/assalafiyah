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
                                            <h5>Masukan Data Siswa</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="form-group row">
                                                <h4 class="col-sm-12 sub-title">Form siswa</h4>
                                            </div>
                                            <form action="/tambah_data_siswa" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                    <div class="col-sm-10">
                                                        <input name="nama_lengkap" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nomor HP</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_hp" type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Pilih Jenjang Pendidikan</label>
                                                    <div class="col-sm-10">
                                                        <select name="jenjang_pendidikan" class="form-control">
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
                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-10">
                                                        <select name="jenis_kelamin" class="form-control">
                                                            <option value="laki">Laki</option>
                                                            <option value="perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Ukuran Seragam </label>
                                                    <div class="col-sm-10">
                                                        <select name="ukuran_seragam" class="form-control">
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                            <option value="XXXL">XXXL</option>
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
                                                        <input name="tanggal_lahir" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <h4 class="col-sm-12 sub-title">Form Pendidikan</h4>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Asal Sekolah</label>
                                                    <div class="col-sm-10">
                                                        <input name="asal_sekolah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No SKHUN</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_skhun" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No NISN</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_nisn" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No Ujian Nasional</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_un" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No Ijazah</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_ijazah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <h4 class="col-sm-12 sub-title">Form Keluarga</h4>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Anak ke</label>
                                                    <div class="col-sm-10">
                                                        <input name="anakke" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">
                                                        Jumlah Saudara</label>
                                                    <div class="col-sm-10">
                                                        <input name="jmlh_saudara" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. KK</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_kk" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input name="nama_ayah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input name="nama_ibu" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NIK Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input name="nik_ayah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NIK Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input name="nik_ibu" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tempat lahir Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input name="tl_ayah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tempat lahir Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input name="tl_ibu" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tanggal lahir Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input name="tgl_ayah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Tanggal lahir Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input name="tgl_ibu" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input name="pekerjaan_ayah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input name="pekerjaan_ibu" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. Telp Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_hp_ayah" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">No. Telp Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input name="no_hp_ibu" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Penghasilan Ayah </label>
                                                    <div class="col-sm-10">
                                                        <select name="penghasilan_ayah" class="form-control">
                                                            <option value="Kurang dari Rp 500.000">Kurang dari Rp 500.000</option>
                                                            <option value="Rp 500.000 - Rp 999.999">Rp 500.000 - Rp 999.999</option>
                                                            <option value="Rp 1.000.000 - Rp 1.999.999">Rp 1.000.000 - Rp 1.999.999</option>
                                                            <option value="Rp 2.000.000 - Rp. 4.999.999">Rp 2.000.000 - Rp. 4.999.999</option>
                                                            <option value="Rp 5.000.000 - Rp 20.000.000">Rp 5.000.000 - Rp 20.000.000</option>
                                                            <option value="Lebih dari Rp 20.000.000">Lebih dari Rp 20.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Penghasilan Ibu </label>
                                                    <div class="col-sm-10">
                                                        <select name="penghasilan_ibu" class="form-control">
                                                            <option value="Kurang dari Rp 500.000">Kurang dari Rp 500.000</option>
                                                            <option value="Rp 500.000 - Rp 999.999">Rp 500.000 - Rp 999.999</option>
                                                            <option value="Rp 1.000.000 - Rp 1.999.999">Rp 1.000.000 - Rp 1.999.999</option>
                                                            <option value="Rp 2.000.000 - Rp. 4.999.999">Rp 2.000.000 - Rp. 4.999.999</option>
                                                            <option value="Rp 5.000.000 - Rp 20.000.000">Rp 5.000.000 - Rp 20.000.000</option>
                                                            <option value="Lebih dari Rp 20.000.000">Lebih dari Rp 20.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Status Siswa </label>
                                                    <div class="col-sm-10">
                                                        <select name="status_siswa" class="form-control">
                                                            <option value="Siswa Aktif">Siswa Aktif</option>
                                                            <option value="Calon Siswa">Calon Siswa</option>\
                                                            <option value="Siswa Non-Aktif">Siswa Non-Aktif</option>
                                                            <option value="Alumni Siswa">Alumni Siswa</option>
												                                                        </select>
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
