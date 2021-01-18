<?php
    $fullUrl ="$_SERVER[QUERY_STRING]";


    parse_str($fullUrl);
    
    $id = $fullUrl;

    include 'includes/db.inc.php';

    $sql = "select * from category where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $cname = $row['cname'];
    $cdate = $row['cdate'];
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
            <div class="row" style="justify-content: center;align-items: center;">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                        <form method='POST' action = <?php echo 'includes/edit.inc.php?'.$id; ?> >
                                <div class="form-row">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form ">
                                            <input
                                                class="form-control"
                                                id="formControlDisabled"
                                                type="text"
                                                value=<?php echo $cname;?>
                                                aria-label="disabled input example"
                                                disabled
                                            />
                                            <label class="form-label" for="formControlDisabled">Category Name</label>
                                        </div>
                                    </div>

                                </div>

                                <!-- Price -->
                                <div class="md-form">
                                    <input
                                        class="form-control"
                                        id="formControlDisabled"
                                        type="text"
                                        value=<?php echo $cdate;?>
                                        aria-label="disabled input example"
                                        disabled
                                    />
                                    <label class="form-label" for="formControlDisabled">Date</label>
                                </div>


                                <!-- Condition -->
                                <!-- Default inline 1 -->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="Active" id="Condition1"
                                        name="condition" checked>
                                    <label class="custom-control-label" for="Condition1">Active</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" value="Disable" id="Condition2"
                                        name="condition">
                                    <label class="custom-control-label" for="Condition2">Disable</label>
                                </div>


                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-1 offset-md-9">
                                            <button style='align-self: flex-end;border-radius: 50px;'
                                                class="btn  btn-rounded text-white br bg-color my-4" type="submit"
                                                name="edit_submit">Save

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