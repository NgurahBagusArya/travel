<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?> /css/bootstrap.css">
</head>

<body>
  <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Navbar</a>
    <div class="form-inline">
      <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/users">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        </li>
      </ul>
    </div>
  </nav>

