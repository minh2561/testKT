<?php
    include './header.php';
    include './config.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM bank_blood WHERE bd_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result==true){
        $count = mysqli_num_rows($result);
        if ($count == 1){
            $row = mysqli_fetch_assoc($result);
        }
    }
?>


    <form class='container' method="POST" class="form" action = "../action/action_update.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="name" name = "name"value=<?php echo $row['bd_name']; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giới tính</label>
            <input type="text" class="form-control" id="sex" name="sex" value=<?php echo $row['db_sex']; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ngày tháng năm sinh</label>
            <input type="date" class="form-control" id="date" name="date" value=<?php echo $row['bd_age']; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nhóm máu</label>
            <input type="text" class="form-control" id="group" name="group" value=<?php echo $row['bd_group']; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ngày truyền máu</label>
            <input type="date" class="form-control" id="date_reg" name="date_reg" value=<?php echo $row['bd_reg_date']; ?>>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="sdt" name="sdt" value=<?php echo $row['bd_phone']; ?>>
        </div>
        <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
            </td>
    </form>





<?php
    include './footer.php';
?>