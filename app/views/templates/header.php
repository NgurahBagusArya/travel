<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/navbar.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style-login.css">
</head>
  <body>
    <nav class="navbar">
      <div class="content">
        <div class="logo">
          <a href="<?= BASEURL ?>">Travel Kuy</a>
        </div>
        <ul class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li><a href="<?= BASEURL ?>">Home</a></li>
          <li><a href="<?= BASEURL ?>/About">About</a></li>
          <li><a href="<?= BASEURL ?>">Services</a></li>
          <li><a href="<?= BASEURL ?>">Features</a></li>
          <li><a href="<?= BASEURL ?>">Contact</a></li>
        </ul>
        <div class="icon menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>