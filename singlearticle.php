<?php include "session.php" ?>
<?php include "header.php" ?>
<?php include "sidebar.php" ?>
    <article class="col-lg-8">
        <?php
        $id = $_GET['id'];
        $select = $dbh->query("SELECT id, category, tiser, article, date, status, articlename FROM testsfdrupal.article WHERE id = $id");

        foreach ($select as $article) {
            echo "<hr>";
            echo $article['id'];
            echo "<br>";
            echo $article['articlename'];
            echo "<br>";
            echo $article['category'];
            echo "<br>";
            echo $article['tiser'];
            echo "<br>";
            echo $article['article'];
            echo "<br>";
            echo $article['date'];
            echo "<br>";
//            echo $article['status'];
            echo "Статус: Опубліковано!";
            echo "<br>";
            echo "<a href = editarticle.php?id=$id>";
            echo "Редагувати статтю";
            echo "</a>";
        }
        ?>
    </article>

<?php include "footer.php" ?>