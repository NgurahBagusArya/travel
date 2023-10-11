<div class="hero"></div>
<div class="content"></div>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <h2>Login</h2>
            <form action="<?= BASEURL; ?>/login" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <?php if (isset($pesan)) : ?>
                    <div class="alert alert-danger">
                        <?php echo $pesan; ?>
                        <?php echo "anhadda"; ?>
                    </div>
                <?php endif; ?>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
