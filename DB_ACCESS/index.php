<?php
$servername = $_POST["SERVERNAME"];
$username = $_POST["USERNAME"];
$password = $_POST["PASSWORD"];
$dbname = $_POST["DBNAME"];
$tablename = $_POST["TABLENAME"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connection Seuccessful";
}
if($tablename=="INVOICES"){
  $invoice_reference  = $_POST["INVOICE_REFERENCE"];
  $invoice_project_id = $_POST["INVOICE_PROJECT_ID"];
  $invoice_payee_id   = $_POST["INVOICE_PAYEE_ID"];
  $invoice_company_id = $_POST["INVOICE_COMPANY_ID"];
  $invoice_items_from = $_POST["INVOICE_ITEMS_FROM"];
  $invoice_items_to   = $_POST["INVOICE_ITEMS_TO"];
  $invoice_binary     = $_POST["INVOICE_BINARY"];
}

// Create connection
// Check connection

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
</html>
