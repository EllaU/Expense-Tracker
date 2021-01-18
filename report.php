<?php
 header('Cache-Control: no cache'); //no cache
 session_cache_limiter('private_no_expire'); // works
 //session_cache_limiter('public'); // works too
 session_start();
 
$fullUrl ="$_SERVER[QUERY_STRING]";

parse_str($fullUrl);

$url = $fullUrl;

    if($url != 'month' && $url != 'year' && $url !='category'){
        header('Location: ./index.php');
        exit();
    }
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
<?php
    include_once 'includes/db.inc.php';

    $sql;


    if($url == 'month'){
        
        $month1 = mysqli_real_escape_string($conn,$_POST['gMonth']);
        $year1 = mysqli_real_escape_string($conn,$_POST['gYear']);

        $sql = "select * from expenses where monthname(date)='$month1' and year(date)= '$year1'";


    }else{
        if($url == 'year'){
            $year2 = mysqli_real_escape_string($conn,$_POST['gYear2']);
            $sql = "select * from expenses where year(date)= '$year2'";


        }else{
            if($url == 'category'){
                $gCategory = mysqli_real_escape_string($conn,$_POST['gCategory']);
                $gFrom = mysqli_real_escape_string($conn,$_POST['gFrom']);
                $gTo = mysqli_real_escape_string($conn,$_POST['gTo']);

                if($gCategory == '0'){
                    $sql ="SELECT * FROM expenses WHERE date BETWEEN '$gFrom' AND '$gTo' ";
                }else{
                    $sql ="SELECT * FROM expenses WHERE date BETWEEN '$gFrom' AND '$gTo' AND cat = '$gCategory' ";

                }
            }
        }
    }
    
    $_SESSION['theSql'] = $sql;

?>
    
<div class="container section-padding">
    <div class="row">
        <div class="col-lg-12 text-center mx-auto">
            <h3 style="color: #860270;" > My Report</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            
            <p>
            <?php
                if($url== 'month'){
                    echo  'Report for '.$_POST['gMonth'].' '.$_POST['gYear'];
                }else{
                    if($url == 'year'){
                        echo 'Report for '.$_POST['gYear2'];
                    }else{
                        if($url == 'category'){
                            echo 'Report from '. $_POST['gFrom'].' to '. $_POST['gTo'];
                        }
                    }
                }
            ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h5 class="font-weight-bold" style="color: black;">
                Total: &#8358
                <?php

                    $query='SELECT SUM(SUBQUERY.amt) as value_sum from
                    (
                        '.trim($sql,'"').'
                    ) AS SUBQUERY';

                    $result = mysqli_query($conn,$query); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];

                    echo $sum;
                ?>
            </h5>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class = 'font-weight-bold' scope="col">S/N</th>
                    <th class = 'font-weight-bold' scope="col">Title</th>
                    <th class = 'font-weight-bold' scope="col">Amount</th>
                    <th  class = 'font-weight-bold' scope="col">Date</th>
                  </tr>
                </thead>
                <!-- put here -->
                
                <tbody class='scroll'>
                <?php
                    $result = mysqli_query($conn,$sql);
                    $x = 1 ;
                    while($row= mysqli_fetch_assoc($result)){
                        echo '
                        <tr>
                        <th scope="row">'.$x.'</th>
                        <td>'.$row['pname'].'</td>
                        <td> &#8358 '.$row['amt'].'</td>
                        <td>'.$row['date'].'</td>
                         </tr>
                        ';

                        $x= $x + 1;
                    }

                ?>
                  
                </tbody>
              </table>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <a href="statistics.php" 
            style='float:right;border-radius: 50px;'
                class="btn  btn-rounded text-white br bg-color my-4"
            >
               statistics
            </a>
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