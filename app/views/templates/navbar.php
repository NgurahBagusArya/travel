<nav class="navbar">
  <div class="content">

    <div class="logo">
      <a href="<?= BASEURL ?>">Travel Kuy</a>
    </div>

    <div class="navbar-menu">
      <div class="icon menu-btn">
        <i class="bi bi-list h3"></i>
      </div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="bi bi-x h3"></i>
        </div>
        <li><a href="<?= BASEURL ?>" class="nav-list">Home</a></li>
        <li><a href="<?= BASEURL ?>/About" class="nav-list">About</a></li>
        <li>
          <div class="dropdown show">
            <a class="dropdown-toggle nav-list" href="<?= BASEURL ?>/services" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="<?= BASEURL ?>/blog">Blog</a>
              <a class="dropdown-item" href="<?= BASEURL ?>/ticket">Buy Ticket</a>
            </div>
          </div>
        </li>
        <li><a href="<?= BASEURL ?>/contact" class="nav-list">Contact</a></li>
        <li>
          <?php
          session_start();
          if (isset($_SESSION['user_id'])) {
            // Pengguna sudah login
            echo '<a href="' . BASEURL . '/login/prosesLogout" class="nav-list">Logout</a>';
          } else {
            // Pengguna belum login
            echo '<a href="' . BASEURL . '/login" class="nav-list">Login</a>';
          }
          ?>
        </li>
      </ul>
    </div>

    <div class="center-spaceBetween">
    </div>
    
  </div>
</nav>