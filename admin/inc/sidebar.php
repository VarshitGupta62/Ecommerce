<!-- Right Sidebar (Theme Settings) -->
<style>
    .sub-navbar-nav .sub-nav-item {
        padding-left: 20px;
        letter-spacing: 0.5px;
        /* Space between letters */
        word-spacing: 2px;
        /* Space between words */

    }

    .sub-sub-navbar-nav .sub-sub-nav-item {
        padding-left: 40px;
        letter-spacing: 0.5px;
        /* Space between letters */
        word-spacing: 2px;
        margin: 8px;
        /* Space between words */
    }

    .sub-sub-navbar-nav {
        font-size: 14px;
        /* Smaller font for sub-menus */
        letter-spacing: 0.5px;
        /* Space between letters */
        word-spacing: 2px;
        /* Space between words */
    }

    a {
        color: #5D7196;
        text-decoration: none;
    }

    a:hover {
        color: white;
    }
</style>

<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>



<div>
    <!-- ========== App Menu Start ========== -->
    <div class="main-nav">
        <!-- Sidebar Logo -->
        <div class="logo-box">
            <?php
            // Query to fetch data
            $query = "SELECT  * FROM settings where setting_key = 'logo'";
            $result = mysqli_query($conn, $query) or die('Query Failed: ' . mysqli_error($conn));

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                        <a href='dashboard.php' class='logo-dark'>
                            <img src='uploads/$row[setting_value]' class='logo-sm' style='height: 100px; width:170px;' alt='logo sm'>
                            <img src='uploads/$row[setting_value]' class='logo-lg' style='height: 100px; width:170px;' alt='logo dark'>
                        </a>

                        <a href='dashboard.php' class='logo-light'>
                            <img src='uploads/$row[setting_value]' class='logo-sm' style='height: 100px; width:170px;' alt='logo sm'>
                            <img src='uploads/$row[setting_value]' class='logo-lg' style='height: 100px; width:170px;' alt='logo light'>
                        </a>
                        ";
                }
            } else {
                echo "Image not found.";
            } ?>

        </div>

        <div class="scrollbar" data-simplebar>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title">General</li>

                <!-- Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">
                        <span class="nav-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </span>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu">
                        <span class="nav-icon">
                            <i class="fas fa-home"></i>
                        </span>
                        <span class="nav-text">Shop Setting</span>
                        <span class="dropdown-arrow"></span>
                    </a>
                    <ul class="collapse" id="menu">
                        <li><a href="carousel.php" class="nav-link">Carousel</a></li>
                    </ul>
                    <ul class="collapse" id="menu">
                        <li><a href="carousel.php" class="nav-link">Carousel</a></li>
                    </ul>
                    <ul class="collapse" id="menu">
                        <li><a href="carousel.php" class="nav-link">Carousel</a></li>
                    </ul>
                    <ul class="collapse" id="menu">
                        <li><a href="carousel.php" class="nav-link">Carousel</a></li>
                    </ul>
                    <ul class="collapse" id="menu">
                        <li><a href="carousel.php" class="nav-link">Carousel</a></li>
                    </ul>
                </li>

                <!-- Courses -->
                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        <span class="nav-icon">
                            <i class="fas fa-info-circle"></i>
                        </span>
                        <span class="nav-text"> About US </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="course.php">
                        <span class="nav-icon">
                            <i class="fas fa-book"></i>
                        </span>
                        <span class="nav-text"> Courses </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                        <span class="nav-icon">
                            <i class="fas fa-address-book"></i>
                        </span>
                        <span class="nav-text"> Contact US </span>
                    </a>
                </li>

                <!-- Important Q&A -->

                <li class="nav-item">
                    <a class="nav-link" href="setting.php">
                        <span class="nav-icon">
                            <i class="fas fa-cog"></i>
                        </span>
                        <span class="nav-text"> Settings </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ========== App Menu End ========== -->
</div>
<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>