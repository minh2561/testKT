<?php
    $id=$_POST['id'];
    $upName = $_POST['name'];
    $upSex = $_POST['sex'];
    $upDate = $_POST['date'];
    $upGroup = $_POST['group'];
    $upDate_reg = $_POST['date_reg'];
    $upSDT = $_POST['sdt'];
    include "../form/config.php";   
    $sql = "UPDATE bank_blood SET bd_name = '$upName', db_sex = '$upSex', bd_age = '$upDate', bd_group = '$upGroup', bd_reg_date = '$upDate_reg', bd_phone = '$upSDT' WHERE bd_id='$id'";
    $result = mysqli_query($conn, $sql);
    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok';
    }   
    mysqli_close($conn);
    header("location: ../index.php");
?>