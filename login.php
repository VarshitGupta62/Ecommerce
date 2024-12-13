<?php

include("inc/header.php");

?>


       
<div class="contler-log">
    <div class="gaurav-log">
      <div class="form-box">
        <div class="form login-form">
          <h2>Login</h2>
          <form>
            <div class="input-box">
              <input type="text" required>
              <label>Email ID / Mobile No</label>
            </div>
            <div class="input-box">
              <input type="password" required>
              <label>Password</label>
            </div>
            <button type="submit" class="btn">Log In</button>
            <p class="switch">New to our website? <a href="#" id="registerLink">Register Here</a></p>
          </form>
        </div>
        <div class="form register-form hidden">
          <h2>Register</h2>
          <form>
            <div class="input-box">
              <input type="text" required>
              <label>Full Name</label>
            </div>
            <div class="input-box">
              <input type="text" required>
              <label>Mobile No.</label>
            </div>
            <div class="input-box">
              <input type="gmail" required>
              <label>Gmail</label>
            </div>
            <div class="input-box">
              <input type="password" required>
              <label>Password</label>
            </div>
            <button type="submit" class="btn">Continue</button>
            <p class="switch">Already have an account? <a href="#" id="loginLink">Sign In</a></p>
          </form>
        </div>
      </div>
  </div>
    </div>




      <!-- Footer Start -->
   
    <!-- Footer End -->

    <!-- Copyright Start -->
    
    <!-- Copyright End -->



        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>    -->

        
        <script >
            document.getElementById("registerLink").addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(".login-form").classList.add("hidden");
          document.querySelector(".register-form").classList.remove("hidden");
        });
        
        document.getElementById("loginLink").addEventListener("click", function (e) {
          e.preventDefault();
          document.querySelector(".register-form").classList.add("hidden");
          document.querySelector(".login-form").classList.remove("hidden");
        });
        
          </script>




    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
     <script src="./js/addtocart.js"></script>
    <script src="js/main.js"></script>


    <script>
        AOS.init({
          Duration:1000,
          offset:200,
          delay:100,
        })
      </script>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    </body>

</html>