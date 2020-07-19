<?php
$servername = $_POST["SERVERNAME"];
$username = $_POST["USERNAME"];
$password = $_POST["PASSWORD"];
$dbname = $_POST["DBNAME"];
$search_term=$_POST["SEARCH_TERM"];

$conn = new mysqli($servername, $username, $password, $dbname);

header("Location: https://rubenrick.online/records/search/");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connection Seuccessful";
  $sql = "SELECT REFERENCE, PROJECT_ID, PAYEE_ID, COMPANY_ID, ITEMS_FROM, ITEMS_TO FROM INVOICES WHERE ID='$search_term'";
  $result = $conn->query($sql);
  $results =[];
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($results,$row["REFERENCE"]);
      echo "REFERENCE: " . $row["REFERENCE"]. "<br>";
    }
  }
  session_start();
  session_register('RESULTS');
  $_SESSION['RESULTS']=$results;
  $conn->close();
  
}
?>
