    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-sm bg-white navbar-white justify-content-center">
        <!-- Logo -->
        <a class="navbar-brand" href="<?php echo base_url("user/index");?>" style="centered">
            <img src="<?= base_url() ?>assets/gambar/logo-brodo-new-active.png" alt="logo" style="width: 100px; height: 41px; display: block; background-position: 50%!important; background-size: 100px 33px!important;">
        </a>
    </nav>
    <div style="width: 350px; background: white; margin: 80px auto; padding: 30px 20px; border-radius: 6px;">
        <h2 style="text-align: center; font-style: bold;">BRODO</h4>
        <h5 style="text-align: center; margin-bottom: 20px;">Login Form - Admin</h5>

        <form>
            <div class="form-group">
                <label>Username</label><br/>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required><br/>

                <label>Password</label><br/>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required><br/>

                <input type="submit" value="MASUK">

                <br/>
                <br/>
                <center>
                    <a style="color: #232323; text-decoration: none; font-size: 10pt;" href="<?php echo base_url("login/index");?>">kembali ke Customer</a>
                </center>
            </div>
        </form>
    </div>
    <br/>