<div class="col-lg-8">
    <form action="processingform.php" method="post">
        <label><span class="pull-left">Название статьи:</span><input type="text" name="articlename"
                                                                     required></label><br>
        <label><span class="pull-left">Категория:</span><input type="text" name="category" required></label><br>
        <label><span class="pull-left">Краткое содержание:</span><input type="text" name="tiser" required></label><br>
        <label><span class="pull-left">Текст статьи:</span><textarea name="article" required></textarea></label><br>
        <label class="radio"><span class="pull-left">Відображати статтю:</span>
            <input type="radio" name="status" value="0" ><span class="radiotext">Ні</span>
            <input type="radio" name="status" value="1"><span class="radiotext">Так</span>
        </label>
        <br>
        <label>
            <button type="submit" class="btn-default">Отправить</button>
        </label>
    </form>
</div>
