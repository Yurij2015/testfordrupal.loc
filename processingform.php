<?php include "db.php" ?>
<?php include "function.php" ?>
<?php
if (isset($_POST)) {
    $articlename = trim(htmlspecialchars($_POST['articlename']));
    $category = trim(htmlspecialchars($_POST['category']));
    $tiser = trim(htmlspecialchars($_POST['tiser']));
    $article = trim(htmlspecialchars($_POST['article']));
    $status = $_POST['status'];

    $insert = $dbh->prepare("INSERT INTO article (category, tiser, article, status, articlename) VALUES (:category, :tiser, :article, :status, :articlename)");
    $insert->bindParam(':articlename', $articlename);
    $insert->bindParam(':category', $category);
    $insert->bindParam(':tiser', $tiser);
    $insert->bindParam(':article', $article);
    $insert->bindParam(':status', $status);
    $insert->execute();

    if ($insert) {
        redirect_to("index.php");
    }

} else {
    echo "Потрібно внести необхідні дaні в форму";
}