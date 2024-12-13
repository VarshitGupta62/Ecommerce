<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
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
                        <a href="index.html" class="text-white"><small class="text-white mx-2">Home</small>/</a>
                        <a href="about.html" class="text-white"><small class="text-white mx-2">About</small>/</a>
                        <a href="shop.html" class="text-white"><small class="text-white mx-2">Products</small>/</a>
                        <a href="contact.html" class="text-white"><small class="text-white ms-2">Contact</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.html" class="navbar-brand d-flex">
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
        
                            <!-- <a href="#" class="nav-item nav-link">sofa</a> -->
        
                            <!-- <div class="">
                                <a href="#" class="nav-link  dropdown-toggle" id="sofaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sofas</a>
                                <div class="dropdown-menu w-100 p-3  dropdown-fixed-size"  aria-labelledby="sofaDropdown">
                                    <div class="d-flex justify-content-between" style="background-color: aliceblue !important;">
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Sofa Sets</h6>
                                            <a class="dropdown-item" href="#"></a>
                                            <a class="dropdown-item" href="#"></a>
                                            <a class="dropdown-item" href="#"></a>
                                            <a class="dropdown-item" href="#"></a>
                                            <a class="dropdown-item" href="#"></a>
                                            <a class="dropdown-item" href="#"></a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Seating</h6>
                                            <a class="dropdown-item" href="#">Wingback Chairs</a>
                                            <a class="dropdown-item" href="#">Lounge Chairs</a>
                                            <a class="dropdown-item" href="#">Loveseats</a>
                                            <a class="dropdown-item" href="#">Ottomans</a>
                                            <a class="dropdown-item" href="#">Accent Chairs</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Recliners</h6>
                                            <a class="dropdown-item" href="#">1 Seater Recliners</a>
                                            <a class="dropdown-item" href="#">2 Seater Recliners</a>
                                            <a class="dropdown-item" href="#">3 Seater Recliners</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
        
                            <!-- <a href="#" class="nav-item nav-link">Living</a> -->
        
                            <div class="">
                                <a href="#" class="nav-link dropdown-toggle" id="livingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Living</a>
                                <div class="dropdown-menu w-100 p-3 dropdown-fixed-size" aria-labelledby="livingDropdown">
                                    <div class="d-flex justify-content-between dpbox" style="background: aliceblue;">
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Sofas & Accent Chairs</h6>
                                            <a class="dropdown-item" href="sofa.html">Sofas</a>
                                            <a class="dropdown-item" href="sofa.html">Accent Chairs</a>
                                            <a class="dropdown-item" href="sofa.html">Curvy Sofa Collection</a>
                                            <a class="dropdown-item" href="sofa.html">Boucle Accent Chairs</a>
                                            <a class="dropdown-item" href="sofa.html">L Shape Sofas</a>
                                            <a class="dropdown-item" href="sofa.html">Rattan Sofas and Accent Chairs</a>
                                            <a class="dropdown-item" href="sofa.html">Modular Sectional Sofas</a>
                                            <a class="dropdown-item" href="sofa.html">See All</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Coffee Tables</h6>
                                            <a class="dropdown-item" href="coffe-table.html">Coffee Tables-Eclectica</a>
                                            <a class="dropdown-item" href="coffe-table.html">Coffee Tables-Summer</a>
                                            <a class="dropdown-item" href="coffe-table.html">Coffee Tables with Storage</a>
                                            <a class="dropdown-item" href="coffe-table.html">Top Selling!</a>
                                            <a class="dropdown-item" href="coffe-table.html">See All</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Side Tables</h6>
                                            <a class="dropdown-item" href="side.html">Side Tables with Storage</a>
                                            <a class="dropdown-item" href="side.html">Top Selling!</a>
                                            <a class="dropdown-item" href="side.html">See All</a>
        
                                        </div>
        x
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">TV Tables</h6>
                                            <a class="dropdown-item" href="Tv-table.html">Rattan TV Consoles</a>
                                            <a class="dropdown-item" href="Tv-table.html">Top Selling!</a>
                                            <a class="dropdown-item" href="Tv-table.html">See All</a>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
        
                            <!-- <a href="#" class="nav-item nav-link">Dining Room</a> -->
                            <div class="">
                                <a href="#" class="nav-link dropdown-toggle" id="DiningDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dining Room</a>
                                <div class="dropdown-menu w-100 p-3 dropdown-fixed-size" aria-labelledby="bedroomDropdown">
                                    <div class="d-flex justify-content-between dpbox" style="background-color: aliceblue;">
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Dining Table Sets</h6>
                                            <a class="dropdown-item" href="Dinning.html">Eclectica Dining Sets</a>
                                            <a class="dropdown-item" href="Dinning.html">4 Seater Dining Sets</a>
                                            <a class="dropdown-item" href="Dinning.html">6 Seater Dining Sets</a>
                                            <a class="dropdown-item" href="Dinning.html">8 Seater Dining Sets</a>
                                            <a class="dropdown-item" href="Dinning.html">Minimal & Scandinavian</a>
                                            <a class="dropdown-item" href="Dinning.html">Rattan and Cane</a>
                                            <a class="dropdown-item" href="Dinning.html">Gable Series</a>
                                            <a class="dropdown-item" href="Dinning.html">Yukon Series</a>
                                            <a class="dropdown-item" href="Dinning.html">See All</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Luxury Dining Tables</h6>
                                            <a class="dropdown-item" href="Luxury.html">4 Seater Dining Tables</a>
                                            <a class="dropdown-item" href="Luxury.html">6 Seater Dining Tables</a>
                                            <a class="dropdown-item" href="Luxury.html">8 Seater Dining Tables</a>
                                            <a class="dropdown-item" href="Luxury.html">See All</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Dining Chairs</h6>
                                            <a class="dropdown-item" href="dinning-chairs.html">Upholstered</a>
                                            <a class="dropdown-item" href="dinning-chairs.html">Non-Upholstered</a>
                                            <a class="dropdown-item" href="dinning-chairs.html">See All</a>
                                            <!-- <a class="dropdown-item" href="#">Mirrors</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <a href="#" class="nav-item nav-link">Bedroom</a> -->
                            <div class="">
                                <a href="#" class="nav-link dropdown-toggle" id="BedroomDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Bedroom Furniture</a>
                                <div class="dropdown-menu w-100 p-3 dropdown-fixed-size" aria-labelledby="storageDropdown">
                                    <div class="d-flex justify-content-between dpbox" style="background-color: aliceblue;">
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Beds</h6>
                                            <a class="dropdown-item" href="bed.html">Beds-Upholstered</a>
                                            <a class="dropdown-item" href="bed.html">Beds-Rattan</a>
                                            <a class="dropdown-item" href="bed.html">Beds-Storage</a>
                                            <a class="dropdown-item" href="bed.html">See All</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Nightstands</h6>
                                            <a class="dropdown-item" href="Nightstands.html">Nightstand - Rattan</a>
                                            <a class="dropdown-item" href="Nightstands.html">Nightstands - London Collection</a>
                                            <a class="dropdown-item" href="Nightstands.html">Top Selling!</a>
                                            <a class="dropdown-item" href="Nightstands.html">See All</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Bedroom Sets</h6>
                                            <a class="dropdown-item" href="bed.html">Upholstered</a>
                                            <a class="dropdown-item" href="bed.html">Non - Upholstered</a>
                                            <a class="dropdown-item" href="bed.html">Rattan Bedroom Sets</a>
                                            <a class="dropdown-item" href="bed.html">Top Selling!</a>
                                            <a class="dropdown-item" href="bed.html">See All</a>
                                        </div>
        
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Storage</h6>
                                            <a class="dropdown-item" href="Storage.html">Wardrobes</a>
                                            <a class="dropdown-item" href="Storage.html">Drawer Chests</a>
                                            <a class="dropdown-item" href="Storage.html">Sideboards</a>
                                            <a class="dropdown-item" href="Storage.html">See All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- <a href="#" class="nav-item nav-link">Mattresses</a> -->
                            <div class="">
                                <a href="#" class="nav-link dropdown-toggle" id="HomeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home Office & Study</a>
                                <div class="dropdown-menu w-100 p-3 dropdown-fixed-size" aria-labelledby="mattressesDropdown">
                                    <div class="d-flex justify-content-between dpbox" style="background: aliceblue;">
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Home Office And Study Room Furniture</h6>
                                            <a class="dropdown-item" href="office.html">Desks</a>
                                            <a class="dropdown-item" href="office.html">Bookshelves</a>
                                            <a class="dropdown-item" href="office.html">Chairs</a>
                                            <a class="dropdown-item" href="office.html">Accent Chairs</a>
                                            <a class="dropdown-item" href="office.html">Side Tables</a>
                                            <a class="dropdown-item" href="office.html">See All</a>
                                        </div>
                                        <!-- <div class="dropdown-column">
                                            <h6 class="dropdown-header">Sizes</h6>
                                            <a class="dropdown-item" href="#">King Size Mattresses</a>
                                            <a class="dropdown-item" href="#">Queen Size Mattresses</a>
                                            <a class="dropdown-item" href="#">Single Size Mattresses</a>
                                            <a class="dropdown-item" href="#">Double Size Mattresses</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Accessories</h6>
                                            <a class="dropdown-item" href="#">Mattress Protectors</a>
                                            <a class="dropdown-item" href="#">Pillows</a>
                                            <a class="dropdown-item" href="#">Bed Sheets</a>
                                            <a class="dropdown-item" href="#">Toppers</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
        
                            <!-- <a href="#" class="nav-item nav-link">Decor</a> -->
        
                            <div class="">
                                <a href="#" class="nav-link dropdown-toggle" id="SalesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sales & Offers</a>
                                <div class="dropdown-menu w-100 p-3 dropdown-fixed-size" aria-labelledby="mattressesDropdown">
                                    <div class="d-flex justify-content-between dpbox" style="background: aliceblue; ">
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Natural Rattan and Cane Specials</h6>
                                            <a class="dropdown-item" href="#">Rattan Sofas and Accent Chairs</a>
                                            <a class="dropdown-item" href="#">Rattan Tables and Consoles</a>
                                            <a class="dropdown-item" href="#">Rattan Beds And Bedroom Sets</a>
                                            <a class="dropdown-item" href="#">Top Selling Rattan</a>
                                            <a class="dropdown-item" href="#">see All</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Collection Eclectica by Crafts Mill</h6>
                                            <a class="dropdown-item" href="#">Coffee Tables- Eclectica</a>
                                            <a class="dropdown-item" href="#">Dining - Eclectica</a>
                                            <a class="dropdown-item" href="#">See All</a>
                                            <!-- <a class="dropdown-item" href="#">Double Size Mattresses</a> -->
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Other Type</h6>
                                            <a class="dropdown-item" href="#">L Shape Sofas on Sale</a>
                                            <a class="dropdown-item" href="#">Season's Hottest</a>
                                            <a class="dropdown-item" href="#">Sofas on Sale</a>
                                            <a class="dropdown-item" href="#">See All</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- <a href="#" class="nav-item nav-link">Furnishings</a> -->
        
                            <div class="">
                                <a href="#" class="nav-link dropdown-toggle" id="FurnishingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">New & Featured</a>
                                <div class="dropdown-menu w-100 p-3 dropdown-fixed-size" aria-labelledby="storageDropdown">
                                    <div class="d-flex justify-content-between dpbox" style="background-color: aliceblue;">
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Wardrobes</h6>
                                            <a class="dropdown-item" href="#">2 Door Wardrobes</a>
                                            <a class="dropdown-item" href="#">3 Door Wardrobes</a>
                                            <a class="dropdown-item" href="#">Sliding Wardrobes</a>
                                            <a class="dropdown-item" href="#">Open Wardrobes</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Cabinets & Sideboards</h6>
                                            <a class="dropdown-item" href="#">Storage Cabinets</a>
                                            <a class="dropdown-item" href="#">Sideboards</a>
                                            <a class="dropdown-item" href="#">Display Cabinets</a>
                                            <a class="dropdown-item" href="#">Console Tables</a>
                                        </div>
                                        <div class="dropdown-column">
                                            <h6 class="dropdown-header">Special Storage</h6>
                                            <a class="dropdown-item" href="#">Shoe Racks</a>
                                            <a class="dropdown-item" href="#">Bookshelves</a>
                                            <a class="dropdown-item" href="#">Chest of Drawers</a>
                                            <a class="dropdown-item" href="#">Trunks & Boxes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
        
                        </div>
                        <div class="d-flex m-3 me-0 birjesh">
                            <a href="./my-cart.html" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                                <span
                                  id="cart-count"
                                  class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                                  style="top: -5px; left: 15px; height: 20px; min-width: 20px"
                                >0</span>
                              </a>
                            <a href="login.html" class="my-auto">
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


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Shop Detail</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">About us</a></li>
               
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Shop Detail</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Single Product Start -->
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border rounded">
                                    <a href="#">
                                        <img src="https://himalayawellness.in/cdn/shop/products/Liv52_-_2000x2000_c4ec53b4-0db1-40bd-9262-60a97c5a21d2.jpg?v=1622096340" class="img-fluid rounded" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Himalaya Liv.52</h4>
                                <!-- <p class="mb-3">Category: Vegetables</p> -->
                                <h5 class="fw-bold mb-3">Rs. 599</h5>
                                <div class="d-flex mb-4">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="mb-4">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                                <p class="mb-4">Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish</p>
                                <div class="input-group quantity mb-5" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <a href="#" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs mb-3">
                                        <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                            id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                            aria-controls="nav-about" aria-selected="true">Description</button>
                                        <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                            id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                            aria-controls="nav-mission" aria-selected="false">Reviews</button>
                                    </div>
                                </nav>
                                <div class="tab-content mb-5">
                                    <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                        <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc. 
                                            Susp endisse ultricies nisi vel quam suscipit </p>
                                        <p>Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish filefish Antarctic 
                                            icefish goldeye aholehole trumpetfish pilot fish airbreathing catfish, electric ray sweeper.</p>
                                        <!-- <div class="px-2">
                                            <div class="row g-4">
                                                <div class="col-6">
                                                    <div class="row bg-light align-items-center text-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Weight</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">1 kg</p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Country of Origin</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Agro Farm</p>
                                                        </div>
                                                    </div>
                                                    <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Quality</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Organic</p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Сheck</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">Healthy</p>
                                                        </div>
                                                    </div>
                                                    <div class="row bg-light text-center align-items-center justify-content-center py-2">
                                                        <div class="col-6">
                                                            <p class="mb-0">Min Weight</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="mb-0">250 Kg</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                        <div class="d-flex">
                                            <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                            <div class="">
                                                <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                                <div class="d-flex justify-content-between">
                                                    <h5>Jason Smith</h5>
                                                    <div class="d-flex mb-3">
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic 
                                                    words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                            <div class="">
                                                <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                                <div class="d-flex justify-content-between">
                                                    <h5>Sam Peters</h5>
                                                    <div class="d-flex mb-3">
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star text-secondary"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p class="text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic 
                                                    words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="nav-vision" role="tabpanel">
                                        <p class="text-dark">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                            amet diam et eos labore. 3</p>
                                        <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                            Clita erat ipsum et lorem et sit</p>
                                    </div>
                                </div>
                            </div>
                            <form action="#">
                                <h4 class="mb-5 fw-bold">Leave a Reply</h4>
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="border-bottom rounded">
                                            <input type="text" class="form-control border-0 me-4" placeholder="Yur Name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="border-bottom rounded">
                                            <input type="email" class="form-control border-0" placeholder="Your Email *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-bottom rounded my-4">
                                            <textarea name="" id="" class="form-control border-0" cols="30" rows="8" placeholder="Your Review *" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between py-3 mb-5">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 me-3">Please rate:</p>
                                                <div class="d-flex align-items-center" style="font-size: 12px;">
                                                    <i class="fa fa-star text-muted"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <a href="#" class="btn border border-secondary text-primary rounded-pill px-4 py-3"> Post Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-3">
                        <div class="row g-4 fruite">
                            <div class="col-lg-12">
                                <div class="input-group w-100 mx-auto d-flex mb-4">
                                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                </div>
                                <div class="mb-4">
                                    <h4>Categories</h4>
                                    <ul class="list-unstyled fruite-categorie">
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Apples</a>
                                                <span>(3)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Oranges</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Strawbery</a>
                                                <span>(2)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Banana</a>
                                                <span>(8)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-apple-alt me-2"></i>Pumpkin</a>
                                                <span>(5)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="mb-4">Featured products</h4>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded" style="width: 100px; height: 100px;">
                                        <img src="img/featur-1.jpg" class="img-fluid rounded" alt="Image">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Banana</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded" style="width: 100px; height: 100px;">
                                        <img src="img/featur-2.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Banana</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded" style="width: 100px; height: 100px;">
                                        <img src="img/featur-3.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Banana</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/vegetable-item-4.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Banana</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/vegetable-item-5.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Banana</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/vegetable-item-6.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Big Banana</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-4">
                                    <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Vew More</a>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12">
                                <div class="position-relative">
                                    <img src="https://maharishiayurvedaindia.com/cdn/shop/files/ashwagandha-tablets-for-boosting-strength-and-relieving-stress-maharishi-ayurveda-india-6_800x.jpg?v=1692185704" class="img-fluid w-100 rounded" alt="">
                                    <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                        <h3 class="text-secondary fw-bold">Fresh <br> Fruits <br> Banner</h3>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <h1 class="fw-bold mb-0">Related products</h1>
                <div class="vesitable">
                    <div class="owl-carousel vegetable-carousel justify-content-center">
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/AshwagandhaPackof3design5-min.jpg?v=1727774434&width=600" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>Ashwagandha</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.999</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/antiblemishesfacepack.jpg?v=1720411213&width=600" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>Anti Blemish Face</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.499</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/Arbud-Haran-Yog-jpg.jpg?v=1683451020&width=600" class="img-fluid w-100 rounded-top bg-light" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>Arbud Haran Yog</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.599</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/GoodbyeMigraine.jpg?v=1719107367&width=600" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>Good Bye! Migraine</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.799</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/anu_taila_front_1.jpg?v=1721363630&width=600" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>Anu Taila</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.799</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/WhatsAppImage2023-05-06at11.12.38AM.jpg?v=1718984422&width=600" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>Ayurvedic Tea</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.299</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/BP-Normal-jpg.jpg?v=1727199910&width=600" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>BP Normal Capsules</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.599</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="border border-primary rounded position-relative vesitable-item">
                            <div class="vesitable-img">
                                <img src="https://arogyamshop.com/cdn/shop/files/dsa.jpg?v=1692253983&width=600" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
                            <div class="p-4 rounded-bottom">
                                <h4>Arogyam Ayurveda</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.999</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->
    

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Divya Shree Ayurveda
                                </h1>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="email" placeholder="Your Email">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Submit</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">typesetting, remaining essentially unchanged. It was 
                                popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                            <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            <a class="btn-link" href="">Terms & Condition</a>
                
        
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Account</h4>
                            <a class="btn-link" href="">My Account</a>
                            <a class="btn-link" href="">Shop details</a>
                            <a class="btn-link" href="">Order History</a>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: Ghaziabad , Up</p>
                            <p>Email: Example@gmail.com</p>
                            <p>Phone: +0123 4567 8910</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container text-center text-light fs-5">
                <div class="row">
                    <p> Copyright © 2024, Divya Shree Ayurveda
                        , All Rights Reserved <span class="text-danger" style="font-weight: bolder;">Developed By Live India Tech</span></p>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>