<?php

// Lấy thông tin kích cỡ cần chỉnh sửa từ cơ sở dữ liệu
$sql_capacity_edit = "SELECT * FROM capacity WHERE capacity_id = '$_GET[capacity_id]' LIMIT 1";
$query_capacity_edit = mysqli_query($mysqli, $sql_capacity_edit);
?>

<div class="row" style="margin-bottom: 10px;">
    <div class="col d-flex" style="justify-content: space-between; align-items: flex-end;">
        <h3>Sửa thông tin kích cỡ</h3>
        <a href="index.php?action=capacity&query=capacity_list" class="btn btn-outline-dark btn-fw">
            <i class="mdi mdi-reply"></i> Quay lại
        </a>
    </div>
</div>

<?php while ($row = mysqli_fetch_array($query_capacity_edit)) { ?>
    <form method="POST" action="modules/capacity/xuly.php?capacity_id=<?php echo $row['capacity_id'] ?>">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="input-item form-group">
                            <label for="capacity_name" class="d-block">Tên kích cỡ</label>
                            <input id="capacity_name" type="text" name="capacity_name" class="d-block form-control" value="<?php echo $row['capacity_name'] ?>" placeholder="">
                        </div>
                        <button type="submit" name="capacity_edit" class="btn btn-primary btn-icon-text mg-t-16">
                            <i class="ti-file btn-icon-prepend"></i> Lưu lại
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php } ?>
