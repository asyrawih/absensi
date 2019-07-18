<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">
            <i class="fa fa-user"></i>
            Data Siswa
          </h4>
          <a href="<?= base_url('siswa/tambahSiswa') ?>" class="btn btn-succes float-right mr-4">
            <i class="fa fa-pencil mx-2 text-warning"> </i>
            Tambah Data
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive table-full-width">
            <table class="table table-bordered">
              <thead class=" text-primary text-center">
                <tr>
                <th>No</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>kelas</th>
                <th>Action</th>
              </tr>
            </thead>
              <tbody class="text-center">
                <?php $no = 1   ?> 
                <?php foreach ($siswa as $row ) : ?>
                <tr>
                  <td><?= $no ++ ?></td>
                  <td><?= $row['nis'] ?></td>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['alamat'] ?></td>
                  <td><?= $row['kelas'] ?></td>
                  <td>
                    <a href="<?= base_url('siswa/edit/'.$row['siswa_id']) ?>" class="btn btn-sm btn-warning">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url('siswa/show?id=').$row['siswa_id'] ?>" class="btn btn-sm btn-info">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="<?= base_url('siswa/hapus_siswa?id=').$row['siswa_id'] ?>" class="btn btn-sm btn-danger">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php endforeach ;   ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>