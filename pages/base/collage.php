<?php
//$sql_category_list = "SELECT * FROM category ORDER BY category_id ASC LIMIT 3";
//$query_category_list = mysqli_query($mysqli, $sql_category_list);
//?>
<!--<style>-->
<!--    /* .product__info {-->
<!--        text-align: center;-->
<!--    }-->
<!--    .product__info span {-->
<!--        text-align: center !important;-->
<!--    } */-->
<!--    #new_sp{-->
<!--	padding-top: 20px;-->
<!--	background: linear-gradient(0deg, #ffff, #ce6666); -->
<!--    }-->
<!--    .rung-lac {-->
<!--  display: inline-block;-->
<!--  animation: shake 0.5s infinite alternate;-->
<!--  font-weight: bold;-->
<!--}-->
<!---->
<!---->
<!--.product__title .h2 {-->
<!--  font-size: 36px;-->
<!--  font-weight: bold;-->
<!--  color: #FFD700; /* Màu vàng */-->
<!--  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Đổ bóng chữ */-->
<!--  animation: pulsate 1s infinite alternate; /* Hiệu ứng pulsate */-->
<!--}-->
<!---->
<!--.product__title .h9 {-->
<!--  font-size: 18px;-->
<!--  color: #777; /* Màu xám */-->
<!--  margin-top: 10px;-->
<!--}-->
<!---->
<!---->
<!---->
<!--.row {-->
<!--  margin-bottom: 30px; /* Khoảng cách dưới */-->
<!--}-->
<!---->
<!--.section__heading {-->
<!--  padding: 20px; /* Khoảng cách nội dung từ lề */-->
<!--}-->
<!---->
<!--.section__heading .h2 {-->
<!--  font-size: 28px;-->
<!--  font-weight: bold;-->
<!--  color: #333; /* Màu chữ đậm */-->
<!--  text-transform: uppercase; /* Chuyển đổi thành chữ in hoa */-->
<!--  border-bottom: 2px solid #FFD700; /* Đường viền dưới màu vàng */-->
<!--  display: inline-block; /* Hiển thị theo chiều ngang */-->
<!--  padding-bottom: 5px; /* Khoảng cách dưới của đường viền */-->
<!--  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); /* Đổ bóng chữ */-->
<!--}-->
<!---->
<!--.section__heading .h2:hover {-->
<!--  transform: translateY(-2px); /* Di chuyển lên khi di chuột qua */-->
<!--  transition: transform 0.3s ease; /* Hiệu ứng chuyển động mượt mà */-->
<!--}-->
<!---->
<!--</style>-->
<!--<section class="collage pd-top" style="margin: 0px 20px;">-->
<!--    <div>-->
<!--    <h2 class="collage__heading heading-3" style="text-align: center;" id="new_sp">-->
<!--  <span class="rung-lac">D</span>-->
<!--  <span class="rung-lac">a</span>-->
<!--  <span class="rung-lac">n</span>-->
<!--  <span class="rung-lac">h</span>-->
<!--  <span class="rung-lac">&nbsp;</span>-->
<!--  <span class="rung-lac">M</span>-->
<!--  <span class="rung-lac">ụ</span>-->
<!--  <span class="rung-lac">c</span>-->
<!--  <span class="rung-lac">&nbsp;</span>-->
<!--  <span class="rung-lac">S</span>-->
<!--  <span class="rung-lac">h</span>-->
<!--  <span class="rung-lac">o</span>-->
<!--  <span class="rung-lac">p</span>-->
<!--</h2>-->
<!--        <div class="collage__items d-grid">-->
<!--            --><?php
//            $i = 0;
//            while ($row = mysqli_fetch_array($query_category_list)) {
//            ?>
<!--                <div class="collage__item d-flex flex-column h-100 --><?php //if ($i == 0) {
//                                                                        echo "collage__item--large";
//                                                                    } else {
//                                                                        echo "";
//                                                                    } ?><!--">-->
<!--                    <div style="display: grid; place-items: center;" class="collage__image h-100">-->
<!--                        <img style="max-width: 65%" class=" object-fit-cover flex-1" src="admin/modules/category/uploads/--><?php //echo $row['category_image']; ?><!--" alt="image banner" />-->
<!--                    </div>-->
<!--                    <div class="collage__container">-->
<!--                        <div class="collage__content d-flex">-->
<!--                            <a class="align-center" href="index.php?page=product_category&category_id=--><?php //echo $row['category_id'] ?><!--"> --><?php //echo $row['category_name']; ?><!-- </a>-->
<!--                            <img src="./assets/images/icon/icon-nextlink.svg" alt="next-link" style="margin-left: 8px" />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            --><?php
//                $i++;
//            }
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--</section>-->