<div class="user-content">
    <div class="container">
        <br><br><br><br><br>
        <?php foreach ($data['trip'] as $row) : ?>
            <div class="col-md-4 col-sm-6 col-12 mb-4 text_right">
                <div class="ticket">
                    <img src="http://localhost<?= $row['image']; ?>" class="card-img-top" alt="Image">
                    <div class="isi">
                        <div class="judul"><?= $row['nama_trip']; ?></div>
                        <div class="harga">Rp.<?= $row['harga']; ?>,-</div>
                        <div class="slot">Sisa Tiket <?= $row['slot_tiket']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
    </div>
</div>