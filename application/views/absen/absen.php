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
                                <b>Kelas : <small></small></b>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card-title">
                                <b>Tanggal Absensi :</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="<?= base_url('absensi/proses_absen') ?>" method="POST">
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
                                    <tr>
                                        <td>1</td>
                                        <td>
                                          13020170137
                                        </td>
                                        <td>
                                            <input type="hidden" value="1" name="siswa_id" value="1">
                                            hanan asyrawi rivai
                                        </td>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="hadir">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="0" name="izin">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="0" name="sakit">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="0" name="alpha">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
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