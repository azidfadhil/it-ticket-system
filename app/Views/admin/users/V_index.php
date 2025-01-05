<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-3 col-sm-4 col-12">
        <!-- small card -->
        <div class="small-box bg-primary">
          <!-- Loading (remove the following to stop the loading)-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- end loading -->
          <div class="inner">
            <h3>0</h3>

            <p>Total Pengguna</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-12">
        <!-- small card -->
        <div class="small-box bg-danger">
          <!-- Loading (remove the following to stop the loading)-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- end loading -->
          <div class="inner">
            <h3>0</h3>

            <p>Total Teknisi</p>
          </div>
          <div class="icon">
            <i class="fas fa-users-cog"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 col-12">
        <!-- small card -->
        <div class="small-box bg-success">
          <!-- Loading (remove the following to stop the loading)-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- end loading -->
          <div class="inner">
            <h3>0</h3>

            <p>Total Manager IT</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-shield"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-lg-2 col-md-3 col-sm-6">
        <a href="<?= base_url('admin/users/tambahuser') ?>" class="btn btn-sm btn-primary w-100 mr-2 mb-2 text-nowrap"><i class="fas fa-plus mr-1"></i> Tambah Pengguna</a>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6">
        <a href="<?= base_url('admin/users/tambahteknisi') ?>" class="btn btn-sm btn-danger w-100 mr-2 mb-2 text-nowrap"><i class="fas fa-plus mr-1"></i> Tambah Teknisi</a>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6">
        <a href="<?= base_url('admin/users/tambahmanager') ?>" class="btn btn-sm btn-success w-100 mr-2 mb-2 text-nowrap"><i class="fas fa-plus mr-1"></i> Tambah Manager IT</a>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-12">
        <div class="card card-primary collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Daftar Pengguna</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive p-0">
              <table class="table table-hover mb-0 text-nowrap projects">
                <thead>
                  <tr>
                    <th width="10">
                      ID<br>
                      <small><i>Id</i></small></th>
                    </th>
                    <th class="text-nowrap" width="10">
                      Nama Pengguna<br>
                      <small><i>Username</i></small></th>
                    <th class="text-nowrap">
                      Nama Lengkap<br>
                      <small><i>Fullname</i></small></th>
                    </th>
                    <th class="text-nowrap" width="10">
                      Jumlah Tiket Yang Dibuat<br>
                      <small><i>Total Ticket(s) Created</i></small></th>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="10">1</td>
                    <td>johnd1</td>
                    <td>John Doe</td>
                    <td class="text-center text-nowrap">1</td>
                    <td class="float-right">
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-lock"></i></a>
                      <a href="<?= base_url('admin/users/editpengguna') ?>" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.responsive-table -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div> 
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card card-danger collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Daftar Teknisi</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive p-0">
              <table class="table table-hover mb-0 text-nowrap projects">
                <thead>
                  <tr>
                    <th width="10">
                      ID<br>
                      <small><i>Id</i></small></th>
                    </th>
                    <th class="text-nowrap" width="10">
                      Nama Pengguna<br>
                      <small><i>Username</i></small></th>
                    <th class="text-nowrap">
                      Nama Lengkap<br>
                      <small><i>Fullname</i></small></th>
                    </th>
                    <th class="text-nowrap" width="10">
                      Jumlah Tiket Yang Dikerjakan<br>
                      <small><i>Total Ticket(s) Worked</i></small></th>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="10">1</td>
                    <td>renaissance16</td>
                    <td>Muhammad Azid Fadhil Nabhani</td>
                    <td class="text-center text-nowrap">1</td>
                    <td class="float-right">
                      <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-lock"></i></a>
                      <a href="#" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.responsive-table -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div> 
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card card-success collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Daftar Manager IT</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive p-0">
              <table class="table table-hover mb-0 text-nowrap projects">
                <thead>
                  <tr>
                    <th width="10">
                      ID<br>
                      <small><i>Id</i></small></th>
                    </th>
                    <th class="text-nowrap" width="10">
                      Nama Pengguna<br>
                      <small><i>Username</i></small></th>
                    <th class="text-nowrap">
                      Nama Lengkap<br>
                      <small><i>Fullname</i></small></th>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
            <!-- /.responsive-table -->
          </div>
          <!-- /.card-body -->
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