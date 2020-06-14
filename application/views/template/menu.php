<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?php echo site_url('Auth/'); ?>" class="brand-link">
    <!-- <img src="<?php echo base_url('assets/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light" style="font-size: 90%;">
      <center>POLKES 05.09.02 LUMAJANG</center>
    </span>
  </a>
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?php echo site_url('Auth/') ?>" class="nav-link">
            <!-- <?php if ($menu == 'Home') {
                    echo 'active';
                  } else {
                  } ?> -->
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-header">MASTER DATA</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Pasien
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Pasien/form') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Form Pasien</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Pasien/') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Data Pasien</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Antrian
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Antrian') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Antrian</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Antrianpoliumum/') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Poli Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Antrianpoligigi/') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Poli Gigi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Antrianpolikia/') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Poli Kia</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?php echo site_url('Pegawai/') ?>" class="nav-link">
            <!-- <?php if ($menu == 'Pegawai Medis') {
                    echo 'active';
                  } else {
                  } ?> -->
            <i class="far fa-circle nav-icon"></i>
            <p>Pegawai Medis </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('Poliklinik/') ?>" class="nav-link">
            <!-- <?php if ($menu == 'Poliklinik') {
                    echo 'active';
                  } else {
                  } ?> -->
            <i class="far fa-circle nav-icon"></i>
            <p>Poliklinik </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Antrian/') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Antrian Pasien</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('Kunjungan/') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kunjungan</p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Pemeriksaan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Pemeriksaan/pemeriksaanUmum') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Pemeriksaan/pemeriksaanKiaKb') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>KIA/KB</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Pemeriksaan/pemeriksaanGigiMulut') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Gigi dan Mulut</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Hasil Pemeriksaan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('HasilPemeriksaan/pemeriksaanUmum') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('HasilPemeriksaan/pemeriksaanKiaKb') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>KIA/KB</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('HasilPemeriksaan/pemeriksaanGigiMulut') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Gigi dan Mulut</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              SOAP
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('Soap/Umum') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Umum</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Soap/KiaKb') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>KIA/KB</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('') ?>" class="nav-link">
                <i class="far nav-icon"></i>
                <p>Gigi dan Mulut</p>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a href="<?php echo base_url('Soap') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>SOAP </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('Soap/revisiSoap') ?>" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>SOAP (revisi)(ngubah tampilan hasil pmriksaan spt pemeriksaan</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>