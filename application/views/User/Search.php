<div class="main-content-container container-fluid px-4">
  <div class="page-header row no-gutters py-4">
    <div class="col-10 col-sm-12  text-center">
      <span class="text-uppercase page-subtitle" style="font-size:large">Sistem Informasi kriminalitas Kota Pekanbaru</span>
    </div>
    <div class="col-2 col-sm-2 margin-center">
      <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
        <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary">Search</button>
          </div>
        </form>
      </nav>
    </div>
  </div>
  <!-- End Page Header -->
  <!-- Small Stats Blocks -->


  <div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Data Jalan</span>
              <h6 class="stats-small__value count my-3"><?php echo $this->db->count_all_results('tb_pencurian'); ?></h6>
            </div>

          </div>

        </div>
      </div>
    </div>
    <div class="col-lg col-md-4 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Data Sangat Rawan Kriminalitas</span>
              <h6 class="stats-small__value count my-3"><?php $this->db->select('*');
                                                        $this->db->from('tb_pencurian');
                                                        $this->db->like('kategori', 'Sangat Rawan');
                                                        echo $this->db->count_all_results(); ?></h6>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-12">
      <div id="map">

      </div>
    </div>
  </div>
  <!-- End Small Stats Blocks -->

</div>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin="">
</script>
<script>
    <?php foreach($kriminal as $data){?>
  var map = L.map('map', {
    center: [<?php echo $data['latitude']?>,<?php echo $data['longitude']?>],
    zoom: 13
  }); var lokasi = L.marker([<?php echo $data['latitude']?>,<?php echo $data['longitude']?>]).bindPopup("<img src='<?php echo $data["foto"] ?>' width='300px' height='150px'/> <br> Jalan: <?php echo $data["jalan"] ?> <br> Status: <?php echo $data["kategori"] ?>").openPopup().addTo(map)
 <?php }?>
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
</script>