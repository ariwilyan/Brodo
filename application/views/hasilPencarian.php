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

<div class="container-fluid mt-3 px-5" style="background-color: #F8F8F8;">
  <div class="row pt-5 mt-5">
    <div class="col-12">
      <h5>"KENT"</h5>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <p>Menampilkan 6 produk <b>kent</b> (<b>6</b> dari <b>6</b>)</p>
    </div>
    <div class="col-6">
      <div class="btn-toolbar" role="toolbar">
        <div class="btn-group" role="group">
          <button class="btn btn-light border rounded-0" style="width: 46.5px; height: 40px;">.</button>
          <button class="btn btn-light border rounded-0" style="width: 46.5px; height: 40px;">.</button>
        </div>
      </div>
    </div>
    <div class="col-6">
      <form class="form-inline float-right">
        <select class="custom-select mx-4">
          <option selected>Urutkan</option>
          <option value="">Produk Terbaru</option>
          <option value="">Produk Terlama</option>
          <option value="">Nama (A-Z)</option>
          <option value="">Nama (Z-A)</option>
        </select>
        <div class="input-group">
              <select class="input-group-prepend custom-select">
                <option selected>Filter Berdasarkan</option>
              </select>
              <div class="input-group-append input-group-text" style="background-color: #0B3F57; color: white;">V</div>
        </div>
      </form>
    </div>
  </div>
  <hr>
    <div class="row my-4">
        <div class="col-4">
              <div class="wrapper border">
                <div class="row">
                  <div class="col-12">
                      <a href="<?= base_url('Produk'); ?>"><img src="<?= base_url() ?>assets/gambar/produk/1.jpg" class="img-fluid"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p class="mb-0 mt-3">Generic Play Grey WS</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p style="color: #F57224;">Rp 495.000</p>
                    </div>
                  </div>
              </div>
            </div>
        <div class="col-4">
              <div class="wrapper border">
                <div class="row">
                  <div class="col-12">
                      <a href="<?= base_url('Produk'); ?>"><img src="<?= base_url() ?>assets/gambar/produk/2.jpg" class="img-fluid"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p class="mb-0 mt-3">Generic Play Grey WS</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p style="color: #F57224;">Rp 495.000</p>
                    </div>
                  </div>
              </div>
            </div>
        <div class="col-4">
              <div class="wrapper border">
                <div class="row">
                  <div class="col-12">
                      <a href="<?= base_url('Produk'); ?>"><img src="<?= base_url() ?>assets/gambar/produk/3.jpg" class="img-fluid"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p class="mb-0 mt-3">Generic Play Mustard WS</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p style="color: #F57224;">Rp 495.000</p>
                    </div>
                  </div>
              </div>
            </div>
    </div>
    <div class="row my-4">
        <div class="col-4">
              <div class="wrapper border">
                <div class="row">
                  <div class="col-12">
                      <a href="<?= base_url('Produk'); ?>"><img src="<?= base_url() ?>assets/gambar/produk/4.jpg" class="img-fluid"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p class="mb-0 mt-3">Generic Play Navy White Sole</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p style="color: #F57224;">Rp 495.000</p>
                    </div>
                  </div>
              </div>
            </div>
        <div class="col-4">
              <div class="wrapper border">
                <div class="row">
                  <div class="col-12">
                      <a href="<?= base_url('Produk'); ?>"><img src="<?= base_url() ?>assets/gambar/produk/5.jpg" class="img-fluid"></a>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p class="mb-0 mt-3">Generic Play Black WS</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-12 mx-2">
                      <p style="color: #F57224;">Rp 495.000</p>
                    </div>
                  </div>
              </div>
            </div>
    </div>
    <div class="row my-4">
      <div class="col text-center">
    <button class="btn btn-dark rounded-0" style="background-color: #0B3F57">1</button>
        
      </div>
    </div>
    <hr class="bg-dark">
    <div class="row my-4">
      <div class="col text-center">
        <p>Gak bosan pakai sepatu yang itu – itu aja? <a href="#" style="color: black; font-size: 14px;"><b>Lihat Selengkapnya...</b></a></p>
      </div>
    </div>
</html>
