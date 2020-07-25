<!DOCTYPE html>
<html>
  <body>
    <p>Thinking</p>
    <form id="PUSH_RESULT_BACK" action="./../records/search/index.php" method="POST">
      <?php
        $conn = new mysqli($_POST["SERVERNAME"], $_POST["USERNAME"], $_POST["PASSWORD"], $_POST["DBNAME"]);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }else{
          echo "Connection successful";
          $search_term=$_POST["SEARCH_TERM"];
          $search_by=$_POST["SEARCH_BY"];
          $tablename=$_POST["TABLE_NAME"];
          $sql = "SELECT REFERENCE, PROJECT_ID, PAYEE_ID, COMPANY_ID, ITEMS_FROM, ITEMS_TO FROM '$tablename' WHERE ID='$search_term'";
          $result = $conn->query($sql);
          $current=0;
          echo '<input type="hidden" name="RESULT_COUNT" value="'.$result->num_rows.'">';
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $current=$current+1;
              echo '<p> type="hidden" name="RESULT_VALUE_'.strval($current).'" value="'.$row["REFERENCE"].'"</p>';
              echo '<input type="hidden" name="RESULT_VALUE_'.strval($current).'" value="'.$row["REFERENCE"].'">';
            }
          }
        }
      
        $conn->close();
      ?>
    </form>
    <script>
      document.getElementById("PUSH_RESULT_BACK").submit();
    </script>
  </body>
</html>
