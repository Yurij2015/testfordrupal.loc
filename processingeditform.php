<?php include "db.php" ?>
<?php include "function.php" ?>
<?php
if (isset($_POST)) {
    $id = $_GET['id'];
    $articlename = trim(htmlspecialchars($_POST['articlename']));
    $category = trim(htmlspecialchars($_POST['category']));
    $tiser = trim(htmlspecialchars($_POST['tiser']));
    $article = trim(htmlspecialchars($_POST['article']));
    $status = $_POST['status'];
    $insert = $dbh->prepare("UPDATE testsfdrupal.article SET category = :category, tiser = :tiser, article = :article, status = :status, articlename = :articlename WHERE id = {$id} LIMIT 1");
    $insert->bindParam(':articlename', $articlename);
    $insert->bindParam(':category', $category);
    $insert->bindParam(':tiser', $tiser);
    $insert->bindParam(':article', $article);
    $insert->bindParam(':status', $status);
    $insert->execute();
    if ($insert) {
        redirect_to("singlearticle.php?id={$id}");
    }
}