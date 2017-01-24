    <div class="col-lg-8">
        <form action="processingform.php" method="post">
            <label>Название статьи:<br><input type="text" name="articlename" required></label><br>
            <label>Категория:<br><input type="text" name="category" required></label><br>
            <label>Краткое содержание:<br><input type="text" name="tiser" required></label><br>
            <label>Текст статьи:<br><textarea name="article" required></textarea></label><br>
            <label>Отображать статью:<br>
                <input type="radio" name="status" value="0"> Нет
                &nbsp;
                <input type="radio" name="status" value="1"> Да<br>
                <label>
                    <button type="submit">Отправить</button>
                </label>
        </form>
    </div>
