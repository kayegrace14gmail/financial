
<?php
// Connect to the database
include 'connection\db_connection.php';
session_start();

// Retrieve the list of borrowers from the database
$sql = 'SELECT * FROM borrower_groups';
$result = $conn -> query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Alerts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    i {
      /* padding: 0px 0px 0px 0px; */
      font-size: 20px;
    }

    .table a {
      padding: 1px 1px 1px 1px; 
    }

    input[type="search"] {
      width: 100%;
      padding: 5px 5px 5px 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

  </style>

<script>
    // Get the reference to the div element
    var divElement = document.getElementById("message-container");

    // Function to remove the div from the DOM
    function removeDiv() {
        divElement.parentNode.removeChild(divElement);
    }

    // Add the 'removeDiv' function as an event listener for 'transitionend' event
    divElement.addEventListener("transitionend", removeDiv);

    // Trigger the fade-out effect after a short delay
    setTimeout(function () {
        divElement.classList.add("fade-out");
    }, 2000); // Delay of 2 second (2000 milliseconds)
</script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Home Branch</span>
        </a>
      </li><!-- End Dashboard Nav -->
<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Borrowers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

         <li>
            <a href="view-borrowers.html">
              <i class="bi bi-circle"></i><span>View Borrowers</span>
            </a>
          </li>
          <li>
            <a href="add-borrowers.html">
              <i class="bi bi-circle"></i><span>Add Borrowers</span>
            </a>
          </li>
          <li>
            <a href="view-borrower-groups.html">
              <i class="bi bi-circle"></i><span>View Borrower Groups</span>
            </a>
          </li>
          <li>
            <a href="add-borrower-group.html">
              <i class="bi bi-circle"></i><span>Add Borrower Groups</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Send Emails to all Borrowers</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Send SMS to all Borrowers</span>
            </a>
        
        </ul>
      </li><!-- End Borrowers Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Loans</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view-loans.html">
              <i class="bi bi-circle"></i><span>View All Loans</span>
            </a>
          </li>
          <li>
            <a href="add-Loan.html">
              <i class="bi bi-circle"></i><span>Add Loan</span>
            </a>
          </li>
          <li>
          <a href="due-loans.html">
              <i class="bi bi-circle"></i><span>Due Loan</span>
            </a>
          </li>
          <!--<li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>1 month Late Loans</span>
            </a>
          </li> -->
        </ul>
      </li><!-- End Loans Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Payments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view-payments.html">
              <i class="bi bi-circle"></i><span>View Payments</span>
            </a>
          </li>
          <li>
            <a href="approve-payment.html">
              <i class="bi bi-circle"></i><span>Approve Payments</span>
            </a>
          </li>
        </ul>
      </li><!-- End Payments Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="view-reports.html">
              <i class="bi bi-circle"></i><span>View Reports</span>
            </a>
          </li>
          <li>
            <a href="generate-reports.html">
              <i class="bi bi-circle"></i><span>Generate Reports</span>
            </a>
          </li>
        </ul>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <?php if(isset($_SESSION['message'])) {?>
    <div class="container" id="message-container">
        <div class="row">
            <div class="col-md-12">
            <div class="alert alert-success d-flex justify-content-between align-items-center">
                   <?php echo $_SESSION['message']; ?>
                   <!-- add button for removing the alert message -->
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
    <?php } unset($_SESSION['message']); ?>

  <section>
  <div class="container">
    <h1>Borrower Groups</h1>
    <table class="table datatable table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">view</th>
          <th scope="col">ID</th>
          <th scope="col">Group Name</th>
          <th scope="col">Location</th>
          <th scope="col">Contact</th>
          <th scope="col">Leader</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php while ($borrower_group = $result -> fetch_assoc()) { ?>
         
          <tr>
            <td scope="row"><a href="#" title="View"><i class="bi bi-eye-fill"></i></a></td>
            <td><?php echo $borrower_group['id']; ?></td>
            <td> <?php echo $borrower_group['name']; ?></td>
            <td><?php echo $borrower_group['location']; ?></td>
            <td><?php echo $borrower_group['contact']; ?></td>
            <td><?php echo $borrower_group['leader']; ?></td>
            <td>
              <a title="Edit" href="edit-borrower-group.php?id=<?php echo $borrower_group['id']; ?>" class="text-primary"><i class="bi bi-pencil-square"></i></a>
              <a title="Delete" href="delete-borrower-group.php?id=<?php echo $borrower_group['id']; ?>" class="text-danger"><i class="bi bi-trash"></i></a>
          </tr>
        <?php }?>
      </tbody>
    </table>
  </div>

  </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>