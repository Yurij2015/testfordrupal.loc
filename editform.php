<?php $id = $_GET['id'];
$select = $dbh->query("SELECT id, category, tiser, article, date, status, articlename FROM article WHERE id = $id");
foreach ($select as $article) {
    $id = $article['id'];
    $articlename = $article['articlename'];
    $category = $article['category'];
    $tiser = $article['tiser'];
    $textarticle = $article['article'];
    $status = $article['status'];
}
?>
<div class="col-lg-8">
    <form action="processingeditform.php?id=<?php echo $id ?>" method="post">
        <label>Назва статті:<br><input type="text" name="articlename" required value="<?php echo $articlename; ?>"></label><br>
        <label>Категорія:<br><input type="text" name="category" required value="<?php echo $category; ?>"></label><br>
        <label>Короткий зміст:<br><input type="text" name="tiser" required value="<?php echo $tiser; ?>"></label><br>
        <label>Текст статті:<br><textarea name="article" required><?php echo $textarticle; ?></textarea></label><br>
        <label>Відображати статтю:<br>
            <input type="radio" name="status" value="0" <?php if ($status == 0) { echo "checked"; } ?>> Ні
            &nbsp;
            <input type="radio" name="status" value="1" <?php if ($status == 1) { echo "checked"; } ?>> Так<br>
            <label>
                <button type="submit">Редагувати</button>
            </label>
    </form>
</div>
