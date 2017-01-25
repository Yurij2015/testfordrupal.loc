<?php
$rowcount = 0;
$counts = $dbh->query("SELECT COUNT('id') FROM testsfdrupal.article WHERE status = 1")->fetch(PDO::FETCH_ASSOC);
//рахуємо кількість записів в БД
foreach ($counts as $count) {
    $rowcount = $count;
}
echo "Кількість записів з відповідними параметрами в БД: ";
echo $rowcount;
// приймаємо параметр із адресної строки
$pagination = $_GET['pagination'];
//задаємо параметр якщо пустий для відображення на головній сторінці
if (empty($pagination)) {
    $pagination = 1;
}
//умови для відображення пагінації
if ($rowcount > 0) {
    echo "<hr>";
    echo "<a href = index.php?pagination=1>";
    echo "1 - 10";
    echo "</a>";
}
if ($rowcount > 10) {
    echo " | ";
    echo "<a href = index.php?pagination=2>";
    echo "11 - 20";
    echo "</a>";
}
if ($rowcount > 20) {
    echo " | ";
    echo "<a href = index.php?pagination=3>";
    echo "21 - 30";
    echo "</a>";
}
//задаємо значення для $a яка відправляється в зарос до БД
switch ($pagination) {
    case 1:
        $a = 0;
        break;
    case 2:
        $a = 10;
        break;
    case 3:
        $a = 20;
        break;
}