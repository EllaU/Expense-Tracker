<?php
    include_once 'db.inc.php';

   
    $cName = $_POST['name'];
    $cDate = $_POST['date'];

   
 

     $sql = "select * from category where cname = '$cName'";
     $result = mysqli_query($conn,$sql);

     if(mysqli_num_rows($result)>0){
         echo "This category already exists";
     }else{
        $sql = "insert into category(cname,cdate,status,uid) values('$cName','$cDate','Active',1)";
        $result = mysqli_query($conn,$sql); 
        $last_id = $conn->insert_id;

        echo '<option value='.$last_id.'>'.$cName. '</option>';
     }

    

    

?>
