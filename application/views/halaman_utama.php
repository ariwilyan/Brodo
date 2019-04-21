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

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href=""><img src="<?= base_url() ?>assets/gambar/banner.png" class="d-block w-100"></a>
                </div>
                <div class="carousel-item">
                  <a href=""><img src="<?= base_url() ?>assets/gambar/banner.png" class="d-block w-100"></a>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <img src="<?= base_url() ?>assets/gambar/grid1.PNG" class="img-fluid">
        </div>
        <div class="col-6">
            <img src="<?= base_url() ?>assets/gambar/grid2.PNG" class="img-fluid">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-4">
            <img src="<?= base_url() ?>assets/gambar/grid3.PNG" class="img-fluid">
        </div>
        <div class="col-4">
            <img src="<?= base_url() ?>assets/gambar/grid4.PNG" class="img-fluid">
        </div>
        <div class="col-4">
            <img src="<?= base_url() ?>assets/gambar/grid5.PNG" class="img-fluid">
        </div>
    </div>
 </div>
 <div class="block-langganan text-center mt-3 p-5">
    <h6>Gak mau ketinggalan promo dari Brodo?</h6>
    <span>berlangganan sekarang!</span>
    <form action="" method="POST" class="mt-2">
        <div class="input-group mb-3 input-langganan">
            <input type="text" class="form-control" placeholder="masukkan e-mail bro/sis" aria-label="masukkan e-mail bro/sis" aria-describedby="button-addon2">
            <div class="input-group-append">
                <input class="btn btn-ijo" type="submit" id="button-addon2" value="KIRIM">
            </div>
        </div>
    </form>
 </div>





