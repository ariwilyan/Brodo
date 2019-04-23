
        <nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color:white; border-bottom: 1px solid gainsboro; padding: 5px;">
            <ul class="nav navbar">
                <p><span class="glyphicon glyphicon-chevron-left"></span></p>
                <a href="<?php echo base_url("user/index");?>" style="margin-left:500px;">
                    <img src="<?=base_url()?>assets/gambar/brodo1.png" alt="BRODO" width="110" height="30">
                </a>
            </ul>
        </nav>
        
		<div id="box">
            <div class="row">
                <div class="col-6 pr-0">
                    <a href="<?=base_url()?>login" class="btn btn-block btn-light">Masuk</a>
                </div>
                <div class="col-6 pl-0">
                    <a href="" class="btn btn-block btn-light active">Daftar</a>
                </div>
            </div>
            <div class="p-4">    
                <form action="/action_page.php">
                    <div class="form-group">
                            <select class="custom-select">
                                    <option value="Pilih Panggilan">Pilih Panggilan</option>
                                    <option value="Bro">Bro</option>
                                    <option value="Sis">Sis</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap Brothers" name="Nama_user">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email Brothers" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pws" placeholder="Kata Sandi" name="password">
                    </div>
                    <button type="submit" class="btn btn-block" style="background-color:#003142; color: white;">DAFTAR</button>
                    <label><input type="checkbox" name="check"> Saya telah membaca dan menyetujui ketentuan serta kebijakan privasi dari Brodo</label>
                </form>
            </div>
            <hr>
            <div class="p-4">
                <a href="#" class="btn btn-default btn-block" style="background-color:#4267B2; color:white;">DAFTAR DENGAN FACEBOOK</a>
                <a href="#" class="btn btn-danger btn-block mt-2">DAFTAR DENGAN GOOGLE</a>
            </div>
            <div class="" id="footer" style="background-color: lightgray;padding: 20px; margin-top: 45px; text-align:center;">
                    <p class="text-center" style="font-size:13px;color:black;">Sudah punya akun?</p>
                    <a href="<?=base_url()?>login" class="text-dark"><h3 class="text-bold text-center" style="font-size:14px;color: #003142;">Login ke akun Brothers sekarang.</h3></a> 
            </div>
        </div>
        
  
