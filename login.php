<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <!-- <link rel="icon" href="img/guaranteed.ico"> -->
      <title>ABCD School - Login</title>
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/vendor.css">
      <!-- fontaswome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
      <!-- animation -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <!-- owl slider -->
      <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
      <link rel="stylesheet" href="vendor/owlcarousel/owl.theme.default.min.css">
   </head>
   <body>

     <!-- nav starts here -->
     <nav class="navbar navbar-expand-lg navbar-light bg-custom" id="nav-bar">
        <!-- <a class="brand text-decoration-none" href="index"> <i class="fas fa-graduation-cap rotate"></i>ABCD School</a> -->
        <img src="img/logo.png" class="image-fluid" alt="" width="120px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                 <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="contact">Contact</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="notice">Notice Board</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="gallery">Gallery</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="gallery">Fee Structure</a>
              </li>
           </ul>
           <div class="form-inline my-2 my-lg-0">
              <button class="btn my-2 my-sm-0 btn-light" type="button"   data-toggle="modal" data-target="#exampleModal">Login</button>
              <a class="btn  my-2 my-sm-0  ml-2 btn-outline-light" href="register">Register</a>
           </div>
        </div>
     </nav>
     <!-- nav ends here -->

      <!-- login section starts here -->
      <section id="login" >

        <div class="container col-xl-10 col-xxl-8 px-4 py-4 ">
          <div class="row align-items-center g-5 py-5 ">
            <!-- <div class="col-lg-7 text-center text-lg-start">
              <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
              <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div> -->
            <div class="col-10 mx-auto col-lg-5  py-4 px-3 ">

              <form class="p-5 border rounded-3 bg-light shadow">
                <h1 class="display-5  text-center fw-bold lh-1 mb-5"><i>Please Login</i> </h1>
                <div class="form-floating mb-3">
                  <label for="floatingInput">Email address</label>
                  <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com" required>
                </div>
                <div class="form-floating mb-3">
                  <label for="floatingPassword">Password</label>
                  <input type="password" class="form-control form-control-lg" id="floatingPassword" placeholder="Password" required>
                </div>
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="w-100 btn btn-lg btn-danger bg-custom"  type="submit">Login</button>
                <hr class="my-4">
                <!-- <small class="text-muted">Already Registered? <a href="#" class="text-decoration-none ">Login here</a> </small> -->
                <small class="text-muted">Don't have Account? <a href="register" class="text-decoration-none ">Register here</a> </small>

              </form>
            </div>
          </div>
        </div>
         <br><br>
      </section>

      <!-- login section ends here -->

      <!-- footer starts here -->
      <footer >
         <div class="card bg-custom shadow card-danger text-white">
         <div class="card-body py-5">
            <div class="row mb-2 justify-content-center">
               <div class="col-lg-4 mb-2 ">
                 <a class="brand text-decoration-none" href="index"> <i class="fas fa-graduation-cap rotate"></i>ABCD School</a>
                 <br>
                  <br>
                  <b>Address:</b>
                  Hiyasesar Fante ke Pass ,Panihari Minral Water Ke Pass Bikaner Road Nokha Dist. Bikaner (Raj.)334803
                  <!-- <br>
                     <br>
                     <h6>Navjyoti Mook Badhir Mand Buddhi Vidyalaya, N.H. 89 Bikaner Road, Hiyadesar Fanta N
                         Nokha, Distt. Bikaner, Rajasthan- 334803</h6> -->
                  <!-- <img src="img/Navjyoti Final.png" alt="" class="image-fluid mt-2" width="90px;"> -->
                  <!-- <img src="img/LOGO SSDNSS.png" alt="" class="image-fluid mt-2" width="80px;"> -->
               </div>
               <div class="col-lg-2 ">
                  <h3>Quick Links</h3>
                  <nav class="nav flex-column ">
                     <a class="nav-link text-white" href="index"><i class="fas fa-angle-double-right"></i> Home</a>
                     <a class="nav-link text-white" href="about"><i class="fas fa-angle-double-right"></i> About</a>
                     <a class="nav-link text-white" href="contact"><i class="fas fa-angle-double-right"></i> Contact</a>
                     <!-- <a class="nav-link text-white" href="events"><i class="fas fa-angle-double-right"></i> Events</a> -->
                     <a class="nav-link text-white" href="notice"><i class="fas fa-angle-double-right"></i> Notice Board</a>
                     <a class="nav-link text-white" href="gallery"><i class="fas fa-angle-double-right"></i> Gallery</a>
                  </nav>
               </div>
               <div class="col-lg-3">
                  <h3>Support</h3>
                  <nav class="nav flex-column">
                     <a class="nav-link text-white" href="#"><i class="fas fa-phone-alt"></i>  9874563210</a>
                     <a class="nav-link text-white" href="#"><i class="fas fa-envelope"></i> support@abcd.com</a>
                     <br>
                  </nav>
                  <!-- socialmedia -->
               </div>
               <div class="col-lg-2">
                  <h3>Social Media</h3>
                  <!-- <form  action="" method="post">
                     <div class="input-group mb-3">
                        <div class="input-group mb-3">
                           <div class="input-group-prepend ">
                              <label class="input-group-text" for="inputGroupSelect01">Currency</label>
                           </div>
                           <select class="custom-select" id="inputGroupSelect01">
                              <option selected value="INR">INR</option>
                              <option value="USD">$(USD)</option>
                           </select>
                        </div>
                        <input type="number" min="1" name="" value="" class="form-control" placeholder="Enter Amount" required>
                        <br><br>
                        <button type="submit" name="donate" class="btn btn-block btn-danger btn-md btn-c"> <i class="fas fa-donate"></i> Donate</button>
                     </div>
                     </form> -->
                  <br><br>
                  <nav class="nav">
                     <h4 class="px-3">  <a class="text-white" href="#"><i class="fab fa-facebook-square"></i></a></h4>
                     <h4 class="pr-3">  <a class="text-white" href="#"><i class="fab fa-twitter-square"></i></a></h4>
                     <h4 class="pr-3">  <a class="text-white" href="#"><i class="fab fa-instagram-square"></i></a></h4>
                  </nav>
                  <br><br>
                  <div class="top text-right">
                     <h3><a href="#top" class="text-white"><i class="fas fa-arrow-circle-up"></i></a> </h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="card-footer text-center">
            &copy; Copyright ABCD School  All Rights Reserved.
         </div>
      </footer>
      <!-- footer starts here -->

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <!-- animation  -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>AOS.init();</script>
      <!-- owl js file -->
      <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
      <script src="js/slider.js"></script>

      <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
         -->
   </body>
</html>
