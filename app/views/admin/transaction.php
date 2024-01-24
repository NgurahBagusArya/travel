<div class="home_content">
  <div class="container mt-3">
    <div class="d-flex justify-content-between">
    <h3 class="textbiru mt-3 mouse-pointer" id="userTransaction">User Transaction</h3>
    <h3 class="textbiru mt-3  mouse-pointer" id="historyTransaction">Transaction History</h3>
    </div>

    <hr>

    <div id="konten_blog" class="row mt-5">
      <?php foreach ($data['booking'] as $row) : ?>
        <div class="col-md-4 col-sm-6 col-12 mb-4 text_right" id="transactionCard<?= $row['id']; ?>">
          <div class="card"  >
            <div class="card-body">
              <p class="card-author ">Buyer : <span class="text-primary"><?= $row['username']; ?></span></p>
              <p class="card-text ">Ticket : <span class="text-primary"><?= $row['trip_name']; ?></span></p>

              <p class="card-text ">Ticket Buyer : <?= $row['name']; ?></p>
              <p class="card-text ">Ticket Buyer Telp : <?= $row['telp']; ?></p>
              <p class="card-text ">Ticket Buyer Email: <?= $row['email']; ?></p>
              <p class="card-text ">Ticket Buyer Passager : <?= $row['passager']; ?></p>
              <p class="card-text">Price : <?= number_format($row['price']); ?> -Rp</p>
              <p class="card-text">Buy Date: <?= $row['tanggal_pemesanan']; ?></p>
              <p class="card-text"><span class="transactionStatus" data-id="<?= $row['id']; ?>">Status: <?= $row['status_pemesanan']; ?></span></p>
              <?php
              if ($row['status_pemesanan'] === 'Sedang Diverivikasi') {
                echo '<a href="' . BASEURL . '/admin/verivikasiPembayaran/' . $row['id'] . '" class="btn btn-success " onclick="return confirm(\'Verivikasi Pembayaran?\');">Verivikasi</a>';
              } else if ($row['status_pemesanan'] === 'Sudah DIBAYAR') {
                echo '<a href="' . BASEURL . '/admin/batalkanVerivikasi/' . $row['id'] . '" class="btn btn-warning " onclick="return confirm(\'Batalkan Verivikasi?\');">UnVerivikasi</a></a>';
              } else {
                echo '';
              }
              ?>

              <?php
              if ($row['status_pemesanan'] === 'Transaksi Berakhir') {
                echo '';
              } else {
                echo '<a href="' . BASEURL . '/admin/akhiriTransaksi/' . $row['id'] . '" class="btn btn-danger " onclick="return confirm(\'Verivikasi Pembayaran?\');">Akhiri Transaksi</a>';
              }
              ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>