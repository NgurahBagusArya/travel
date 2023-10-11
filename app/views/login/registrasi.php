<div class="modal-body"></div>

<form action="<?= BASEURL ?>/Users" method="post">
    <!-- FORM REGISTER -->
    <div class="form-group">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>

    <div class="form-group">
        <label for="no_telp" class="form-label">Nomer Telephone</label>
        <input type="text" class="form-control" id="no_telp" placeholder="no_telp" name="no_telp">
    </div>

    <div class="form-group">
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password">
    </div>

    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Registrasi</button>

    </div>
</form>