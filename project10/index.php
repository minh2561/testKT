<?php
    include './form/header.php';
?>
<div class="container">
    <a href="./form/add.php"><i class="fas fa-plus-circle"></i></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên người nhận máu</th>
                <th scope="col">Tuổi</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Ngày đăng kí nhận máu</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "./form/config.php";
                $sql = "SELECT * FROM bank_blood";
                $result = mysqli_query($conn, $sql); 
                if(mysqli_num_rows($result) > 0) {
                    $i=1;
                    while($row = mysqli_fetch_assoc($result)) {
            ?>
                        <tr>
                            <th scope="row"><?php echo $i;?></th>
                            <td><?php echo $row['bd_name'];?></td>
                            <td><?php echo $row['bd_age'];?></td>
                            <td><?php echo $row['db_sex'];?></td>
                            <td><?php echo $row['bd_reg_date'];?></td>
                            <td><a href="./form/details.php?id=<?php echo $row['bd_id'];?>"><i class="fas fa-info-circle"></i></a></td>
                            <td><a href="./action/action_del.php?id=<?php echo $row['bd_id'];?>"><i class="fas fa-eraser"></i></a></td>
                        </tr>
                        <?php
                            $i++;
                        }
                    }
                ?>
        </tbody>
    </table>
</div>
    
    
    
    
<?php
    include './form/footer.php';
?>