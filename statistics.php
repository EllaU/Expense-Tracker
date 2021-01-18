<?php 
  session_start();
  include 'includes/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    
<div class="container section-padding">
    <div class="row">
        <div class="col-lg-12 text-center mx-auto">
            <h3 style="color: #860270;" >Statistics</h3>
        </div>
    </div>
   

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="font-weight-bold" scope="col">#</th>
                    <th  class="font-weight-bold" scope="col">Category</th>
                    <th  class="font-weight-bold" scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody class="scroll">

                <!-- put here -->
                <?php


                  $sql = $_SESSION["theSql"];
                

                  $query='SELECT cat, sum(SUBQUERY.amt) as amt from
                  (
                      '.trim($sql,'"').'
                  ) AS SUBQUERY group by cat order by sum(SUBQUERY.amt) desc ';

                  $result = mysqli_query($conn,$query); 
                  $x=1;

                  while($row = mysqli_fetch_assoc($result)){

                    $cat = $row['cat'];

                    $sql2 = "select * from category where id = '$cat' ";
                    $result2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    
                    
                    echo '
                    <tr>
                    <th scope="row">'.$x.'</th>
                    <td>'.$row2['cname'].'</td>
                    <td > &#8358 '.$row['amt'].'</td>
                    
                     </tr>
                    ';
                    $x = $x + 1;
                  }

                ?>
                </tbody>
              </table>
        </div>
    </div>


</div>

    <!-- Start your project here-->

    <!-- Button trigger modal-->

    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>