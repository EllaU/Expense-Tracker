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

  <section class="section-padding">
 
   <div class="container">
     <div class="row mb-3 " style="justify-content: center;align-items: center;">
       <div class="col-lg-10">
        <h3  id="categories" style="color: black;">Categories</h3 >

       </div>
     </div>
     <div class="row" style="justify-content: center;align-items: center;">
       <div class="col-lg-10">
        <div class="card">
          <div class="card-body">
            <div class="container scroll">
              <div class="row">
                <div class="col-lg-2 col-md-2">
                  <h6 class="font-weight-bold" style="color: black;">
                    S/N
                  </h6>
      
                </div>
                <div class="col-lg-3 col-md-4">
                  <h6 class="font-weight-bold" style="color: black;">
                    Name
                  </h6>
                </div>
                <div class="col-lg-3 col-md-4">
                  <h6 class="font-weight-bold" style="color: black;">
                    Date created
                  </h6>
                </div>
                <div class="col-lg-2 col-md-4">
                  <h6 class="font-weight-bold" style="color: black;">
                    Status
                  </h6>
                </div>
                <div class="col-lg-2 col-md-2">
                  <h6 class="font-weight-bold" style="color: black;">
                  Action
                  </h6>
                </div>
               
              </div>

            <!-- put here -->
            <?php
           
           include 'includes/category.inc.php';
           $category = new Category();
           $category->getData();
            ?>
              
            </div>
          </div>
         </div>
       </div>
     </div>
   </div>
   <div class="container mt-5">
     <div class="row">
       <div class="col-lg-12">
        <a href="category.php">

          <div style="position: relative;">
            <img class="img-fluid" src="img/add.png" style="float: right;" />

          </div>

        </a> 
       </div>
     </div>
   </div>
  </section>
  <div >
       
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