

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
                    Form Ubah Data Produk
                </div>
                <div class="card-body">
                    <?php
                    foreach ($item as $row) {
                    ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $row["ID_item"] ?>">
                        <input type="hidden" name="foto_lama" value="<?php echo $row["Foto"] ?>">
                        <div class="form-group">
                            <label for="nama">Nama Item</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row["Nama_item"] ?>">
                            <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="username">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $row["Harga_item"] ?>">
                            <small class="form-text text-danger"><?= form_error('harga') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Deskripsi</label>
                            <textarea class="form-control" id="text" name="deskripsi"><?php echo $row["Deskripsi_item"] ?></textarea>
                            <small class="form-text text-danger"><?= form_error('deskripsi') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="nohp">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $row["Foto"] ?>">
                            <small class="form-text text-danger"><?= form_error('foto') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="sub_kategori">Sub Kategori</label>
                            <select name="subkategori" id="sub_kategori" class="form-control">
                                <?php
                                foreach ($sub_kategori as $data) {
                                    if ($data['no_sub_kategori']==$row["no_sub_kategori"]) {
                                        ?>
                                    <option value="<?= $data['no_sub_kategori'] ?>" selected><?= $data['nama_sub_kategori'] ?></option>
                                <?php
                                } else {
                                    ?>
                                    <option value="<?= $data['no_sub_kategori'] ?>"><?= $data['nama_sub_kategori'] ?></option>
                                <?php
                                }
                            }
                            ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('subkategori') ?>.</small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div> 