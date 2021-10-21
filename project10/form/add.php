<?php
    include './header.php';
    include './config.php';
    // $id = $_GET['id'];
    $sql = "SELECT * FROM bank_blood";
    $result = mysqli_query($conn, $sql);
    if($result==true){
        $count = mysqli_num_rows($result);
        if ($count == 1){
            $row = mysqli_fetch_assoc($result);
        }
    }
?>


    <form class='container' method="POST" class="form" action = "../action/action_add.php">
        <div class="mb-3">
            <label for="name" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="name" name = "name">
        </div>
        <div class="mb-3">
            <label for="sex" class="form-label">Giới tính</label>
            <input type="text" class="form-control" id="sex" name="sex">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Ngày tháng năm sinh</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="group" class="form-label">Nhóm máu</label>
            <input type="text" class="form-control" id="group" name="group">
        </div>
        <div class="mb-3">
            <label for="date_reg" class="form-label">Ngày truyền máu</label>
            <input type="date" class="form-control" id="date_reg" name="date_reg">
        </div>
        <div class="mb-3">
            <label for="sft" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="sdt" name="sdt">
        </div>
        <td colspan="2">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
            </td>
    </form>





<?php
    include './footer.php';
?>