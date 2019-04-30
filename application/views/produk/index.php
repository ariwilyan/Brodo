<nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top">
  <a class="navbar-brand" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/brodo1.png" class="img-brand"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">koleksi</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><b>All</b></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><b>Terbaru</b></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><b>Best Seller</b></a>
        </div>
      </li>
      <li class="nav-item">
        <span class="nav-link">|</span>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">kategori</a>
        <div class="dropdown-menu dropdown-kategori" aria-labelledby="navbarDropdown1">
          <div class="row">
            <?php
            foreach ($kategori as $row) {
              ?>
              <div class="float-left mr-3">
                <span class="dropdown-item"><b><?= $row['nama_kategori'] ?></b></span>
                <div class="dropdown-divider"></div>
                <?php
                $sub = $this->sub_kategori_model->getSubKategoriByKategori($row['no_kategori']);
                foreach ($sub as $data) {
                  ?>
                  <a class="dropdown-item" href="#"><?= $data['nama_sub_kategori'] ?></a>
                  <?php
                }
                ?>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <span class="nav-link">|</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">jurnal</a>
      </li>
      <li class="nav-item">
        <span class="nav-link">|</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">tentang kami</a>
      </li>
      <li class="nav-item">
        <span class="nav-link">|</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">toko kami</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <ul class="navbar-nav">
      <li class="navbar-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-dark"><span class="oi oi-person"></span></span></a>
        <div class="dropdown-menu dropdown-menu-right dropdown-login" aria-labelledby="navbarDropdown2">
          <?php
          if ($this->session->has_userdata('login')) {
            ?>
            <a class="dropdown-item" href="#"><b>Pengguna</b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Halaman Pengguna</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Riwayat Pesanan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Daftar Alamat</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Halaman Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><b>Lacak</b></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Lacak Pengiriman</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Pengembalian & Penukaran</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url() ?>user/logout"><b>Keluar</b></a>
            <?php
          } else {
            ?>
            <h3 class="p-3"><span class="oi oi-person"></span> Masuk Ke Akun</h3>
            <form action="<?= base_url() ?>login/log_in" method="POST" class="px-4 py-3">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email bro/sis" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
              </div>
              <button type="submit" class="btn w-100 btn-ijo">MASUK</button>
            </form>
            <a href="#" class="text-secondary text-right dropdown-item lupa-sandi badge p-3">Lupa kata sandi?</a>
            <hr>
            <div class="p-3">
              <button class="btn btn-primary w-100">MASUK DENGAN FACEBOOK</button><br>
              <button class="btn btn-danger w-100 mt-2">MASUK DENGAN GOOGLE</button>
            </div>
            <div class="bg-gainsboro p-3 mt-4 text-center">
              <span>Belum punya akun?</span> <br>
              <a href="<?= base_url() ?>login" class="text-dark"><h6>Buat akun Brothers sekarang</h6></a>
            </div>
            <?php
          }
          ?>
        </div>
      </li>
      <li class="navbar-item">
        <a href="#" class="nav-link"><span class="text-dark"><span class="oi oi-cart"></span></span></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid px-5 pt-5 mt-5" style="background-color: #E4E4E4;">
  <div class="row">
    <div class="col-1">
      
    </div>
    <div class="col-6">
      <img src="<?= base_url() ?>assets/gambar/produk/1.jpg" width="500px" height="400px">
    </div>
    <div class="col-5">
      <h3><b>Generic Play Grey WS</b></h3>
      <p>Rp 495.000</p>
      <select class="custom-select border-dark">
        <option selected>PILIH UKURAN</option>
        <option value="">39(1)</option>
        <option value="">40(1)</option>
        <option value="">41(1)</option>
      </select>
      <a class="btn my-2" href="<?= base_url('Cart'); ?>" style="width: 100%; background-color: #0B3F57; color: #FFFFFF; border-color: #0B3F57">TAMBAH KE KERANJANG</a>
      <h5>Perkiraan Ongkos Kirim</h5>
      <form>
        <input class="form-control rounded" type="text" name="alamat" placeholder="Ketikan nama Kota atau Kecamatan ..." style="width: 100%;">
      </form>
      <h5><b>Deskripsi</b></h5>
      <h5>Produk</h5>
      <p style="font-size: 14px;">Untuk Bro yang super-aktif dalam kegiatan sehari - hari, pastikan tampilan Bro tetap keren dari kepala hingga ke kaki, dari pagi hingga ke sore hari. Aktif dan pastikan kaki Brothers tetap terjaga kenyamanannya - Sepatu hybrid formal-kasual super ringan ini lah Jagonya, Generic Play dengan berbagai varian warna yang autentik!<br>Upper: High Performance PU Suede Leather<br>Lining : Elastane Fabric<br>Insole: E+<br>Sole: TPR Outsole<br>Construction: High Pressure Cementing & Side Stitch<br>Lace Loop on Tongue<br>Brodo Debossed Logo<br>Sizing sepatu ini UP-SIZE*<br>*Jika Brothers biasanya menggunakan Size 44, pada sepatu ini Brothers cukup menggunakan ukuran sepatu Size 43</p>
    </div>
  </div>
</div>
</html>
