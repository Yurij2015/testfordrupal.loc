<?php
try {
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=testsfdrupal', 'root', '');
//    echo "<b>Підключення до бази даних успішне!</b><br>";
} catch (PDOException $e) {
    print "Помилка підключення до бази даних!: " . $e->getMessage() . "<br>";
    die();
}
