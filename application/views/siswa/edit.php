
<div class="content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Data Siswa</h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('siswa/update/'.$siswa[0]['siswa_id'])?>" method="POST">
                        <input type="hidden" value="<?= $siswa[0]['siswa_id'] ?>" name="id" >
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name = "nama" value="<?= $siswa[0]['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nis</label>
                            <input type="number" class="form-control" name = "nis" value="<?= $siswa[0]['nis'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat</label>
                            <input type="text" class="form-control" name = "alamat" value="<?= $siswa[0]['alamat'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control   ">
                                <option value="">==Jenis Kelamain ==</option>
                                <option value="P"<?= $siswa[0]['jk'] === 'P' ? 'selected' : ''  ?>>Perempuan</option>
                                <option value="L"<?= $siswa[0]['jk'] === 'L' ? 'selected' : ''  ?>>Laki-Laki</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control" required>
                                <option value="">== Pilih Kelas ==  </option>
                                <option value="VII-1"<?= $siswa[0]['kelas'] === 'VII-1' ? 'selected' : ''  ?> >VII-1</option>
                                <option value="VII-2"<?= $siswa[0]['kelas'] === 'VII-2' ? 'selected' : ''  ?> >VII-2</option>
                                <option value="VII-3"<?= $siswa[0]['kelas'] === 'VII-3' ? 'selected' : ''  ?> >VII-3</option>
                                <option value="VII-4"<?= $siswa[0]['kelas'] === 'VII-4' ? 'selected' : ''  ?> >VII-4</option>
                                <option value="VII-5"<?= $siswa[0]['kelas'] === 'VII-5' ? 'selected' : ''  ?> >VII-5</option>
                                <option value="VII-6"<?= $siswa[0]['kelas'] === 'VII-6' ? 'selected' : ''  ?> >VII-6</option>
                                <option value="VII-7"<?= $siswa[0]['kelas'] === 'VII-7' ? 'selected' : ''  ?> >VII-7</option>
                                <option value="VII-8"<?= $siswa[0]['kelas'] === 'VII-8' ? 'selected' : ''  ?> >VII-8</option>
                                <option value="VII-9"<?= $siswa[0]['kelas'] === 'VII-9' ? 'selected' : ''  ?> >VII-9</option>
                                <!-- Kelas 8 -->
                                <option value="VIII-1"<?= $siswa[0]['kelas'] === 'VIII-1' ? 'selected' : ''  ?>>VIII-1</option>
                                <option value="VIII-2"<?= $siswa[0]['kelas'] === 'VIII-2' ? 'selected' : ''  ?>>VIII-2</option>
                                <option value="VIII-3"<?= $siswa[0]['kelas'] === 'VIII-3' ? 'selected' : ''  ?>>VIII-3</option>
                                <option value="VIII-4"<?= $siswa[0]['kelas'] === 'VIII-4' ? 'selected' : ''  ?>>VIII-4</option>
                                <option value="VIII-5"<?= $siswa[0]['kelas'] === 'VIII-5' ? 'selected' : ''  ?>>VIII-5</option>
                                <option value="VIII-6"<?= $siswa[0]['kelas'] === 'VIII-6' ? 'selected' : ''  ?>>VIII-6</option>
                                <option value="VIII-7"<?= $siswa[0]['kelas'] === 'VIII-7' ? 'selected' : ''  ?>>VIII-7</option>
                                <option value="VIII-8"<?= $siswa[0]['kelas'] === 'VIII-8' ? 'selected' : ''  ?>>VIII-8</option>
                                <option value="VIII-9"<?= $siswa[0]['kelas'] === 'VIII-9' ? 'selected' : ''  ?>>VIII-9</option>
                                <!-- Kelas 9  -->
                                <option value="IX-1"<?= $siswa[0]['kelas'] === 'IX-1' ? 'selected' : ''  ?>>IX-1</option>
                                <option value="IX-2"<?= $siswa[0]['kelas'] === 'IX-2' ? 'selected' : ''  ?>>IX-2</option>
                                <option value="IX-3"<?= $siswa[0]['kelas'] === 'IX-3' ? 'selected' : ''  ?>>IX-3</option>
                                <option value="IX-4"<?= $siswa[0]['kelas'] === 'IX-4' ? 'selected' : ''  ?>>IX-4</option>
                                <option value="IX-5"<?= $siswa[0]['kelas'] === 'IX-5' ? 'selected' : ''  ?>>IX-5</option>
                                <option value="IX-6"<?= $siswa[0]['kelas'] === 'IX-6' ? 'selected' : ''  ?>>IX-6</option>
                                <option value="IX-7"<?= $siswa[0]['kelas'] === 'IX-7' ? 'selected' : ''  ?>>IX-7</option>
                                <option value="IX-8"<?= $siswa[0]['kelas'] === 'IX-8' ? 'selected' : ''  ?>>IX-8</option>
                                <option value="IX-9"<?= $siswa[0]['kelas'] === 'IX-9' ? 'selected' : ''  ?>>IX-9</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp Wali / Orang Tua </label>
                            <input type="number" name="no_hp" class="form-control" value="<?= $siswa[0]['no_hp'] ?>" required>
                        </div>
                        <button class="btn btn-success" type="submit" name="submit">
                            <i class="fa fa-plane"></i>
                            Update
                        </button>
                        <a href="<?= base_url('siswa') ?>" class="btn btn-primary">
                            <i class="fa fa-backward"></i>
                            Kembali
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>