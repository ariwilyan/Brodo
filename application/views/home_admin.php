<nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top">
  <a class="navbar-brand" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/brodo1.png" class="img-brand"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("admin/landing_home"); ?>">Home</a>
        </li>
        <li class="nav-item">
          <span class="nav-link">|</span>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="<?php echo base_url("admin/index"); ?>">Admin</a>
        </li>
        <li class="nav-item">
            <span class="nav-link">|</span>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
        </li>
        <li class="nav-item">
            <span class="nav-link">|</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">About</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <ul class="navbar-nav">
        <li class="navbar-item dropdown">
            <a class="nav-link" href="<?php echo base_url("admin/logout"); ?>">Logout</a>
        </li>  
    </ul>
  </div>
</nav>
<div class="container ">
    <br><br><br><br>
    <h1>Selamat datang <?= $this->session->login["Username"] ?> . . .</h1>
    <br><br><br><br><br><br><br><br><br><br>
</div> 