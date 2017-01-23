<article>
    <?php
    $i = 0;
    $select = $dbh->query("SELECT id, category, tiser, article, date, status, articlename FROM testsfdrupal.article WHERE status = 1 ORDER BY date");

    foreach ($select as $article) {
        echo "<hr>";
        echo $article['id'];
        $id = $article['id'];
        echo "<br>";
        echo "<a href = singlearticle.php?id=$id>";
        echo $article['articlename'];
        echo "</a>";
        echo "<br>";
        echo $article['category'];
        echo "<br>";
        echo $article['tiser'];
        echo "<br>";
        echo $article['article'];
        echo "<br>";
        echo $article['date'];
        echo "<br>";
        echo $article['status'];
        $i++;
    }
    echo "<hr>";
    echo "Количество записей: ";
    echo $i;
    ?>
</article>