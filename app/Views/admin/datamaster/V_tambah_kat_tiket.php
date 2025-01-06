<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Kategori Tiket</h3>
          </div>
          <form id="formTambahKategoriTiket">
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="eNamaKatTiket" class="form-label">Nama Kategori Tiket / <i>Ticket Category Name</i></label>
                  <input type="text" id="eNamaKatTiket" class="form-control" name="e_nama_kat_tiket" placeholder="Nama Kategori Tiket">
                  <small class="form-text">
                    <span class="text-muted">Cek data: </span>
                  </small>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="<?= base_url('admin/datamaster') ?>" class="btn btn-danger">Batal</a>
              <button type="submit" class="btn btn-primary float-right">Tambah</button>
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