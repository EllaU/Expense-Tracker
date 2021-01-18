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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#add_form").submit(function(event){
                event.preventDefault();
                var name = $('#add_Category').val();
                var date = $('#add_Date').val();
                var submit = $('#add_submit').val();

                $.post("includes/load-category.php",
                {
                name: name,
                date: date
               
                },
                function(data,status){
                    if(data == "This category already exists"){
                        alert(data);
                    }else{
                        
                        $('#benefit').append(data);
                        $('#myModal').modal('toggle');

                    }
               
                });

                
            });
            
        })
    </script>

</head>

<body>
    
    <section class="section-padding">
        
        <div class="container">
            <div class="row" style="justify-content: center;align-items: center;">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <form method='POST' action="includes/expenses.inc.php">
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form ">
                                        <input required type="text" id="ProductName" class="form-control validate"
                                            name="pd_name">
                                        <label for="ProductName">Product Name</label>
                                    </div>
                                </div>

                            </div>
                            <div class="md-form">
                                <input type="number" id="Price" class="form-control validate" name="pd_amount" required>
                                <label for="Price">Amount</label>
                            </div>

                            <div class="form-group purple-border mt-3">
                                <label class="ml-auto" for="Description">Narration</label>
                                <textarea required class="form-control validate" id="Description" rows="3"
                                    name="pd_narration"></textarea>
                            </div>

                            <div class="form-row">
                                <div class="col mt-2">
                                    <!-- First name -->
                                    <select  required class="browser-default custom-select validate" id="benefit" name="pd_categories">
                                        <option value="">Categories</option>
                                        <?php
                                            include 'includes/db.inc.php';
                                            $sql = "select * from category where status='Active'";
                                            $result = mysqli_query($conn,$sql);

                                            while($row = mysqli_fetch_assoc($result)){
                                                echo '<option value="'.$row['id'].'">'.$row['cname'].'</option>';
                                            }
                                        ?>
    
                                    </select>
                                </div>
                                <div class="col">
                                    <button class="btn  btn-rounded text-white" data-toggle="modal"
                                        data-target="#myModal" type="button"
                                        style="border-radius: 5px;background-color: grey;">Add category</button>



                                </div>

                            </div>
                          
                            <!-- Categories -->

                            <!-- Description -->


                            <div class="md-form">
                                    <input required name = "pDate" type="text" value=<?php echo  date("Y-m-d")?> id="Date" class="form-control validate">
                                    <label for="Date">Date</label>
                            </div>


                            <!-- Default inline 1 -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" value="Cash" id="Condition1"
                                    name="pd_method" checked>
                                <label class="custom-control-label" for="Condition1">Cash</label>
                            </div>

                            <!-- Default inline 2-->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" value="Card" id="Condition2"
                                    name="pd_method">
                                <label class="custom-control-label" for="Condition2">Card</label>
                            </div>

                            <!-- Location -->
                            <div class="md-form">
                                <input required type="text" id="Location" class="form-control validate" name="pd_location">
                                <label for="Location">Location</label>
                            </div>

                            <!-- Buttons -->
                            <div class="form-row">
                                <div class="col">
                                    <a href="index.php">
                                        <button class="btn  btn-rounded text-white bg-color" type="submit"
                                            value="save as draft" style="border-radius: 5px;"
                                            name="pd_submit">Create</button>

                                    </a>
                                </div>
                                <div class="col">
                                    <a href="index.php">
                                        <button class="btn  btn-rounded text-white bg-color" type="submit"
                                            value="save as draft" style="border-radius: 5px;"
                                            name="ad_draft">Cancel</button>

                                    </a>
                                </div>
                            </div>

                            <hr>
                            </form>
                            <!-- Modal -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>
    <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body mx-3">
                                            <form novalidate class="needs-validation" id="add_form" action="includes/load-category.php" method="POST">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <!-- First name -->
                                                        <div class="md-form ">
                                                            <input required type="text" id="add_Category"
                                                                class="form-control validate" name="product_Name">
                                                            <label for="add_Category" required>Category Name</label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <!-- Price -->
                                                <div class="md-form">
                                                    <input required type="text" value=<?php echo  date("Y-m-d")?> id="add_Date" class="form-control validate"
                                                        name="date">
                                                    <label for="add_Date">Date</label>
                                                </div>


                                                <!-- Condition -->
                                                <!-- Default inline 1 -->
                                               
                                                <hr>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-1 offset-md-7">
                                                            <button  id = "btn" style='align-self: flex-end;border-radius: 50px;'
                                                                class="btn btn-rounded text-white br bg-color my-4"
                                                                type="submit" name="add_submit">add

                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p id="form-message"> </p>
                                            </form>

                                        </div>

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