<div class="content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h3>Tambah Data Siswa</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('guru/proses_tambah')?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name = "nama_guru" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kode_guru</label>
                            <input type="text" class="form-control" name = "kode" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" name = "alamat" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp </label>
                            <input type="number" name="nohp" class="form-control" required>
                        </div>
                        <button class="btn btn-success" type="submit" name="submit">
                            <i class="fa fa-plane"></i>
                            Kirim
                        </button>
                        <a href="<?= base_url('guru') ?>" class="btn btn-primary">
                            <i class="fa fa-backward"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>