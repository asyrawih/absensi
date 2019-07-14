
<div class="content">
    <div class="row">
        <?php  foreach($kelas as $row ) :   ?> 
        <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-air-baloon text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Kelas</p>
                                <p class="card-title">
                                    <?= $row['tingkat'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="<?=base_url('absensi/absen_kelas?kelas='.$row['tingkat'])?>" class="btn btn-sm btn-info">open</a>
                </div>
            </div>
        </div>
        <?php endforeach ;  ?>
    </div>
</div>