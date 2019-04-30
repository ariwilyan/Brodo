<nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top justify-content-between">
  <a href="<?= base_url('Cart'); ?>" style="color: #0B3F57; text-decoration: none;"><h1><</h1></a>
  <a class="navbar-brand" href="<?= base_url() ?>user"><img src="<?= base_url() ?>assets/gambar/brodo1.png" class="img-brand"></a>
  <span></span>
</nav>

<div class="container-fluid px-5 pt-5 mt-5">
  <div class="row">
    <div class="col-4">
      <div class="row text-light" style="background-color: #023C57">
        <div class="col-12">
          <p class="pt-3"><b>1 Data Diri</b></p>
        </div>
      </div>
      <div class="row overflow-auto" style="background: rgba(232, 232, 232, 0.3); height: 67.5vh;">
        <div class="col-12 py-3">
          <p>Masukkan data alamat tujuan untuk pengiriman barang</p>
          <form>
            <input class="form-control my-3" type="text" name="email">
            <input class="form-control my-3" type="text" name="nama">
          </form>
          <div class="wrapper border p-4">
            <div class="row">
              <div class="col-6 text-left">
                <p style="color: #DD4949; font-size: 14px">Alamat Tidak Tersedia</p>
              </div>
              <div class="col-6 text-right">
                <p style="color: #216A94; font-size: 14px">Ubah ></p>
              </div>
            </div>
            <hr>
            <p style="font-size: 14px">Tambahkan alamat baru Bro/Sis</p>
          </div>
          <form>
            <input class="form-control my-3" type="text" name="no_hp" placeholder="Nomor HP">
            <textarea class="form-control my-3" type="info" name="info" placeholder="Informasi tambahan/catatan..."></textarea>
          </form>

        </div>
      </div>
      <div class="row text-light" style="background-color: #023C57">
        <div class="col-12">
          <p class="pt-3 text-center">LANJUT KE PENGIRIMAN</p>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="row text-light" style="background-color: #023C57">
        <div class="col-12">
          <p class="pt-3"><b>2 Pengiriman</b></p>
        </div>
      </div>
      <div class="row" style="background: rgba(232, 232, 232, 0.3); ">
        <div class="col-12 py-3">
          <div class="row wrapper border border-secondary rounded-0">
            <div class="col-1 bg-secondary"></div>
            <div class="col-11">
              <div class="row">
                <div class="col-6 border border-secondary p-4">
                  <p class="text-center" style="font-size: 14px;">Kurir</p>
                </div>
                <div class="col-6 border border-secondary pt-3 px-4">
                  <p class="text-center" style="font-size: 14px;">Estimasi Biaya Pengiriman</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12 border border-secondary pt-2">
                  <p class="text-center" style="font-size: 14px;">Biaya Kirim</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-light" style="background-color: #023C57;">
        <div class="col-12">
          <p class="pt-3"><b>3 Pembayaran</b></p>
        </div>
      </div>
      <div class="container-fluid overflow-auto" style="height: 31.6vh;">
      <div class="row">
        <div class="col-12">
          <p class="pt-3"><b>Transfer Virtual Account (Verifikasi Otomatis)</b></p>
          <p style="font-size: 14px;">Pembayaran diproses otomatis, jadi Bro/Sis tidak perlu melakukan konfirmasi pembayaran dan mencantumkan bukti transfer.</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-12">
          <p class="pt-3"><b>Bank Transfer</b></p>
          <p style="font-size: 14px;">Pembayaran diproses maksimal <b>1x24</b> jam setelah Brothers melakukan konfirmasi dan mengirimkan bukti transfer.</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-12">
          <p class="pt-3"><b>e-Wallet</b></p>
          <p style="font-size: 14px;">Pembayaran diproses otomatis, jadi Bro/Sis tidak perlu melakukan konfirmasi pembayaran dan mencantumkan bukti transfer.</p>
        </div>
      </div>
      </div>
      <div class="row text-light" style="background-color: #023C57">
        <div class="col-12">
          <p class="pt-3 text-center">SELANJUTNYA</p>
        </div>
      </div>
    </div>    
    <div class="col-4">
      <div class="row text-light" style="background-color: #023C57">
        <div class="col-12">
          <p class="pt-3"><b>4 Detil Pemesanan</b></p>
        </div>
      </div>
      <div class="row" style="background: rgba(232, 232, 232, 0.3); height: 67.5vh;">
        <div class="col-12">
          <div class="row">
            <div class="col-12 py-3">
              <form>
                <div class="form-row">
                  <div class="col-auto" style="width: 100%">
                    <div class="input-group">
                      <input class="form-control input-group-prepend" type="text" name="kupon" placeholder="Kode Kupon">
                      <button class="btn text-light" style="background-color: #023C57">GUNAKAN</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="wrapper border border-secondary pt-2 px-2" style="font-size: 14px;">
                Total Belanja
                <hr>
                <span style="color: red;">Diskon</span>
                <hr>
                Ongkos Kirim
                <hr>
                Total Dibayar
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-light" style="background-color: #023C57">
        <div class="col-12">
          <p class="pt-3 text-center">LANJUT KE PENGIRIMAN</p>
        </div>
      </div>

    </div>
  </div>
</div>
</html>
