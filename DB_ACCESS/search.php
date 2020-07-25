<?php
session_start();
if(!isset($_SESSION["SERVERNAME"])){$_SESSION["SERVERNAME"] = $_POST["SERVERNAME"];}
if(!isset($_SESSION["USERNAME"])){$_SESSION["USERNAME"] = $_POST["USERNAME"];}
if(!isset($_SESSION["PASSWORD"])){$_SESSION["PASSWORD"] = $_POST["PASSWORD"];}
if(!isset($_SESSION["DBNAME"])){$_SESSION["DBNAME"] = $_POST["DBNAME"];}
if(!isset($_SESSION["RESULT"])){$_SESSION["RESULT"]=array("EMPTY");}

$servername = $_SESSION["SERVERNAME"];
$username = $_SESSION["USERNAME"];
$password = $_SESSION["PASSWORD"];
$dbname = $_SESSION["DBNAME"];
$search_term=$_POST["SEARCH_TERM"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  echo "Connection Seuccessful";
  $sql = "SELECT REFERENCE, PROJECT_ID, PAYEE_ID, COMPANY_ID, ITEMS_FROM, ITEMS_TO FROM INVOICES WHERE ID='$search_term'";
  $result = $conn->query($sql);
  
  $_SESSION['RESULT']=$result;
  //header("Location: ./../records/search/");
  $conn->close();
  
}
?>
