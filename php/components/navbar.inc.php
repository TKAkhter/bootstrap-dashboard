<section class="container-fluid bg-dark text-white">
  <div class="header container-xl">
    <div class="row big-header min-mobile">
      <div class="col-lg-2 col-md-2 col-sm-2 border-end align-items-center justify-content-between d-flex">
        <a href="<?php echo dirname($_SERVER['PHP_SELF']); ?>">
          <img src="./assets/images/Loreal Pakistan Logo.png" class="mx-auto img-fluid" alt="L'Oreal pakistan">
        </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 border-end align-items-center justify-content-between d-flex">
        <div class="input-group mb-3">
          <form class="d-flex w-100">
            <button class="made-transparent" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg></span></button>
            <input class="form-control me-2 made-transparent" type="search" placeholder="Search for something..." aria-label="Search for something...">
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 border-end align-items-center justify-content-between d-flex">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 align-items-center text-center justify-content-center d-flex">
          <div class="nav justify-content-center align-items-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link nav-inactive active" aria-current="page" href="<?php echo dirname($_SERVER['PHP_SELF']); ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-inactive" href="./user/reports.html">Report</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-inactive" href="./user/account.html">User Accounts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-inactive" href="./user/profile.html">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-inactive" href="#">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 border-end align-items-center justify-content-between d-flex">
        <div class="row align-items-center d-flex">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="text-wrap"><span>Welcome, </span><span id="username">Admin</span></div>
            <div id="user-name" class="custom-color-primary">Noman Shahid</div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <a href="#">
              <img src="./assets/images/user placeholder.png" class="mx-auto img-fluid" alt="user placeholder">
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-1 col-md-1 col-sm-1 align-items-center justify-content-between d-flex made-transparent">
        <div class="">
          <a href="#">
            <svg class="icon-header made-transparent" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="row mobile-header d-sm-none d-md-none d-lg-none d-xl-none">
      <div class="col-sm-12 align-items-center justify-content-between d-flex">
        <a href="#">
          <img src="./assets/images/Loreal Pakistan Logo.png" class="mx-auto img-fluid" alt="L'Oreal pakistan">
        </a>
      </div>
      <div class="col-sm-6 align-items-center justify-content-between d-flex">
        <div class="input-group">
          <form class="d-flex w-100">
            <button class="made-transparent" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg></span></button>
            <input class="form-control me-2 made-transparent" type="search" placeholder="Search for something..." aria-label="Search for something...">
          </form>
        </div>
        <div class="col-sm-6 align-items-center justify-content-between d-flex">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100 align-items-center text-center justify-content-center d-flex">
            <div class="nav justify-content-center align-items-center">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link nav-inactive active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-inactive" href="#">Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-inactive" href="#">User Accounts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-inactive" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-inactive" href="#">Logout</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 align-items-center justify-content-between d-flex">
        <div class="row align-items-center d-flex">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="text-wrap"><span>Welcome, </span><span id="username">Admin</span></div>
            <div id="user-name" class="custom-color-primary">Noman Shahid</div>
          </div>
          <div class="mobile-logo col-lg-4 col-md-4 col-sm-4 my-3">
            <a href="#">
              <img src="./assets/images/user placeholder.png" class=" mobile-image mx-auto img-fluid" alt="user placeholder">
            </a>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 align-items-center justify-content-between d-flex made-transparent">
          <div class="">
            <a href="#">
              <svg class="icon-header made-transparent" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>