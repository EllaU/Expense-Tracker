<?php
    class Expenses{
        function __construct(){

        }

        function getData(){
            include_once 'db.inc.php';
            $sql='select * from expenses where uid = 1';
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($result)){

                $sql = 'select * from category where id = '.$row['cat'].' ';
                $result2 = mysqli_query($conn,$sql);
            
                $row2 = mysqli_fetch_assoc($result2);
                $category = $row2['cname'];



                echo '
                <a href="page.php?'.$row['id'].'" class="row py-3 hoverable">
                <div class="col-lg-2 col-md-2">
                  <h6 style="color: black;">
                    '.$row['id'].'
                  </h6>
      
                </div>
                <div class="col-lg-4 col-md-4">
                  <h6  style="color: black;">
                    '.$row['pname'].'
                  </h6>
                </div>
                <div class="col-lg-2 col-md-4">
                  <h6  style="color: black;">
                    '.$category.'
                  </h6>
                </div>
                <div class="col-lg-2 col-md-2">
                  <h6  style="color: black;">
                    '.$row['amt'].'
                  </h6>
                </div>
                <div class="col-lg-2 col-md-2">
                  <h6  style="color: black;">
                    '.$row['date'].'
                  </h6>
                </div>
               
            </a>
                ';
            }
        }
    }
?>