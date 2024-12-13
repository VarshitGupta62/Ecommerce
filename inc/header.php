<?php
include("admin/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dakshayni Handi Craft</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <Style>
        .about-section {
            background-color: #fff;
            padding: 60px 20px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        .container1 {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .intro {
            text-align: center;
            font-size: 18px;
            margin-bottom: 40px;
            color: #555;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .image-section {
            flex: 1;
            text-align: center;
        }

        .image-section img {
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .text-section {
            flex: 2;
        }

        .text-section h2 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #4A90E2;
        }

        .text-section p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .text-section h2 {
                text-align: center;
            }

            .text-section p {
                text-align: center;
            }

            .image-section img {
                max-width: 80%;
            }
        }
    </Style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar bg-primary d-none d-lg-block">
            <div class="d-flex justify-content-between">
                <div class="top-info ps-2">
                    <small class="me-3"><i class="fas fa-envelope me-4 text-secondary"></i>
                        <a href="mailto:dakshiyanihandicraft@gmail.com" class="text-white">dakshiyanihandicraft@gmail.com</a></small>
                </div>
                <div class="top-link pe-2">
                    <a href="index.php" class="text-white"><small class="text-white mx-2">Home</small>/</a>
                    <a href="about.php" class="text-white"><small class="text-white mx-2">About</small>/</a>
                    <a href="shop.php" class="text-white"><small class="text-white mx-2">Products</small>/</a>
                    <a href="contact.php" class="text-white"><small class="text-white ms-2">Contact</small></a>
                </div>
            </div>
        </div>
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.php" class="navbar-brand d-flex">
                    <img style="width: 100px;" src="./wood-img/Sheeshamwala_Logo_page-0001-removebg-preview.png" alt="">
                </a>
                <button
                    class="navbar-toggler py-2 px-3 mr-15px"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    onclick="document.querySelector('.chandu').classList.toggle('d-none');">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto" style="font-size: auto;">

                        <?php

                        // Query to fetch navbar data
                        $sql = "SELECT * FROM navbar";
                        $navbar_result = $conn->query($sql);

                        if ($navbar_result->num_rows > 0) {
                            // Generate dynamic navbar
                            while ($navbar_row = $navbar_result->fetch_assoc()) {
                                echo '
                            <div class="">
                                <a href="#" class="nav-link dropdown-toggle" id="' . str_replace(' ', '', $navbar_row['navbar_name']) . 'Dropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">' . $navbar_row['navbar_name'] . '</a>
                                <div class="dropdown-menu w-100 p-3 dropdown-fixed-size" aria-labelledby="' . str_replace(' ', '', $navbar_row['navbar_name']) . 'Dropdown">';

                                // Fetch categories for this navbar item
                                $navbar_id = $navbar_row['id']; // Assuming `id` is the foreign key in `category`
                                $category_sql = "SELECT * FROM category WHERE navbar = $navbar_id AND status = 1";
                                $category_result = $conn->query($category_sql);
                                if ($category_result->num_rows > 0) {
                                    echo '<div class="d-flex justify-content-between dpbox" style="background: aliceblue;">';
                                    while ($category_row = $category_result->fetch_assoc()) {
                                        $category_id = $category_row['id']; // Assuming `id` is the foreign key in `subcategory`

                                        // Fetch subcategories for this category
                                        $subcategory_sql = "SELECT * FROM subcategory WHERE category_id = $category_id AND status = 1";
                                        $subcategory_result = $conn->query($subcategory_sql);
                                        echo '
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">' . $category_row['category'] . '</h6>';
                                        if ($subcategory_result->num_rows > 0) {
                                            while ($subcategory_row = $subcategory_result->fetch_assoc()) {
                                                echo '<a class="dropdown-item" href="#">' . $subcategory_row['subcategory_name'] . '</a>';
                                            }
                                        } else {
                                            echo '<span class="dropdown-item text-muted">No subcategories available.</span>';
                                        }
                                        echo '</div>';


                                        // </div>';
                                    }
                                    echo '</div>';
                                } else {
                                    echo '<div class="dropdown-column">No subcategories available.</div>';
                                }
                                        echo '
                                    </div>
                                </div>';
                            }
                        } else {
                            echo "No navbar items found.";
                        }

                        $conn->close();
                        ?>



                    </div>
                    <div class="d-flex m-3 me-0 birjesh">
                        <a href="./my-cart.php" class="position-relative me-4 my-auto">
                            <i class="fa fa-shopping-bag fa-2x"></i>
                            <span
                                id="cart-count"
                                class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                style="top: -5px; left: 15px; height: 20px; min-width: 20px">0</span>
                        </a>
                        <a href="login.php" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    </div>
                </div>
            </nav>

            <div class="container-fluid chandu py-3">
                <div class="container search-bar">
                    <form class="d-flex align-items-center">
                        <input type="text" class="form-control me-2" placeholder="Search for products, categories, or more..." aria-label="Search">
                        <button class="btn btn-primary px-4" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- Navbar End -->