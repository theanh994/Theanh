<div class="row" style="margin-bottom: 10px;">
    <div class="col d-flex" style="justify-content: space-between; align-items: flex-end;">
        <h3>Thêm chi nhánh</h3>
        <a href="index.php?action=agency&query=agency_list" class="btn btn-outline-dark btn-fw">
            <i class="mdi mdi-reply"></i> Quay lại
        </a>
    </div>
</div>
<form method="POST" action="modules/agency/xuly.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-content">
                        <div class="input-item form-group">
                            <label for="name" class="d-block">Tên chi nhánh</label>
                            <input id="name" type="text" name="agency_name" class="d-block form-control" value="" placeholder="">
                        </div>
                        <div class="input-item form-group">
                            <label for="address" class="d-block">Địa chỉ</label>
                            <input type="text" name="agency_address" class="d-block form-control" value="" placeholder="">
                        </div>
                        <div class="input-item form-group">
                            <label for="phone" class="d-block">Số điện thoại</label>
                            <input type="text" name="agency_phone" class="d-block form-control" value="" placeholder="">
                        </div>
                        <div class="input-item form-group">
                            <label for="email" class="d-block">Email</label>
                            <input type="email" name="agency_email" class="d-block form-control" value="" placeholder="">
                        </div>
<!--                        <div class="input-item form-group">-->
<!--                            <label for="tax_id" class="d-block">Mã số thuế</label>-->
<!--                            <input type="text" name="agency_tax_id" class="d-block form-control" value="" placeholder="">-->
<!--                        </div>-->
                        <button type="submit" name="agency_add" class="btn btn-primary btn-icon-text mg-t-16">
                            <i class="ti-file btn-icon-prepend"></i> Thêm chi nhánh
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
