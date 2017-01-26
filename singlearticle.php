<?php include "session.php" ?>
<?php include "header.php" ?>
<?php include "sidebar.php" ?>
    <article class="col-lg-8">
        <?php
        $id = $_GET['id'];
        $select = $dbh->query("SELECT id, category, tiser, article, date, status, articlename FROM article WHERE id = $id");
        foreach ($select as $article) {
            echo "<hr>";
//            echo $article['id'];
//            echo "<br>";
            echo "<h3>";
            echo $article['articlename'];
            echo "</h3>";
            echo "<p>";
            echo $article['category'];
            echo "</p>";
            echo "<p>";
            echo $article['tiser'];
            echo "</p>";
            echo "<p>";
            echo $article['article'];
            echo "</p>";
            echo "<p>";
            echo $article['date'];
            echo "</p>";
            echo "<p>";
//            echo $article['status'];
            echo "Статус: Опубліковано!";
            echo "</p>";
            echo "<p>";
            echo "<a href = editarticle.php?id=$id>";
            echo "Редагувати статтю";
            echo "</a>";
            echo "</p>";
        }
        ?>
    </article>
<?php include "footer.php" ?>