<div class="main-content-container container-fluid px-4">
	<!-- Page Header -->
	<div class="page-header row no-gutters py-4">
		<div class="col-12 col-sm-4 text-center text-sm-left mb-0">
			<span class="text-uppercase page-subtitle">Overview</span>
			<h3 class="page-title">Edit Data Admin</h3>
		</div>
	</div>
	<div class="col-lg-12">
		<div class="card card-small mb-4">

			<ul class="list-group list-group-flush">
				<li class="list-group-item p-3">
					<div class="row">
						<div class="col">
              <?php foreach($user as $data){?>
							<form role="form" method="POST" enctype="multipart/form-data" action="<?= base_url('Admin/ubah')?>">
								<div class="form-row">
									<div class="form-group col-md-12">
										<label for="feInputAddress">Nama</label>
										 
										<input type="text" class="form-control" id="feInputAddress" name="nama"
											value="<?= $data['nama']; ?>">
                      <input type="hidden" class="form-control" id="feInputAddress" name="id"
											value="<?= $data['id']; ?>">
									</div>
									<div class="form-group col-md-12">
										<label for="feInputAddress">Email</label>
										<input type="text" class="form-control" id="feInputAddress" name="email"
											value="<?= $data['email']; ?>">
									</div>
									<div class="form-group col-md-12">
										<label for="feInputAddress">Password</label>
										<input type="text" class="form-control" id="feInputAddress" name="password"
											value="<?= $data['password']; ?>">
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
