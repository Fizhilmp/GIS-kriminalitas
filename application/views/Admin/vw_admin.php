<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Data Admin</h3>
              </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">   
              <a href="<?= base_url('Admin/tambah') ?>" class="mb-2 btn btn-sm btn-primary mr-1">Tambah</a>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">Nama</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0">Password</th>                
                          <th scope="col" class="border-0">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
								      <?php foreach ($user as $us) : ?>
                        <tr>
                          <td><?=$i; ?>.</td>
                          <td><?=$us['nama']; ?></td>
                          <td><?=$us['email']; ?></td>
                          <td><?=$us['password']; ?></td>                        
                          <td>
                            <a href="<?= base_url('Admin/hapus/') . $us['id']; ?>" class="mb-2 btn btn-sm btn-danger mr-1">Hapus</a>
										        <a href="<?= base_url('Admin/edit/') . $us['id']; ?>" class="mb-2 btn btn-sm btn-warning mr-1">Edit</a>
                          </td>                          
                        </tr>
                        <?php $i++;?>
								      <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>