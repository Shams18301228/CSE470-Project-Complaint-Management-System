<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Complaint Management System</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +9734512769</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> complaint@gmail.com</a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Complaint</span> Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('showprofile')}}">My Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('complaints_show')}}">Complaint History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/makecomplaint')}}">Lodge Complaint</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('change_password')}}">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('faq')}}">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('logout')}}">Log Out</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../images/image.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's solve your daily problems</span>
        <h1 class="display-4">Lead a Problem Free Life</h1>
        <a href="{{url('/aboutus')}}" class="btn btn-primary">About Our System</a>
      </div>
    </div>
  </div>

  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Discuss </span> Your Complaints</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Protection</span> of Personal details</p>
            </div>
          </div>
        
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Our Website </h1>
            <p class="text-grey mb-4">The Easiest Way To Complain Online.Tired off getting ripped off? Fight back and file a customer complaint now.Sign Up Today And You Can Leave Complaints on various topics/company.You can trust us by sharing your personal details and lodge a complaint regarding your issue.</p>
            <a href="{{url('/aboutus')}}" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../images/Employee.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Food Safety</a>
              </div>
              <a href="https://archive.dhakatribune.com/bangladesh/2021/03/14/govt-fao-collaborating-on-improving-food-safety-scenario-in-bangladesh" class="post-thumb">
                <img src="../assets/img/blog/food.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="https://archive.dhakatribune.com/bangladesh/2021/03/14/govt-fao-collaborating-on-improving-food-safety-scenario-in-bangladesh">Govt, FAO collaborating on improving food safety scenario in Bangladesh</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="images/Mine.jpg" alt="">
                  </div>
                  <span>Md Isteak Shams</span>
                </div>
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Electricity</a>
              </div>
              <a href="https://archive.dhakatribune.com/bangladesh/power-energy/2020/07/04/faulty-electricity-bill-dpdc-suspends-4-officials-show-cause-36-nocs-engineers" class="post-thumb">
                <img src="../assets/img/blog/Electricity.jpeg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="https://archive.dhakatribune.com/bangladesh/power-energy/2020/07/04/faulty-electricity-bill-dpdc-suspends-4-officials-show-cause-36-nocs-engineers">DPDC suspends 4 officials, show-causes 36 NOCS engineers</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="images/Mine.jpg" alt="">
                  </div>
                  <span>Md Isteak Shams</span>
                </div>
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">Water</a>
              </div>
              <a href="https://www.linkedin.com/pulse/chemists-without-borders-has-model-solve-arsenic-ray-kronquist" class="post-thumb">
                <img src="../assets/img/blog/water.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="https://www.linkedin.com/pulse/chemists-without-borders-has-model-solve-arsenic-ray-kronquist">Solution of Arsenic Contamination Problem in Bangladesh </a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/img/person/person_2.jpg" alt="">
                  </div>
                  <span>Fahim Hasan</span>
                </div>
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->
  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-4 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Complaint Manager's Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-4 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Policy</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-4 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">274/A,Tajmahal Street,NA</p>
          <a href="#" class="footer-link">+93174547893</a>
          <a href="#" class="footer-link">complaints@yahoo.net</a>

        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022 <a target="_blank">Complaint Management System</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>