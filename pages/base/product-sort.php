<?php 
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
    $product_count = mysqli_num_rows($query_product_count);

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
<style>
    /* Phần chính của khối sắp xếp */
    .sort-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin-right: 10px;
    }

    /* Label "Sắp xếp theo:" */
    .sort-label {
        font-size: 1.25rem;
        font-weight: bold;
    }

    /* Nút sắp xếp */
    .btn-sort {
        background-color:#22B24C;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        position: relative;
    }

    .btn-sort .icon-chevron-down {
        margin-left: 8px;
        font-size: 0.75rem;
    }

    .btn-sort:hover {
        background-color: #22B24C;
    }

    /* Dropdown menu */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        min-width: 180px;
        z-index: 1000;
    }

    .dropdown-menu li {
        list-style: none;
        padding: 0;
    }

    .dropdown-item {
        display: block;
        padding: 10px;
        font-size: 1rem;
        text-decoration: none;
        color: black;
        cursor: pointer;
    }

    .dropdown-item:hover {
        background-color: #f1f1f1;
    }

    /* Hiển thị menu khi click */
    .dropdown:hover .dropdown-menu {
        display: block;
    }

</style>
<div class="product__filter-sort">
    <div class="container">
        <div class="row">

            <div class="col-md-6" style="">
                <div class="sort-container">

                    <div class="dropdown">
                        <button class="btn-sort" id="sortPriceDropdown">
                            Sắp Xếp Theo
                            <span class="icon-chevron-down">&#9660;</span> <!-- Mũi tên xuống -->
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" onclick="ascPrice()" id="price-asc">Giá từ thấp đến cao</a></li>
                            <li><a class="dropdown-item" href="#" onclick="descPrice()" id="price-desc">Giá từ cao đến thấp</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="">
                <div class="sort-container">

                    <div class="dropdown">
                        <button class="btn-sort" id="sortPriceDropdown">
                            Danh Mục
                            <span class="icon-chevron-down">&#9660;</span> <!-- Mũi tên xuống -->
                        </button>
                        <ul class="dropdown-menu">

                            <?php
                            $sql_categorys = "SELECT * FROM category ORDER BY category_id DESC";
                            $query_categorys = mysqli_query($mysqli, $sql_categorys);
                            while ($categorys = mysqli_fetch_array($query_categorys)) {
                                ?>
                                <li>
                                    <a href="index.php?page=products&category_id=<?php echo $categorys['category_id']; echo $url_price; echo $url_sort; ?>" class="dropdown-item <?php if (isset($_GET['category_id']) && $categorys['category_id'] == $_GET['category_id']) { echo 'category__active'; } ?>">
                                        <?php echo $categorys['category_name']; ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6"  >
                <div class="sort-container">

                    <div class="dropdown">
                        <button class="btn-sort" id="sortPriceDropdown">
                            Lọc theo giá
                            <span class="icon-chevron-down">&#9660;</span> <!-- Mũi tên xuống -->
                        </button>
                        <ul class="dropdown-menu" style="width: 300px !important;">

                            <li class="dropdown-divider"></li> <!-- Dòng phân cách nếu cần -->
                            <li class="dropdown-header" style="margin-left: 17px;margin-top: 10px">Khoảng giá</li>
                            <li>
                                <div class="price__range" style="width: 80%; margin-left: 17px">
                                    <div class="slider">
                                        <div class="progress"></div>
                                    </div>
                                    <div class="range-input" style="">
                                        <input type="range" class="range-min" min="0" max="50000000" value="0" step="100000">
                                        <input type="range" class="range-max" min="0" max="50000000" value="50000000" step="100000">
                                    </div>
                                    <div class="price-input d-flex space-between" >
                                        <div class="field" style="font-size: 2px !important;">
                                            <input style="font-size: 12px !important;" type="number" id="price-from" class="input-min h4" value="0">
                                            <span style="font-size: 12px !important;" class="h6 min-value">đ</span>
                                        </div>
                                        <div class="separator">&mdash;</div>
                                        <div class="field">
                                            <input style="font-size: 12px !important;" type="number" id="price-to" class="input-max h4" value="50000000">
                                            <span style="font-size: 12px !important;" class="h6 max-value">đ</span>
                                        </div>
                                    </div>
                                    <a style="width: 30px;font-size: 12px; margin-bottom: 5px;background-color: #22B24C;border-color: #22B24C" href="" class="btn btn__solid btn__filter text-right" onclick="setUrlPrice();"><span style="margin-left: -10px">Lọc</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="">
                <div class="sort-container">

                    <div class="dropdown">
                        <button class="btn-sort" id="sortBrandDropdown">
                            Thương hiệu
                            <span class="icon-chevron-down">&#9660;</span> <!-- Mũi tên xuống -->
                        </button>
                        <ul class="dropdown-menu">
                            <?php
                            $sql_brands = "SELECT * FROM brand ORDER BY brand_id DESC";
                            $query_brands = mysqli_query($mysqli, $sql_brands);
                            while ($brands = mysqli_fetch_array($query_brands)) {
                                ?>
                                <li>
                                    <a href="index.php?page=products&brand_id=<?php echo $brands['brand_id']; echo $url_price; echo $url_sort; ?>" class="dropdown-item <?php if (isset($_GET['brand_id']) && $brands['brand_id'] == $_GET['brand_id']) { echo 'variant__active'; } ?>">
                                        <?php echo $brands['brand_name']; ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    var currentURL = window.location.href;

    function ascPrice() {
        var priceAsc = document.getElementById('price-asc');
        var link = currentURL + "&pricesort=asc";
        priceAsc.href = link;
    }

    function descPrice() {
        var priceDesc = document.getElementById('price-desc');
        var link = currentURL + "&pricesort=desc";
        priceDesc.href = link;
    }
</script>