<!-- Main content -->
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-12">
        <!-- small card -->
        <div class="small-box bg-info">
          <!-- Loading (remove the following to stop the loading)-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- end loading -->
          <div class="inner">
            <h3>0</h3>

            <p>Tiket Hari Ini</p>
          </div>
          <div class="icon">
            <i class="fas fa-ticket-alt"></i>
          </div>
        </div>
      </div>
      <!-- /.col small-card -->
      <div class="col-lg-3 col-sm-6 col-12">
        <!-- small card -->
        <div class="small-box bg-primary">
          <!-- Loading (remove the following to stop the loading)-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- end loading -->
          <div class="inner">
            <h3>0</h3>

            <p>Tiket Baru</p>
          </div>
          <div class="icon">
            <i class="fas fa-clipboard-list"></i>
          </div>
        </div>
      </div>
      <!-- /.col small-card -->
      <div class="col-lg-3 col-sm-6 col-12">
        <!-- small card -->
        <div class="small-box bg-warning">
          <!-- Loading (remove the following to stop the loading)-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- end loading -->
          <div class="inner">
            <h3>0</h3>

            <p>Tiket Dalam Proses</p>
          </div>
          <div class="icon">
            <i class="fas fa-cogs"></i>
          </div>
        </div>
      </div>
      <!-- /.col small-card -->
      <div class="col-lg-3 col-sm-6 col-12">
        <!-- small card -->
        <div class="small-box bg-success">
          <!-- Loading (remove the following to stop the loading)-->
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <!-- end loading -->
          <div class="inner">
            <h3>0</h3>

            <p>Tiket Selesai</p>
          </div>
          <div class="icon">
            <i class="fas fa-clipboard-check"></i>
          </div>
        </div>
      </div>
      <!-- /.col small-card -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="card card-outline card-info">
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <div class="card-header">
            <h3 class="card-title">Tiket Per Kategori Bulan Ini</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-2">
            <canvas id="tiketPerKategoriChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12">
        <div class="card card-outline card-danger">
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <div class="card-header">
            <h3 class="card-title">Tiket Per Teknisi Bulan Ini</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-2">
            <canvas id="tiketPerTeknisiChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card card-primary">
          <div class="overlay">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
          </div>
          <div class="card-header">
            <h3 class="card-title">Tiket Terbaru</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive p-0" style="max-height: 400px">
              <table class="table table-hover table-head-fixed mb-0 text-nowrap projects">
                <thead>
                  <tr>
                    <th style="max-width: 180px">
                      Judul Tiket<br>
                      <small><i>Ticket Title</i></small>
                    </th>
                    <th style="max-width: 180px">
                      Teknisi<br>
                      <small><i>Technician</i></small>
                    </th>
                    <th style="max-width: 8%" class="text-center text-nowrap">
                      Prioritas<br>
                      <small><i>Priority</i></small>
                    </th>
                    <th style="max-width: 8%" class="text-center text-nowrap">
                      Status<br>
                      <small><i>Status</i></small>
                    </th>
                    <th style="max-width: 3%"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-truncate" style="max-width: 180px">
                      <span>[250102-1] Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quod! Deleniti exercitationem necessitatibus culpa fuga!</span>
                      <br>
                      <small>Dibuat oleh <strong>Requester 1</strong> pada <strong>02.01.2025</strong></small>
                    </td>
                    <td style="max-width: 150px; min-width: 180px">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png" title="Muhammad Azid Fadhil Nabhani">
                        </li>
                      </ul>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-secondary">Rendah</span>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-primary">Baru</span>
                    </td>
                    <td style="max-width: 3%" class="project-actions text-right">
                      <a class="btn btn-primary btn-sm text-nowrap" href="#" title="Detail Tiket">
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-truncate" style="max-width: 180px">
                      <span>[250102-1] Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quod! Deleniti exercitationem necessitatibus culpa fuga!</span>
                      <br>
                      <small>Dibuat oleh <strong>Requester 1</strong> pada <strong>02.01.2025</strong></small>
                    </td>
                    <td style="max-width: 150px; min-width: 180px">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png" title="Muhammad Azid Fadhil Nabhani">
                        </li>
                      </ul>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-warning">Sedang</span>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-warning">Dalam Proses</span>
                    </td>
                    <td style="max-width: 3%" class="project-actions text-right">
                      <a class="btn btn-primary btn-sm text-nowrap" href="#" title="Detail Tiket">
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-truncate" style="max-width: 180px">
                      <span>[250102-1] Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quod! Deleniti exercitationem necessitatibus culpa fuga!</span>
                      <br>
                      <small>Dibuat oleh <strong>Requester 1</strong> pada <strong>02.01.2025</strong></small>
                    </td>
                    <td style="max-width: 150px; min-width: 180px">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png" title="Muhammad Azid Fadhil Nabhani">
                        </li>
                      </ul>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-danger">Tinggi</span>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-success">Selesai</span>
                    </td>
                    <td style="max-width: 3%" class="project-actions text-right">
                      <a class="btn btn-primary btn-sm text-nowrap" href="#" title="Detail Tiket">
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-truncate" style="max-width: 180px">
                      <span>[250102-1] Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quod! Deleniti exercitationem necessitatibus culpa fuga!</span>
                      <br>
                      <small>Dibuat oleh <strong>Requester 1</strong> pada <strong>02.01.2025</strong></small>
                    </td>
                    <td style="max-width: 150px; min-width: 180px">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png" title="Muhammad Azid Fadhil Nabhani">
                        </li>
                      </ul>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-secondary">Rendah</span>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-primary">Baru</span>
                    </td>
                    <td style="max-width: 3%" class="project-actions text-right">
                      <a class="btn btn-primary btn-sm text-nowrap" href="#" title="Detail Tiket">
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-truncate" style="max-width: 180px">
                      <span>[250102-1] Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quod! Deleniti exercitationem necessitatibus culpa fuga!</span>
                      <br>
                      <small>Dibuat oleh <strong>Requester 1</strong> pada <strong>02.01.2025</strong></small>
                    </td>
                    <td style="max-width: 150px; min-width: 180px">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png" title="Muhammad Azid Fadhil Nabhani">
                        </li>
                      </ul>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-warning">Sedang</span>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-warning">Dalam Proses</span>
                    </td>
                    <td style="max-width: 3%" class="project-actions text-right">
                      <a class="btn btn-primary btn-sm text-nowrap" href="#" title="Detail Tiket">
                        <i class="fas fa-eye"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-truncate" style="max-width: 180px">
                      <span>[250102-1] Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, quod! Deleniti exercitationem necessitatibus culpa fuga!</span>
                      <br>
                      <small>Dibuat oleh <strong>Requester 1</strong> pada <strong>02.01.2025</strong></small>
                    </td>
                    <td style="max-width: 150px; min-width: 180px">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png" title="Muhammad Azid Fadhil Nabhani">
                        </li>
                      </ul>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-danger">Tinggi</span>
                    </td>
                    <td style="max-width: 8%" class="project-state">
                      <span class="badge badge-success">Selesai</span>
                    </td>
                    <td style="max-width: 3%" class="project-actions text-right">
                      <a class="btn btn-primary btn-sm text-nowrap" href="#" title="Detail Tiket">
                        <i class="fas fa-eye"></i>
                      </a>
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
    </div>
  </div>
  <!-- /.container -->
</div>
<!-- /.content -->