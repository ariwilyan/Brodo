<div class="container" style="margin-top:100px;">
    <?php if ($this->session->flashdata('success')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data ADMIN <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

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

    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data user ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar ADMIN</h3>
            <?php if (empty($admin)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA ADMIN</th>
                        <th class="text-center" scope="col">USERNAME</th>
                        <th class="text-center" scope="col">NO HP</th>
                        <th class="text-center" scope="col">ALAMAT</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin as $adm) : ?>
                    <tr>
                        <td class="text-center"><?= $adm['Nama_admin']; ?></td>
                        <td class="text-center"><?= $adm['Username']; ?></td>
                        <td class="text-center"><?= $adm['No_hp']; ?></td>
                        <td class="text-center"><?= $adm['Alamat']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>admin/hapus/<?= $adm['ID_admin'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                            <a href="<?= base_url(); ?>admin/ubah/<?= $adm['ID_admin'] ?>" class="badge badge-success float-center" ?>ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>admin/tambah" class="btn btn-primary">Tambah Data User</a>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div> 