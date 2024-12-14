<?php

include("inc/header.php");

?>


<!-- Navbar End -->
 <style>
  /* General container and scrolling rows */
.product-scroll-container {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

/* Rows for horizontal scrolling */
.product-row {
  display: flex;
  overflow-x: auto;
  scrollbar-width: thin; /* For modern browsers */
}

.product-row::-webkit-scrollbar {
  height: 8px; /* Horizontal scrollbar height */
}

.product-row::-webkit-scrollbar-thumb {
  background-color: #ccc; /* Color of scrollbar */
  border-radius: 4px; /* Rounded scrollbar edges */
}

/* Product card styling */
.product-card {
  min-width: 146px; /* Ensure consistent size for cards */
  max-width: 150px;
  flex-shrink: 0; /* Prevent shrinking */
}

.product-card a {
  text-decoration: none;
  color: inherit;
}

.product-img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  
}

.product-img:hover {
  transform: scale(1.1); /* Zoom effect on hover */
}

.product-title {
  margin-top: 10px;
  font-size: 1rem;
  font-weight: bold;
  color: #333;
  text-align: center;
}
.product-card {
    margin-right: 150px; /* Adjust the margin as needed */
    text-align: center;
  }

 </style>


<!-- Bestsaler Product Start -->
 


<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="text-center mx-auto mb-5" style="max-width: 800px; margin-top: 180px;">
      <h1 class="display-4">Best Products</h1>
    </div>

    <div class="product-scroll-container">
      <!-- Row 1 -->
      <div class="product-row row-1 d-flex overflow-auto">
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon3.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="bed.html">
            <img src="wood-img/icon2.jpg" class="product-img rounded-circle" alt="Beds">
            <p class="product-title">Beds</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon3.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="bed.html">
            <img src="wood-img/icon2.jpg" class="product-img rounded-circle" alt="Beds">
            <p class="product-title">Beds</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="bed.html">
            <img src="wood-img/icon2.jpg" class="product-img rounded-circle" alt="Beds">
            <p class="product-title">Beds</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon3.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="bed.html">
            <img src="wood-img/icon2.jpg" class="product-img rounded-circle" alt="Beds">
            <p class="product-title">Beds</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="bed.html">
            <img src="wood-img/icon2.jpg" class="product-img rounded-circle" alt="Beds">
            <p class="product-title">Beds</p>
          </a>
        </div>
        
        <!-- Add more cards as needed -->
      </div>

      <!-- Row 2 -->
      <div class="product-row row-2 d-flex overflow-auto mt-4">
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon6.jpg" class="product-img rounded-circle" alt="Study Tables">
            <p class="product-title">Study Tables</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon21.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div><div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon21.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon6.jpg" class="product-img rounded-circle" alt="Study Tables">
            <p class="product-title">Study Tables</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon21.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon6.jpg" class="product-img rounded-circle" alt="Study Tables">
            <p class="product-title">Study Tables</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon21.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div>
        <div class="product-card text-center mx-2">
          <a href="Tv-table.html">
            <img src="wood-img/icon21.jpg" class="product-img rounded-circle" alt="Table Sets">
            <p class="product-title">Table Sets</p>
          </a>
        </div>
        
        
        <!-- Add more cards as needed -->
      </div>
    </div>
  </div>
</div>




<!-- Bestsaler Product End -->


<div class="emi_banner">
  <img src="wood-img/emi-banner.jpg" alt="">
</div>






<!---->
<div class="container-fluid fruite py-5">
  <div class="container py-5">
    <div class="tab-class text-center">
      <div class="row g-4">
        <div class="col-lg-4 text-start">
          <h1>Our Products</h1>
        </div>
        <div class="col-lg-8 text-end">
          <ul class="nav nav-pills d-inline-flex text-center mb-5">
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                <span class="text-dark" style="width: 130px;">All Products</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                <span class="text-dark" style="width: 130px;">Bedroom</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                <span class="text-dark" style="width: 130px;">Dining & Kitchen</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                <span class="text-dark" style="width: 130px;">Storage</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                <span class="text-dark" style="width: 130px;">Study & Office
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content">

        <div id="tab-1" class="tab-pane fade show p-0 active">
          <div class="row g-2  ">
            <div class="col-lg-12">
              <div class="row g-2">


                <div class="col-md-6 col-lg-4 col-xl-3 col-sm-3" data-price="9999">
                  <div

                    class="rounded position-relative fruite-item border border-secondary">
                    <a href="details.php">

                      <div class="fruite-img">
                        <a href="details.php">
                          <img
                            src="wood-img/bed1.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt="" />
                        </a>
                      </div>
                      <div
                        class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                        style="top: 10px; left: 10px">
                        Available
                      </div>
                      <div class="p-4 rounded-bottom">
                        <span>Double Bed</span>
                        <div
                          class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark fw-bold mb-0 text-center" style="width: 100%; text-align: center; font-size: 10px;">Rs. 9999</p>
                          <!-- <button
                                            onclick="addToCart('Double Bed', 'Rs. 9999', 'wood-img/bed1.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                        </div>
                      </div>
                  </div>
                  </a>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 col-sm-3" data-price="7999">
                  <div
                    class="rounded position-relative fruite-item border border-secondary">
                    <div class="fruite-img">
                      <a href="./details.php">
                        <img
                          src="wood-img/bed2.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Double Bed</span>
                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0 " style="width: 100%; text-align: center; font-size: 10px;">RS. 7999</p>
                        <!-- <button
                                          onclick="addToCart('Double Bed', 'Rs. 7999', 'wood-img/bed2.jpg')"
                                          class="btn border border-secondary rounded-pill px-3 text-primary"
                                        >
                                          <i
                                            class="fa fa-shopping-bag me-2 text-primary"
                                          ></i>
                                           <span style="font-size: 5px;">Add to cart</span>
                                        </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 col-sm-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img ">
                      <a href="details.php">
                        <img
                          src="wood-img/bed3.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Double Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 3500</p>
                        <!-- <button
                                          onclick="addToCart('Double Bed', 'Rs. 3500', 'wood-img/bed3.jpg')"
                                          class="btn border border-secondary rounded-pill px-3 text-primary"
                                        >
                                          <i
                                            class="fa fa-shopping-bag me-2 text-primary"
                                          ></i>
                                          Add to cart
                                        </button> -->
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="wood-img/bed4.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Styles Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 6999</p>
                        <!-- <button
                                            onclick="addToCart('Styles Bed', 'Rs. 6999', 'wood-img/bed4.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="./wood-img/Traditional Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Traditional Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 6999</p>
                        <!-- <button
                                            onclick="addToCart('Traditional Bed', 'Rs. 6999', 'wood-img/Traditional Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>


                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="./wood-img/Divan Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Divan Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 9999</p>
                        <!-- <button
                                            onclick="addToCart('Divan Bed', 'Rs. 9999', './wood-img/Divan Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="wood-img/Storage Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Storage Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 5999</p>
                        <!-- <button
                                            onclick="addToCart('Storage Bed', 'Rs. 9999', 'wood-img/Storage Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="./wood-img/Platform Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Platform Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 5999</p>
                        <!-- <button
                                            onclick="addToCart('Platform Bed', 'Rs. 5999', './wood-img/Platform Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div id="tab-1" class="tab-pane fade show p-0 active">
          <div class="row g-2">
            <div class="col-lg-12">
              <div class="row g-2">


                <div class="col-md-6 col-lg-4 col-xl-3" data-price="9999">
                  <div

                    class="rounded position-relative fruite-item border border-secondary">
                    <a href="details.php">

                      <div class="fruite-img">
                        <a href="details.php">

                          <img
                            src="wood-img/bed1.jpg"
                            class="img-fluid w-100 rounded-top"
                            alt="" />
                        </a>
                      </div>
                      <div
                        class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                        style="top: 10px; left: 10px">
                        Available
                      </div>
                      <div class="p-4 rounded-bottom">
                        <span>Double Bed</span>
                        <div
                          class="d-flex justify-content-between flex-lg-wrap">
                          <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 9999</p>
                          <!-- <button
                                            onclick="addToCart('Double Bed', 'Rs. 9999', 'wood-img/bed1.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                        </div>
                      </div>
                  </div>
                  </a>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3" data-price="7999">
                  <div
                    class="rounded position-relative fruite-item border border-secondary">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="wood-img/bed2.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">

                      <span>Double Bed</span>
                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">RS. 7999</p>
                        <!-- <button
                                          onclick="addToCart('Double Bed', 'Rs. 7999', 'wood-img/bed2.jpg')"
                                          class="btn border border-secondary rounded-pill px-3 text-primary"
                                        >
                                          <i
                                            class="fa fa-shopping-bag me-2 text-primary"
                                          ></i>
                                          Add to cart
                                        </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="wood-img/bed3.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Double Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 3500</p>
                        <!-- <button
                                          onclick="addToCart('Double Bed', 'Rs. 3500', 'wood-img/bed3.jpg')"
                                          class="btn border border-secondary rounded-pill px-3 text-primary"
                                        >
                                          <i
                                            class="fa fa-shopping-bag me-2 text-primary"
                                          ></i>
                                          Add to cart
                                        </button> -->
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="wood-img/bed4.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Styles Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 6999</p>
                        <!-- <button
                                            onclick="addToCart('Styles Bed', 'Rs. 6999', 'wood-img/bed4.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="./wood-img/Traditional Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Traditional Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 6999</p>
                        <!-- <button
                                            onclick="addToCart('Traditional Bed', 'Rs. 6999', 'wood-img/Traditional Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>


                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="./wood-img/Divan Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Divan Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 9999</p>
                        <!-- <button
                                            onclick="addToCart('Divan Bed', 'Rs. 9999', './wood-img/Divan Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="wood-img/Storage Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Storage Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 5999</p>
                        <!-- <button
                                            onclick="addToCart('Storage Bed', 'Rs. 9999', 'wood-img/Storage Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div
                    class="rounded position-relative fruite-item border border-secondary rounded-bottom">
                    <div class="fruite-img">
                      <a href="details.php">
                        <img
                          src="./wood-img/Platform Bed.jpg"
                          class="img-fluid w-100 rounded-top"
                          alt="" />
                      </a>
                    </div>
                    <div
                      class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                      style="top: 10px; left: 10px">
                      Available
                    </div>
                    <div class="p-4">
                      <span>Platform Bed</span>

                      <div
                        class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 5999</p>
                        <!-- <button
                                            onclick="addToCart('Platform Bed', 'Rs. 5999', './wood-img/Platform Bed.jpg')"
                                            class="btn border border-secondary rounded-pill px-3 text-primary"
                                          >
                                            <i
                                              class="fa fa-shopping-bag me-2 text-primary"
                                            ></i>
                                            Add to cart
                                          </button> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div id="tab-3" class="tab-pane fade show p-0">
          <div class="row g-2">
            <div class="col-lg-12">
              <div class="row g-2">
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="./wood-img/kitchen-dining-table1.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Dining Table</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <span>Dining Table</span>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 9999</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="wood-img/modern-kitchen-table2.avif" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Modern Table</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <span>Modern Dining Table</span>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 999</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="wood-img/modern-kitchen-interior.avif" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Modern Kitchen interior</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4></h4>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 4999</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="wood-img/Rack.avif" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Rack</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Kitchen Rack</h4>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 4499</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="wood-img/kitchen-rack_saira-3-layer.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Rack</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <h4>Rack Saira 3 Layer</h4>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 4499</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="wood-img/kitchen iteam.avif" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Item</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <span>kitchen Product</span>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 6999</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="wood-img/data_kitchen-rack.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Rack</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <span>Kitchen-Rack</span>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 4999</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="wood-img/kitchen-utensil-tools.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Utensil-Tools</div>
                    <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                      <span>Modern Dining Table</span>
                      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> -->
                      <div class="d-flex justify-content-between flex-lg-wrap">
                        <p class="text-dark  fw-bold mb-0" style="width: 100%; text-align: center; font-size: 10px;">Rs. 4999</p>
                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </div>
          </div>
        </div>
        <div id="tab-4" class="tab-pane fade show p-0">
          <div class="row g-2">
            <div class="col-lg-12">
              <div class="row g-2">
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="./wood-img/Home-temple.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Home-Temple</div>

                  </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                  <div class="rounded position-relative fruite-item">
                    <div class="fruite-img">
                      <img src="./wood-img/bar-cabinate.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bar-Cabinet</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div id="tab-5bbcc" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Banana</h4>
                                                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p> 
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Rs. 6999</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Raspberries</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>Oranges</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                                        <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
      </div>
    </div>
  </div>
</div>
<!-- Fruits Shop End-->


<!-- Featurs Start -->

<!-- Featurs End -->


<!-- Vesitable Shop Start-->
<div class="container-fluid vesitable py-5">
  <div class="container py-5">
    <h1 class="mb-0">Best Offers</h1>
    <div class="owl-carousel vegetable-carousel justify-content-center">
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="wood-img/table-chair.jpeg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>Ashwagandha</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.999</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="wood-img/best-bed.jpg" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>Anti Blemish Face</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.499</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="wood-img/sofaaa.jpeg" class="img-fluid w-100 rounded-top bg-light" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>Arbud Haran Yog</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.599</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="wood-img/office table.jpeg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>Good Bye! Migraine</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.799</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="wood-img/storage-cabinate.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>Anu Taila</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.799</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="./wood-img/Sc.jpeg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>Ayurvedic Tea</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.299</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="wood-img/door.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>BP Normal Capsules</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.599</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
      <div class="border border-primary rounded position-relative vesitable-item">
        <div class="vesitable-img">
          <img src="wood-img/window.jpg" class="img-fluid w-100 rounded-top" alt="">
        </div>
        <div class="text-white bg-primary px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Available</div>
        <!-- <div class="p-4 rounded-bottom">
                            <h4>Arogyam Ayurveda</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rs.999</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                            </div>
                        </div> -->
      </div>
    </div>
  </div>
</div>
<!-- Vesitable Shop End -->


<!-- Banner Section Start-->
<div class="container-fluid banner my-5">
  <div class="container py-5">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <div class="py-4">
          <h1 class="display-3 text-white">Best Product</h1>
          <!-- <p class="fw-normal display-3 text-dark mb-4">in Our Store</p> -->
          <p class="mb-4 text-dark">Experience the pinnacle of comfort and style with our luxury furnishings, crafted to perfection.</p>
          <!-- <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">BUY</a> -->
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative">
          <img src="wood-img/hotel-furniture-banner.jpg" class="img-fluid w-100 rounded" alt="">
          <!-- <div class="d-flex align-items-center justify-content-center bg-white rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                                <h1 style="font-size: 100px;">1</h1>
                                <div class="d-flex flex-column">
                                    <span class="h2 mb-0">50$</span>
                                    <span class="h4 text-muted mb-0">kg</span>
                                </div>
                            </div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Section End -->


<!-- Bestsaler Product Start -->
<!-- <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Best Products</h1>
                    <p>Discover the beauty of our premium wood products, designed for durability and timeless appeal. Crafted with precision, each piece brings natural elegance and warmth to your space.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-2 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="wood-img/icon3.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                 <div class="col-6"> 
                                     <a href="#" class="h5">6 Seater Dining Table Sets</a>
                                     <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="wood-img/icon2.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Beds</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="./wood-img/icon12.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Table Lamps</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="./wood-img/icon4.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Sofa Cum Bed</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="./wood-img/icon6.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Study Tables</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="./wood-img/icon7.jpg" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Book Shelves</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center" style="border: 2px solid rgb(0, 0, 0); border-radius: 10px;">
                            <img src="./wood-img/office table.jpeg" class="img-fluid rounded" style="width: 100%" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Office Tables</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center" style="border: 2px solid rgb(0, 0, 0); border-radius: 10px;">
                            <img src="wood-img/sofaaa.jpeg" class="img-fluid rounded" style="width: 100%; height: 20% !important; " alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Sofa Sets</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center" style="border: 2px solid rgb(0, 0, 0); border-radius: 10px;">
                            <img src="wood-img/best-bed.jpg" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="#" class="h5">Bed</a>
                                <div class="d-flex my-3 justify-content-center">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center" style="border: 2px solid rgb(0, 0, 0); border-radius: 10px;">
                            <img src="./wood-img/storage-cabinate.jpg" style="width: 100%;" class="img-fluid rounded" alt="">
                            <div class="py-2">
                                <a href="#" class="h5"> Storage Cabinets</a>
                                
                                <div class="d-flex my-3 justify-content-center">
                                    <br>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star"></i>
                                    <br><br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!-- Bestsaler Product End -->

<div class="emi_banner">
  <img src="wood-img/emi-banner.jpg" alt="">
</div>



<!-- Fact Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="bg-light p-5 rounded">
      <div class="row g-4 justify-content-center">
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="counter bg-white rounded p-5">
            <i class="fa fa-users text-secondary"></i>

            <h4>satisfied customers</h4>
            <h1>5963+</h1>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="counter bg-white rounded p-5">
            <i class="fa fa-users text-secondary"></i>
            <h4>quality of service</h4>
            <h1>99%</h1>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="counter bg-white rounded p-5">
            <i class="fa fa-users text-secondary"></i>
            <h4>quality certificates</h4>
            <h1>33</h1>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="counter bg-white rounded p-5">
            <i class="fa fa-users text-secondary"></i>
            <h4>Available Products</h4>
            <h1>500+</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fact Start -->



<!-- Testimonials Start -->
<div class="container-fluid testimonial py-5">
  <div class="container py-5">
    <div class="testimonial-header text-center">
      <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
    </div>
    <div class="owl-carousel testimonial-carousel">
      <div class="testimonial-item img-border-radius bg-light rounded p-4">
        <div class="position-relative">
          <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 25px; right: 0;"></i>
          <div class="mb-4 pb-4 border-bottom border-secondary">
            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
          </div>
          <div class="d-flex align-items-center flex-nowrap">
            <div class="bg-secondary rounded">
              <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
            </div>
            <div class="ms-4 d-block">
              <h4 class="text-dark">Client Name</h4>
              <p class="m-0 pb-3">Profession</p>
              <div class="d-flex pe-5">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item img-border-radius bg-light rounded p-4">
        <div class="position-relative">
          <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
          <div class="mb-4 pb-4 border-bottom border-secondary">
            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
          </div>
          <div class="d-flex align-items-center flex-nowrap">
            <div class="bg-secondary rounded">
              <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
            </div>
            <div class="ms-4 d-block">
              <h4 class="text-dark">Client Name</h4>
              <p class="m-0 pb-3">Profession</p>
              <div class="d-flex pe-5">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial-item img-border-radius bg-light rounded p-4">
        <div class="position-relative">
          <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>
          <div class="mb-4 pb-4 border-bottom border-secondary">
            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
          </div>
          <div class="d-flex align-items-center flex-nowrap">
            <div class="bg-secondary rounded">
              <img src="img/testimonial-1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
            </div>
            <div class="ms-4 d-block">
              <h4 class="text-dark">Client Name</h4>
              <p class="m-0 pb-3">Profession</p>
              <div class="d-flex pe-5">
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
                <i class="fas fa-star text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Tastimonial End -->
<?php

include("inc/footer.php");

?>