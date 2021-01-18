<?php
    $fullUrl ="$_SERVER[QUERY_STRING]";


    parse_str($fullUrl);
    
    $id = $fullUrl;

    include_once 'includes/db.inc.php';

    $sql = "select * from expenses where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $cat = $row['cat'];

    $sql2 = "select * from category where id = '$cat'";
    $result2= mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_assoc($result2);

    $title = $row['pname'];
    $amt = $row['amt'];
    $narr = $row['narr'];
    $date = $row['date'];
    $payment = $row['payment'];
    $location = $row['location'];
    $category = $row2['cname'];
   
    
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
<section class="section-padding">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12 text-center mx-auto">
                <h3 >Summary</h3>
            </div>
        </div>
        <div class="card shadow mt-3">
            <div class="row">
                <div class="col-lg-4 gg">
                    
                </div>
                <div class="col-lg-8 p-5">
                    <div class="row">
                        
                        <div class="col-lg-8" style="flex-direction: row;">
                            
                            <div style=" display:inline-block;">
                                <h5 style="color: #820670;" >Title:</h5>
                                 <h6><?php echo $title?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-8" style="flex-direction: row;">
                            
                            <div style=" display:inline-block;">
                                <h5 style="color: #820670;" >Category:</h5>
                                 <h6><?php echo $category ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-8" style="flex-direction: row;">
                            
                            <div style=" display:inline-block;">
                                <h5 style="color: #820670;">Amount:</h5>
                                 <h6> &#8358 <?php echo $amt?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-10" style="flex-direction: row;">
                            
                            <div style=" display:inline-block;">
                                <h5 style="color: #820670;">Description:</h5>
                                 <h6>                  
                                 <?php echo $narr?>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-10" style="flex-direction: row;">
                            
                            <div style=" display:inline-block;">
                                <h5 style="color: #820670;">Payment method:</h5>
                                 <h6><?php echo $payment?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-10" style="flex-direction: row;">
                            
                            <div style=" display:inline-block;">
                                <h5 style="color: #820670;">Location:</h5>
                                 <h6><?php echo $location?></h6>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</section>

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