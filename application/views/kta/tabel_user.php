<?php //include 'header.php'; ?>
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tabel User</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel User</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Akun ID</th>
                  <th>Username</th>
                  <th>Akses</th>
                  <th>Password</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Akun ID</th>
                  <th>Username</th>
                  <th>Akses</th>
                  <th>Password</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                    <?php foreach($data_user->result() as $dt_user): ?>
                    <tr>
                      <td><?php echo $dt_user->akun_id; ?></td>
                      <td><?php echo $dt_user->username; ?></td>
                      <td><?php echo $dt_user->akses; ?></td>
                      <td><?php echo $dt_user->password; ?></td>
                      <td><a type='button' class='btn btn-secondary' href='<?php echo $dt_user->akun_id; ?>'> Update </a></td>
                      <td>
                      <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#delete-$nidn'>
                      Delete
                      </button>
                          
                      <!-- Delete Modal -->
                      <div class='modal fade' id='delete-$nidn' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                      <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                          <div class='modal-header'>
                            <h5 class='modal-title' id='exampleModalLabel'>Yakin Ingin Menghapus</h5>
                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                          <div class='modal-body'>
                            Pilih 'Delete' jika ingin menghapus data <?php echo $dt_user->akun_id; ?>
                          </div>
                          <div class='modal-footer'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>
                            <a class='btn btn-primary' href='<?php echo $dt_user->akun_id; ?>'>Delete </a>
                          </div>
                        </div>
                      </div>
                      </div>
                      </td>  
                    </tr>
                    <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    </div>
</div>
<?php //include 'footer.php'; ?>