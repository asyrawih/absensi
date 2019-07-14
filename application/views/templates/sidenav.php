<body>
  <div class="wrapper ">
    <div class="sidebar" data-active-color="danger" data-color="white">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a class="simple-text logo-mini" href="http://www.creative-tim.com">
          <div class="logo-image-small">
            <img src="<?=base_url()?>assets/img/logo-small.png">
          </div>
        </a>
        <a class="simple-text logo-normal" href="http://www.creative-tim.com">
          <?= $title?>
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper ps-container ps-theme-default ps-active-x" data-ps-id="490156e7-0edf-9696-dc39-eeb31908bd58">
        <ul class="nav">
          <li class="active ">
            <a href="<?= base_url() ?>">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('absensi')?>">
              <i class="nc-icon nc-alert-circle-i"></i>
              <p>Absen</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('siswa')?>">
              <i class="nc-icon nc-user nc-single-02"></i>
              <p>Siswa</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('guru')?>">
              <i class="nc-icon nc-album-2"></i>
              <p>Guru</p>
            </a>
          </li> 
          <li>
            <a href="<?=base_url('laporan')?>">
              <i class="nc-icon report nc-book-bookmark"></i>
              <p>laporan Absensi</p>
            </a>
          </li>
          <li>
            <a href="<?=base_url('settings')?>">
              <i class="nc-icon report nc-settings-gear-65"></i>
              <p>Settings</p>
            </a>
          </li>
        </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; width: 260px; bottom: 0px;"><div tabindex="0" class="ps-scrollbar-x" style="left: 0px; width: 258px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div tabindex="0" class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
    </div>