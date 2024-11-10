<?php
session_start();
include('../../admin/config/config.php');
require '../../carbon/autoload.php';
require_once('config_vnpay.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

if (isset($_POST['redirect'])) {
    // Sinh mã đơn hàng và mã giao hàng
    $order_code = rand(0, 9999);
    $delivery_id = rand(0, 9999);
    $order_date = Carbon::now('Asia/Ho_Chi_Minh');

    $_SESSION['order_code'] = $order_code;

    // Lấy id tài khoản thông qua session
    $account_id = $_SESSION['account_id'];

    // Lấy thông tin thông qua phương thức POST
    $delivery_name = $_POST['delivery_name'];
    $delivery_address = $_POST['delivery_address'];
    $delivery_phone = $_POST['delivery_phone'];
    $delivery_note = $_POST['delivery_note'];
    $order_type = $_POST['order_type'];
    $agency_name = $_POST['agency_name']; // Capture the selected agency_name

    // Gán giá trị thông tin giao hàng vào session delivery
    $_SESSION['delivery_id'] = $delivery_id;
    $_SESSION['delivery_name'] = $delivery_name;
    $_SESSION['delivery_address'] = $delivery_address;
    $_SESSION['delivery_phone'] = $delivery_phone;
    $_SESSION['delivery_note'] = $delivery_note;

    $total_amount = 0;
    $validate = 1;
    foreach ($_SESSION['cart'] as $cart_item) {
        $product_id = $cart_item['product_id'];
        $query_get_product = mysqli_query($mysqli, "SELECT * FROM product WHERE product_id = $product_id");
        $product = mysqli_fetch_array($query_get_product);
        if ($product['product_quantity'] < $cart_item['product_quantity']) {
            $validate = 0;
        }
        $total_amount += ($cart_item['product_price'] - ($cart_item['product_price'] / 100 * $cart_item['product_sale'])) * $cart_item['product_quantity'];
    }
    if ($validate == 1) {

        // Giá trị tổng tiền
        $_SESSION['total_amount'] = $total_amount;

        // nếu thanh toán bằng tiền mặt
        if ($order_type == 1) {
            // thêm địa chỉ giao hàng
            $insert_delivery = "INSERT INTO delivery(delivery_id, account_id, delivery_name, delivery_phone, delivery_address, delivery_note, agency_name) 
            VALUES ($delivery_id, $account_id, '$delivery_name', '$delivery_phone', '$delivery_address', '$delivery_note', '$agency_name')";
            mysqli_query($mysqli, $insert_delivery);

            // insert đơn hàng
            $insert_order = "INSERT INTO orders(order_code, order_date, account_id, delivery_id, total_amount, order_type, order_status, agency_name) 
            VALUES ($order_code, '" . $order_date . "', $account_id, $delivery_id, $total_amount, 1, 0, '$agency_name')";

            $query_insert_order = mysqli_query($mysqli, $insert_order);
            if ($query_insert_order) {
                //thêm chi tiết đơn hàng
                foreach ($_SESSION['cart'] as $cart_item) {
                    $product_id = $cart_item['product_id'];
                    $query_get_product = mysqli_query($mysqli, "SELECT * FROM product WHERE product_id = $product_id");
                    $product = mysqli_fetch_array($query_get_product);
                    if ($product['product_quantity'] >= $cart_item['product_quantity']) {
                        $product_quantity = $cart_item['product_quantity'];
                        $quantity = $product['product_quantity'] - $product_quantity;
                        $quantity_sales = $product['quantity_sales'] + $product_quantity;
                        $product_price = $cart_item['product_price'];
                        $product_sale = $cart_item['product_sale'];
                        $insert_order_detail = "INSERT INTO order_detail(order_code, product_id, product_quantity, product_price, product_sale) 
                        VALUES ('" . $order_code . "', '" . $product_id . "', '" . $product_quantity . "', '" . $product_price . "', '" . $product_sale . "')";
                        mysqli_query($mysqli, $insert_order_detail);
                        mysqli_query($mysqli, "UPDATE product SET product_quantity = $quantity, quantity_sales = $quantity_sales WHERE product_id = $product_id");
                    }
                }
                $update_total_amount = "UPDATE orders SET total_amount = $total_amount WHERE order_code = $order_code";
                $query_total_amount = mysqli_query($mysqli, $update_total_amount);

                unset($_SESSION['cart']);
                header('Location:../../index.php?page=thankiu&order_type=1');
            }
        } elseif ($order_type == 2) {
            header('Location:checkout_momo.php');
        } elseif ($order_type == 3) {
            header('Location:checkout_momo_atm.php');
        } elseif ($order_type == 4) {
            // xử lý thanh toán bằng vnpay
            $vnp_TxnRef = $order_code;
            $vnp_OrderInfo = 'Thanh toán đơn hàng Gold Shop';
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $total_amount * 100;
            $vnp_Locale = 'vn';
            $vnp_BankCode = 'NCB';
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            $vnp_ExpireDate = $expire;
            $vnp_TxnRef = time() . "";

            $inputData = array(
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                "vnp_ExpireDate" => $vnp_ExpireDate
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                $inputData['vnp_Bill_State'] = $vnp_Bill_State;
            }

            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;

            if (isset($vnp_HashSecret)) {
                $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            $returnData = array(
                'code' => '00',
                'message' => 'success',
                'data' => $vnp_Url
            );
            header('Location: ' . $vnp_Url);
        }
    } else {
        header('Location:../../index.php?page=404');
    }
}
?>
