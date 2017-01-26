<article class="col-lg-8">
    <div class="pagination">
        <?php
        include "./pagination.php";
        $i = 0;
        $select = $dbh->query("SELECT id, category, tiser, date, status, articlename FROM article WHERE status = 1 LIMIT {$a},10");
        // отримуємо статті
        foreach ($select as $article) {
            echo "<hr>";
//            echo $article['id'];
            $id = $article['id'];
//            echo "<br>";
            echo "<a href = singlearticle.php?id=$id>";
            echo $article['articlename'];
            echo "</a>";
            echo "<br>";
            echo $article['category'];
            echo "<br>";
            echo $article['tiser'];
            echo "<br>";
            echo $article['date'];
            echo "<br>";
//      echo $article['status'];
            echo "Статус: Опубліковано!";
            $i++;
        }
        if ($i == 0) {
            echo "<hr>";
            echo "Немає записів на сторінці!";
        }
        //    echo "<hr>";
        //    echo "Кількість записів на сторінці: ";
        //    echo $i;
        ?>
    </div>
</article>