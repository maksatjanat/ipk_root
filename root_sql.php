<?php
# include data base
require_once("includes/connection.php");
$mysqli = new mysqli(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
//Я использую функции strip_tags() и substr() для удаления из поискового термина всех тегов HTML и сокращения его размера. Такая обработка никогда не помешает — нельзя целиком доверять тому, что вводит пользователь.
//При очистке поискового термина выполним один дополнительный шаг в виде процедуры mysql_escape_string(), которая удалит все прочие глюки (такие как одинарные знаки кавычек), которые могут поставить базу данных в тупик. 
$term = htmlspecialchars(strip_tags(substr($_POST['SQLZAP'],0, 500)));
//$string = str_replace("\r\n", "", $string); 
//$term = mysql_real_escape_string($term);
//Мы хотим извлекать из таблицы любые имена и номера телефона, соответствующие поисковому термину. Последний должен сравниваться методом LIKE как с полем имени, так и с полем номера телефона, после чего выполняется запрос mysql_query().
//$sql = "select id,title,date,duration from sel_courses where direct_id = '$term'";
//$sql="SELECT t.id, t.direct_id, t.title, t.date, t.duration, c.CountStudent  FROM coursepers c INNER JOIN tbl_courses t ON c.CourseId = t.id";
$conn = new mysqli(DB_SERVER,DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) die($conn->connect_error);
$query = $term;
$conn->query("SET NAMES utf8 COLLATE utf8_unicode_ci");
$result = $conn->query($query);
if (!$result) die ($conn-> error);
printf("%s\n", $mysqli->info);
printf("%s\n", $query);
?>