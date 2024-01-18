<?php

if (!isset($_SESSION['user_id']) || $_SESSION['level'] !== 'user') {
    // Jika sesi user_id tidak ada atau level bukan admin, arahkan kembali ke halaman login
    header('Location: ' . BASEURL . '/login');
    exit;
}

?>

    
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-abouta.css">
    <div class="section">
        <div class="container">
            <div class="title">
                <h1>About</h1>
            </div>
            <div class="contents">
                <div class="text">
                    <h5>"Travelkuy adalah usaha dari kami untuk menghadirkan solusi bagai para wisatawan yang ingin menikmati liburan tanpa ribet. Tujuan utama kami adalah membantu wisatawan untuk merencanakan liburan tanpa perlu memikirkan masalah kendaraan, penginapan, tiket destinasi wisata, dan hal-hal lainnya. Kami menyediakan layanan terintegrasi yang membuat pengalaman liburan menjadi lebih mudah dan menyenangkan. Dengan menggunakan jasa kami, wisatawan dapat fokus menikmati perjalanan mereka, sementara kami mengurus segala detailnya."</h5>
                </div>
            </div>
            <div class="img">
                <img src="<?= BASEURL ?>/img/GarudaWisnuKencana.jpg" height="400px">
            </div>
        </div>
    </div>
