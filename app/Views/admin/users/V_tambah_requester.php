<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card card-outline card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Requester</h3>
          </div>
          <form id="formTambahPengguna">
            <div class="card-body">
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="eUsername" class="form-label">Nama Pengguna / <i>Username</i></label>
                  <input type="text" id="eUsername" class="form-control" name="e_username" placeholder="Nama Penguna">
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="eFullname" class="form-label">Nama Lengkap / <i>Fullname</i></label>
                  <input type="text" id="eFullname" class="form-control" name="e_fullname" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="iDivisi" class="form-label">Divisi / <i>Division</i></label>
                  <select name="i_divisi" id="iDivisi" class="form-select2 form-control">
                    <option></option>
                    <option value="1">IT</option>
                    <option value="2">HRD</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mb-3">
                  <label for="ePassword" class="form-label">Kata Sandi / <i>Password</i></label>
                  <input type="password" id="ePassword" class="form-control" name="e_password" placeholder="Kata Sandi">
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <a href="<?= base_url('admin/users') ?>" class="btn btn-danger">Batal</a>
              <button type="submit" class="btn btn-primary float-right">Tambah</button>
            </div>
            <!-- /.card-footer -->
          </form>
          <!-- /#formTambahPengguna -->
        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.content -->