<?php

include("inc/header.php");

?>

<style>
  .contler-log {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #f8f8f8;
    padding-top: 150px;
  }

  .gaurav-log {
    width: 90%;

    max-width: 400px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
  }

  .form-box {
    padding: 20px;
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.5rem;
  }

  .input-box {
    position: relative;
    margin-bottom: 20px;
  }

  .input-box input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
  }

  .input-box label {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    background: #fff;
    padding: 0 5px;
    font-size: 0.9rem;
    color: #aaa;
    transition: 0.3s ease;
  }

  .input-box input:focus+label,
  .input-box input:not(:placeholder-shown)+label {
    top: -8px;
    font-size: 0.75rem;
    color: #333;
  }

  .btn {
    display: block;
    width: 100%;
    padding: 10px;
    background: #ff5722;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    transition: 0.3s ease;
  }

  .btn:hover {
    background: #e64a19;
  }

  .switch {
    text-align: center;
    margin-top: 15px;
  }

  .switch a {
    color: #ff5722;
    text-decoration: none;
    font-weight: bold;
  }

  .switch a:hover {
    text-decoration: underline;
  }

  .hidden {
    display: none;
  }
</style>

<div class="contler-log" style="margin-top: 40px;" >
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
        <form id="loginForm" >
          <div class="input-box">
            <input type="text" name="login_name" required>
            <label>Full Name</label>
          </div>
          <div class="input-box">
            <input type="text" name="login_mobile" required>
            <label>Mobile No.</label>
          </div>
          <div class="input-box">
            <input type="gmail" name="login_gmail" required>
            <label>Gmail</label>
          </div>
          <div class="input-box">
            <input type="password" name="login_password" required>
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


<script>
  document.getElementById("registerLink").addEventListener("click", function(e) {
    e.preventDefault();
    document.querySelector(".login-form").classList.add("hidden");
    document.querySelector(".register-form").classList.remove("hidden");
  });

  document.getElementById("loginLink").addEventListener("click", function(e) {
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
    Duration: 1000,
    offset: 200,
    delay: 100,
  })
</script>

 <script>
  
 </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>