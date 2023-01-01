<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Data Jalan</h3>
              </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">   
              <a href="<?= base_url('Jalan/tambah') ?>" class="mb-2 btn btn-sm btn-primary mr-1">Tambah</a>
                  </div>
                  <div class="card-body p-0 pb-3 text-center">
                    <table class="table mb-0">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">No</th>
                          <th scope="col" class="border-0">Nama Jalan</th>
                          <th scope="col" class="border-0">Latitude</th>
                          <th scope="col" class="border-0">Longitude</th>
                          <th scope="col" class="border-0">Kategori</th>
                          <th scope="col" class="border-0">Gambar</th>
                          <th scope="col" class="border-0">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
								      <?php foreach ($tb_pencurian as $pr) : ?>
                        <tr>
                          <td><?=$i; ?>.</td>
                          <td><?=$pr['jalan']; ?></td>
                          <td><?=$pr['latitude']; ?></td>
                          <td><?=$pr['longitude']; ?></td>
                          <td><?=$pr['kategori']; ?></td>
                          <td><img src="<?=$pr['foto']; ?>" width="100px"></td>
                          <td>
                            <a href="<?= base_url('Jalan/hapus/') . $pr['id']; ?>" class="mb-2 btn btn-sm btn-danger mr-1">Hapus</a>
										        <a href="<?= base_url('Jalan/edit/') . $pr['id']; ?>" class="mb-2 btn btn-sm btn-warning mr-1">Edit</a>
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