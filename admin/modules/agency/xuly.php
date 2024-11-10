<?php
include("../../config/config.php"); // Kết nối database

// Xóa các đại lý
if (isset($_GET['data'])) {
    $data = json_decode($_GET['data'], true); // Giải mã JSON thành mảng PHP

    // Lặp qua từng ID trong mảng và thực hiện câu truy vấn xóa
    foreach ($data as $agent_id) {
        $agent_id = mysqli_real_escape_string($mysqli, $agent_id); // Bảo vệ chống SQL Injection
        $sql_delete = "DELETE FROM agency WHERE agent_id = '$agent_id'";
        mysqli_query($mysqli, $sql_delete);
    }

    // Chuyển hướng về trang danh sách đại lý sau khi xóa xong
    header("Location: ../../index.php?action=agency&query=agency_list");
    exit();
} else {
    // Nếu không có dữ liệu được gửi tới
    echo "Không có đại lý nào được chọn để xóa.";
}

// Thêm đại lý
if (isset($_POST['agency_add'])) {
    $agency_name = mysqli_real_escape_string($mysqli, $_POST['agency_name']);
    $agency_address = mysqli_real_escape_string($mysqli, $_POST['agency_address']);
    $agency_phone = mysqli_real_escape_string($mysqli, $_POST['agency_phone']);
    $agency_email = mysqli_real_escape_string($mysqli, $_POST['agency_email']);
    $agency_tax_id = mysqli_real_escape_string($mysqli, $_POST['agency_tax_id']);

    $sql_insert = "INSERT INTO agency (name, address, phone, email, tax_id) 
                   VALUES ('$agency_name', '$agency_address', '$agency_phone', '$agency_email', '$agency_tax_id')";

    mysqli_query($mysqli, $sql_insert);

    header('Location: ../../index.php?action=agency&query=agency_list');
    exit();
}
// Kiểm tra xem có dữ liệu gửi đến không
if (isset($_POST['agency_edit'])) {
    // Lấy ID của đại lý từ tham số GET
    $agent_id = $_GET['agent_id'];

    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $tax_id = $_POST['tax_id'];

    // Cập nhật thông tin đại lý
    $sql_update = "UPDATE agency 
                   SET name = '$name', 
                       address = '$address', 
                       phone = '$phone', 
                       email = '$email', 
                       tax_id = '$tax_id' 
                   WHERE agent_id = '$agent_id'";

    // Thực thi câu lệnh SQL
    if (mysqli_query($mysqli, $sql_update)) {
        // Nếu cập nhật thành công, chuyển hướng về danh sách đại lý
        header('Location: ../../index.php?action=agency&query=agency_list');
    } else {
        // Nếu có lỗi, hiển thị thông báo lỗi
        echo "Lỗi: " . mysqli_error($mysqli);
    }
} else {
    // Nếu không có dữ liệu gửi đến, chuyển hướng về danh sách đại lý
    header('Location: ../../index.php?action=agency&query=agency_list');
}


// Thực hiện truy vấn
$query_agency_list = mysqli_query($mysqli, $sql_agency_list);


?>
