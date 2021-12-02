    <!-- modal add data-->
    <div class="modal inmodal fade" id="modal-add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xs">
            <form name="frm_add" id="frm_add" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group"><label class="col-lg-2 control-label">Nama</label>
                            <div class="col-lg-10"><input type="text" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap"
                                    class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">No Hp</label>
                            <div class="col-lg-10"><input type="text"  id="nohp" name="nohp" placeholder="No hp"
                                    class="form-control">
                                <span id="nohp"></span></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>