
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
         <script src="js/master.js" crossorigin="anonymous"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         <!-- Toastr CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <!-- jQuery (if not already included) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <!-- Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               User Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="users.php">Users</a>
                                    <a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="AddUser.php">Add Users</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Event Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Admin Management
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Event Management
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">Add Events</a>
                                            <a class="nav-link" href="404.html">Display Events</a>
                                            <a class="nav-link" href="500.html">Payment Detials</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="users.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Users
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <!--Add User Form -->
                        <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-lg-7">
                                  <div class="card shadow-lg border-0 rounded-lg mt-5">
                                      <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User</h3></div>
                                      <div class="card-body">
                                          <form method="POST">
                                              <div class="row mb-3">
                                                  <div class="col-md-6">
                                                      <div class="form-floating mb-3 mb-md-0">
                                                          <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                          <label for="inputFirstName">First name</label>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-floating">
                                                          <input class="form-control" id="inputLastName" type="number" placeholder="Enter your last name" />
                                                          <label for="inputLastName">Contact</label>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-floating mb-3">
                                                  <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                  <label for="inputEmail">Email address</label>
                                              </div>
                                              <div class="row mb-3">
                                                  <div class="col-md-6">
                                                      <div class="form-floating mb-3 mb-md-0">
                                                          <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                          <label for="inputPassword">Password</label>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                      <div class="form-floating mb-3 mb-md-0">
                                                          <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                          <label for="inputPasswordConfirm">Confirm Password</label>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="mt-4 mb-0">
                                                  <div class="d-grid" id="AddUser" name="AddUser"> <a class="btn btn-primary btn-block">Add User</a></div>
                                              </div>
                                          </form>
                                      </div>
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

<!--******validation Js **********-->
<script>
  $(document).ready(function(){
    $('#AddUser').click(function (e) {
      e.preventDefault(); // Prevent form from submitting normally
    //    Adduser();
      // Get form values
      var $name = $('#inputFirstName').val().trim();
      var $lname = $('#inputLastName').val().trim();
      var $email = $('#inputEmail').val().trim();
      var $password = $('#inputPassword').val();
      var $cpassword = $('#inputPasswordConfirm').val();
      var $button = $('AddUser').val();

      // Basic validation
      if (!$name) {
        alert('Please enter your first name.');
        return;
      }

      if (!$lname) {
        alert('Please enter your last name.');
        return;
      }

      if (!$email || !validateEmail($email)) {
        alert('Please enter a valid email address.');
        return;
      }

      if (!$password) {
        alert('Please enter a password.');
        return;
      }

      if ($password !== $cpassword) {
        alert('Passwords do not match.');
        return;
      }

      // Submit via AJAX
        $.ajax({
            url: 'functions.php',
            type: 'POST',
            data: {
                Name: $name,
                Lname: $lname,
                Email: $email,
                Password: $password
            },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                //alert(response.message);
                 toastr.success(response.message);
                $('#inputFirstName, #inputLastName, #inputEmail, #inputPassword, #inputPasswordConfirm').val('');
                } else {
                //alert('Error: ' + response.message);
                
                 toastr.error(response.message); 
                }
            },
            error: function (xhr, status, error) {
                //alert('AJAX Error: ' + error);
                 toastr.error('AJAX Error: ' + xhr.status + ' - ' + xhr.statusText);
            }
        });
    });
    // Email validation helper
    function validateEmail(email) {
      var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }
  });


</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
