<div id="bg-login"></div>
<section class="login-inner">
    <div class="login-middle">
        <div class="login-details">
            <img src="<?= LOCAL;?>/CDN/img/logo.svg" class="profile-img-card">
            <form method="post" action="<?= base_url('users/login_user'); ?>">
                <div class="form-group">
                    <label for="InputEmail">
                        Email address
                    </label>
                    <input name="user_email" type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Masukkan email" required="required">
                    <small id="emailHelp" class="form-text text-muted">
                        Kami tidak akan memberitahukan email anda pada siapapun.
                    </small>
                </div>
                <div class="form-group">
                    <label for="InputPassword">
                        Password
                    </label>
                    <input name="user_pass" type="password" class="form-control"placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <div class="forgot">
                        <a href="#">
                            Lupa kata sandi ?
                        </a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </form>
        </div>
    </div>
</section>
