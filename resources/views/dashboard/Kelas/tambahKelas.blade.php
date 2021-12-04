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
                                <h5 class="m-b-10"><i class="fa fa-group"></i> Data Kelas</h5>
                                <p class="m-b-0">SMK Assalafiyah Sleman</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/management">Management</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/dataKelas">Data Kelas</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/tambahKelas">Tambah Data Kelas</a>
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
                                        <h5>Tabah Data Kelas</h5>
                                    </div>
                                    <div class="card-block">

                                            <form >
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Kelas</label>
                                                    <div class="col-sm-10">
                                                        <input name="kelas" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Program</label>
                                                    <div class="col-sm-10">
                                                        <input name="program" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Wali Kelas</label>
                                                    <div class="col-sm-10">
                                                        <input name="wali_kelas" type="text" class="form-control">
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