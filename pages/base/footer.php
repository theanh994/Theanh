<footer class="footer" style="background-color: #f0d200; margin-bottom: 0px; font-size: 18px; font-weight: bold;">
    <div style="background-color: green;height: 20px">

    </div>
    <div class="footer__container" style="; margin-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col" style="--w-md: 4">
                    <div class="footer__block pd-top">
                        <div class="block__heading">
                            Danh mục sản phẩm
                        </div>
                        <ul class="block__list">
                            <?php
                            $sql_category_list = "SELECT * FROM category ORDER BY category_id DESC";
                            $query_category_list = mysqli_query($mysqli, $sql_category_list);
                            while ($row_category = mysqli_fetch_array($query_category_list)) {
                            ?>
                                <li class="block__item"><a class="footer__anchor" href="index.php?page=product_category&category_id=<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col" style="--w-md: 4">
                    <div class="footer__block pd-top">
                        <div class="block__heading">
                            Thương hiệu
                        </div>
                        <ul class="block__list">
                            <?php
                            $sql_brand_list = "SELECT * FROM brand ORDER BY brand_id DESC";
                            $query_brand_list = mysqli_query($mysqli, $sql_brand_list);
                            while ($row_brand = mysqli_fetch_array($query_brand_list)) {
                            ?>
                                <li class="block__item"><a class="footer__anchor" href="index.php?page=product_brand&brand_id=<?php echo $row_brand['brand_id'] ?>"><?php echo $row_brand['brand_name'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col" style="--w-md: 4">
                    <div class="footer__block pd-top">
                        <div class="footer__logo" style="font-size: 30px;">
                            SÁCH THƯỜNG NHẬT
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="row">

                <div class="col" style="--w-md: 4;"></div>
                <div class="col pd-top d-flex align-center" style="--w-md:4;">
                    <ul class="social__items d-flex align-center">
                        <li class="social__item">
                            <a class="" href="#">
                                <img class="svg__icon d-block" src="./assets/images/icon/twitter.svg" alt="" />
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="" href="#">
                                <img class="svg__icon d-block" src="./assets/images/icon/facebook.svg" alt="" />
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="" href="#">
                                <img class="svg__icon d-block" src="./assets/images/icon/instagram.svg" alt="" />
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="" href="#">
                                <img class="svg__icon d-block" src="./assets/images/icon/tiktok.svg" alt="" />
                            </a>
                        </li>
                        <li class="social__item">
                            <a class="" href="#">
                                <img class="svg__icon d-block" src="./assets/images/icon/youtube.svg" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p class="footer__copy--right">Copyright © 2024 Nhom 8. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>