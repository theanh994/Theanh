<?php
include("../../config/config.php"); // Kết nối cơ sở dữ liệu

// Xóa các kích cỡ
if (isset($_GET['data'])) {
    $data = json_decode($_GET['data'], true); // Giải mã JSON thành mảng PHP

    // Lặp qua từng ID trong mảng và thực hiện câu truy vấn xóa
    foreach ($data as $capacity_id) {
        $capacity_id = mysqli_real_escape_string($mysqli, $capacity_id); // Bảo vệ chống SQL Injection
        $sql_delete = "DELETE FROM capacity WHERE capacity_id = '$capacity_id'";
        mysqli_query($mysqli, $sql_delete);
    }

    // Chuyển hướng về trang danh sách kích cỡ sau khi xóa xong
    header("Location: ../../index.php?action=capacity&query=capacity_list");
    exit();
} else {
    // Nếu không có dữ liệu được gửi tới
    echo "Không có kích cỡ nào được chọn để xóa.";
}

// Thêm kích cỡ
if (isset($_POST['capacity_add'])) {
    $capacity_name = mysqli_real_escape_string($mysqli, $_POST['capacity_name']);

    $sql_insert = "INSERT INTO capacity (capacity_name) VALUES ('$capacity_name')";

    mysqli_query($mysqli, $sql_insert);

    // Chuyển hướng về trang danh sách kích cỡ sau khi thêm xong
    header('Location: ../../index.php?action=capacity&query=capacity_list');
    exit();
}

// Cập nhật kích cỡ
if (isset($_POST['capacity_edit'])) {
    // Lấy ID của kích cỡ từ tham số GET
    $capacity_id = $_GET['capacity_id'];

    // Lấy dữ liệu từ form
    $capacity_name = mysqli_real_escape_string($mysqli, $_POST['capacity_name']);

    // Cập nhật thông tin kích cỡ
    $sql_update = "UPDATE capacity 
                   SET capacity_name = '$capacity_name' 
                   WHERE capacity_id = '$capacity_id'";

    // Thực thi câu lệnh SQL
    if (mysqli_query($mysqli, $sql_update)) {
        // Nếu cập nhật thành công, chuyển hướng về danh sách kích cỡ
        header('Location: ../../index.php?action=capacity&query=capacity_list');
    } else {
        // Nếu có lỗi, hiển thị thông báo lỗi
        echo "Lỗi: " . mysqli_error($mysqli);
    }
} else {
    // Nếu không có dữ liệu gửi đến, chuyển hướng về danh sách kích cỡ
    header('Location: ../../index.php?action=capacity&query=capacity_list');
}

// Lưu ý: Nếu bạn không cần phải thực hiện bất kỳ truy vấn nào sau khi xử lý form, bạn có thể xóa đoạn mã bên dưới

// Thực hiện truy vấn danh sách kích cỡ (nếu cần)
$query_capacity_list = mysqli_query($mysqli, $sql_capacity_list);
?>
