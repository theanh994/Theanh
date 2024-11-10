<?php
if (isset($_POST['account_keyword'])) {
    $sql_account_list = "SELECT * FROM account WHERE account_email LIKE '%" . $_POST['account_keyword'] . "%' ORDER BY account_type DESC";
    $query_account_list = mysqli_query($mysqli, $sql_account_list);
} else {
    $sql_account_list = "SELECT * FROM account ORDER BY account_type DESC";
    $query_account_list = mysqli_query($mysqli, $sql_account_list);
}

?>
<div class="row">
    <div class="col">
        <div class="header__list d-flex space-between align-center">
            <h3 class="card-title" style="margin: 0;">Danh sách tài khoản</h3>
            <div class="action_group">
                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="main-pane-top d-flex justify-center align-center">
                    <div class="input__search p-relative">
                        <form class="search-form" action="" method="POST">
                            <i class="icon-search p-absolute"></i>
                            <input type="search" class="form-control" name="account_keyword" placeholder="Search Here" title="Search here">
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-action">
                        <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <input type="checkbox" id="checkAll">
                                </th>
                                <th>Tên người dùng</th>
                                <th>Email</th>
                                <th>Loại tài khoản</th>
                                <th>Tình trạng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            while ($row = mysqli_fetch_array($query_account_list)) {
                                $i++;
                            ?>
                                <tr>
                                    <td>
                                        <?php
                                        if (isset($_SESSION['account_type']) && $_SESSION['account_type'] == 2) {
                                        ?>
                                            <a href="?action=account&query=account_edit&account_id=<?php echo $row['account_id'] ?>">
                                                <div class="icon-edit">
                                                    <img class="w-100 h-100" src="images/icon-edit.png" alt="">
                                                </div>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <input type="checkbox" class="checkbox" onclick="testChecked(); getCheckedCheckboxes();" id="<?php echo $row['account_id'] ?>">
                                    </td>
                                    <td><?php echo $row['account_name'] ?></td>
                                    <td><?php echo $row['account_email'] ?></td>
                                    <td><?php echo format_account_type($row['account_type']) ?></td>
                                    <td><?php echo format_account_status($row['account_status']) ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="dialog__control">
        <div class="control__box">
            <a href="#" class="button__control" id="btnDelete">Xóa</a>
        </div>
    </div>
<script>
    var btnDelete = document.getElementById("btnDelete");
    var checkAll = document.getElementById("checkAll");
    var checkboxes = document.getElementsByClassName("checkbox");
    var dialogControl = document.querySelector('.dialog__control');

    // Thêm sự kiện click cho checkbox checkAll
    checkAll.addEventListener("click", function() {
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = checkAll.checked; // Đặt trạng thái cho tất cả checkbox
        }
        updateDialogVisibility();
        getCheckedCheckboxes();
    });

    // Hàm kiểm tra và cập nhật hiển thị của dialogControl
    function updateDialogVisibility() {
        var hasChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
        dialogControl.classList.toggle('active', hasChecked);
    }

    // Cập nhật href của nút xóa và thu thập ID checkbox đã chọn
    function getCheckedCheckboxes() {
        var checkedIds = Array.from(checkboxes).filter(checkbox => checkbox.checked).map(checkbox => checkbox.id);
        btnDelete.href = "modules/account/xuly.php?data=" + JSON.stringify(checkedIds);
    }

    // Sự kiện click cho từng checkbox
    Array.from(checkboxes).forEach(checkbox => {
        checkbox.addEventListener("click", function() {
            checkAll.checked = Array.from(checkboxes).every(checkbox => checkbox.checked);
            updateDialogVisibility();
            getCheckedCheckboxes();
        });
    });

</script>

<script>
    function showSuccessToast() {
        toast({
            title: "Success",
            message: "Cập nhật thành công",
            type: "success",
            duration: 0,
        });
    }
    function showErrorToast() {
        toast({
            title: "Error",
            message: "Không thể cập nhật tài khoản",
            type: "error",
            duration: 0,
        });
    }
</script>

<?php
if (isset($_GET['message']) && $_GET['message'] == 'success') {
    echo '<script>';
    echo 'showSuccessToast();';
    echo 'window.history.pushState(null, "", "index.php?action=account&query=account_list");';
    echo '</script>';
} elseif (isset($_GET['message']) && $_GET['message'] == 'error') {
    echo '<script>';
    echo 'showErrorToast();';
    echo 'window.history.pushState(null, "", "index.php?action=account&query=account_list");';
    echo '</script>';
}
?>