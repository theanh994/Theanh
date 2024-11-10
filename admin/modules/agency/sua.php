<?php
// Kết nối cơ sở dữ liệu

// Lấy thông tin đại lý cần chỉnh sửa từ cơ sở dữ liệu
$sql_agency_edit = "SELECT * FROM agency WHERE agent_id = '$_GET[agent_id]' LIMIT 1";
$query_agency_edit = mysqli_query($mysqli, $sql_agency_edit);

// Lấy thông tin đại lý cần chỉnh sửa từ cơ sở dữ liệu

?>

<div class="row" style="margin-bottom: 10px;">
    <div class="col d-flex" style="justify-content: space-between; align-items: flex-end;">
        <h3>
            Sửa thông tin đại lý
        </h3>
        <a href="index.php?action=agency&query=agency_list" class="btn btn-outline-dark btn-fw">
            <i class="mdi mdi-reply"></i>
            Quay lại
        </a>
    </div>
</div>
<?php while ($row = mysqli_fetch_array($query_agency_edit)) { ?>
    <form method="POST" action="modules/agency/xuly.php?agent_id=<?php echo $row['agent_id'] ?>">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="input-item form-group">
                            <label for="name" class="d-block">Tên đại lý</label>
                            <input id="name" type="text" name="name" class="d-block form-control" value="<?php echo $row['name'] ?>" placeholder="">
                        </div>
                        <div class="input-item form-group">
                            <label for="address" class="d-block">Địa chỉ</label>
                            <input id="address" type="text" name="address" class="d-block form-control" value="<?php echo $row['address'] ?>" placeholder="">
                        </div>
                        <div class="input-item form-group">
                            <label for="phone" class="d-block">Số điện thoại</label>
                            <input id="phone" type="text" name="phone" class="d-block form-control" value="<?php echo $row['phone'] ?>" placeholder="">
                        </div>
                        <div class="input-item form-group">
                            <label for="email" class="d-block">Email</label>
                            <input id="email" type="email" name="email" class="d-block form-control" value="<?php echo $row['email'] ?>" placeholder="">
                        </div>
<!--                        <div class="input-item form-group">-->
<!--                            <label for="tax_id" class="d-block">Mã số thuế</label>-->
<!--                            <input id="tax_id" type="text" name="tax_id" class="d-block form-control" value="--><?php //echo $row['tax_id'] ?><!--" placeholder="">-->
<!--                        </div>-->
                        <button type="submit" name="agency_edit" class="btn btn-primary btn-icon-text mg-t-16">
                            <i class="ti-file btn-icon-prepend"></i>
                            Lưu lại
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php } ?>