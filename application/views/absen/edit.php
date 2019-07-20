<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card card-category bg-success text-white">
                    <h4 class="ml-4" style="font-weight: bold">FILTER</h4>
                </div>
                <form action="">
                    <div class="card-body">
                        <div class="row">
                            <small class="ml-3" style="font-weight: bold">Silakan pilih filter :</small>
                            <div class="input-group">
                            <div class="col-lg-4 mt-2">
                                    <select name="mapel" id="kelas" class="form-control">
                                        <option value="">--mapel--</option>
                                        <?php  foreach($mapel as $row ) : ?> 
                                        <option value="<?=$row['nama_mapel']?>"><?=$row['nama_mapel']?></option>
                                        <?php  endforeach ;  ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <select name="kelas" id="kelas" class="form-control">
                                        <option value="">--kelas--</option>
                                        <?php  foreach($kelas as $row ) : ?> 
                                        <option value="<?=$row['tingkat']?>"><?=$row['tingkat']?></option>
                                        <?php  endforeach ;  ?>
                                    </select>
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <input class="form-control datepicker" placeholder="Tanggal" name="tanggal" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-2 mr-1">
                                <button type="submit" class="btn btn-sm btn-info">Cari</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- End Card Filter  -->
        <!-- Start Card Note :  -->
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card card-category bg-info text-white">
                    <h4 class="ml-4" style="font-weight: bold">KETERANGAN</h4>
                </div>
                <form action="">
                    <div class="card-body">
                        <div class="row">

                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- end Card note  -->
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-title">
                    <div class="card card-status bg-primary text-white">
                        <h3 class="ml-3 mt-2 display-5" style="font-weight: bold ; margin-top: 2px">EDIT DATA ABSENSI</h3>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-center">
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Ket</th>
                            <th>tanggal</th>
                            <th>mapel</th>
                            <th>Action</th>
                        </thead>
                        <tbody class="text-center">
                            <?php $no = 1 ;  foreach($data as $row ) : ?> 
                            <tr>
                                <td><?=$no++?></td>
                                <td><?= $row['nis'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['ket'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td><?= $row['nama_mapel'] ?></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-info btn-sm">Edit</a>
                                </td>
                            </tr>
                            <?php endforeach ; ?> 
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>