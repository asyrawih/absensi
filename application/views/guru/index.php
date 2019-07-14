<div class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">
                  <i class="fa fa-user"></i>
                  Data Guru
                </h4>
                <a href="<?= base_url('guru/TambahGuru') ?>" class="btn btn-success float-right mr-4">
                  <i class="fa fa-pencil mx-2 text-warning"> </i>
                  Tambah Data
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary text-center">
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kode Guru</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <?php foreach ($guru as $row ) : ?>
                        <tr>
                          <td>1</td>
                          <td><?= $row['nama_guru'] ?></td>
                          <td><?= $row['kd_guru'] ?></td>
                          <td><?= $row['alamat'] ?></td>
                          <td>
                            <a href="<?= base_url('guru/edit/'.$row['guru_id']) ?>" class="btn btn-warning btn-sm">
                              <i class="fa fa-edit"></i>
                            </a>
                            <a href="<?= base_url('guru/show?id='.$row['guru_id'])?>" class="btn btn-info btn-sm">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="<?= base_url('guru/delete_guru?id='.$row['guru_id']) ?>" class="btn btn-danger btn-sm">
                              <i class="fa fa-trash "></i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach ;  ?> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>