<?php
$sql_article_list = "SELECT * FROM article ORDER BY article_id DESC LIMIT 8";
$query_article_list = mysqli_query($mysqli, $sql_article_list);
?>
<!-- start customer feedback -->
<section style="margin: 0px 20px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 1.5rem;">
            <h2 style="font-size: 2rem;">Tin tức nổi bật</h2>
        </div>
        <div>
            <ul style="list-style: none; padding: 0; display: flex; flex-wrap: wrap; justify-content: center;">
                <?php
                while ($row = mysqli_fetch_array($query_article_list)) {
                    ?>
                    <li id="new-<?php echo $row['article_id'] ?>" style="width: 30%; margin: 15px; display: flex; flex-direction: column; align-items: center;">
                        <div style="width: 100%; height: 200px; overflow: hidden; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <a href="index.php?page=article&article_id=<?php echo $row['article_id'] ?>">
                                <img style="width: 100%; height: 100%; object-fit: cover;" src="admin/modules/blog/uploads/<?php echo $row['article_image'] ?>" alt="customer1">
                            </a>
                        </div>
                        <div style="text-align: center; margin-top: 10px;">


                            <p style="margin-top: 10px;"><?php echo mb_strimwidth($row['article_summary'], 0, 200, "...") ?></p>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>

        </div>
    </div>
</section>
<!-- end customer feedback -->
