<div class="modal-body"></div>

<form action="<?= BASEURL ?>/login/tambah" method="post">
    <!-- FORM REGISTER -->
    <div class="form-group">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>

    <div class="form-group">
        <label for="no_telp" class="form-label">Nomer Telephone</label>
        <input type="number" class="form-control" id="no_telp" placeholder="Nomer Telepon" name="no_telp" required>
    </div>

    <div class="form-group">
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
    </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Registrasi</button>

    </div>
</form>