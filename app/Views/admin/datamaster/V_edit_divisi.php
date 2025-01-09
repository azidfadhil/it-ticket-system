<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-outline card-success">
          <div class="card-header">
            <h3 class="card-title">Edit Divisi</h3>
          </div>
          <form id="formEditDivisi">
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="eNamaDivisi" class="form-label">Nama Divisi / <i>Division Name</i></label>
                  <input type="hidden" name="i_divisi" id="iDivisi" value="<?= $divisi->i_divisi ?>">
                  <input type="text" id="eNamaDivisi" class="form-control" name="e_nama_divisi" placeholder="Nama Divisi" value="<?= $divisi->e_nama_divisi ?>">
                  <small class="form-text">
                    <span class="text-muted d-flex align-items-center check-availability"></span>
                  </small>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="<?= base_url('admin/datamaster') ?>" class="btn btn-secondary">Batal</a>
              <div class="float-right">
                <button class="btn btn-danger btn-delete"><i class="fas fa-fw fa-trash"></i></button>
                <button type="submit" class="btn btn-warning btn-submit" disabled>Perbarui</button>
              </div>
            </div>
            <!-- /.card-footer -->
          </form>
          <!-- /#formTambahKategoriTiket -->
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.content -->