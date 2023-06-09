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
  $release_date = $conn->real_escape_string($_POST['loanReleaseDate']);
  // $district = mysqli_real_escape_string($conn, $_POST['district']);

// echo $release_date;
// exit();

$sql =  "INSERT INTO loans(loan_type, borrower, distributed_by, amount_requested,
 amount_approved, processing_fee,application_fee, loan_period, interest_rate, release_date)
 VALUES ('$loan_type','$borrower','$distributed_by','$amount_requested','$amount_approved',
'$processing_fee','$application_fee','$loan_period','$interest_rate','$release_date')";

if ($conn->query($sql) === TRUE) {
echo "<script>window.location.href = 'add-Loan.php';</script>";

exit;
} else {
  echo "Error: Failed to add it to the database.......";
}

}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>