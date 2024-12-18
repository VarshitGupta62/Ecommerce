<?php

include("inc/header.php");

?>



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
            <h1 class="text-center text-white display-6" style="color: aliceblue !important;">My Cart</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Contact</li>
            </ol>
        </div>
        <!-- Single Page Header End -->

        <!-- cart body -->

        <div class="container my-5">
            <h2 class="text-center">My Cart</h2>
            <div id="cart-container" class="mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        <!-- Dynamic Cart Items -->
                    </tbody>
                </table>
                <div class="text-end">
                    <h4 id="cart-total">Total: Rs. 0</h4>
                </div>
                <div class="text-center mt-4">
                  <button id="buy-now-btn" class="btn btn-primary buy_now" >Buy Now</button>
              </div>
            </div>
         


        </div>  

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
        <div class="container py-5">
            <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <a href="#">
                            <h1 class="text-primary mb-0"><img src="./wood-img/Sheeshamwala_Logo_page-0001-removebg-preview.png" alt="" style="width: 100px;">
                            </h1>
                        </a>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="position-relative mx-auto">
                            <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="email" placeholder="Your Email">
                            <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Submit</button>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-3">
                        <div class="d-flex justify-content-end pt-3">
                            <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Why People Like us!</h4>
                        <p class="mb-4" style="text-align: justify;">People appreciate Dakshayni Handi Craft <br> for its expertly crafted wooden furniture, <br> offering both style and durability.</p>
                        <!-- <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Shop Info</h4>
                        <a class="btn-link" href="about.html">About Us</a>
                        <a class="btn-link" href="">Products</a>
                        <a class="btn-link" href="contact.html">Contact Us</a>
                        <!-- <a class="btn-link" href="">Privacy Policy</a>
                        <a class="btn-link" href="">Terms & Condition</a> -->
            
    
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column text-start footer-item">
                        <h4 class="text-light mb-3">Account</h4>
                        <a class="btn-link" href="">My Account</a>
                        <a class="btn-link" href="">Shop details</a>
                        <a class="btn-link" href="">Order History</a>
                       
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-light mb-3">Contact</h4>
                        <p>Address: WARD NO. 03, THUKRIYASAR, TEH 
                            DUNGARGARH
                            BIKANER, RAJASTHAN, 334001</p>
                        <p>Email:<a href="mailto:"> dakshiyanihandicraft@gmail.com</a></p>
                        <p>Phone: <a href="tel:+918802621101">+918802621101</a></p>
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
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center text-light fs-5">
            <div class="row">
                <p> Copyright © 2024, Dakshayni Handi Craft
                    , All Rights Reserved <span class="text-danger" style="font-weight: bolder;"><a href="https://www.bhoomitechzone.in/">Developed By  BTPL</a></span></p>
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

    <script>
    // Array to store cart items
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Function to update cart UI
    function updateCartUI() {
        const cartItemsContainer = document.getElementById('cart-items');
        const cartTotalElement = document.getElementById('cart-total');
        let total = 0;

        // Clear existing cart items
        cartItemsContainer.innerHTML = '';

        // Display each item in the cart
        cart.forEach((item, index) => {
            total += parseFloat(item.price.replace('Rs.', '').trim());

            const cartRow = `
                <tr>
                    <td><img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px;"></td>
                    <td>${item.name}</td>
                    <td>${item.price}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" onclick="removeFromCart(${index})">Remove</button>
                    </td>
                </tr>
            `;
            cartItemsContainer.innerHTML += cartRow;
        });

        // Update total price
        cartTotalElement.textContent = `Total: Rs. ${total}`;
    }

    // Function to update cart count
function updateCartCount() {
    const cartCountElement = document.getElementById('cart-count');
    const cart = JSON.parse(localStorage.getItem("cart")) || []; // Get cart from localStorage
    cartCountElement.textContent = cart.length; // Update count
}

// Load cart count on page load
document.addEventListener('DOMContentLoaded', updateCartCount);


    // Function to remove an item from the cart
    function removeFromCart(index) {
        cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartUI();
    }

    // Function to add an item to the cart
    function addToCart(name, price, image) {
        const product = { name, price, image };
        cart.push(product);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartUI();
        alert(`${name} added to cart.`);
    }

    // Load the cart on page load
    document.addEventListener('DOMContentLoaded', updateCartUI);
</script>

    </script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>