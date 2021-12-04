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
                                <h5 class="m-b-10"><i class="fa fa-group"></i> Data Guru</h5>
                                <p class="m-b-0">SMK Assalafiyah Sleman</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/prsonalData">Prsonal Data</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/dataGuru">Data Guru</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/tambahGuru">Tambah Data Guru</a>
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
                                <div class="card col-12">
                                    <div class="card-header">
                                        <h5>Tabah Data Guru</h5>
                                    </div>
                                    <div class="card-block">
                                    <form >
                                        <div class="mb-3 form-group">
                                            <div class="img-container" style="position: relative;">
                                        <img src="{{asset('images')}}/preview.jpg" alt="Upload Foto" style="display: block; margin-left: auto; margin-right: auto; height: 80px; width: 80px;  cursor:pointer;" id="foto-preview" class="img-fluid img-circle">
                                                <div style="position: absolute; top:79%;left: 52%; font-size: 15px;" class="middle-camera">
                                                    <i class="fa fa-camera"  ></i>
                                                </div>
                                            </div>
                                            <input type="file" id="inputFoto" name="image" accept="image/*" capture style="display:none" onchange="showPreview(event)" />
                                        </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">NIP</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Jenis Kelamis</label>
                                                <div class="col-sm-4">
                                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                                        <option value="">---</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>

                                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-4">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Jabatan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Status Pegawai</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">No. SK</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <label class="col-sm-2 col-form-label">Telepon</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">No Rekening</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Upload Berkas</h5>
                                                </div>
                                                <div class="card-box row">
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">SK Pengangkatan</label>
                                                        <input type="file" name="sk_pengangkatan" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">KTP</label>
                                                        <input type="file" name="ktp" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">KK</label>
                                                        <input type="file" name="kk" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">Buku Rekening</label>
                                                        <input type="file" name="buku_rekening" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">Ijazah SD</label>
                                                        <input type="file" name="ijazah_sd" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">Ijazah SMP</label>
                                                        <input type="file" name="ijazah_smp" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">Ijazah SMA</label>
                                                        <input type="file" name="ijazah_sma" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="col-12">Ijazah S1</label>
                                                        <input type="file" name="ijazah_s1" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <input type="submit" class="form-control btn btn-primary" value="Simpan">
                                                </div>
                                            </div>
                                        </form>
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


@endsection