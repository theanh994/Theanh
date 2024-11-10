<?php
require_once 'config-paypal.php';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sách thường nhật</title>

  <link rel="shortcut icon" href="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/perfume-logo-design-template-ff1935b52ff631dab8ec18b3eb308f0f_screen.jpg?ts=1666687681" />

  <!-- start css -->
  <link rel="stylesheet" href="./assets/css/helper.css" />
  <link rel="stylesheet" href="./assets/css/layout.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
  <link rel="stylesheet" href="./assets/css/responsive.css" />
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="./assets/css/toast.css">
  <!-- end css -->

  <!-- start google font -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&display=swap" rel="stylesheet" /> -->

  <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap" rel="stylesheet" /> -->

  <!-- end google font -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="./assets/js/toast_message.js"></script>
  <script src="./assets/js/message.js"></script>
  <script src="./assets/js/validator.js"></script>
  <!--Start of Fchat.vn--><script type="text/javascript" src="https://cdn.fchat.vn/assets/embed/webchat.js?id=65219a313bb0a57b301fc01a" async="async"></script><!--End of Fchat.vn-->
</head>

<body>
  <div id="wrapper">
    <?php
    session_start();
    include('admin/format/format.php');
    include('admin/config/config.php');
    include("./pages/main.php");
    ?>
  </div>
  <div id="toast">
  </div>
  <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_SANDBOX ? PAYPAL_SANDBOX_CLIENT_ID : PAYPAL_PROD_CLIENT_ID; ?>&currency=<?php echo $currency; ?>"></script>
  <script src="./assets/js/main.js"></script>
  <script src="./assets/js/navigation.js"></script>
  <script src="./assets/js/select-number.js"></script>
  <script src="./assets/js/scrollsnap.js"></script>
  <script src="./assets/js/payment.js"></script>
  <script src="./assets/js/inputRange.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/e63ed424f0.js" crossorigin="anonymous"></script>

</body>

</html>