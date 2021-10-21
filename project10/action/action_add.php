<?php
    $upName = $_POST['name'];
    $upSex = $_POST['sex'];
    $upDate = $_POST['date'];
    $upGroup = $_POST['group'];
    $upDate_reg = $_POST['date_reg'];
    $upSDT = $_POST['sdt'];
    include "../form/config.php";   
    $sql = "INSERT INTO bank_blood (bd_name, db_sex, bd_age, bd_group, bd_reg_date, bd_phone) VALUES ('$upName', '$upSex', '$upDate', '$upGroup', '$upDate_reg', '$upSDT')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if($result >0){
        echo 'ok';
    }else{
        echo 'not ok'. $conn->error;
    }   
    mysqli_close($conn);
    header("location: ../index.php");
?>