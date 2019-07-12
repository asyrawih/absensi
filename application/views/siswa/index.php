
<div class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-6">
      <div class="card">
        <div class="card-header">
          <h3>Data Siswa</h3>
          <a href="<?=base_url('siswa/tambahSiswa')?>" class="pull-right btn btn-success">
            <i class="fa fa-pencil"></i>
            Tambah Data
          </a>
        </div>
        <div class="card-body table-responsive">
            <table class=" table">
              <thead class="content-center">
                <tr>
                  <th>No</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Kelas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1   ?>
              <?php  foreach ($siswa as $row ) : ?>
                <tr>
                  <td><?=$no++ ?></td>
                  <td><?= $row['nis'] ?></td>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['alamat'] ?></td>
                  <td><?= $row['kelas'] ?></td>
                  <td>
                    <a href="" class="btn btn-sm btn-warning">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-info ">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="<?=base_url('siswa/hapus_siswa')?>?id=<?=$row['siswa_id']?>" class="btn btn-sm btn-danger">
                      <i class="fa fw fa-trash-o"></i>
                    </a>
                  </td>
                </tr>
                <?php  endforeach ;  ?> 
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>