<article class="col-lg-8">
    <?php
    include "pagination.php";
    $i = 0;
    //    $select = $dbh->query("SELECT id, category, tiser, date, status, articlename FROM testsfdrupal.article WHERE status = 1 AND id BETWEEN '$a' AND '$b' ORDER BY date");
    $select = $dbh->query("SELECT id, category, tiser, date, status, articlename FROM testsfdrupal.article WHERE status = 1 LIMIT $a,10");
    // отримуємо статті
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
        echo $article['date'];
        echo "<br>";
        echo $article['status'];
        $i++;
    }
    if ($i == 0) {
        echo "<hr>";
        echo "Немає записів на сторінці!";
    }
    echo "<hr>";
    echo "Кількість записів на сторінці: ";
    echo $i;
    ?>
</article>