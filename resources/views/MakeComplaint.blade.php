<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="/images/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!--  CSS -->
  <link rel="stylesheet" href="/css/argon.css" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="images/Complaint.png" class="navbar-brand-img" style="max-height: 75px;">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link" href="{{url('showprofile')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">My Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('complaints_show')}}">
                <i class="ni ni-single-copy-04 text-info"></i>
                <span class="nav-link-text">Complaint History</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">SERVICES</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/makecomplaint')}}">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Lodge Complaint</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('change_password')}}">
                <i class="ni ni-lock-circle-open"></i>
                <span class="nav-link-text">Change Password</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('faq')}}">
                <i class="ni ni-chat-round"></i>
                <span class="nav-link-text">FAQ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('logout')}}">
                <i class="ni ni-button-power"></i>
                <span class="nav-link-text">Log Out</span>
              </a>
            </li>




          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0"><strong class="text-primary"></strong> </h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="images/Mine.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm"></h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3"></a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small></small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small></small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small></small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small></small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small></small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small></small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Customer</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{url('/admin')}}"><i class="ni ni-circle-08"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{url('showprofile')}}">Profile</a></li>

                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="{{url('complaints_show')}}" class="btn btn-sm btn-neutral">Complaint History</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->

    <div class="col-xl-12 order-xl-1">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Register Complaint </h3>
            </div>
          </div>
        </div>
        <div class="card-body">

          <form method="post" action="{{route('create-complaint')}}">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-success">{{Session::get('fail')}}</div>
            @endif
            {{ csrf_field() }}
            <h6 class="heading-small text-muted mb-4">Complaint Details</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="name">Name</label>
                    <textarea name="name" id="" class="form-control"> </textarea>
                    <span class="text-danger">@error('name') {{$message}} @enderror </span>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-category">Category</label>
                    <select name="category" id="category" class="custom-select">
                      <option>-Select--</option>
                      <option value="General">General</option>
                      <option value="E-commerce">E-commerce</option>
                    </select>
                    <span class="text-danger">@error('category') {{$message}} @enderror </span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-subcategory">Sub-Category</label>
                    <select name="subcategory" id="subcategory" class="custom-select">
                      <option>-Select--</option>
                      <option value="Online Shopping">Online Shopping</option>
                      <option value="E-Wallet">E-Wallet</option>
                      <option value="Food Issue">Food Issue</option>
                      <option value="Utility Issue">Utility Issue</option>
                      <option value="Service Issue">Service Issue</option>
                    </select>
                    <span class="text-danger">@error('subcategory') {{$message}} @enderror </span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-complainttype">Complaint Type</label>
                    <select name="complainttype" id="complainttype" class="custom-select">
                      <option>-Select--</option>
                      <option value="Personal">Personal</option>
                      <option value="Service">Service</option>
                    </select>

                  </div><span class="text-danger">@error('complainttype') {{$message}} @enderror </span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-complaintdetails">Complaint Details(Maximum 2000 words)</label>
                    <textarea name="complaintdetails" id="" class="form-control"> </textarea>
                    <span class="text-danger">@error('complaintdetails') {{$message}} @enderror </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 text-right">

              <td><input class="btn btn-sm btn-primary" type="submit" name="submit" /></td>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  </div>
  <!--  Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!--  JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>