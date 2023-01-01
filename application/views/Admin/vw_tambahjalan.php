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
                    <h6 class="m-0">Tambah Data Jalan</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form role="form"  method="POST" enctype="multipart/form-data" action="<?= base_url('Jalan/insert')?>">                            
                            <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">jalan</label>
                              <input type="text" class="form-control" id="jalan" name="jalan" value="<?= set_value('jalan')?>" class="form-control"<?= form_error('jalan','<small class="text-danger p1-3">','</small>'); ?>> 
                            </div>
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Latitude</label>
                              <input type="text" class="form-control" id="latitude" name="latitude" value="<?= set_value('latitude')?>" class="form-control"<?= form_error('latitude','<small class="text-danger p1-3">','</small>'); ?>>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Longitude</label>
                              <input type="text" class="form-control" id="longitude" name="longitude" value="<?= set_value('longitude')?>" class="form-control"<?= form_error('longitude','<small class="text-danger p1-3">','</small>'); ?>>
                            </div>                          
                            <div class="form-group col-md-12">
                            <label for="jurusan">Kategori</label>
                            <select name="kategori" id="kategori" value="<?= set_value('kategori')?>" class="form-control"><?= form_error('kategori','<small class="text-danger p1-3">','</small>'); ?>
                                <option value="">Pilih Kategori</option>
                                <option value="Rawan">Rawan</option>
                                <option value="Sangat Rawan">Sangat Rawan</option>                                
                            </select>
                        </div>
                            <div class="form-group col-md-12">
                            <label for="feInputAddress">Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="foto" value="<?= set_value('foto')?>">
                                <label for="foto" class="custom-file-label">Choose file</label>
                            </div>
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