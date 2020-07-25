
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KAFFEiROLLSBO</title>
    <!-- Denali CSS & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/denali-icon-font/dist/denali-icon-font.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/denali-css/css/denali.css">
  </head>
    <body style="background-image: url(./../../bg.jpg); background-size: cover;">
        <nav class="nav">
            <div class="nav-left">
                <h3 style="position: absolute; color: rgba(255, 255, 255, 1.0); top: 50%; transform: translateY(-50%); width: 0px;"><i>KAFFEiROLLSBO.SE</i></h3>
                 <span class="nav-item" style="padding-left: 230px;"><i class="d-icon d-information-circle"></i></span>
            </div>
            <div class="nav-right nav-responive is-active">
               
            </div>
        </nav>
        
                            <p style="color: rgba(0, 0, 0, 0.0);">_</p>
    <div class="container">
        <div class="row p-10 br-4">
            <div class="col p-10 br-4" style="background-color: #002B66">
                <div class="row p-10 br-4">
                    <div class="col p-10 br-4">
                        <div class="input">
                            <h1 style="color: white; white-space: nowrap;"><i>RECORD COMMAND</i></h1>
                            <p style="color: rgba(0, 0, 0, 0.0);">_</p>
                            <form action="./../../DB_ACCESS/search.php" method="POST">
                              <table id="TABLE_INPUT">
                                <tr>
                                  <td>
                                    <label for="in1" style="color: white">SERVER NAME:</label>
                                    <input type="text" id="in1" name="SERVERNAME" style="color: white">
                                  </td>
                                  <td>
                                    <label for="in2" style="color: white">USER NAME:</label>
                                    <input type="text" id="in2" name="USERNAME" style="color: white">
                                  </td>
                                  <td>
                                    <label for="in3" style="color: white">PASSWORD:</label>
                                    <input type="password" id="in3" name="PASSWORD" style="color: white">
                                  </td>
                                  <td>
                                    <label for="in4" style="color: white">DATABASE NAME:</label>
                                    <input type="text" id="in4" name="DBNAME" style="color: white">
                                  </td>
                                  <td>
                                    <label for="TABLE_NAME" style="color: white">TABLE NAME:</label>
                                    <select id="TABLE_NAME" name="TABLENAME" style="color: white" onchange="checkForMatch()">
                                      <option value="ADDRESS">ADDRESS</option>
                                      <option value="COMPANIES">COMPANIES</option>
                                      <option value="INVOICES">INVOICES</option>
                                      <option value="PROJECTS">PROJECTS</option>
                                      <option value="USERS">USERS</option>
                                    </select>
                                  </td>
                                </tr>
                                
                                <tr id="first">
                                  <td>
                                    <label for="in5" style="color: white">SEARCH TERM:</label>
                                    <input type="text" id="in5" name="SEARCH_TERM" style="color: white">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <i><input style="color: white" class="button is-outline" type="submit" value="SUBMIT"></i>
                                  </td>
                                </tr>
                              </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <?php
        session_start();
        $preresults="<div class=\"container\"><div class=\"row p-10 br-4\"><div class=\"col p-10 br-4\" style=\"background-color: #002B66\"><div class=\"row p-10 br-4\"><div class=\"col p-10 br-4\">";
        $postresults="</div></div></div></div></div>";
        echo $preresults;
        if(isset($_get["RESULT"])){
          $result=$_get["RESULT"];
          echo "<p style=\"color: white\"><b><i>RESULT COUNT:</b>".count($result)."</i></p>";
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<p style=\"color: white\">"."REFERENCE: " . $row["REFERENCE"]."</p>";
            }
          }
        }else{
          echo "<p style=\"color: white\"><b><i>RESULT COUNT:</b> UNSET I.E. ZERO</i></p>";
          echo "<p style=\"color: white\"><b><i>SERVER NAME:</b>".$_SESSION["SERVERNAME"]."</i></p>";
          
        }
        echo $postresults;
      ?>
  </body>
</html>
