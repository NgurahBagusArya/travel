<div class="hero"></div>
<div class="content"></div>

<section class="background">
    <div class="background-img">
    <img src="<?= BASEURL ?>/img/hero.jpg" alt="" height="">
    <div class="center">
        <h1>Login</h1>
        <P>Welcome Back To TravelKuy</P>
        <?php if (isset($pesan)) : ?>
            <div class="alert alert-danger">
                <?php echo $pesan; ?>
            </div>
        <?php endif; ?>
        <form action="<?= BASEURL; ?>/login" method="post">
            <div class="txt_field">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                <span></span>
            </div>
            <div class="txt_field">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                <span></span>
            </div>
            <div class="pass">Forgot Password? <a href="<?= BASEURL ?>/login/registrasi">Register</a></div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <br>
    </section>
</div>