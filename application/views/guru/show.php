<div class="content">
	<div class="row">
		<div class="card card-user">
			<div class="image">
				<img alt="..." src="../assets/img/damir-bosnjak.jpg" />
			</div>
			<div class="card-body">
				<div class="author">
					<a href="#">
						<img
							class="avatar border-gray"
							alt="..."
							src="../assets/img/mike.jpg"
						/>
					</a>
					<h5 class="title"><?= $guru[0]['nama_guru'] ?></h5>
					
				</div>
			</div>
			<div class="card-footer">
				<hr />
				<div class="button-container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-6 ml-auto">
							<h5>
								Kode_guru
								<br />
								<small><?= $guru[0]['kd_guru'] ?></small>
							</h5>
						</div>
						<div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
							<h5>
								Alamat
								<br />
								<small><?= $guru[0]['alamat'] ?></small>
							</h5>
						</div>
						<div class="col-lg-3 mr-auto">
							<h5>
								Nomor Hp
								<br />
								<small><?= $guru[0]['no_hp'] ?></small>
							</h5>
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
