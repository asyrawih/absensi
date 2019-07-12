<div class="content">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h3>Data Siswa</h3>
          <a href="<?=base_url('siswa/tambahSiswa')?>" class="pull-right btn btn-success">
            <i class="fa fa-pencil"></i>
            Tambah Data
          </a>
        </div>
        <div class="card-body">
            <table class="table align-center">
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
                <tr>
                  <td>1</td>
                  <td>13020170137</td>
                  <td>Hanan</td>
                  <td>Tomoni</td>
                  <td>12</td>
                  <td>
                    <a href="" class="btn btn-sm btn-warning">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-info ">
                      <i class="fa fa-eye"></i>
                    </a>
                    <button type="submit" class="btn btn-sm btn-danger clearfix">
                        <i class="fa fa-trash-o"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>