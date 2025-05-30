<?php 
    $servername = "localhost";
    $username= "root";
    $password="";
    $dbname= "myproject";
    $conn= new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error){
        die("connection Faild". $conn->connect_error);
    }
?>
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
            <!-- Bootstrap 4 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery and Bootstrap 4 JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
           <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                                    <a class="nav-link" href="#">Add Users</a>
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
<!--End Side bar-->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal Edit </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                        <label for="inputFirstName">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputContact" type="text" placeholder="Enter your last name" />
                                        <label for="inputContact">Contact</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                              <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" readonly />
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-floating mb-3">
                              <input class="form-control" id="inputEvent" type="text" placeholder="Event"/>
                                <label for="inputEmail">Event</label>
                            </div>
<!--                           
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Update</a></div>
                            </div> -->
                            <input type="hidden" name="EditIdHidden" id="EditIdHidden">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                    </div>
                </div>
            </div>
            <!--End Edit Modal-->
            <div id="layoutSidenav_content">
                <main>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                           <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered">
                                <?php 
                                $data = "SELECT * FROM users";
                                $result = mysqli_query($conn, $data);
                                ?>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Email</th>
                                        <th>User Contact</th>
                                        <th>Join Date</th>
                                        <th>Event Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($row['Name']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Email']); ?></td>
                                            <td><?php echo htmlspecialchars($row['Contact']); ?></td>
                                            <!-- <td><?php// echo isset($row['Create_date']) ? htmlspecialchars($row['Create_date']) : 'N/A'; ?></td> -->
                                            <td><?php echo date('Y-m-d', strtotime($row['Create_date'])); ?></td>
                                            <td><?php echo isset($row['EventName']) ? htmlspecialchars($row['EventName']) : 'N/A'; ?></td>
                                            <td>
                                                <!-- Action buttons (edit/delete) -->
                                                <!-- <button class="btn btn-sm btn-primary">Edit</button> -->
                                                <button id="delete" class="btn btn-sm btn-danger">Delete</button>
                                                <button type="button" id="EditButton" class="btn btn-sm btn-primary EditButton"
                                                    data-id="<?php echo $row['ID']; ?>" 
                                                    data-email="<?php echo $row['Email']; ?>" 
                                                    data-contact="<?php echo $row['Contact']; ?>" 
                                                    data-role="<?php echo $row['Role']; ?>" 
                                                    data-name="<?php echo $row['Name']; ?>"  
                                                    data-toggle="modal" data-target="#exampleModalCenter">
                                                    Edit
                                                    </button>

                                                   
                                            </td>
                                        </tr>
                                    <?php 
                                        }
                                    } else {
                                        echo '<tr><td colspan="6">No users found.</td></tr>';
                                    }
                                    ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Email</th>
                                        <th>User Contact</th>
                                        <th>Join Date</th>
                                        <th>Event Name</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        </div> 
                    </div>
                </main>
            </div>
          <footer class="py-4 bg-light mt-auto ">
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
        <<script>
            $(document).ready(function() {
                $('.EditButton').click(function() {
                    var id = $(this).data('id');
                    var email = $(this).data('email');
                    var contact = $(this).data('contact');
                    var role = $(this).data('role');
                    var name = $(this).data('name');

                    // Set values in hidden inputs or modal inputs if needed
                    $('#EditIdHidden').val(id);
                    $('#inputEmail').val(email);
                    $('#inputContact').val(contact);
                    $('#inputEvent').val(role);
                    $('#inputFirstName').val(name);
                });
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
