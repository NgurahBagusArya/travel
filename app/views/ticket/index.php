<?php



if (!isset($_SESSION['user_id']) || $_SESSION['level'] !== 'user') {
    // Jika sesi user_id tidak ada atau level bukan admin, arahkan kembali ke halaman login
    header('Location: ' . BASEURL . '/login');
    exit;
}

?>


<div class="header-block"></div>

<div class="ticket">
    <?php foreach ($data['trip'] as $row) : ?>
        <div class="centers">
            <a href="<?= BASEURL ?>/ticket/buy/<?= $row['trip_id']; ?>">
                <div class="article-card">
                    <div class="content">
                        <p class="date"><?= $row['price']; ?></p>
                        <p class="title"><?= $row['nama_trip']; ?></p>
                    </div>
                    <img src="http://localhost<?= $row['image']; ?>" alt="article-cover" />
                </div>
        </div>
        </a>
    <?php endforeach; ?>
</div>