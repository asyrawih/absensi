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
					<h5 class="title"><?= $siswa[0]['nama'] ?></h5>
					<h3><?= $siswa[0]['jk'] == 'P' ? 'Perempuan' : 'Laki-Laki' ?></h3>
				</div>
				<div class="col-lg-12 col-md-4 col-sm-3 ml-2">
					<table class="table table-bordered">
						<thead class="text-center bg-success shadow text-white">
							<th>Hadir</th>
							<th>Sakit</th>
							<th>Izin</th>
						</thead>
						<tbody class="text-center">
							<tr>
								<td><?= $kehadiran['kehadiran'] ?></td>
								<td><?= $sakit['kehadiran'] ?> </td>
								<td><?= $izin['kehadiran'] ?> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="card-footer">
				<hr />
				<div class="button-container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-6 ml-auto">
							<h5>
								Kelas
								<br />
								<small><?= $siswa[0]['kelas'] ?></small>
							</h5>
						</div>
						<div class="col-lg-3 col-md-6 col-6 ml-auto mr-auto">
							<h5>
								Alamat
								<br />
								<small><?= $siswa[0]['alamat'] ?></small>
							</h5>
						</div>
						<div class="col-lg-3 mr-auto">
							<h5>
								Nomor Hp Wali/orang tua
								<br />
								<small><?= $siswa[0]['no_hp'] ?></small>
							</h5>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
