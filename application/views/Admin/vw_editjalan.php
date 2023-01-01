<div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">Edit Data Jalan</h3>
              </div>
            </div>
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                  
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <?php foreach($tb_pencurian as $data){?>
                        <form role="form"  method="POST" enctype="multipart/form-data" action="<?= base_url('Jalan/ubah')?>">                            
                            <div class="form-row">
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Jalan</label>
                              <input type="hidden" class="form-control" id="feInputAddress" name="id" value="<?= $data['id']; ?>"> 
                              <input type="text" class="form-control" id="feInputAddress" name="jalan" value="<?= $data['jalan']; ?>"> 
                            </div>
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Latitude</label>
                              <input type="text" class="form-control" id="feInputAddress" name="latitude" value="<?= $data['latitude']; ?>">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="feInputAddress">Longitude</label>
                              <input type="text" class="form-control" id="feInputAddress" name="longitude" value="<?= $data['longitude']; ?>">
                            </div>
                            <label for="jurusan">Kategori</label>
                            <select name="kategori" id="kategori" value="<?= set_value('kategori')?>" class="form-control"><?= form_error('kategori','<small class="text-danger p1-3">','</small>'); ?>
                                <option value="">Pilih Kategori</option>
                                <option value="Rawan">Rawan</option>
                                <option value="Sangat Rawan">Sangat Rawan</option>                                
                            </select>                            
                            <div class="form-group col-md-12">
                            <label for="feInputAddress">Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="foto" value="<?= set_value('foto')?>">
                                <label for="foto" class="custom-file-label">Choose file</label>
                            </div>
                        </div>              
                            <button type="submit" class="btn btn-accent">Edit</button>
                          </form>
                          <?php }?>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>