<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
        <a class="nav-link collapsed" href="index.php">
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
            <a href="view-borrowers.php">
              <i class="bi bi-circle"></i><span>View Borrowers</span>
            </a>
          </li>
          <li>
            <a href="add-borrowers.php">
              <i class="bi bi-circle"></i><span>Add Borrowers</span>
            </a>
          </li>
          <li>
            <a href="view-borrower-groups.php">
              <i class="bi bi-circle"></i><span>View Borrower Groups</span>
            </a>
          </li>
          <li>
            <a href="add-borrower-group.php">
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
            <a href="view-loans.php">
              <i class="bi bi-circle"></i><span>View All Loans</span>
            </a>
          </li>
          <li>
            <a href="add-Loan.php">
              <i class="bi bi-circle"></i><span>Add Loan</span>
            </a>
          </li>
          <li>
          <a href="due-loans.php">
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
            <a href="view-payments.php">
              <i class="bi bi-circle"></i><span>View Payments</span>
            </a>
          </li>
          <li>
            <a href="approve-payment.php">
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
            <a href="view-reports.php">
              <i class="bi bi-circle"></i><span>View Reports</span>
            </a>
          </li>
          <li>
            <a href="generate-reports.php">
              <i class="bi bi-circle"></i><span>Generate Reports</span>
            </a>
          </li>
        </ul>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.php">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.php">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.php">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Loan</h1>
      <nav>
      <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>-->
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

            </div>
          </div>

          <div class="card">
            <div class="card-body">

              <!-- Multi Columns Form -->
              <form action="add-Loan.php" method="post" class="row g-3">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Loan Type</label>
                  <select class="form-select" name="loanType" id="floatingSelect" aria-label="State">
                      <option selected>Business Loan</option>
                      <option value="1">Personal Loan</option>
                      <option value="2">Student Loan</option>
                    </select>
                </div>
                <div class="col-md-6">
                  <label for="inputBorrower" class="form-label">Borrower</label>
                  <input type="text" name="borrower" class="form-control" id="borrower">
                </div>
                <!--<div class="col-md-6">
                  <label for="loan-number" class="form-label">Loan Number</label>
                  <input type="text" class="form-control" name="loa" id="loan-number">
                </div> -->
                <hr>
                <div style="color:blue"><h3>Loan Terms</h3></div>
                <div class="col-12">
                  <!--<p style="color:red">Principal:</p>-->
                  <!--<label for="inputAddress5" class="form-label">Address</label>-->
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Distributed By</label>
                  <select class="form-select" name="distributedBy">
                  <option selected>Cash</option>
                      <option value="1">Cheque</option>
                    </select>
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Amount Requested</label>
                  <input type="number" class="form-control" id="inputRequested" name="amountRequested" placeholder="Amount Requested">
                </div>

                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Amount Approved</label>
                  <input type="number" class="form-control" id="inputApproved" name="amountApproved" placeholder="Amount Approved">
                </div>

                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Processing Fees</label>
                  <input type="number" class="form-control" id="inputProcessing" value=15000 name="processingFee" Requested>
                </div>

                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Application Fees</label>
                  <input type="number" class="form-control" id="inputProcessing" value=5000 name="processingFee" Requested>
                </div>

                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Loan Period(Months)</label>
                  <select class="form-select" name="loanPeriod">
                  <option selected>1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="1">5</option>
                      <option value="1">6</option>
                      <option value="1">7</option>
                      <option value="1">8</option>
                      <option value="1">9</option>
                      <option value="1">10</option>
                      <option value="1">11</option>
                      <option value="1">12</option>
                    </select>
                </div>
            
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Interest Rate(%age)</label>
                  <select class="form-select"name="interestRate">
                  <option selected>5</option>
                      <option value="1">6</option>
                      <option value="1">7</option>
                      <option value="1">8</option>
                      <option value="1">9</option>
                      <option value="1">10</option>
                    </select>
                </div>
               
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Loan Release date</label>
                  <input type="date" class="form-control" name="loanReleaseDate" id="inputDate">
                </div>
                <hr>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>

            </div>
          </div>

        </div>
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




<?php
include 'connection/db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] ==='POST') {
  // Validate and sanitize the form input
  $loan_type = $conn->real_escape_string($_POST['loanType']);
  $borrower = $conn->real_escape_string($_POST['borrower']);
  $distributed_by = $conn->real_escape_string($_POST['distributedBy']);
  $amount_requested = $conn->real_escape_string($_POST['amountRequested']);
  $amount_approved = $conn->real_escape_string($_POST['amountApproved']);
  $processing_fee = $conn->real_escape_string($_POST['processingFee']);
  $application_fee = $conn->real_escape_string($_POST['applicationFee']);
  $loan_period = $conn->real_escape_string($_POST['loanPeriod']);
  // $approved = $conn->real_escape_string($_POST['approved']);
  $interest_rate = $conn->real_escape_string($_POST['interestRate']);
  $release_date = $conn->real_escape_string($_POST['releaseDate']);
  // $district = mysqli_real_escape_string($conn, $_POST['district']);

// echo $district;
$sql =  "INSERT INTO loans(loan_type, borrower, distributed_by, amount_requested,
 amount_approved, processing_fee,application_fee, loan_period, interest_rate, release_date)
 VALUES ('$loan_type','$borrower','$distributed_by','$amount_requested','$amount_approved',
'processing_fee','$application_fee','$loan_period','$interest_rate','$release_date')";

if ($conn->query($sql) === TRUE) {
echo "<script>window.location.href = 'add-Loan.php';</script>";

exit;
} else {
  echo "Error: ". $conn->error;
}

}
?>