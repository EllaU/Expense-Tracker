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
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link" style='color:white' href="category_table.php">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style='color:white' href="expenses_table.php">Expenses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style='color:white'  href="generate_report.php">Generate Report</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <a href="#!" data-toggle="modal" data-target="#myModal">
                    <button class="btn  btn-rounded text-white bg-color" type="submit" value="save as draft"
                        style="border-radius: 5px;" name="ad_draft">Monthly</button>

                </a>

            </div>

        </div>


        <div class="row">
            <div class="col-lg-6">
                <a data-toggle="modal" data-target="#myModal2">
                    <button class="btn  btn-rounded text-white bg-color" type="submit" value="save as draft"
                        style="border-radius: 5px;" name="ad_draft">Yearly</button>

                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <a data-toggle="modal" data-target="#myModal3">
                    <button class="btn  btn-rounded text-white bg-color" type="submit" value="save as draft"
                        style="border-radius: 5px;" name="ad_draft">By Category</button>

                </a>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body mx-3">
                    <form  method="POST" action="report.php?month">
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="Date" class="form-control validate" placeholder="eg January"
                                        name="gMonth">
                                    <label for="Date">Month</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="Date" class="form-control validate" placeholder="eg 2000"
                                        name="gYear">
                                    <label for="Date">Year</label>
                                </div>
                            </div>

                        </div>

                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-1 offset-md-7">
                                <button class="btn  btn-rounded text-white bg-color" type="submit"
                                            value="save as draft" style="border-radius: 5px;"
                                            name="g_submit">go</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </div>
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body mx-3">
                    <form method="POST" action="report.php?year">
                       
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="Date" class="form-control validate"
                                     placeholder="eg 2000"name="gYear2">
                                    <label for="Date">Year</label>
                                </div>
                            </div>
                            <div class="col">
                                
                            </div>

                        </div>

                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-1 offset-md-7">
                                    <button style='align-self: flex-end;border-radius: 50px;'
                                        class="btn  btn-rounded text-white br bg-color my-4" type="submit"
                                        name="reg_submit">go

                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </div>

        <div id="myModal3" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body mx-3">
                        <form method="POST" action='report.php?category'>
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <select class="browser-default custom-select" id="Categories" name="gCategory">
                                        <option value="0">All</option>
                                        <?php
                                            include 'includes/db.inc.php';
                                            $sql = "select * from category where status = 'Active'";
                                            $result = mysqli_query($conn,$sql);

                                            while($row = mysqli_fetch_assoc($result)){
                                                echo '<option value="'.$row['id'].'">'.$row['cname'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="Date" class="form-control validate"
                                         name="gFrom">
                                        <label for="Date">From</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="Date" class="form-control validate"
                                            name="gTo">
                                        <label for="Date">To</label>
                                    </div>
                                </div>

                            </div>

                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-1 offset-md-7">
                                        <button style='align-self: flex-end;border-radius: 50px;'
                                            class="btn  btn-rounded text-white br bg-color my-4" type="submit"
                                            name="reg_submit">go

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>


                </div>

            </div>
        </div>


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