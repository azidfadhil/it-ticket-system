<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-outline card-success">
          <div class="card-header">
            <h3 class="card-title">Tambah Divisi</h3>
          </div>
          <form id="formTambahDivisi">
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="eNamaDivisi" class="form-label">Nama Divisi / <i>Division Name</i></label>
                  <input type="text" id="eNamaDivisi" class="form-control" name="e_nama_divisi" placeholder="Nama Divisi">
                  <small class="form-text">
                    <span class="text-muted d-flex align-items-center check-availability"></span>
                  </small>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="<?= base_url('admin/datamaster') ?>" class="btn btn-secondary">Batal</a>
              <button type="submit" class="btn btn-primary btn-submit float-right" disabled>Tambah</button>
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