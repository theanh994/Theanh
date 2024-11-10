<?php
// Kết nối cơ sở dữ liệu (thay đổi với thông tin kết nối của bạn)

// Lấy từ khóa tìm kiếm từ tham số GET
$search_query = isset($_GET['search_query']) ? mysqli_real_escape_string($mysqli, $_GET['search_query']) : '';

// Cập nhật câu lệnh SQL để bao gồm điều kiện tìm kiếm
$sql_capacity_list = "SELECT * FROM capacity WHERE capacity_name LIKE '%$search_query%' ORDER BY capacity_id DESC";
$sql_capacity_list_query = mysqli_query($mysqli, $sql_capacity_list);
?>
<div class="row">
    <div class="col">
        <div class="header__list d-flex space-between align-center">
            <h3 class="card-title" style="margin: 0;">Danh sách dung lượng</h3> <!-- Cập nhật tiêu đề -->
            <div class="action_group">
                <a href="?action=capacity&query=capacity_add" class="button button-dark">Thêm dung lượng</a> <!-- Cập nhật đường dẫn và nội dung -->
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
                        <form class="search-form" action="index.php" method="GET">
                            <input type="hidden" name="action" value="capacity">
                            <input type="hidden" name="query" value="capacity_list">
                            <i class="icon-search p-absolute"></i>
                            <input type="search" name="search_query" class="form-control" placeholder="Search Here" title="Search here" value="<?php echo htmlspecialchars($search_query); ?>">
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
                            <th>Tên dung lượng</th> <!-- Cập nhật tiêu đề các cột -->
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($sql_capacity_list_query)) {
                            $i++;
                            ?>
                            <tr>
                                <td>
                                    <a href="?action=capacity&query=capacity_edit&capacity_id=<?php echo $row['capacity_id'] ?>">
                                        <div class="icon-edit">
                                            <img class="w-100 h-100" src="images/icon-edit.png" alt="">
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    <input type="checkbox" class="checkbox" onclick="testChecked(); getCheckedCheckboxes();" id="<?php echo $row['capacity_id'] ?>">
                                </td>
                                <td><?php echo $row['capacity_name'] ?></td>
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
        // Nếu checkbox checkAll được chọn
        if (checkAll.checked) {
            // Đặt thuộc tính "checked" cho tất cả các checkbox còn lại
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = true;
            }
        } else {
            // Bỏ thuộc tính "checked" cho tất cả các checkbox còn lại
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = false;
            }
        }
        testChecked();
        getCheckedCheckboxes();
    });

    function testChecked() {
        var count = 0;
        for (let i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                count++;
            }
        }
        if (count > 0) {
            dialogControl.classList.add('active');
        } else {
            dialogControl.classList.remove('active');
            checkAll.checked = false;
        }
    }

    function getCheckedCheckboxes() {
        var checkeds = document.querySelectorAll('.checkbox:checked');
        var checkedIds = [];
        for (var i = 0; i < checkeds.length; i++) {
            checkedIds.push(checkeds[i].id);
        }
        // Cập nhật liên kết xóa với danh sách capacity_id
        btnDelete.href = "modules/capacity/xuly.php?data=" + JSON.stringify(checkedIds);
    }
</script>
