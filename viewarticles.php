<article class="col-lg-8">
    <?php
    $rowcount = 0;
    $counts = $dbh->query("SELECT COUNT('id') FROM testsfdrupal.article WHERE status = 1")->fetch(PDO::FETCH_ASSOC);

    //рахуємо кількість записів в БД
    foreach ($counts as $count) {
        $rowcount = $count;
    }
    echo "Кількість записів з відповідними параметрами в БД: ";
    echo $rowcount;

    $pagination = $_GET['pagination'];

    echo "<hr>";
    echo "<a href = index.php?pagination=1>";
    echo "1 - 10";
    echo "</a>";
    echo " | ";
    echo "<a href = index.php?pagination=2>";
    echo "11 - 20";
    echo "</a>";

    $a = 1;
    $b = 40;

    $i = 0;
    $select = $dbh->query("SELECT id, category, tiser, date, status, articlename FROM testsfdrupal.article WHERE status = 1 AND id BETWEEN '$a' AND '$b' ORDER BY date");


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


    echo "<hr>";
    echo "Кількість записів на сторінці: ";
    echo $i;
    ?>
</article>