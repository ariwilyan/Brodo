
        <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color:white; border-bottom: 1px solid gainsboro; padding: 5px;">
            <ul class="nav navbar">
                <a href="<?= base_url() ?>user" ><span <span class="oi oi-chevron-left"></span></a>
                <a href="<?php echo base_url("user/index");?>" style="margin-left:500px;">
                    <img src="<?=base_url()?>assets/gambar/brodo1.png" alt="BRODO" width="110" height="30">
                </a>
            </ul>
        </nav>
        
		<div id="box">
            <div class="row">
                <div class="col-6 pr-0">
                    <a href="" class="btn btn-block btn-light active">Masuk</a>
                </div>
                <div class="col-6 pl-0">
                    <a href="<?=base_url()?>login/register" class="btn btn-block btn-light">Daftar</a>
                </div>
            </div>
            <div class="p-4">    
                <form action="<?=base_url()?>login/log_in" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email Brothers" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" placeholder="Kata Sandi" name="password">
                    </div>
                    <button type="submit" class="btn btn-block" style="background-color:#003142; color: white;">Masuk</button>
                </form>
                <a href="#" class="text-secondary float-right">lupa kata sandi?</a>
            </div>
            <hr>
            <div class="p-4">
                <a href="#" class="btn btn-default btn-block" style="background-color:#4267B2; color:white;">Masuk Melalui Facebook</a>
                <a href="#" class="btn btn-danger btn-block mt-2">Masuk Melalui Google</a>
            </div>
            <div class="" id="footer" style="background-color: lightgray;padding: 20px; margin-top: 45px; text-align:center;">
                    <p class="text-center" style="font-size:13px;color:black;">Belum punya akun?</p>
                    <a href="<?=base_url()?>login/register" class="text-dark"><h3 class="text-bold text-center" style="font-size:14px;color: #003142;">Buat akun Brothers sekarang.</h3></a>
                    
            </div>
        </div>
 
