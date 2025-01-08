<div class="content">
  <div class="container">
    <div class="row mb-3">
      <div class="col-12">
        <div class="card card-light card-tabs">
          <div class="card-header p-0 pt-1 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
              <li class="py-2 px-3"><h3 class="card-title">Data Master</h3></li>
              <li class="nav-item">
                <a class="nav-link active" id="kategori-tab" data-toggle="pill" href="#kategori" role="tab" aria-controls="kategori" aria-selected="true">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="divisi-tab" data-toggle="pill" href="#divisi" role="tab" aria-controls="divisi" aria-selected="false">Divisi</a>
              </li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="kategori" role="tabpanel" aria-labelledby="kategori-tab">
                <a href="#" class="btn btn-sm btn-primary my-2 ml-2"><i class="fas fa-fw fa-plus mr-1"></i> Tambah Kategori</a>
                <!-- Table Requester -->
                <div class="table-responsive">
                  <table class="table table-hover mb-0 text-nowrap">
                    <thead class="bg-primary">
                      <tr>
                        <th width="10">
                          ID<br>
                          <small><i>Id</i></small></th>
                        </th>
                        <th class="text-nowrap" width="10">
                          Nama Kategori<br>
                          <small><i>Categories Name</i></small></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td width="10">1</td>
                        <td>Website</td>
                        <td class="float-right">
                          <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-lock"></i></a>
                          <a href="#" class="btn btn-sm btn-warning text-white"><i class="fas fa-fw fa-pencil-alt"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.responsive-table -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade show" id="divisi" role="tabpanel" aria-labelledby="divisi-tab">
                <a href="#" class="btn btn-sm btn-success my-2 ml-2"><i class="fas fa-fw fa-plus mr-1"></i> Tambah Divisi</a>
                <!-- Table Requester -->
                <div class="table-responsive">
                  <table class="table table-hover mb-0 text-nowrap">
                    <thead class="bg-success">
                      <tr>
                        <th width="10">
                          ID<br>
                          <small><i>Id</i></small></th>
                        </th>
                        <th class="text-nowrap" width="10">
                          Nama Divisi<br>
                          <small><i>Division(s) Name</i></small></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td width="10">1</td>
                        <td>IT</td>
                        <td>
                          <div class="float-right">
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-lock"></i></a>
                            <a href="#" class="btn btn-sm btn-warning text-white"><i class="fas fa-fw fa-pencil-alt"></i></a>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td width="10">1</td>
                        <td>HRD</td>
                        <td>
                          <div class="float-right">
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-lock"></i></a>
                            <a href="#" class="btn btn-sm btn-warning text-white"><i class="fas fa-fw fa-pencil-alt"></i></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.responsive-table -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
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