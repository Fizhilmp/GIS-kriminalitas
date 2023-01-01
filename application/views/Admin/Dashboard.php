<div class="main-content-container container-fluid px-4">
	<div class="page-header row no-gutters py-4">
		<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
			<span class="text-uppercase page-subtitle">Dashboard</span>
			<h3 class="page-title">Overview</h3>
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
							<span class="stats-small__label text-uppercase">Data Admin</span>
							<h6 class="stats-small__value count my-3"><?php echo $this->db->count_all_results('user');?></h6>
						</div>

					</div>

				</div>
			</div>
		</div>
		<div class="col-lg col-md-6 col-sm-6 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body p-0 d-flex">
					<div class="d-flex flex-column m-auto">
						<div class="stats-small__data text-center">
							<span class="stats-small__label text-uppercase">Data Jalan</span>
							<h6 class="stats-small__value count my-3"><?php echo $this->db->count_all_results('tb_pencurian');?></h6>
						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- <div class="col-lg col-md-4 col-sm-6 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body p-0 d-flex">
					<div class="d-flex flex-column m-auto">
						<div class="stats-small__data text-center">
							<span class="stats-small__label text-uppercase">Data Rawan Kriminalitas</span>
							<h6 class="stats-small__value count my-3"><?php $this->db->select('*');
              $this->db->from('tb_pencurian');
$this->db->like('kategori', 'Rawan');
echo $this->db->count_all_results();?>
							</h6>
						</div>

					</div>

				</div>
			</div>
		</div> -->
		<div class="col-lg col-md-4 col-sm-6 mb-4">
			<div class="stats-small stats-small--1 card card-small">
				<div class="card-body p-0 d-flex">
					<div class="d-flex flex-column m-auto">
						<div class="stats-small__data text-center">
							<span class="stats-small__label text-uppercase">Data Sangat Rawan Kriminalitas</span>
							<h6 class="stats-small__value count my-3"><?php $this->db->select('*');
              $this->db->from('tb_pencurian');
$this->db->like('kategori', 'Sangat Rawan');
echo $this->db->count_all_results();?></h6>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>
	<!-- End Small Stats Blocks -->

</div>
