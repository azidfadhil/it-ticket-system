<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/img/example-avatar.jpg') ?>" alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">John Doe</h3>

            <p class="text-muted text-center">HRD</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Jumlah Tiket</b> <a class="float-right">1.322</a>
              </li>
            </ul>

            <a href="<?= base_url('admin/users') ?>" class="btn btn-secondary btn-block"><i class="fas fa-fw fa-chevron-left mr-1"></i>Kembali</a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-outline card-primary">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#pengaturan" data-toggle="tab">Pengaturan</a></li>
              <li class="nav-item"><a class="nav-link" href="#tiket" data-toggle="tab">Tiket</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body p-0">
            <div class="tab-content">
              <div class="tab-pane active p-3" id="pengaturan">
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
                <hr>
                <div class="row">
                  <div class="col-12">
                    <button class="btn btn-danger"><i class="fas fa-fw fa-trash-alt"></i></button>
                    <button type="submit" class="btn btn-warning float-right"><b>Perbarui</b></button>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="tiket">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>
                          Judul Tiket<br>
                          <small><i>Ticket Title</i></small>
                        </th>
                        <th>
                          Teknisi<br>
                          <small><i>Technician</i></small>
                        </th>
                        <th>
                          Prioritas<br>
                          <small><i>Priority</i></small>
                        </th>
                        <th>
                          Status<br>
                          <small><i>Status</i></small>
                        </th>
                        <th></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.content -->