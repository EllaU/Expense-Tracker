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
            <div class="row" style="justify-content: center;align-items: center;">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <form method='POST' action="includes/cT.inc.php">
                                <div class="form-row">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form ">
                                            <input type="text" id="Category Name" class="form-control validate"
                                                name="cat_name" required>
                                            <label for="Category Name">Category Name</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- Price -->
                                <div class="md-form">
                                    <input  type="text" value=<?php echo  date("Y-m-d")?> id="Date" class="form-control validate" name="cat_date">
                                    <label for="Date" required >Date</label>
                                </div>


                                <!-- Condition -->
                                <!-- Default inline 1 -->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="Active" id="Condition1"
                                        name="cat_status" checked>
                                    <label class="custom-control-label" for="Condition1">Active</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="Disable" id="Condition2"
                                        name="cat_status">
                                    <label class="custom-control-label" for="Condition2">Disable</label>
                                </div>


                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-1 offset-md-9">
                                            <button style='align-self: flex-end;border-radius: 50px;'
                                                class="btn  btn-rounded text-white br bg-color my-4" type="submit"
                                                name="cat_submit">Create

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    

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