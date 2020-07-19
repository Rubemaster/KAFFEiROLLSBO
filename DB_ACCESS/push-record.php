<?php
$servername = $_POST["SERVERNAME"];
$username = $_POST["USERNAME"];
$password = $_POST["PASSWORD"];
$dbname = $_POST["DBNAME"];
$tablename = $_POST["TABLENAME"];
echo 'Server Name: ';
echo $servername;
echo '<br>User Name: ';
echo $username;
echo '<br>Password: ';
echo $password;
echo '<br>Data Base Name: ';
echo $dbname;
echo '<br>Tabel Name: ';
echo $tablename;
echo '<br>';
echo '<br>';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connection Seuccessful";
}
echo '<br>';
if($tablename=="INVOICES"){

  $invoice_reference  = $_POST["REFERENCE"];
  $invoice_project_id = $_POST["PROJECT_ID"];
  $invoice_payee_id   = $_POST["PAYEE_ID"];
  $invoice_company_id = $_POST["COMPANY_ID"];
  $invoice_items_from = $_POST["ITEMS_FROM"];
  $invoice_items_to   = $_POST["ITEMS_TO"];
  $invoice_binary     = $_POST["BINARY"];
  echo '<br>Reference number: ';
  echo $invoice_reference;
  echo '<br>Project ID: ';
  echo $invoice_project_id;
  echo '<br>Payee ID: ';
  echo $invoice_payee_id;
  echo '<br>Company ID: ';
  echo $invoice_company_id;
  echo '<br>Including items from: ';
  echo $invoice_items_from;
  echo " to ";
  echo $invoice_items_to;
  $sql = "INSERT INTO MyGuests (REFERENCE, PROJECT_ID, PAYEE_ID, COMPANY_ID, ITEMS_FROM, ITEMS_TO, PDF_BINARY) 
          VALUES ('$invoice_reference', '$invoice_payee_id', '$invoice_project_id','$invoice_payee_id','$invoice_company_id','$invoice_items_from','$invoice_items_to','$invoice_binary')";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Create connection
// Check connection

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";

//if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully";
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$conn->close();
//?>
<html>
</html>
