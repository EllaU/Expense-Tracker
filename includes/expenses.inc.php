<?php
    if(isset($_POST['pd_submit'])){
        include_once 'db.inc.php';

        $pName = mysqli_real_escape_string($conn,$_POST['pd_name']);
        $pAmount = mysqli_real_escape_string($conn,$_POST['pd_amount']);
        $pNarration = mysqli_real_escape_string($conn,$_POST['pd_narration']);
        $pCategory = mysqli_real_escape_string($conn,$_POST['pd_categories']);
        $pDate = mysqli_real_escape_string($conn,$_POST['pDate']);
        $pPayment = mysqli_real_escape_string($conn,$_POST['pd_method']);
        $pLocation = mysqli_real_escape_string($conn,$_POST['pd_location']);


        $sql = "insert into expenses(uid,pname,amt,narr,cat,date,payment,location) values(1,'$pName','$pAmount','$pNarration','$pCategory','$pDate','$pPayment','$pLocation')";
        mysqli_query($conn,$sql);

        header("Location: ../expenses_table.php");
        exit();



    }else{
        header("Location: ../index.php");
        exit();
    }
?>