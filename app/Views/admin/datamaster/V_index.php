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
          <div class="card-body px-0 pb-0 pt-2">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="kategori" role="tabpanel" aria-labelledby="kategori-tab">
                <a href="<?= base_url('admin/datamaster/tambahkattiket') ?>" class="btn btn-sm btn-primary position-absolute ml-2" style="z-index: 99"><i class="fas fa-fw fa-plus mr-1"></i> Tambah Kategori</a>
                <!-- Table Requester -->
                <div class="table-responsive">
                  <table class="table table-hover mb-0 text-nowrap data-table">
                    <thead class="bg-primary">
                      <tr>
                        <th class="text-right" width="20">
                          #<br>
                          <small><i>#</i></small></th>
                        </th>
                        <th class="text-nowrap" width="10">
                          Nama Kategori<br>
                          <small><i>Categories Name</i></small></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach ($kategori_tiket as $row) : ?>
                      <tr>
                        <td class="text-right" width="20"><?= $no++ ?></td>
                        <td><?= $row->e_nama_kat_tiket ?></td>
                        <td>
                          <div class="float-right">
                            <?php if ($row->f_active) : ?>
                            <a href="#" class="btn btn-sm btn-danger btn-lock" data-id="<?= $row->i_kat_tiket ?>" data-status="0" data-type="kategori_tiket"><i class="fas fa-fw fa-lock"></i></a>
                            <?php else : ?>
                            <a href="#" class="btn btn-sm btn-success btn-lock" data-id="<?= $row->i_kat_tiket ?>" data-status="1" data-type="kategori_tiket"><i class="fas fa-fw fa-lock-open"></i></a>
                            <?php endif ?>
                            <a href="<?= base_url('admin/datamaster/editkattiket?id=' . $row->i_kat_tiket) ?>" class="btn btn-sm btn-warning text-white"><i class="fas fa-fw fa-pencil-alt"></i></a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.responsive-table -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane fade show" id="divisi" role="tabpanel" aria-labelledby="divisi-tab">
                <a href="<?= base_url('admin/datamaster/tambahdivisi') ?>" class="btn btn-sm btn-success position-absolute ml-2" style="z-index: 99"><i class="fas fa-fw fa-plus mr-1"></i> Tambah Divisi</a>
                <!-- Table Requester -->
                <div class="table-responsive">
                  <table class="table table-hover mb-0 text-nowrap data-table">
                    <thead class="bg-success">
                      <tr>
                        <th class="text-right" width="20">
                          #<br>
                          <small><i>#</i></small></th>
                        </th>
                        <th class="text-nowrap" width="10">
                          Nama Divisi<br>
                          <small><i>Division(s) Name</i></small></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach ($divisi as $row) : ?>
                      <tr>
                        <td class="text-right" width="20"><?= $no++ ?></td>
                        <td><?= $row->e_nama_divisi ?></td>
                        <td>
                          <div class="float-right">
                            <?php if ($row->f_active) : ?>
                            <a href="#" class="btn btn-sm btn-danger btn-lock" data-id="<?= $row->i_divisi ?>" data-status="0" data-type="divisi"><i class="fas fa-fw fa-lock"></i></a>
                            <?php else : ?>
                            <a href="#" class="btn btn-sm btn-success btn-lock" data-id="<?= $row->i_divisi ?>" data-status="1" data-type="divisi"><i class="fas fa-fw fa-lock-open"></i></a>
                            <?php endif ?>
                            <a href="<?= base_url('admin/datamaster/editdivisi?id=' . $row->i_divisi) ?>" class="btn btn-sm btn-warning text-white"><i class="fas fa-fw fa-pencil-alt"></i></a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach ?>
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