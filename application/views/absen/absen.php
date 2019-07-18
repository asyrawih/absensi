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
                                <b>Kelas : <?php  
                                    if(!empty($kelas)){
                                        echo $kelas[0]['kelas'] ; 
                                    }
                                ?>  </b>
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
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                     
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th class="text-center">KET</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1 ;
                                    foreach ($kelas as $row) :  ?>
                                        <tr>
                                           
                                            <td>
                                                <!-- Ambil Data nis Dari model siswa  -->
                                                <?= $row['nis'] ?>
                                            </td>
                                            <td>
                                                <!-- ambil Id siswa_id Dari model siswa passing di value nya  -->
                                                <input type="hidden" name="siswa_id[]" value="<?= $row['siswa_id'] ?>" value="1">
                                                <?= $row['nama'] ?>
                                            </td>
                                            <td class="text-center ">
                                                <select name="ket[]" id="ket" class="form-control" required>
                                                    <option value="">Ket</option>
                                                    <option value="hadir">Hadir</option>
                                                    <option value="sakit">sakit</option>
                                                    <option value="izin">izin</option>
                                                </select>
                                            </td>
                                        </tr>
                                    <?php endforeach;  ?>
                                </tbody>
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>