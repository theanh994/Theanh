<?php
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    unset($_SESSION['account_email']);
    unset($_SESSION['account_id']);
    header('Location:index.php');
}
?>
<style>
    /*.voice-btn.recognizing .action__icon-on {*/
    /*    display: block;*/
    /*}*/

    /*.voice-btn.recognizing .action__icon-off {*/
    /*    display: none;*/
    /*}*/

    /*nav ul li:hover {*/
    /*    background-color: #b09900;*/
    /*}*/

    /*nav ul li span a {*/
    /*    font-size: 18px;*/
    /*    font-weight: 500;*/
    /*}*/

    /*.nav__item .nav__anchor {*/
    /*    padding: 0px 20px;*/
    /*}*/

    /*.h7 {*/
    /*    font-size: 1.3rem;*/
    /*    letter-spacing: 0.02em;*/
    /*    line-height: 1.5;*/
    /*    font-weight: 400;*/
    /*    font-size: 18px;*/
    /*    font-weight: bold;*/
    /*}*/
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .header {
        background-color: white;
        padding: 30px 0;
        border-bottom: 1px solid #e5e5e5;
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    .nav-menu {
        display: flex;
        align-items: center;
        width: 100%;
        justify-content: space-between;
    }

    .menu-list {
        display: flex;
        list-style: none;
    }

    .menu-list li {
        margin-right: 20px;
    }

    .menu-list li a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        font-size: 16px;
    }

    .menu-list li a:hover {
        color: green;
    }

    .logo img {
        max-width: 100px;
    }

    .user-actions {
        display: flex;
        align-items: center;
    }

    .user-actions a {
        margin-right: 15px;
        text-decoration: none;
        color: black;
        font-size: 16px;
    }

    .search-bar {
        display: flex;
        align-items: center;
        border: 1px solid #ddd;
        border-radius: 20px;
        padding: 5px 10px;
        margin-right: 15px;
    }

    .search-bar input {
        border: none;
        outline: none;
    }

    .search-bar button {
        background: none;
        border: none;
        cursor: pointer;
        color: green;
    }

    .cart-icon img {
        width: 30px;
        height: 30px;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropbtn:hover {
        color: green; /* Đổi màu khi hover */
    }

</style>
<!--<header class="header" style="background-color: #f0d200; margin-bottom: 0px;">-->
<!--    <div class="header__topbar" style="background-color: #f0d200; margin-bottom: 0px;">-->
<!--        <div class="container p-relative d-flex space-between align-center" style="background-color: #f0d200;  ">-->
<!--            <p style="font-size:18px; font-weight: bold; color:black;">Mở Cửa 8h30 - 23h30</p>-->
<!--            --><?php //if (isset($_SESSION['account_email'])) {
//            ?>
<!--                <a class=" login-btn p-absolute" href="index.php?logout=1" style="font-size: 18px !important; font-weight: bold !important; color:black;">ĐĂNG XUẤT</a>-->
<!--            --><?php
//            } else {
//            ?>
<!--                <a class="h5 login-btn p-absolute" style="font-size:18px; font-weight: bold; color:black;" href="index.php?page=login">ĐĂNG NHẬP</a>-->
<!--            --><?php
//            }
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--    <div class="header__main" style="background-color: #f0d200; margin-top: 0px;">-->
<!--        <div class="container" style="background-color: #f0d200; margin-top: 0px;">-->
<!--            <div class="header__container d-grid middle-left" style="background-color: #f0d200; margin-top: 0px;">-->
<!--             menu button-->
<!--                <div class="header__btn md-none d-flex align-center">-->
<!--                    <div class="navbar__icons">-->
<!--                        <div class="navbar__icon"></div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <nav class="header__nav  d-flex" style="background-color: #f0d200; margin-top: 0px;">-->
<!--                    <ul class="nav__list md-flex">-->
<!--                        <li class="nav__item md-none">-->
<!--                            <a href="#" class="nav__anchor" style="content: ''"></a>-->
<!--                        </li>-->
<!--                        <li class="nav__item nav__items h7">-->
<!--                            <span class="nav__anchor p-relative h7 d-flex align-center space-between w-100 cursor-pointer" href="#">-->
<!--                                Cửa hàng-->
<!--                                <img class="md-none svg__icon" src="./assets/images/icon/icon-nextlink.svg" alt="next" />-->
<!--                                <img class="d-none md-block svg__icon" src="./assets/images/icon/icon-chevron-down.svg" alt="back" style="margin-left: 8px" />-->
<!--                            </span>-->
<!--                            <ul class="header__subnav p-absolute">-->
<!--                                <li class="nav__item md-none h5">-->
<!--                                    <span class="nav__anchor cursor-pointer d-flex align-center" style="content: ''">-->
<!--                                        <img class="md-none svg__icon" src="./assets/images/icon/arrow-left.svg" alt="" style="margin-right: 8px" />-->
<!--                                        Cửa hàng-->
<!--                                    </span>-->
<!--                                </li>-->
<!--                                <li class="nav__item">-->
<!--                                    <a class="nav__anchor h7 d-flex align-center space-between" href="index.php?page=products">-->
<!--                                        Tất cả sản phẩm-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                --><?php
//                                $sql_category_list = "SELECT * FROM category ORDER BY category_id DESC";
//                                $query_category_list = mysqli_query($mysqli, $sql_category_list);
//                                while ($row_category = mysqli_fetch_array($query_category_list)) {
//                                ?>
<!--                                    <li class="nav__item">-->
<!--                                        <a class="nav__anchor h7 d-flex align-center space-between" href="index.php?page=products&category_id=--><?php //echo $row_category['category_id'] ?><!--">-->
<!--                                            --><?php //echo $row_category['category_name'] ?>
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                --><?php
//                                }
//                                ?>
<!---->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav__item nav__items h7">-->
<!--                            <span class="nav__anchor p-relative h7 d-flex align-center space-between w-100 cursor-pointer" href="#">-->
<!--                                Thương hiệu-->
<!--                                <img class="md-none svg__icon" src="./assets/images/icon/icon-nextlink.svg" alt="next" />-->
<!--                                <img class="d-none md-block svg__icon" src="./assets/images/icon/icon-chevron-down.svg" alt="back" style="margin-left: 8px" />-->
<!--                            </span>-->
<!--                            <ul class="header__subnav p-absolute">-->
<!--                                <li class="nav__item md-none h5">-->
<!--                                    <span class="nav__anchor cursor-pointer d-flex align-center" style="content: ''">-->
<!--                                        <img class="md-none svg__icon" src="./assets/images/icon/arrow-left.svg" alt="" style="margin-right: 8px" />-->
<!--                                        Thương hiệu-->
<!--                                    </span>-->
<!--                                </li>-->
<!--                                --><?php
//                                $sql_brand_list = "SELECT * FROM brand ORDER BY brand_id DESC";
//                                $query_brand_list = mysqli_query($mysqli, $sql_brand_list);
//                                while ($row_brand = mysqli_fetch_array($query_brand_list)) {
//                                ?>
<!--                                    <li class="nav__item">-->
<!--                                        <a class="nav__anchor h7 d-flex align-center space-between" href="index.php?page=products&brand_id=--><?php //echo $row_brand['brand_id'] ?><!--">-->
<!--                                            --><?php //echo $row_brand['brand_name'] ?>
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                --><?php
//                                }
//                                ?>
<!---->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav__item">-->
<!--                            <a class="nav__anchor h7 d-flex align-center space-between" href="index.php?page=about">-->
<!--                                Giới thiệu-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav__item">-->
<!--                            <a class="nav__anchor h7 d-flex align-center space-between" href="index.php?page=blog">-->
<!--                                Blog-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="nav__item">-->
<!--                            <a class="nav__anchor h7 d-flex align-center space-between" href="index.php?page=contact">-->
<!--                                Liên hệ-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!---->
<!--                    <div class="flex-1"></div>-->
<!--                    <div class="header__footer md-none">-->
<!--                        <div class="person-login d-flex align-center">-->
<!--                            <img class="svg__icon" src="./assets/images/icon/icon-person.svg" alt="person" />-->
<!--                            <span>Đăng nhập</span>-->
<!--                        </div>-->
<!--                        <ul class="social__items d-flex align-center">-->
<!--                            <li class="social__item">-->
<!--                                <a class="" href="#">-->
<!--                                    <img class="svg__icon d-block" src="./assets/images/icon/twitter.svg" alt="" />-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="social__item">-->
<!--                                <a class="" href="#">-->
<!--                                    <img class="svg__icon d-block" src="./assets/images/icon/facebook.svg" alt="" />-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="social__item">-->
<!--                                <a class="" href="#">-->
<!--                                    <img class="svg__icon d-block" src="./assets/images/icon/instagram.svg" alt="" />-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="social__item">-->
<!--                                <a class="" href="#">-->
<!--                                    <img class="svg__icon d-block" src="./assets/images/icon/tiktok.svg" alt="" />-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="social__item">-->
<!--                                <a class="" href="#">-->
<!--                                    <img class="svg__icon d-block" src="./assets/images/icon/youtube.svg" alt="" />-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </nav>-->
<!---->
<!--                <div class="header__action d-flex align-center">-->
<!--                    <div class="header__action--item d-flex align-center p-relative">-->
<!--                        <form action="index.php?page=search" method="POST" class="d-flex align-center" id="search-box">-->
<!--                            <input type="text" placeholder="Tìm kiếm sản phẩm ..." id="input-search" name="keyword" class="search__input" required>-->
<!--                            <button type="submit" name="search" class="header__action--link search-btn p-absolute d-inline-block">-->
<!--                                <img class="action__icon svg__icon d-block" src="./assets/images/icon/icon-search.svg" alt="search" />-->
<!--                            </button>-->
<!--                            <button type="button" class="header__action--link voice-btn p-absolute d-inline-block" id="search-btn" onclick="voiceInput();">-->
<!--                                <img class="action__icon action__icon-off svg__icon d-block" src="./assets/images/icon/voice-icon.png" alt="search" />-->
<!--                                <img class="action__icon action__icon-on svg__icon d-none" src="./assets/images/icon/mic-on.png" alt="search" />-->
<!--                            </button>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                    <div class="header__action--item align-center d-none md-flex">-->
<!--                        <a class="header__action--link d-inline-block" href="--><?php //if (isset($_SESSION['account_email'])) {
//                                                                                    echo "index.php?page=my_account&tab=account_info";
//                                                                                } else {
//                                                                                    echo "index.php?page=login";
//                                                                                } ?><!--">-->
<!--                            <img class="action__icon svg__icon d-block" src="./assets/images/icon/icon-person.svg" alt="person" />-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="header__action--item d-flex align-center">-->
<!--                        <a class="header__action--link d-inline-block" href="index.php?page=cart">-->
<!--                            --><?php
//                            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
//                            ?>
<!--                                <div class="icon-cart d-flex align-center justify-center p-relative">-->
<!--                                    <img class="action__icon svg__icon d-block" src="./assets/images/icon/cart-open.svg" alt="cart">-->
<!--                                    <span class="cart-count p-absolute d-flex align-center justify-center h6">--><?php //echo count($_SESSION['cart']) ?><!--</span>-->
<!--                                </div>-->
<!--                            --><?php
//                            } else {
//                            ?>
<!--                                <img class="action__icon svg__icon d-block" src="./assets/images/icon/icon-cart.svg" alt="cart">-->
<!--                            --><?php
//                            }
//                            ?>
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="header-nav-overlay"></div>-->
<!--    </div>-->
<!--</header>-->
<div class="header__topbar" style="background-color: #EDEAE6; margin-bottom: 0px;">
    <div class="container p-relative d-flex space-between align-center" style="background-color: #EDEAE6;">
        <p style="font-size:18px; font-weight: bold; color:black;">SÁCH CỦA MỌI NHÀ</p>
        <?php if (isset($_SESSION['account_email'])) { ?>
            <a class="login-btn p-absolute" href="index.php?logout=1" style="font-size: 18px !important; font-weight: bold !important; color:black;">ĐĂNG XUẤT</a>
        <?php } else { ?>
            <a class="h5 login-btn p-absolute" style="font-size:18px; font-weight: bold; color:black;" href="index.php?page=login">ĐĂNG NHẬP</a>
        <?php } ?>
    </div>
</div>
<header class="header">
    <div class="container">
        <nav class="nav-menu">
            <ul class="menu-list" style="font-family:    sans-serif " >
                <li><a href="index.php?">TRANG CHỦ</a></li>
                <li class="dropdown">
                    <a href="index.php?page=products" class="dropbtn">SẢN PHẨM</a>
                    <div class="dropdown-content">
                        <?php
                        // Kết nối đến cơ sở dữ liệu và truy vấn danh sách danh mục
                        $sql_category_list = "SELECT * FROM category ORDER BY category_id DESC";
                        $query_category_list = mysqli_query($mysqli, $sql_category_list);
                        while ($row_category = mysqli_fetch_array($query_category_list)) {
                            ?>
                            <a href="index.php?page=products&category_id=<?php echo $row_category['category_id']; ?>">
                                <?php echo $row_category['category_name']; ?>
                            </a>
                        <?php } ?>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="index.php?page=products" class="dropbtn" style="font-family:    sans-serif " >NHÀ XUẤT BẢN</a>
                    <div class="dropdown-content">
                        <?php
                        // Kết nối đến cơ sở dữ liệu và truy vấn danh sách danh mục
                        $sql_brand_list = "SELECT * FROM brand ORDER BY brand_id DESC";
                        $query_brand_list = mysqli_query($mysqli, $sql_brand_list);
                        while ($row_brand = mysqli_fetch_array($query_brand_list)) {
                            ?>
                            <a href="index.php?page=products&brand_id=<?php echo $row_brand['brand_id'] ?>">
                                <?php echo $row_brand['brand_name'] ?>
                            </a>
                        <?php } ?>

                    </div>
                </li>
                <li><a href="index.php?page=blog">BLOGS</a></li>
            </ul>
            <div class="logo" style="margin-left: -150px">
                <h3><strong>SÁCH THƯỜNG NHẬT</strong></h3>
            </div>
            <div class="user-actions">
                <!-- Đã xóa phần "Lịch sử mua hàng" -->
                <form action="index.php?page=search" method="POST" class="d-flex align-center" id="search-box">
                    <div class="search-bar">
                        <input type="text" id="input-search" name="keyword" placeholder="Gõ từ khóa sản phẩm bạn" required>
                        <button type="button" class="voice-btn" onclick="voiceInput()">
                            <i class="fa fa-microphone"></i>
                        </button>
                        <button type="submit" name="search">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>


                <div class="cart-icon">
                    <a class="header__action--link d-inline-block" href="index.php?page=cart">
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                            ?>
                            <div class="icon-cart d-flex align-center justify-center p-relative">
                                <img style="width: 100px !important;" class="action__icon svg__icon d-block" src="./assets/images/icon/cart-open.svg" alt="cart">
                                <span class="cart-count p-absolute d-flex align-center justify-center h6"><?php echo count($_SESSION['cart']) ?></span>
                            </div>
                            <?php
                        } else {
                            ?>
                            <img  class="action__icon svg__icon d-block" src="./assets/images/icon/icon-cart.svg" alt="cart">
                            <?php
                        }
                        ?>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>


<script>


        function voiceInput() {
        var inputSearch = document.getElementById('input-search');
        var searchBtn = document.querySelector('.voice-btn');
        // Tạo một đối tượng SpeechRecognition
        const recognition = new webkitSpeechRecognition();
        recognition.lang = 'vi-VN';
        recognition.continuous = false;

        recognition.onresult = function(event) {
        const transcript = event.results[0][0].transcript;
        inputSearch.value = transcript;
    };

        recognition.onstart = function() {
        searchBtn.classList.add('recognizing');
    };

        recognition.onend = function() {
        searchBtn.classList.remove('recognizing');
    };

        recognition.onerror = function(event) {
        console.error(event.error);
    };

        recognition.start();
    }


</script>
