<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-3 col-sm-4 col-12">
        <!-- Small card total pengguna -->
        <div class="small-box bg-primary">
          <!-- loading -->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- /loading -->
          <div class="inner">
            <h3>0</h3>
            <p>Total Pengguna</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
        </div>
        <!-- /.small-box total pengguna -->
      </div>
      <!-- /.col -->
      <div class="col-lg-3 col-sm-4 col-12">
        <!-- Small card requester -->
        <div class="small-box bg-info">
          <!-- loading-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- /loading -->
          <div class="inner">
            <h3>0</h3>
            <p>Total Requester</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-edit"></i>
          </div>
        </div>
        <!-- /.small-card requester -->
      </div>
      <!-- /.col -->
      <div class="col-lg-3 col-sm-4 col-12">
        <!-- Small card teknisi -->
        <div class="small-box bg-danger">
          <!-- loading -->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- /loading -->
          <div class="inner">
            <h3>0</h3>
            <p>Total Teknisi</p>
          </div>
          <div class="icon">
            <i class="fas fa-users-cog"></i>
          </div>
        </div>
        <!-- /.small-box teknisi -->
      </div>
      <!-- /.col -->
      <div class="col-lg-3 col-sm-4 col-12">
        <!-- Small card manager IT -->
        <div class="small-box bg-success">
          <!-- loading -->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- /loading -->
          <div class="inner">
            <h3>0</h3>
            <p>Total Manager IT</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-shield"></i>
          </div>
        </div>
        <!-- /.small-box manager iT -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row mb-3">
      <div class="col-12">
        <div class="card card-light card-tabs">
          <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
              <li class="py-2 px-3"><h3 class="card-title">Daftar Pengguna</h3></li>
              <li class="nav-item">
                <a class="nav-link active" id="requester-tab" data-toggle="pill" href="#requester" role="tab" aria-controls="requester" aria-selected="true">Requester</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="teknisi-tab" data-toggle="pill" href="#teknisi" role="tab" aria-controls="teknisi" aria-selected="false">Teknisi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="manager-it-tab" data-toggle="pill" href="#manager-it" role="tab" aria-controls="manager-it" aria-selected="false">Manager IT</a>
              </li>
            </ul>
          </div>
          <div class="card-body p-0">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="requester" role="tabpanel" aria-labelledby="requester-tab">
                <a href="<?= base_url('admin/users/tambahrequester') ?>" class="btn btn-sm btn-info my-2 ml-2"><i class="fas fa-fw fa-plus mr-1"></i> Tambah Requester</a>
                <!-- Table Requester -->
                <div class="table-responsive">
                  <table class="table table-hover mb-0 text-nowrap">
                    <thead class="bg-info">
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
                        <td>
                          <div class="float-right">
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-lock"></i></a>
                            <a href="<?= base_url('admin/users/editrequester') ?>" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.responsive-table -->
              </div>
              <div class="tab-pane fade" id="teknisi" role="tabpanel" aria-labelledby="teknisi-tab">
                <a href="#" class="btn btn-sm btn-danger my-2 ml-2"><i class="fas fa-fw fa-plus mr-1"></i> Tambah Teknisi</a>
                <!-- Table Teknisi -->
                <div class="table-responsive">
                  <table class="table table-hover mb-0 text-nowrap">
                    <thead class="bg-danger">
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
                        <td>
                          <div class="float-right">
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-lock"></i></a>
                            <a href="#" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.responsive-table -->
              </div>
              <div class="tab-pane fade" id="manager-it" role="tabpanel" aria-labelledby="manager-it-tab">
                <a href="#" class="btn btn-sm btn-success my-2 ml-2"><i class="fas fa-fw fa-plus mr-1"></i> Tambah Manager IT</a>
                <!-- Tabel Manager IT -->
                <div class="table-responsive p-0">
                  <table class="table table-hover mb-0 text-nowrap">
                    <thead class="bg-success">
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
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.content -->