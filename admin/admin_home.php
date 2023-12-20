<!DOCTYPE html>
<html>
  <head>
  <link rel="Website Icon" href="../Resources/LM.png">
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <title>Legendary MS - Dashboard</title>
    <style>
      /* Center the buttons horizontally and vertically */
      .button-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      
      /* Style the buttons */
      .button {
        display: inline-block;
        padding: 12px 24px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <!-- Check if user logged in successfully -->
    <?php
      session_start();
      $test = $_SESSION['test'];
      if($test!="true") {
          header("Location:login.php");
      }
    ?>
    <a href="logout.php"><button class="button">Logout</button></a>
    <div class="container mt-5">
    <h1 class="text-center">Admin Dashboard</h1><br><br>
    <center><img src="../Resources/Logo Home.png" width="80%"></center>
    <div class="button-container"><br><br><br><br><br>
        <a href="enquiry_db.php"><button class="button">Enquiry DB</button></a>
        <a href="purchase_db.php"><button class="button">Purchase DB</button></a> 
    </div>
  </div>
  </body>
</html>
