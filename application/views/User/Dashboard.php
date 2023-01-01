<div class="main-content-container container-fluid px-4">
  <div class="page-header row no-gutters py-4">
    <div class="col-10 col-sm-12  text-center">
      <span class="text-uppercase page-subtitle" style="font-size:large">Sistem Informasi kriminalitas Kota Pekanbaru</span>
    </div>
    <div class="col-2 col-sm-2 margin-center">
      <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
        <form action="<?php echo base_url('Dashboard/search')?>" method="post" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search" aria-label="Search" name="search">
            <button type="submit" class="btn btn-primary">Search</button>
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
  var map = L.map('map', {
    center: [0.510440, 101.438309],
    zoom: 13
  });
  var srawan = L.icon({
    iconUrl: '<?php echo base_url("assets/icon/pinmerah.png") ?>',


    iconSize: [45] // size of the icon

  });

  var layerRawan = L.layerGroup().addTo(map);
  var layerSangat = L.layerGroup().addTo(map);
  var semua = L.layerGroup().addTo(map);
  <?php
  foreach ($kriminal as $data2) { ?>
    <?php

    if ($data2['kategori'] == 'Rawan') {
    ?>
      var rawan = L.marker([<?php echo $data2['latitude'] ?>, <?php echo $data2['longitude'] ?>]).bindPopup("<img src='<?php echo $data2["foto"] ?>' width='300px' height='150px'/> <br> Jalan: <?php echo $data2["jalan"] ?> <br> Status: <?php echo $data2["kategori"] ?>").openPopup().addTo(map);
      rawan.addTo(layerRawan);
      rawan.addTo(semua);
    <?php
    } else {


    ?>
      var sangat = L.marker([<?php echo $data2['latitude'] ?>, <?php echo $data2['longitude'] ?>],{icon:srawan}).bindPopup("<img src='<?php echo $data2["foto"] ?>' width='300px'height='150px'/> <br> Jalan: <?php echo $data2["jalan"] ?> <br> Status: <?php echo $data2["kategori"] ?>").openPopup().addTo(map);
      sangat.addTo(layerSangat);
      sangat.addTo(semua);
  <?php
    }
  }
  ?>
  var baseLayers = {

    "Rawan": layerRawan,
    "Sangat Rawan": layerSangat,
    "Semua": semua

  };
  L.control.layers(baseLayers).addTo(map);
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
</script>