<?php
if (isset($_POST['customer_add'])) {
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $customer_email = $_POST['customer_email'];
    $customer_address = $_POST['customer_address'];

    $sql_insert_customer = "INSERT INTO customer(customer_name, customer_email, customer_phone, customer_address)
        VALUE('" . $customer_name . "','" . $customer_email . "','" . $customer_phone . "','" . $customer_address . "')";
    $query_insert_customer = mysqli_query($mysqli, $sql_insert_customer);
}
?>
<!-- start contact -->
<style>
    .contact__heading {
        font-size: 36px;
        font-weight: bold;
        color: #FFD700;
        /* Màu vàng */
    }

    .contact__title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        /* Màu chữ đậm */
        margin-top: 20px;
    }

    .contact__infomation {
        margin-top: 10px;
    }

    .contact__infomation p {
        color: #555;
        /* Màu chữ */
        font-size: 18px;
        margin-bottom: 5px;
    }

    .contact__input,
    .contact__textarea {
        margin-top: 20px;
    }

    .contact__input input,
    .contact__textarea textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        /* Đường viền */
        border-radius: 5px;
        outline: none;
    }

    .contact__input input:focus,
    .contact__textarea textarea:focus {
        border-color: #FFD700;
        /* Đổi màu đường viền khi focus */
    }

    .contact__btn {
        background-color: #FFD700;
        /* Màu nút */
        color: #fff;
        /* Màu chữ nút */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        /* Hiệu ứng chuyển đổi màu nền */
    }

    .contact__btn:hover {
        background-color: #FFC107;
        /* Màu nền khi di chuột qua */
    }
</style>
<section class="contact pd-top" style="margin: 0px 20px;">
    <div>
        <div class="container">
            <h1 class="contact__heading h2">Liên hệ</h1>
            <h3 class="contact__title h4">Thời gian làm việc</h3>
            <div class="contact__infomation">
                <p>Thứ 2 – Thứ 6: 09:30 am – 23:30pm</p>
                <p>Thứ 7: 12:00am – 19:00pm</p>
                <p>Chủ nhật: 13:00am – 20:00pm</p>
            </div>
            <div class="contact__form pd-section">
                <form action="" method="POST">
                    <div class="row contact__input--double">
                        <div class="col" style="--w-lg: 6">
                            <div class="contact__input">
                                <input class="w-100 btn" type="text" name="customer_name" placeholder="Tên khách hàng" />
                            </div>
                        </div>
                        <div class="col" style="--w-lg: 6;">
                            <div class="contact__input">
                                <input class="w-100 btn" type="email" name="customer_email" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col" style="--w-lg: 12;">
                            <div class="contact__input">
                                <input class="w-100 btn" type="text" name="customer_phone" placeholder="Số điện thoại" />
                            </div>
                        </div>
                        <div class="col" style="--w-lg: 12;">
                            <div class="contact__textarea w-100 h-100">
                                <textarea class="w-100 h-100 btn" name="customer_address" id="" cols="30" rows="10" placeholder="Địa chỉ"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn contact__btn" name="customer_add" type="submit">
                                Gửi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact -->