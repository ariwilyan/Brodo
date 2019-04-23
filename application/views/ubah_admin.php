

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
                    <a class="nav-link" href="<?= base_url("produk/halaman_produk") ?>">Produk</a>
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

<div class="container" style="margin-top:100px;">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Admin
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $admin->ID_item ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $admin->Nama_admin ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $admin->Username ?>">
                            <small class="form-text text-danger"><?= form_error('username') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $admin->Password ?>">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nohp">No HP</label>
                            <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $admin->No_hp ?>">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $admin->Alamat ?>">
                            <small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> 