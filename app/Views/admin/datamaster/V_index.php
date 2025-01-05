<div class="content">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-3 col-md-12 mb-5">
        <div class="row">
          <div class="col-12">
            <a href="<?= base_url('admin/datamaster/tambahkattiket') ?>" class="btn btn-sm btn-primary mb-2 w-100"><i class="fas fa-plus mr-2"></i> Tambah Kategori</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <a href="#" class="btn btn-sm btn-success mb-2 w-100"><i class="fas fa-plus mr-2"></i> Tambah Divisi</a>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary collapsed-card">
              <div class="card-header" data-card-widget="collapse" title="Collapse">
                <h3 class="card-title">Daftar Kategori</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive p-0">
                  <table class="table table-hover mb-0 text-nowrap">
                    <thead>
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
              <div class="card-header" data-card-widget="collapse" title="Collapse">
                <h3 class="card-title">Daftar Divisi</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive p-0">
                  <table class="table table-hover mb-0 text-nowrap">
                    <thead>
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div> 
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div>
  </div>
</div>