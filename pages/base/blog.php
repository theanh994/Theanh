<?php
$sql_article_list = "SELECT * FROM article ORDER BY article_id DESC";
$query_article_list = mysqli_query($mysqli, $sql_article_list);
?>
<!-- start blog -->
<section class="blog pd-section" style="margin: 20px; max-width: 1000px; margin-left: 300px">
    <div>
        <h1 style="text-align: center; margin-top: 0; color:#b09900; font-weight: bold; margin-bottom: 50px">BLOG GOLD</h1>
        <div class="row" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_article_list)) {
                $i++;
                if ($i == 1) {
                    ?>
                    <div class="col" style="flex: 0 0 100%;">
                        <div class="blog__item blog__item--large" style="border-radius: 20px; overflow: hidden;">
                            <a href="index.php?page=article&article_id=<?php echo $row['article_id'] ?>" style="text-decoration: none;">
                                <div class="blog__image" style="overflow: hidden;">
                                    <img class="w-100 h-100 d-block object-fit-cover" src="admin/modules/blog/uploads/<?php echo $row['article_image'] ?>" alt="" style="transition: transform 0.3s ease; border-radius: 20px;">
                                </div>
                                <div class="blog__content" style="padding: 20px; background-color: #f8f8f8;">
                                    <h3 class="blog__title h3" style="color: #333; font-weight: bold; transition: color 0.3s;">
                                        <?php echo $row['article_title'] ?>
                                    </h3>
                                    <span class="blog__date h6 d-block" style="color: #999; margin-bottom: 10px;"><?php echo $row['article_date'] ?> - <?php echo $row['article_author'] ?></span>
                                    <div class="blog__context h4" style="color: #555;">
                                        <?php echo $row['article_summary'] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col" style="flex: 0 0 calc(50% - 10px);">
                        <div class="blog__item h-100" style="border-radius: 20px; overflow: hidden; background-color: #fff; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                            <a href="index.php?page=article&article_id=<?php echo $row['article_id'] ?>" style="text-decoration: none;">
                                <div class="blog__image" style="overflow: hidden;">
                                    <img class="w-100 h-100 d-block object-fit-cover" src="admin/modules/blog/uploads/<?php echo $row['article_image'] ?>" alt="" style="transition: transform 0.3s ease; border-radius: 20px;">
                                </div>
                                <div class="blog__content" style="padding: 15px;">
                                    <h3 class="blog__title h3" style="color: #333; font-weight: bold; transition: color 0.3s;">
                                        <?php echo $row['article_title'] ?>
                                    </h3>
                                    <span class="blog__date h6 d-block" style="color: #999; margin-bottom: 10px;"><?php echo $row['article_date'] ?> - <?php echo $row['article_author'] ?></span>
                                    <div class="blog__context h4" style="color: #555;">
                                        <?php echo mb_strimwidth($row['article_summary'], 0, 200, "...") ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- end blog -->

<!-- CSS for hover effects -->
<style>
    .blog__image img:hover {
        transform: scale(1.05);
    }
    .blog__title:hover {
        color: #b09900;
    }
</style>
