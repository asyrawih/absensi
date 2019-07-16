<div class="content">
    <div class="row">
        <div class="col-lg-12 col md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-title">
                                <b>ABSEN SISWA</b>
                            </div>
                            <div class="card-title">
                                <b>Tahun Ajaran : <small></small></b>
                            </div>
                            <div class="card-title">
                                <b>Kelas : VII-1 </b>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card-title">
                                <b>Tanggal Absensi : <?= date('Y-m-d') ?></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="<?= base_url('absensi/proses_ab') ?>" method="POST">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th class="text-center">H | I | S | A </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($kelas as $row ) :  ?>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                          <!-- Ambil Data nis Dari model siswa  -->
                                          <?= $row['nis'] ?>
                                        </td>
                                        <td>
                                            <!-- ambil Id siswa_id Dari model siswa passing di value nya  -->
                                            <input type="hidden"  name="siswa_id[]" value="<?=$row['siswa_id']?>">
                                            <?= $row['nama'] ?>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"  name="hadir[]" <?= 'checked' ? 'value = "1"' : 'value = "0"'  ?>  >
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"   name="izin[]" <?= 'checked' ? 'value = "1"' : 'value = "0"'  ?> >
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"  name="sakit[]" <?= 'checked' ? 'value = "1"' : 'value = "0"'  ?> >
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox"  name="alpha[]" <?= 'checked' ? 'value = "1"' : 'value = "0"'  ?> >
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php  endforeach ;  ?>
                                </tbody>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>