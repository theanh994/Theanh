<?php
if (isset($_GET['pagenumber'])) {
    $page = $_GET['pagenumber'];
} else {
    $page = 1;
}

if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 24) - 24;
}

if (isset($_GET['pricesort']) && $_GET['pricesort'] == 'asc') {
    $url_sort = "&pricesort=asc";
    $sortby = "ORDER BY product_price ASC";
} elseif (isset($_GET['pricesort']) && $_GET['pricesort'] == 'desc') {
    $url_sort = "&pricesort=desc";
    $sortby = "ORDER BY product_price DESC";
} else {
    $url_sort = "";
    $sortby = "";
}

if (isset($_GET['pricefrom']) && isset($_GET['priceto'])) {
    $price_from = $_GET['pricefrom'];
    $price_to = $_GET['priceto'];
    $url_price = "&pricefrom=" . $price_from . "&priceto" . $price_to;
    if (isset($_GET['category_id'])) {
        $url_category = '&category_id=' . $_GET['category_id'];
        $url_brand = '';
        $sql_product_list = "SELECT * FROM product JOIN category ON product.product_category = category.category_id WHERE product.product_category = '" . $_GET['category_id'] . "' AND product_price > $price_from AND product_price < $price_to AND product_status = 1 " . $sortby . " LIMIT $begin,24";
        $query_product_list = mysqli_query($mysqli, $sql_product_list);
    } elseif (isset($_GET['brand_id'])) {
        $url_category = '';
        $url_brand = '&brand_id=' . $_GET['brand_id'];
        $sql_product_list = "SELECT * FROM product JOIN brand ON product.product_brand = brand.brand_id WHERE product.product_brand = '" . $_GET['brand_id'] . "' AND product_price > $price_from AND product_price < $price_to AND product_status = 1 " . $sortby . " LIMIT $begin,24";
        $query_product_list = mysqli_query($mysqli, $sql_product_list);
    } else {
        $url_brand = '';
        $url_category = '';
        $sql_product_list = "SELECT * FROM product WHERE product_price BETWEEN '" . $price_from . "' AND '" . $price_to . "' AND product_status = 1 " . $sortby . " LIMIT $begin,9";
        $query_product_list = mysqli_query($mysqli, $sql_product_list);
    }
} else {
    $url_price = '';
    if (isset($_GET['category_id'])) {
        $url_brand = '';
        $url_category = '&category_id=' . $_GET['category_id'];
        $sql_product_list = "SELECT * FROM product JOIN category ON product.product_category = category.category_id WHERE product.product_category = '" . $_GET['category_id'] . "' AND product_status = 1 " . $sortby . " LIMIT $begin,24";
        $query_product_list = mysqli_query($mysqli, $sql_product_list);
    } elseif (isset($_GET['brand_id'])) {
        $url_category = '';
        $url_brand = '&brand_id=' . $_GET['brand_id'];
        $sql_product_list = "SELECT * FROM product JOIN brand ON product.product_brand = brand.brand_id WHERE product.product_brand = '" . $_GET['brand_id'] . "' AND product_status = 1 " . $sortby . " LIMIT $begin,24";
        $query_product_list = mysqli_query($mysqli, $sql_product_list);
    } else {
        $url_category = '';
        $url_brand = '';
        $sql_product_list = "SELECT * FROM product WHERE product_status = 1 " . $sortby . " LIMIT $begin,24";
        $query_product_list = mysqli_query($mysqli, $sql_product_list);
    }
}
?>

</style>
<div class="product-list" style="margin: 0 50px;">
    <div class=" pd-bottom">
        <div class="row" >

            <div class="col" style="--w-md:12;" >

                <div class="row" >
                    <div class="col" >
                        <div class="product__tag d-flex" >
                            <?php if ($url_price != '') {
                            ?>
                                <a class="tag__item" href="index.php?page=products<?php echo $url_category;
                                                                                    echo $url_brand;
                                                                                    echo $url_sort; ?>">
                                    <div class="d-flex align-center">
                                        <div class="btn__tag d-flex align-center"><img class="icon-close" src="./assets/images/icon/icon-close.png" alt=""></div>
                                        <div class="tag__content d-flex align-center">
                                            <span class="tag__name h5">Giá <?php echo number_format($price_from) ?>đ - <?php echo number_format($price_to) ?>đ</span>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                            ?>
                            <?php if ($url_category != '') {
                            ?>
                                <a class="tag__item" href="index.php?page=products<?php echo $url_brand;
                                                                                    echo $url_price;
                                                                                    echo $url_sort; ?>">
                                    <div class="d-flex align-center">
                                        <div class="btn__tag d-flex align-center"><img class="icon-close" src="./assets/images/icon/icon-close.png" alt=""></div>
                                        <div class="tag__content d-flex align-center">
                                            <span class="tag__name h5">Danh mục sản phẩm</span>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            } ?>
                            <?php if ($url_brand != '') {
                            ?>
                                <a class="tag__item" href="index.php?page=products<?php echo $url_category;
                                                                                    echo $url_price;
                                                                                    echo $url_sort; ?>">
                                    <div class="d-flex align-center">
                                        <div class="btn__tag d-flex align-center"><img class="icon-close" src="./assets/images/icon/icon-close.png" alt=""></div>
                                        <div class="tag__content d-flex align-center">
                                            <span class="tag__name h5">Thương hiệu</span>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="row" >
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($query_product_list)) {
                        $i++;
                    ?>
                        <div class="col" style="--w: 1; --w-md: 2" >
                            <div class="product__card d-flex flex-column" style="border: 1px solid #ddd; border-radius: 10px; padding: 15px; ">
                                <div class="product__image p-relative">
                                    <a style="display: grid; place-items: center;text-decoration: none" href="index.php?page=product_detail&product_id=<?php echo $row['product_id'] ?>">
                                        <img class="  object-fit-cover" style="max-width: 90%; max-height: 70%; justify-content: center" src="admin/modules/product/uploads/<?php echo $row['product_image'] ?>" alt="product image" />
                                    </a>
                                    <?php if ($row['product_sale'] > 0) { ?>
                                        <span class="h6 p-absolute" style="top: 10px; left: 10px; background-color: #22B24C; color: #fff; padding: 5px 10px; border-radius: 5px;">- <?php echo $row['product_sale'] ?>%</span>
                                    <?php } ?>
                                </div>
                                <div class="product__info" style="text-decoration: none">
                                    <a style="text-decoration: none" href="index.php?page=product_detail&product_id=<?php echo $row['product_id'] ?>">
                                        <h3 class="product__name h5"><?php echo $row['product_name'] ?></h3>
                                    </a>
                                    <span class="review-star-list d-flex">
                                        <?php
                                        $query_evaluate_rating = mysqli_query($mysqli, "SELECT * FROM evaluate WHERE product_id='" . $row['product_id'] . "' AND evaluate_status = 1");

                                        $rate1 = 0;
                                        $rate2 = 0;
                                        $rate3 = 0;
                                        $rate4 = 0;
                                        $rate5 = 0;

                                        while ($evaluate_rating = mysqli_fetch_array($query_evaluate_rating)) {
                                            $rate = $evaluate_rating['evaluate_rate'];

                                            if ($rate == 1) {
                                                $rate1++;
                                            } elseif ($rate == 2) {
                                                $rate2++;
                                            } elseif ($rate == 3) {
                                                $rate3++;
                                            } elseif ($rate == 4) {
                                                $rate4++;
                                            } elseif ($rate == 5) {
                                                $rate5++;
                                            }
                                        }

                                        $total_rate = $rate1 + $rate2 + $rate3 + $rate4 + $rate5;
                                        if ($total_rate != 0) {
                                            $rate_avg =  ($rate1 * 1 + $rate2 * 2 + $rate3 * 3 + $rate4 * 4 + $rate5 * 5) / $total_rate;
                                            $rate_avg = round($rate_avg, 1);
                                        } else {
                                            $rate_avg = 0;
                                        }

                                        for ($i = 0; $i < 5; $i++) {
                                            if ($i < $rate_avg) {
                                        ?>
                                                <div class="rating-star"></div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="rating-star rating-off"></div>
                                        <?php
                                            }
                                        }
                                        ?>
                                        <span>(<?php echo $total_rate ?>)</span>
                                    </span>
                                    <a style="text-decoration: none" href="index.php?page=product_detail&product_id=<?php echo $row['product_id'] ?>">
                                        <div class="product__price align-center">
                                            <?php
                                            if ($row['product_sale'] > 0) {
                                            ?>
                                                <del class="product__price--old h5"><?php echo number_format($row['product_price']) . ' ₫' ?></del>

                                            <?php
                                            }
                                            ?>
                                            <span class="product__price--new h4"><?php echo (number_format($row['product_price'] - ($row['product_price'] / 100 * $row['product_sale']))) . ' vnđ' ?></span>
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
                        <div class="pagination">
                            <?php
                            $currentLink = $_SERVER['REQUEST_URI'];
                            if (isset($_GET['pricefrom']) && isset($_GET['priceto'])) {
                                $price_from = $_GET['pricefrom'];
                                $price_to = $_GET['priceto'];
                                if (isset($_GET['category_id'])) {
                                    $sql_product_count = "SELECT * FROM product JOIN category ON product.product_category = category.category_id WHERE product.product_category = '" . $_GET['category_id'] . "' AND product_price > $price_from AND product_price < $price_to  AND product_status = 1";
                                    $query_product_count = mysqli_query($mysqli, $sql_product_count);
                                } elseif (isset($_GET['brand_id'])) {
                                    $sql_product_count = "SELECT * FROM product JOIN brand ON product.product_brand = brand.brand_id WHERE product.product_brand = '" . $_GET['brand_id'] . "' AND product_price > $price_from AND product_price < $price_to  AND product_status = 1";
                                    $query_product_count = mysqli_query($mysqli, $sql_product_count);
                                } else {
                                    $sql_product_count = "SELECT * FROM product WHERE product_price BETWEEN '" . $price_from . "' AND '" . $price_to . "' AND product_status = 1";
                                     $query_product_count = mysqli_query($mysqli, $sql_product_count);
                                }
                            } else {
                                if (isset($_GET['category_id'])) {
                                    $sql_product_count = "SELECT * FROM product JOIN category ON product.product_category = category.category_id WHERE product.product_category = '" . $_GET['category_id'] . "' AND product_status = 1";
                                    $query_product_count = mysqli_query($mysqli, $sql_product_count);
                                } elseif (isset($_GET['brand_id'])) {
                                    $sql_product_count = "SELECT * FROM product JOIN brand ON product.product_brand = brand.brand_id WHERE product.product_brand = '" . $_GET['brand_id'] . "' AND product_status = 1";
                                    $query_product_count = mysqli_query($mysqli, $sql_product_count);
                                } else {
                                    $sql_product_count = "SELECT * FROM product  WHERE product_status = 1";
                                    $query_product_count = mysqli_query($mysqli, $sql_product_count);
                                }
                            }
                            $row_count = mysqli_num_rows($query_product_count);
                            $totalpage = ceil($row_count / 24);
                            if ($row_count > 24) {
                            ?>
                                <ul class="pagination__items d-flex align-center justify-center">
                                    <?php if ($page != 1) {
                                    ?>
                                        <li class="pagination__item">
                                            <a class="d-flex align-center" href="<?php echo $currentLink ?>&pagenumber=<?php echo $page - 1 ?>">
                                                <img src="./assets/images/icon/arrow-left.svg" alt="">
                                            </a>
                                        </li>
                                    <?php
                                    } ?>
                                    <?php
                                    for ($i = 1; $i <= $totalpage; $i++) {
                                    ?>
                                        <li class="pagination__item">
                                            <a class="pagination__anchor <?php if ($page == $i) {
                                                                                echo "active";
                                                                            } else {
                                                                                echo "";
                                                                            } ?>" href="<?php echo $currentLink ?>&pagenumber=<?php echo $i ?>"><?php echo $i ?></a>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                    <?php if ($page != $totalpage) {
                                    ?>
                                        <li class="pagination__item">
                                            <a class="d-flex align-center" href="<?php echo $currentLink ?>&pagenumber=<?php echo $page + 1 ?>">
                                                <img src="./assets/images/icon/icon-nextlink.svg" alt="">
                                            </a>
                                        </li>
                                    <?php
                                    } ?>
                                </ul>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="text-center pd-top">
                            <a class="btn btn__view--all btn__outline" href="index.php?page=products">Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var currentURL = window.location.href;

    function setUrlPrice() {
        var inputMin = document.querySelector('.input-min').value;
        var inputMax = document.querySelector('.input-max').value;
        var btnFilter = document.querySelector('.btn__filter');
        var link = currentURL + "&pricefrom=" + inputMin + "&priceto=" + inputMax;
        console.log(link);
        btnFilter.href = link;
    }
    window.history.pushState(null, "", "index.php?page=products" + "<?php echo $url_category;
                                                                    echo $url_brand;
                                                                    echo $url_price;
                                                                    echo $url_sort; ?>");
</script>