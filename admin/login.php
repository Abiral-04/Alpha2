
<!doctype html>
<!-- <html lang="ar" dir="rtl" data-react-helmet="lang,dir"> -->
<html lang="en" dir="ltr" data-react-helmet="lang,dir">
  <head>
    <title>Arika Vacation Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=5,user-scalable=yes" />
    <meta name="description" content="" />
    <meta title="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- ================== Icon ================== -->
    <link rel="apple-touch-icon" href="assets/images/logo-icon.png">
    <link rel="icon" href="../assets/images/logo-icon.png">
    <!-- ================== Fontawesome Icon ================== -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!-- ================== Bootstrap CSS ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ================== Owl Slider CSS ================== -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link href="https://code.jquery.com/ui/1.11.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <!-- ================== Custom CSS ================== -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- ================== Animation CSS ================== -->
    <link rel="stylesheet" href="../assets/css/animation.css">

  
  </head>
  <body>

  <?php
ob_start();
session_start();

if(isset($_POST['submit'])){
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    
    // Define your hardcoded credentials
    $valid_username = "admin";
    $valid_password = "admin123";
    
    // Validate credentials
    if($username === $valid_username && $password === $valid_password){
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        // Redirect to admin.php on successful login
        header('Location: admin.php');
        exit(); // Ensure script stops here to prevent further execution
    }
    else{
        $error = "Wrong Username or Password";
    }
}
?>




    <a class="color-pallat" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <i class="fas fa-palette"></i>
    </a>
   <!-- ================== Navbar Section ================== -->
   <header>   
    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNav">
          <div class="language-selector">
            <svg viewBox="0 0 16 16" role="img" focusable="false" class="me-2"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"></path></svg>
            <!-- <i class="lni lni-world"></i> -->
            <select class="form-select">
              <option selected>English</option>
              <option>Arabic</option>
            </select>
          </div>
          <ul class="navbar-nav"> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Who we are</a></li>
                <li><a class="dropdown-item" href="#">Careers</a></li>
                <li><a class="dropdown-item" href="#">Press</a></li>
              </ul>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Corporate Stay</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
            <li class="nav-item"><a class="nav-link" href="real-estate-partners.html">Real Estate</a></li>
            <li class="nav-item"><a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#login-modal-div">Login</a></li>
            <li class="nav-item"><a class="btn btn-primary"  type="button" data-bs-toggle="modal" data-bs-target="#signup-modal-div">Sign up</a></li>
          </ul>
        </div>
      </div>
    </nav>
   </header>


 


    <div class="container pt-5">
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
              <form class="form-signin animated shake" action="" method="post">
                <h2 class="form-signin-heading">Admin Login</h2>
                <label for="inputEmail" class="sr-only">Username</label>
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                  <label>
                    <?php
                      if(isset($error)){
                          echo "$error";
                      }
                      ?>
                  </label>
                </div>
                <input type="submit" name="submit" value="Log in" class="btn btn-lg btn-primary btn-block">
              </form>
          </div>
          <div class="col-md-4"></div>
      </div>
    </div> <!-- /container -->

   </body>
   </html>