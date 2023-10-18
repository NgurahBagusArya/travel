<?php 

if (isset($_POST["tambahDataUser"])) {

    if( isset($_POST) > 0){
    echo"<script>
        alert('registrasi berhasil')
    </script>";
} else{
    echo"<script>
    alert('registrasi gagal')
</script>";
}
}
?>


<header>
    <div class="container d-flex justify-content-center">
        <section class="login-section">
            <div class="center-register">
                <div class="imgBx">
                    <img src="<?= BASEURL ?>\img\background-register" alt="Background Image">
                </div>
                <div class="contentBx">
                    <div class="formBx">
                        <br><br>
                        <h2>Register</h2>
                        <p>Welcome To TravelKuy</p>
                        <form action="<?= BASEURL ?>/login/tambah" method="post" class="form-login">
                            <div class="inputBx">
                                <span></span>
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username" style="background: transparent;" required>
                            </div>
                            <div class="inputBx">
                                <span></span>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="inputBx">
                                <span></span>
                                <input type="number" class="form-control" id="no_telp" placeholder="Nomer Telepon" name="no_telp" required>
                            </div>
                            <div class="inputBx">
                                <span></span>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                            <div class="inputBx-input">
                                <p>Have An Account? <a href="./index.html">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</header>