<footer class="footer footer-black  footer-white ">
  <div class="container-fluid">
    <div class="row">
      <nav class="footer-nav">
        <ul>

        </ul>
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          ©
          <script>
            document.write(new Date().getFullYear())
          </script> made with <i class="fa fa-heart heart"></i> by Hanan Asyrawi & Shadow
        </span>
      </div>
    </div>
  </div>
</footer>
<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
  <div tabindex="0" class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div>
</div>
<div class="ps-scrollbar-y-rail" style="top: 0px; height: 747px; right: 0px;">
  <div tabindex="0" class="ps-scrollbar-y" style="top: 0px; height: 424px;"></div>
</div>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/core/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/bootstrap-notify.js"></script>
<script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
<script src="<?= base_url() ?>assets/js/plugins/chartjs.min.js"></script>
<!--  Notificaions Plugin    -->
<!-- Control Cnter for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url() ?>assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<script>
  // Agar Bisa Di scrolll jancokkkk 

  $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
  $('.main-panel').perfectScrollbar('update');

  <?php

  if ($this->session->has_userdata('pesan')) {
    echo  "$.notify({
        title : 'GAGAL ! ' , 
        message : 'Anda Sudah Absen hari ini'
      } , 
      {
        type : 'danger'
      }
      )";


    $this->session->unset_userdata('pesan');
  } elseif ($this->session->has_userdata('berhasil')) {

    echo  "$.notify({
        title : 'Berhasil ! ' , 
        message : 'Data Absen Berhasil Di Tambahkan'
      } , 
      {
        type : 'success'
      }
      )";
      
    $this->session->unset_userdata('berhasil');
  }

  ?>
</script>

</body>

</html>