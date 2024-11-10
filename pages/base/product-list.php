<?php
// Lấy 12 sản phẩm mới nhất cho phần "Sản phẩm nổi bật"
$sql_product_list = "SELECT * FROM product ORDER BY product_id DESC LIMIT 12";
$query_product_list = mysqli_query($mysqli, $sql_product_list);

// Lấy ngẫu nhiên 6 sản phẩm cho phần "Sản phẩm dành cho bạn"
$sql_random_product_list = "SELECT * FROM product ORDER BY RAND() LIMIT 6";
$query_random_product_list = mysqli_query($mysqli, $sql_random_product_list);
$sql_random1_product_list = "SELECT * FROM product ORDER BY RAND() LIMIT 6";
$query_random1_product_list = mysqli_query($mysqli, $sql_random_product_list);
?>

<div class="container-fluid" style="margin: 0 30px; max-width: 1200px !important; margin-left: 170px">
    <div class="pd-section">
        <!-- Sản phẩm nổi bật -->
        <div class="row">
            <div class="col">
                <div class="product__title" style="text-align: center;">
                    <h2 class="h2" style="; display: block">Xu Hướng Mua Sách</h2>
                    <div style="background-color: green; width: 190px; height: 2px;margin-left: 500px;margin-bottom: 20px"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($query_product_list)) {
                ?>
                <div class="col" style="--w: 8; --w-md: 2">
                    <div class="product__card d-flex flex-column" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; background-color: #fff; transition: box-shadow 0.3s; margin-bottom: 20px">
                        <div class="product__image p-relative">
                            <a href="index.php?page=product_detail&product_id=<?php echo $row['product_id'] ?>" style="text-decoration: none;">
                                <img class="object-fit-cover" style="max-width: 100%" src="admin/modules/product/uploads/<?php echo $row['product_image'] ?>" alt="product image" />
                            </a>
                            <?php if ($row['product_sale'] > 0) { ?>
                                <span class="h6 p-absolute" style="top: 10px; left: 10px; background-color: #22B24C; color: #fff; padding: 5px 10px; border-radius: 5px;">- <?php echo $row['product_sale'] ?>%</span>
                            <?php } ?>
                        </div>

                        <div class="product__info">
                            <a href="index.php?page=product_detail&product_id=<?php echo $row['product_id'] ?>" style="text-decoration: none;">
                                <h3 class="product__name h5"><?php echo mb_strimwidth($row['product_name'], 0, 50, "...") ?></h3>
                            </a>
                            <!-- Hiển thị sao và đánh giá -->
                            <span class="review-star-list d-flex">
                                <?php
                                // Tính toán và hiển thị đánh giá
                                $query_evaluate_rating = mysqli_query($mysqli, "SELECT * FROM evaluate WHERE product_id='" . $row['product_id'] . "' AND evaluate_status = 1");
                                $rate1 = 0; $rate2 = 0; $rate3 = 0; $rate4 = 0; $rate5 = 0;
                                while ($evaluate_rating = mysqli_fetch_array($query_evaluate_rating)) {
                                    $rate = $evaluate_rating['evaluate_rate'];
                                    if ($rate == 1) $rate1++;
                                    elseif ($rate == 2) $rate2++;
                                    elseif ($rate == 3) $rate3++;
                                    elseif ($rate == 4) $rate4++;
                                    elseif ($rate == 5) $rate5++;
                                }
                                $total_rate = $rate1 + $rate2 + $rate3 + $rate4 + $rate5;
                                if ($total_rate != 0) {
                                    $rate_avg = round(($rate1 * 1 + $rate2 * 2 + $rate3 * 3 + $rate4 * 4 + $rate5 * 5) / $total_rate, 1);
                                } else {
                                    $rate_avg = 0;
                                }
                                for ($i = 0; $i < 5; $i++) {
                                    if ($i < $rate_avg) {
                                        echo '<div class="rating-star"></div>';
                                    } else {
                                        echo '<div class="rating-star rating-off"></div>';
                                    }
                                }
                                ?>
                                <span>(<?php echo $total_rate ?>)</span>
                            </span>

                            <!-- Hiển thị giá sản phẩm -->
                            <a href="index.php?page=product_detail&product_id=<?php echo $row['product_id'] ?>" style="text-decoration: none;">
                                <div class="product__price align-center">
                                    <?php if ($row['product_sale'] > 0) { ?>
                                        <del class="product__price--old h5"><?php echo number_format($row['product_price']) . ' ₫'; ?></del>
                                    <?php } ?>
                                    <span class="product__price--new h4" style="color:#22B24C;"><?php echo number_format($row['product_price'] - ($row['product_price'] / 100 * $row['product_sale'])) . ' ₫'; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <!-- Sản phẩm dành cho bạn (Random 6 sản phẩm) -->
        <div class="row">
            <div class="col">
                <div class="product__title" style="text-align: center;">
                    <h2 class="h2" style="margin-bottom: 20px; display: block">Tủ Sách Nổi Bật</h2>
                    <div style="background-color: green; width: 190px; height: 2px;margin-left: 500px;margin-bottom: 20px"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            while ($row_random = mysqli_fetch_array($query_random_product_list)) {
                ?>
                <div class="col" style="--w: 6; --w-md: 2">
                    <div class="product__card d-flex flex-column" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; background-color: #fff; transition: box-shadow 0.3s; margin-bottom: 20px">
                        <div class="product__image p-relative">
                            <a href="index.php?page=product_detail&product_id=<?php echo $row_random['product_id'] ?>" style="text-decoration: none;">
                                <img class="object-fit-cover" style="max-width: 100%" src="admin/modules/product/uploads/<?php echo $row_random['product_image'] ?>" alt="product image" />
                            </a>
                            <?php if ($row_random['product_sale'] > 0) { ?>
                                <span class="h6 p-absolute" style="top: 10px; left: 10px; background-color: #22B24C; color: #fff; padding: 5px 10px; border-radius: 5px;">- <?php echo $row_random['product_sale'] ?>%</span>
                            <?php } ?>
                        </div>

                        <div class="product__info">
                            <a href="index.php?page=product_detail&product_id=<?php echo $row_random['product_id'] ?>" style="text-decoration: none;">
                                <h3 class="product__name h5"><?php echo mb_strimwidth($row_random['product_name'], 0, 50, "...") ?></h3>
                            </a>
                            <!-- Hiển thị giá sản phẩm -->
                            <a href="index.php?page=product_detail&product_id=<?php echo $row_random['product_id'] ?>" style="text-decoration: none;">
                                <div class="product__price align-center">
                                    <?php if ($row_random['product_sale'] > 0) { ?>
                                        <del class="product__price--old h5"><?php echo number_format($row_random['product_price']) . ' ₫'; ?></del>
                                    <?php } ?>
                                    <span class="product__price--new h4" style="color:#22B24C;"><?php echo number_format($row_random['product_price'] - ($row_random['product_price'] / 100 * $row_random['product_sale'])) . ' ₫'; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="row">
            <div class="col">
                <div class="product__title" style="text-align: center;">
                    <h2 class="h2" style="margin-bottom: 20px; display: block">Dành Riêng Cho Bạn</h2>
                    <div style="background-color: green; width: 190px; height: 2px;margin-left: 500px;margin-bottom: 20px"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            while ($row_random = mysqli_fetch_array($query_random1_product_list)) {
                ?>
                <div class="col" style="--w: 6; --w-md: 2">
                    <div class="product__card d-flex flex-column" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; background-color: #fff; transition: box-shadow 0.3s; margin-bottom: 20px">
                        <div class="product__image p-relative">
                            <a href="index.php?page=product_detail&product_id=<?php echo $row_random['product_id'] ?>" style="text-decoration: none;">
                                <img class="object-fit-cover" style="max-width: 100%" src="admin/modules/product/uploads/<?php echo $row_random['product_image'] ?>" alt="product image" />
                            </a>
                            <?php if ($row_random['product_sale'] > 0) { ?>
                                <span class="h6 p-absolute" style="top: 10px; left: 10px; background-color: #22B24C; color: #fff; padding: 5px 10px; border-radius: 5px;">- <?php echo $row_random['product_sale'] ?>%</span>
                            <?php } ?>
                        </div>

                        <div class="product__info">
                            <a href="index.php?page=product_detail&product_id=<?php echo $row_random['product_id'] ?>" style="text-decoration: none;">
                                <h3 class="product__name h5"><?php echo mb_strimwidth($row_random['product_name'], 0, 50, "...") ?></h3>
                            </a>
                            <!-- Hiển thị giá sản phẩm -->
                            <a href="index.php?page=product_detail&product_id=<?php echo $row_random['product_id'] ?>" style="text-decoration: none;">
                                <div class="product__price align-center">
                                    <?php if ($row_random['product_sale'] > 0) { ?>
                                        <del class="product__price--old h5"><?php echo number_format($row_random['product_price']) . ' ₫'; ?></del>
                                    <?php } ?>
                                    <span class="product__price--new h4" style="color:#22B24C;"><?php echo number_format($row_random['product_price'] - ($row_random['product_price'] / 100 * $row_random['product_sale'])) . ' ₫'; ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
