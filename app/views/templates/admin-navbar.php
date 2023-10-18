
<body>
    <!-- Top Navigation -->
    <nav>
        <div class="left">
            <i class="bi bi-list" id="btn"></i>
            <span class="logo">
                <a href="index.php">
                    <span class="title-logo">Admin Page</span>
                </a>
            </span>
        </div>

        <div class="right">
            <div class="dropdown">
                <div type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-plus"></i>
                </div>
                <div class="dropdown-menu" aria-labelledby="triggerId">
                    <a class="dropdown-item" href="system/create-kelas.php">Create Class</a>
                    <a class="dropdown-item" href="system/join-kelas.php">Join Class</a>
                </div>
            </div>
            <span class="logo">
                <img class="user-profile" src="../img/profile.png" alt="" width="32px" height="32px">
            </span>
        </div>
    </nav>

    <!-- Left Navigation -->
    <div class="sidebar">
        <div class="position"></div>
        <div class="side-border">
            <div class="sidebar-list">
                <ul class="nav_list">
                    <li class="top-list">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search..." name="" value="">
                    </li>
                    <li class="dashboard">
                        <a href="<?= BASEURL ?>/admin">
                            <i class="bi bi-grid"></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href='#'>
                            <i class='bi bi-person'></i>
                            <span class='links_name'>User</span>
                        </a>
                    </li>
                    <li>
                        <a href='<?= BASEURL ?>/admin/blog'>
                            <i class="bi bi-newspaper"></i>
                            <span class='links_name'>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.php">
                            <i class="bi bi-gear"></i>
                            <span class="links_name">Settings</span>
                        </a>
                    </li>
                </ul>
                <div class="profile_content">
                    <div class="profile">
                        <div class="profile_details">
                            <a href="profile.php"><img src="../img/profile.png" alt=""></a>
                            <div class="name_job">
                                <div class="name" id="text-container">Leonardo</div>
                                <div class="job">Head-Admin</div>
                            </div>
                        </div>
                        <a href="<?= BASEURL ?>/login/prosesLogout">
                            <i class="bi bi-box-arrow-right" id="log_out"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home_content" id="content">
        <div class="text">