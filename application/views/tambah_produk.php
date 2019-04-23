

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
                    <a class="nav-link" href="<?php echo base_url("produk/halaman_produk"); ?>">Produk</a>
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
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Produk
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('produk/tambah')?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_item">NAMA ITEM</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="harga">HARGA</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">DESKRIPSI</label>
                            <textarea name="deskripsi" id="text" class="form-control"></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="foto">FOTO</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            <small class="form-text text-danger"><?= form_error('foto') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="sub_kategori">SUB KATEGORI</label>
                            <select name="subkategori" id="sub_kategori" class="form-control">
                                <?php
                                foreach ($sub_kategori as $data) {
                                ?>
                                <option value="<?= $data['no_sub_kategori'] ?>"><?= $data['nama_sub_kategori'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('subkategori') ?>.</small>
                        </div>
                        <button href="<?php base_url(); ?>admin/index" type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>