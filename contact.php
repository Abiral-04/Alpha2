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
    <link rel="icon" href="assets/images/logo-icon.png">
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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ================== Animation CSS ================== -->
    <link rel="stylesheet" href="assets/css/animation.css">
  </head>
  <body>
    <a class="color-pallat" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      <i class="fas fa-palette"></i>
    </a>
  <!-- ================== Navbar Section ================== -->
  <header>   
    <nav class="navbar navbar-expand-lg bg-white">
      <div class="container">
        <a class="navbar-brand" href="index.html">Logo</a>
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
              <a class="nav-link" href="contact.html">Corporate Stay</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact us</a></li>
            <li class="nav-item"><a class="nav-link" href="real-estate-partners.html">Real Estate</a></li>
            <li class="nav-item"><a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#login-modal-div">Login</a></li>
            <li class="nav-item"><a class="btn btn-primary"  type="button" data-bs-toggle="modal" data-bs-target="#signup-modal-div">Sign up</a></li>
          </ul>
        </div>
      </div>
    </nav>
   </header>
   <!-- ================== Banner Section ================== -->

   <section class="banner inner-banner contact-banner">
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-lg-12 p-0">  
          <img class="w-100 h-auto" src="assets/images/contact.jpg" alt="">                
        </div>
      </div>
    </div>
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-inner">
                <h3 class="heading-secondary">Contact us</h3>

         <!-- Script to handle immediate alert -->
         <script>
        // Function to get URL parameter by name
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        // Check status parameter in URL and display alert
        document.addEventListener('DOMContentLoaded', function() {
            var status = getParameterByName('status');
            if (status === 'success') {
                alert('we have got you message we will find you soon.  Thank You!!');
            } else if (status === 'error') {
                alert('Failed to send message. Please try again.');
            }
        });
        </script>

                <form class="form" id="contactForm" method="POST" action="submit.php">
                  <div class="row g-2">
                      <div class="col-md mb-4">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                              <label for="name">Name</label>
                          </div>
                      </div>
                      <div class="col-md mb-4">
                          <div class="form-floating">
                              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                              <label for="email">Email</label>
                          </div>
                      </div>
                      <div class="col-md mb-4">
                          <div class="form-floating me-0">
                              <select class="form-select" id="reason" name="reason" required>
                                  <option disabled selected value="">Select a Reason</option>
                                  <option value="Reservations">Reservations</option>
                                  <option value="Leasing opportunities">Leasing opportunities</option>
                                  <option value="Long-term and group bookings">Long-term and group bookings</option>
                                  <option value="Press">Press</option>
                                  <option value="Careers">Careers</option>
                                  <option value="Collaborations">Collaborations</option>
                                  <option value="Others">Others</option>
                              </select>
                              <label for="reason">Reason</label>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-floating me-0">
                              <textarea class="form-control" id="message" name="message" placeholder="Message" style="height: 200px !important" required></textarea>
                              <label for="message">Message</label>
                          </div>
                          <button type="submit" class="btn btn-primary mt-4 d-block w-100" id="submitButton" disabled>Send Message</button>
                      </div>
                  </div>
              </form>
              
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-inner">
                <h3 class="heading-secondary">Contact Info</h3>   
                <p class="fw-bold">Arika Vacation Homes</p> 
                <div class="cnt-details">
                  <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><rect width="18.5" height="17" x="2.682" y="3.5" rx="4"/><path stroke-linecap="round" stroke-linejoin="round" d="m2.729 7.59l7.205 4.13a3.956 3.956 0 0 0 3.975 0l7.225-4.13"/></g></svg>
                    <div class="cnt-details-sub">
                      <p>Email</p>
                      <a href="">hello@arika.com</a>
                    </div>
                  </div>
                  <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 28 28"><path fill="currentColor" d="m7.92 2.645l1.66-.5a3.25 3.25 0 0 1 3.903 1.779l1.033 2.298a3.25 3.25 0 0 1-.748 3.71l-1.805 1.683a.3.3 0 0 0-.054.073c-.189.386.098 1.417.997 2.975c1.014 1.756 1.797 2.45 2.16 2.343l2.369-.725a3.25 3.25 0 0 1 3.585 1.207l1.468 2.033a3.25 3.25 0 0 1-.4 4.262l-1.263 1.195a3.75 3.75 0 0 1-3.342.949c-3.517-.732-6.668-3.564-9.48-8.434C5.19 12.62 4.313 8.47 5.443 5.057a3.75 3.75 0 0 1 2.478-2.412m.434 1.436a2.25 2.25 0 0 0-1.487 1.447c-.974 2.941-.185 6.677 2.435 11.215c2.618 4.535 5.456 7.085 8.487 7.715a2.25 2.25 0 0 0 2.005-.57l1.262-1.194a1.75 1.75 0 0 0 .216-2.295l-1.468-2.034a1.75 1.75 0 0 0-1.93-.65l-2.375.727c-1.314.391-2.55-.704-3.892-3.03c-1.137-1.968-1.531-3.39-1.045-4.383q.142-.29.378-.511l1.805-1.683a1.75 1.75 0 0 0 .403-1.998L12.115 4.54a1.75 1.75 0 0 0-2.102-.958z"/></svg>
                    <div class="cnt-details-sub">
                      <p>Phone</p>
                      <a href="">+971 ********</a>
                    </div>
                  </div>
                  <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M13.25 7c0 3.75-5.25 7.25-5.25 7.25S2.75 10.75 2.75 7a5.25 5.25 0 0 1 10.5 0"></path><circle cx="8" cy="7" r="1.25" fill="currentColor"></circle></g></svg>
                    <div class="cnt-details-sub">
                      <p>Address</p>
                      <a href="">I-Rise Tower,18-E2, Dubai, UAE</a>
                    </div>
                  </div>
                  <div class="d-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6.25 3h11.5a3.25 3.25 0 0 1 3.245 3.066L21 6.25v11.5a3.25 3.25 0 0 1-3.066 3.245L17.75 21H6.25a3.25 3.25 0 0 1-3.245-3.066L3 17.75V6.25a3.25 3.25 0 0 1 3.066-3.245zh11.5zM4.5 14.5v3.25a1.75 1.75 0 0 0 1.606 1.744l.144.006h11.5a1.75 1.75 0 0 0 1.744-1.607l.006-.143V14.5h-3.825a3.75 3.75 0 0 1-3.475 2.995l-.2.005a3.75 3.75 0 0 1-3.632-2.812l-.043-.188zv3.25zm13.25-10H6.25a1.75 1.75 0 0 0-1.744 1.606L4.5 6.25V13H9a.75.75 0 0 1 .743.648l.007.102a2.25 2.25 0 0 0 4.495.154l.005-.154a.75.75 0 0 1 .648-.743L15 13h4.5V6.25a1.75 1.75 0 0 0-1.607-1.744z"/></svg>
                    <div class="cnt-details-sub">
                      <p>PO BOX</p>
                      <a href="">*****</a>
                    </div>
                  </div>
                </div>    
                <div class="mt-3">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115621.6155471628!2d55.117539038991616!3d25.095920340636503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sae!4v1720000378659!5m2!1sen!2sae" style="border:0; width: 100%; height: 150px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>        
              </div>
            </div>            
          </div>
        </div>
      </div>
    </section>
   </section>  
  <!-- ================== Footer Section ================== -->
    <footer class="footer custom-sec">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="logo-holder mb-2">
              <a href="#" class="navbar-brand text-white">
                Logo
              </a>
            </div>
          </div>
        </div>
        <div class="row menu">
          <div class="col-12 col-md-6 col-lg-3 section">
            <h4>About</h4>
            <ul>
              <li><a href="">Find Us</a></li>
              <li><a href="/about-us">Who we are</a></li>
              <li><a href="/press">Press</a></li>
              <li><a href="/help-center">Help centre</a></li>
              <li><a href="/for-real-estate-partners">For Real Estate Partners</a></li>
              <li><a href="/careers">Careers</a></li>
              <li><a href="/contact-us">Contact us</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-2 section">
            <h4>Cities</h4>
            <ul>
              <li><a href="">Dubai</a></li>
              <li><a href="">Riyadh</a></li>
              <li><a href="">Istanbul</a></li>
              <li><a href="">London</a></li>
              <li><a href="">Manama</a></li>
              <li><a href="">Montreal</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-6 col-lg-3 section">
            <h4>Contact us</h4>
            <ul>
              <li> 
                <a href="" target="_blank" rel="noopener noreferrer">
                  WhatsApp
                  +++++++++++
                </a>
              </li>
              <li>
                <a href="" target="_blank" rel="noopener noreferrer">
                  hello@xyz.com
                </a>
              </li>
            </ul>
            <h4 class="mt-4">For media enquiries</h4>
            <ul>
              <li>
                <a href="" target="_blank" rel="noopener noreferrer">press@xyz.com</a>
              </li>
            </ul>
          </div>
          <!-- <div class="col-12 col-md-6 col-lg-3 section">
            <h4>DOWNLOAD</h4>
            <div class="badges">
              <a href="" target="_blank" rel="noopener noreferrer">
                <img alt="" src="assets/images/apple.png" class="">
              </a>
              <a href="" target="_blank" rel="noopener noreferrer">
                <img alt="" src="assets/images/google.png" class="">
              </a>
            </div>
          </div> -->
          <div class="col-12 col-md-6 col-lg-3 section">
            <h4>Language</h4>
            <div class="d-flex flex-row gap-4">
              <p class="btn text-white w-auto p-0">English</p>
              <p class="btn text-white w-auto p-0">العربية</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 ">
            <div class="copyright-holder">
              <div class="row copyright justify-content-between">
                <div class="col-12 col-md-8 ">
                  <div class="left">
                    <div class="row">
                      <div class="col-12 col-md-auto brand">Ⓒ 2023 Website Title Inc. All rights reserved.</div>
                      <div class="col-12 col-md-auto legals">
                        <ul>
                          <li><a href="">Terms and Conditions</a></li>
                          <li><a href="">Privacy Policy</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-auto right">
                  <div class="social-media" style="display: flex; gap: 10px;">
                    <a href="">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="transform: scale(0.8);">
                        <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                      </svg>
                    </a>
                    <a href="">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zM349.3 793.7H230.6V411.9h118.7v381.8zm-59.3-434a68.8 68.8 0 1 1 68.8-68.8c-.1 38-30.9 68.8-68.8 68.8zm503.7 434H675.1V608c0-44.3-.8-101.2-61.7-101.2-61.7 0-71.2 48.2-71.2 98v188.9H423.7V411.9h113.8v52.2h1.6c15.8-30 54.5-61.7 112.3-61.7 120.2 0 142.3 79.1 142.3 181.9v209.4z"></path>
                      </svg>
                    </a>
                    <a href="">
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" class="icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M512 378.7c-73.4 0-133.3 59.9-133.3 133.3S438.6 645.3 512 645.3 645.3 585.4 645.3 512 585.4 378.7 512 378.7zM911.8 512c0-55.2.5-109.9-2.6-165-3.1-64-17.7-120.8-64.5-167.6-46.9-46.9-103.6-61.4-167.6-64.5-55.2-3.1-109.9-2.6-165-2.6-55.2 0-109.9-.5-165 2.6-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6 46.9 46.9 103.6 61.4 167.6 64.5 55.2 3.1 109.9 2.6 165 2.6 55.2 0 109.9.5 165-2.6 64-3.1 120.8-17.7 167.6-64.5 46.9-46.9 61.4-103.6 64.5-167.6 3.2-55.1 2.6-109.8 2.6-165zM512 717.1c-113.5 0-205.1-91.6-205.1-205.1S398.5 306.9 512 306.9 717.1 398.5 717.1 512 625.5 717.1 512 717.1zm213.5-370.7c-26.5 0-47.9-21.4-47.9-47.9s21.4-47.9 47.9-47.9 47.9 21.4 47.9 47.9a47.84 47.84 0 0 1-47.9 47.9z"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
 <!-- ================== Color Section ================== -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="color-button green" data-theme="green"></div>
        <div class="color-button yellow" data-theme="yellow"></div>
        <div class="color-button blue" data-theme="blue"></div>
      </div>
    </div>
    <!-- Login -->
    <div class="modal fade" id="login-modal-div" tabindex="-1" aria-labelledby="login-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="heading-primary" id="login-modal-div">Login</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card border-0 shadow-2-strong">
              <div class="card-body p-3 text-center">    
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
    
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
                <p class="my-4 text-start"><a class="text-black fw-bold text-decoration-underline" href="#!">Forgot password?</a></p>
                <button class="btn btn-primary w-100" type="submit">Login</button>
    
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
    
                <button class="btn btn-outline-secondary mb-3 w-100"  type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                <button class="btn btn-outline-secondary w-100"  type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
                <p class="my-4 text-start">Don't have an account? <a class="text-black fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#signup-modal-div"> Sign up</a></p>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Signup -->
    <div class="modal fade" id="signup-modal-div" tabindex="-1" aria-labelledby="signup-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="heading-primary" id="signup-modal-div">Sign up</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card border-0 shadow-2-strong">
              <div class="card-body p-3 text-center">    
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <button class="btn btn-primary w-100" type="submit">Login</button>
    
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>
    
                <button class="btn btn-outline-secondary mb-3 w-100"  type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                <button class="btn btn-outline-secondary w-100"  type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
                <p class="my-4 text-start">Have an account? <a class="text-black fw-bold" type="button" data-bs-toggle="modal" data-bs-target="#login-modal-div"> Login</a></p>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Forgot Password -->
    <div class="modal fade" id="forgot-modal-div" tabindex="-1" aria-labelledby="forgot-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="heading-primary" id="forgot-modal-div">Forgot password?</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="card border-0 shadow-2-strong">
              <div class="card-body p-3 text-center">    
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <button class="btn btn-primary w-100" type="submit">Send reset link</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ================== Script Links ================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- ================== Animation Script Links ================== -->
    <script src="assets/js/animation.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitButton = document.getElementById('submitButton');
    
        form.addEventListener('input', function() {
            if (form.checkValidity()) {
                submitButton.removeAttribute('disabled');
            } else {
                submitButton.setAttribute('disabled', 'true');
            }
        });
    
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                // Optionally, display an error message or alert
            }
        });
    });
  </script>
  </body>
</html>


