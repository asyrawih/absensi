<div class="content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Data Guru</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('guru/update') ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama_guru" value="<?= $guru[0]['nama_guru']?>"   required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kode_guru</label>
                            <input type="text" class="form-control" name="kode" value="<?= $guru[0]['kd_guru']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?= $guru[0]['alamat']?>" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp </label>
                            <input type="number" name="nohp" class="form-control" value="<?= $guru[0]['no_hp']?>" required>
                        </div>
                        <button class="btn btn-success" type="submit" name="submit">
                            <i class="fa fa-plane"></i>
                            update
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