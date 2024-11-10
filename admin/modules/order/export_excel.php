<?php
include('../../config/config.php');
require("../../../vendor/autoload.php");

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Tạo một đối tượng Spreadsheet mới
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Cài đặt tiêu đề cho các cột
$sheet->setCellValue('A1', 'Order ID');
$sheet->setCellValue('B1', 'Order Code');
$sheet->setCellValue('C1', 'Order Date');
$sheet->setCellValue('D1', 'Account ID');
$sheet->setCellValue('E1', 'Delivery ID');
$sheet->setCellValue('F1', 'Total Amount');
$sheet->setCellValue('G1', 'Order Type');
$sheet->setCellValue('H1', 'Order Status');
$sheet->setCellValue('I1', 'Agency Name');

// Fetch records from database (truy vấn bảng orders)
$query_order = mysqli_query($mysqli, "SELECT * FROM orders ORDER BY order_id ASC");
$rowIndex = 2;

// Kiểm tra nếu có dữ liệu
if (mysqli_num_rows($query_order) > 0) {
    // Lặp qua từng dòng dữ liệu và ghi vào file Excel
    while ($row = mysqli_fetch_array($query_order)) {
        $sheet->setCellValue('A' . $rowIndex, $row['order_id']);
        $sheet->setCellValue('B' . $rowIndex, $row['order_code']);
        $sheet->setCellValue('C' . $rowIndex, $row['order_date']);
        $sheet->setCellValue('D' . $rowIndex, $row['account_id']);
        $sheet->setCellValue('E' . $rowIndex, $row['delivery_id']);
        $sheet->setCellValue('F' . $rowIndex, $row['total_amount']);
        $sheet->setCellValue('G' . $rowIndex, $row['order_type']);
        $sheet->setCellValue('H' . $rowIndex, $row['order_status']);
        $sheet->setCellValue('I' . $rowIndex, $row['agency_name']);
        $rowIndex++;
    }
} else {
    $sheet->setCellValue('A' . $rowIndex, 'No records found...');
}

// Lưu file Excel
$writer = new Xlsx($spreadsheet);
$fileName = 'order-data_' . date('Y-m-d') . '.xlsx';
$writer->save($fileName);

// Đặt header cho việc tải xuống file
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $fileName . '"');
header('Cache-Control: max-age=0');
header('index.php?action=product&query=product_list&message=success');

// Đọc dữ liệu từ file và ghi vào output buffer
$writer->save('php://output');
?>
