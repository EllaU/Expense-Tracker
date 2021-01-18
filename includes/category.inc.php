<?php

    class Category{
        public $search;

        function __construct(){

        }

        function getData(){
            include 'db.inc.php';

            if (isset($search)){
                echo 'search data';
            }else{
                $sql = 'select * from category';
                $result = mysqli_query($conn,$sql);

                $rowNumber = mysqli_num_rows($result);
                $x = 1;
                while($row = mysqli_fetch_assoc($result)){
                    echo '
                    <div class="row py-3 hoverable">
                    <div class="col-lg-2 col-md-2">
                      <h6 style="color: black;">
                        '.$x.'
                      </h6>
          
                    </div>
                    <div class="col-lg-3 col-md-4">
                      <h6  style="color: black;">
                        '.$row['cname'].'
                      </h6>
                    </div>
                    <div class="col-lg-3 col-md-4">
                      <h6  style="color: black;">
                        '.$row['cdate'].'
                      </h6>
                    </div>
                    <div class="col-lg-2 col-md-4">
                      <h6  style="color: black;">
                        '.$row['status'].'
                      </h6>
                    </div>
                    <div class="col-lg-2 col-md-2">
                      <div class="row">
                        <div class="col-lg-6">
                          <a href="edit_category.php?'.$row['id'].'">
                            <img src="img/pencil.png" alt="" class="img-fluid">
                          </a>
                        </div>
                        <div class="col-lg-6">
                          <a href="#!">
                            <img src="img/dustbin.png" alt="" class="img-fluid">
                          </a>
                        </div>
                      </div>
                    </div>
                   
                  </div>
                    ';
                    $x = $x +1;
                }


            }
        }
    }
?>