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
                                <h5 class="m-b-10"><i class="fa fa-graduation-cap"></i> Identitas Sekolah</h5>
                                <p class="m-b-0">SMK Assalafiyah Sleman</p>
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
                                <div class="card col-12">
                                    <div class="card-header">
                                        <h5>Identitas Sekolah</h5>
                                    </div>
                                    <div class="card-block">
                                    <form >
                                        <div class="mb-3 form-group">
                                        <img src="{{asset('images')}}/logo.jpg" alt="" style="display: block; margin-left: auto; margin-right: auto; cursor:pointer;" id="upFileLogo">
                                            <input type="file" id="fileLogo" name="image" accept="image/*" capture style="display:none"/>
                                        </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">NPSN</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Kepala Sekolah</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Nama Sekolah</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Jenjang</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Kelurahan</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control">
                                                </div>
                                                <label class="col-sm-2 col-form-label">Kecamatan</label>
                                                <div class="col-sm-4">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Kabupaten</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Provinsi</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Website</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">Telepon</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                               <label class="col-sm-2 col-form-label">TTD Kepala Sekolah</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control">
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