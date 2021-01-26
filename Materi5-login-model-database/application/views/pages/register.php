<div id="bg-reg"></div>
<section class="login-inner">
  <div class="login-middle">
    <div class="login-details">
      <img src="<?=LOCAL;?>/CDN/img/logo.svg" class="profile-img-card">
      <form method="post" action="<?= base_url('users/reg_user'); ?>">
        <div class="form-group">
          <label for="uname">Nama Pengguna:</label>
          <input type="text" name="username" class="form-control" placeholder="Masukkan username">
        </div>
        <div class="form-group">
          <label>Nama anda:</label>
          <input type="text" name="fullname" class="form-control" placeholder="Masukkan nama anda">
        </div>
        <div class="form-group">
          <label for="InputUname">Email address</label>
          <input type="email" name="email" class="form-control" placeholder="Masukkan email">
        </div>
        <div class="form-group">
          <label>Nomor telepon/ponsel:</label>
          <input type="text" name="phone" class="form-control" placeholder="Masukan nomor telp. anda">
        </div>
        <div class="form-group">
          <label for="InputPassword">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Masukkan kata sandi">
        </div>
        <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="DAFTAR">
      </form>
    </div>
  </div>
</section>
