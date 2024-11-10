<div class="row" style="margin-bottom: 10px;">
    <div class="col d-flex" style="justify-content: space-between; align-items: flex-end;">
        <h3>Thêm dung lượng</h3> <!-- Cập nhật tiêu đề -->
        <a href="index.php?action=capacity&query=capacity_list" class="btn btn-outline-dark btn-fw">
            <i class="mdi mdi-reply"></i> Quay lại
        </a>
    </div>
</div>
<form method="POST" action="modules/capacity/xuly.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-content">
                        <div class="input-item form-group">
                            <label for="capacity_name" class="d-block">Tên dung lượng</label>
                            <input id="capacity_name" type="text" name="capacity_name" class="d-block form-control" value="" placeholder="">
                        </div>
                        <button type="submit" name="capacity_add" class="btn btn-primary btn-icon-text mg-t-16">
                            <i class="ti-file btn-icon-prepend"></i> Thêm dung lượng
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
