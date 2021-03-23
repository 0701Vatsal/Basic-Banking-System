<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/project/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    
    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
      <header>
            <div class="row intro py-1" style="background-color : #82E0AA;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>V BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="http://localhost/project/download.jfif" class="img-fluid pt-2">
              </div>
            </div>
      </header>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <!--<img src="img/user.jpg" class="img-fluid">-->
                    <br>
                    <!--<a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>-->
                  </div>
                  <div class="col-md act">
                    <img src="http://localhost/project/transfer-money-from-hand-to-hand-vector-15233866%20(1).jpg" height=200 width=200  class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="http://localhost/project/download.png" heightd=200 width=200 class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
      <a href="#">FAQ</a>
          <a href="file:///C:/Program%20Files/Apache%20Software%20Foundation/Tomcat%209.0/webapps/contactusl.html">Contact Us</a>
          <a href="#">&copy;</a>
          <a href="#">Privacy Policy</a>
          <a href="file:///C:/Program%20Files/Apache%20Software%20Foundation/Tomcat%209.0/webapps/RefundPolicy.html">Refund Policy</a>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>