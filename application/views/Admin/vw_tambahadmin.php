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
                    <h6 class="m-0">Tambah Admin</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form role="form"  method="POST" enctype="multipart/form-data" action="<?= base_url('Admin/tambah')?>">                            
                            <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama')?>" class="form-control"<?= form_error('nama','<small class="text-danger p1-3">','</small>'); ?>> 
                            </div>
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Email</label>
                              <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email')?>" class="form-control"<?= form_error('email','<small class="text-danger p1-3">','</small>'); ?>>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Password</label>
                              <input type="password" class="form-control" id="password" name="password" value="<?= set_value('password')?>" class="form-control"<?= form_error('password','<small class="text-danger p1-3">','</small>'); ?>>
                            </div>                                                
                            <button type="submit" class="btn btn-accent">Tambah</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>