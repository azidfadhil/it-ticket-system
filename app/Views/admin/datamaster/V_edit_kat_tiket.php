<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Kategori Tiket</h3>
          </div>
          <form id="formEditKategoriTiket">
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="eNamaKatTiket" class="form-label">Nama Kategori Tiket / <i>Ticket Category Name</i></label>
                  <input type="hidden" id="iKatTiket" name="i_kat_tiket" value="<?= $kategori_tiket->i_kat_tiket ?>">
                  <input type="text" id="eNamaKatTiket" class="form-control" name="e_nama_kat_tiket" placeholder="Nama Kategori Tiket" value="<?= $kategori_tiket->e_nama_kat_tiket ?>">
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
          <!-- /#formEditKategoriTiket -->
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.content -->