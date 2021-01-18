<?php
    include_once 'db.inc.php';

    $fullUrl ="$_SERVER[QUERY_STRING]";


    parse_str($fullUrl);
    
    $id = $fullUrl;

    $stat = mysqli_real_escape_string($conn,$_POST['condition']);

    $sql = "UPDATE category SET status='$stat' WHERE id=$id ";
    mysqli_query($conn,$sql);

    header('Location: ../category_table.php')

?>