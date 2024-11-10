<?php
session_start();
include('../../config/config.php');
require '../../../carbon/autoload.php';

use Carbon\Carbon;

if (isset($_GET['inventory_code'])) {
    $inventory_code = $_GET['inventory_code'];
    // Lấy thông tin phiếu nhập kho từ CSDL
    $sql = "SELECT * FROM inventory WHERE inventory_code = '$inventory_code'";
    $query = mysqli_query($mysqli, $sql);
    $inventory_data = mysqli_fetch_array($query);

    // Lấy thông tin chi tiết sản phẩm liên quan
    $sql_detail = "SELECT * FROM inventory_detail WHERE inventory_code = '$inventory_code'";
    $query_detail = mysqli_query($mysqli, $sql_detail);
    $inventory_details = [];
    while ($row = mysqli_fetch_array($query_detail)) {
        $inventory_details[] = $row;
    }
}

// Xử lý cập nhật thông tin phiếu nhập kho
if (isset($_POST['inventory_update'])) {
    $staf_name = $_POST['staf_name'];
    $supplier_name = $_POST['supplier_name'];
    $inventory_note = $_POST['inventory_note'];
    $inventory_phone = $_POST['inventory_phone'];
    $inventory_date = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    // Cập nhật thông tin vào bảng inventory
    $sql_update_inventory = "UPDATE inventory SET staf_name = '$staf_name', supplier_name = '$supplier_name', supplier_phone = '$inventory_phone', inventory_note = '$inventory_note', inventory_date = '$inventory_date' WHERE inventory_code = '$inventory_code'";
    mysqli_query($mysqli, $sql_update_inventory);

    // Xử lý cập nhật chi tiết sản phẩm (nếu cần)
    // ...

    header('Location:../../index.php?action=inventory&query=inventory_detail&inventory_code='.$inventory_code.'&message=success');
}
?>

<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="card-content">
                    <form action="" method="POST">
                        <div class="receipt">
                            <div class="receipt__header text-center">
                                <h3 class="receipt__title">Chỉnh sửa Phiếu Nhập Kho</h3>
                                <p>Mã phiếu: <?php echo $inventory_code; ?></p>
                                <p class="receipt__date">Ngày nhập: <?php echo date("d-m-Y"); ?></p>
                            </div>
                            <div class="receipt__info">
                                <table>
                                    <tr>
                                        <td>
                                            <p class="receipt__info--name">Người nhập kho: <input class="receipt__info--input" name="staf_name" type="text" value="<?php echo $inventory_data['staf_name']; ?>" required></p>
                                        </td>
                                        <td>
                                            <p class="receipt__info--company">Tên đơn vị cung cấp: <input class="receipt__info--input" name="supplier_name" type="text" value="<?php echo $inventory_data['supplier_name']; ?>" required></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="receipt__info--note">Ghi chú: <input class="receipt__info--input" name="inventory_note" type="text" value="<?php echo $inventory_data['inventory_note']; ?>" required></p>
                                        </td>
                                        <td>
                                            <p class="receipt__info--company">Số điện thoại: <input class="receipt__info--input" name="inventory_phone" type="text" value="<?php echo $inventory_data['supplier_phone']; ?>" required></p>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="table-responsive receipt__table" style="margin-top: 20px;">
                                <table class="table table-hover table-action">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên sản phẩm</th>
                                        <th class="text-center">Số lượng</th>
                                        <th class="text-right">Đơn giá</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (!empty($inventory_details)) {
                                        foreach ($inventory_details as $index => $item) {
                                            ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $item['product_name']; ?></td>
                                                <td class="text-center"><?php echo $item['product_quantity']; ?></td>
                                                <td class="text-right"><?php echo number_format($item['product_price_import']) . '₫'; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Không có sản phẩm nào trong phiếu nhập kho</td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="w-100 text-right">
                            <button type="submit" name="inventory_update" class="btn btn-primary btn-icon-text">
                                <i class="ti-save btn-icon-prepend"></i>
                                Cập nhật
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
