<?php
include('../../config/config.php');

$data = isset($_GET['data']) ? $_GET['data'] : null;
$product_ids = $data ? json_decode($data) : [];
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : null;
$product_brand = isset($_POST['product_brand']) ? $_POST['product_brand'] : null;
$product_capacity = isset($_POST['product_capacity']) && is_array($_POST['product_capacity']) ? $_POST['product_capacity'] : []; // Mảng dung lượng
$product_capacity_str = implode(',', $product_capacity); // Chuyển mảng thành chuỗi
$product_category = isset($_POST['product_category']) ? $_POST['product_category'] : null;
$product_price_import = isset($_POST['product_price_import']) ? $_POST['product_price_import'] : null;
$product_price = isset($_POST['product_price']) ? $_POST['product_price'] : null;
$product_sale = isset($_POST['product_sale']) ? $_POST['product_sale'] : null;
$product_description = isset($_POST['product_description']) ? $_POST['product_description'] : null;
$product_image = isset($_FILES['product_image']['name']) ? $_FILES['product_image']['name'] : null;
$product_image_tmp = isset($_FILES['product_image']['tmp_name']) ? $_FILES['product_image']['tmp_name'] : null;
$product_image = $product_image ? time() . '_' . $product_image : null;
// Thêm xử lý cho nhiều hình ảnh
$product_images = isset($_FILES['product_images']['name']) ? $_FILES['product_images']['name'] : []; // Lấy danh sách tên file
$product_images_tmp = isset($_FILES['product_images']['tmp_name']) ? $_FILES['product_images']['tmp_name'] : []; // Lấy danh sách file tạm

$product_images_uploaded = []; // Mảng chứa tên file sau khi upload thành công

// Duyệt qua từng file trong product_images để upload
if (!empty($product_images)) {
    foreach ($product_images as $key => $image_name) {
        $image_tmp = $product_images_tmp[$key];
        $new_image_name = time() . '_' . $image_name; // Đặt tên file mới
        if (move_uploaded_file($image_tmp, 'uploads/' . $new_image_name)) {
            $product_images_uploaded[] = $new_image_name; // Thêm tên file vào mảng đã upload thành công
        }
    }
}

$product_images_string = implode(',', $product_images_uploaded); // Chuyển mảng thành chuỗi để lưu vào DB
$product_status = isset($_POST['product_status']) ? $_POST['product_status'] : null;

if (isset($_POST['product_add'])) {
    // Thêm sản phẩm
    $sql_add = "INSERT INTO product(product_name, product_category, product_brand, capacity_id, product_price_import, product_price, product_sale, product_description, product_image, product_images, product_status) 
                VALUES('" . $product_name . "', '" . $product_category . "', '" . $product_brand . "', '" . $product_capacity_str . "', '" . $product_price_import . "', '" . $product_price . "', '" . $product_sale . "', '" . $product_description . "', '" . $product_image . "', '" . $product_images_string . "', '" . $product_status . "')";
    mysqli_query($mysqli, $sql_add);

    // Upload hình ảnh chính
    if ($product_image) {
        move_uploaded_file($product_image_tmp, 'uploads/' . $product_image);
    }

    header('Location: ../../index.php?action=product&query=product_list&message=success');
} elseif (isset($_POST['product_edit'])) {
    // Sửa sản phẩm
    if ($_FILES['product_image']['name'] != '') {
        move_uploaded_file($product_image_tmp, 'uploads/' . $product_image);
        $sql = "SELECT * FROM product WHERE product_id = '$product_id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['product_image']);
        }
        $sql_update = "UPDATE product SET product_name = '" . $product_name . "', product_brand = '" . $product_brand . "', capacity_id = '" . $product_capacity_str . "', product_category = '" . $product_category . "', 
                       product_price_import = '" . $product_price_import . "', product_price = '" . $product_price . "', product_sale = '" . $product_sale . "', product_description = '" . $product_description . "', 
                       product_image = '" . $product_image . "', product_images = '" . $product_images_string . "', product_status = '" . $product_status . "' WHERE product_id = '" . $product_id . "'";
    } else {
        $sql_update = "UPDATE product SET product_name = '" . $product_name . "', product_brand = '" . $product_brand . "', capacity_id = '" . $product_capacity_str . "', product_category = '" . $product_category . "', 
                       product_price_import = '" . $product_price_import . "', product_price = '" . $product_price . "', product_sale = '" . $product_sale . "', product_description = '" . $product_description . "', 
                       product_images = '" . $product_images_string . "', product_status = '" . $product_status . "' WHERE product_id = '" . $product_id . "'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location: ../../index.php?action=product&query=product_list&message=success');
} elseif (isset($_GET['product_sale'])) {
    // Áp dụng khuyến mãi cho sản phẩm
    $sale = $_GET['product_sale'];
    foreach ($product_ids as $id) {
        $sql_sale = "UPDATE product SET product_sale = $sale WHERE product_id = '" . $id . "'";
        mysqli_query($mysqli, $sql_sale);
    }
    header('Location: ../../index.php?action=product&query=product_list&message=success');
} elseif (isset($_GET['deleteevaluate']) && $_GET['deleteevaluate'] == 1) {
    // Xóa đánh giá
    $evaluate_ids = json_decode($data);
    foreach ($evaluate_ids as $id) {
        $sql_delete_evaluate = "DELETE FROM evaluate WHERE evaluate_id = '" . $id . "'";
        mysqli_query($mysqli, $sql_delete_evaluate);
    }
    header('Location: ../../index.php?action=product&query=product_edit&product_id=' . $product_id . '&message=success#product_evaluate');
} elseif (isset($_GET['spamevaluate']) && $_GET['spamevaluate'] == 1) {
    // Đánh dấu đánh giá là spam
    $evaluate_ids = json_decode($data);
    foreach ($evaluate_ids as $id) {
        $sql_update_evaluate = "UPDATE evaluate SET evaluate_status = -1 WHERE evaluate_id = '" . $id . "'";
        mysqli_query($mysqli, $sql_update_evaluate);
    }
    header('Location: ../../index.php?action=product&query=product_edit&product_id=' . $product_id . '&message=success#product_evaluate');
} else {
    // Xóa sản phẩm
    foreach ($product_ids as $id) {
        $sql = "SELECT * FROM product WHERE product_id = '$id' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['product_image']);
        }
        $sql_delete = "DELETE FROM product WHERE product_id = '" . $id . "'";
        mysqli_query($mysqli, $sql_delete);
    }
    header('Location: ../../index.php?action=product&query=product_list&message=success');
}
?>
