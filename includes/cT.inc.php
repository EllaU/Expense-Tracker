<?php
   

    if (isset($_POST['cat_submit'])){
        include_once 'db.inc.php';
        
        $cName = mysqli_real_escape_string($conn,$_POST['cat_name']);
        $cDate = mysqli_real_escape_string($conn,$_POST['cat_date']);
        $cStatus = mysqli_real_escape_string($conn,$_POST['cat_status']);

        $sql = "select * from category where cname = '$cName'";
        $result = mysqli_query($conn,$sql);
        $numRows = mysqli_num_rows($result);


        if($numRows > 0){
            echo 'error';
        }else{
            $sql="insert into category(cname,cdate,status,uid) values('$cName','$cDate','$cStatus',1)";
            mysqli_query($conn,$sql);
   
            header('Location: ../category_table.php');
            exit();

        }
     


    }else{
        header('Location: ../index.php');
        exit();
    }
?>