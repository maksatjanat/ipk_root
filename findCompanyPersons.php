<?php
# include data base
require_once("includes/connection.php");
//Я использую функции strip_tags() и substr() для удаления из поискового термина всех тегов HTML и сокращения его размера. Такая обработка никогда не помешает — нельзя целиком доверять тому, что вводит пользователь.
//При очистке поискового термина выполним один дополнительный шаг в виде процедуры mysql_escape_string(), которая удалит все прочие глюки (такие как одинарные знаки кавычек), которые могут поставить базу данных в тупик. 
$term = strip_tags(substr($_POST['search_term'],0, 100));
$term = mysql_real_escape_string($term);
//Мы хотим извлекать из таблицы любые имена и номера телефона, соответствующие поисковому термину. Последний должен сравниваться методом LIKE как с полем имени, так и с полем номера телефона, после чего выполняется запрос mysql_query().
$sql = "select name,phone from directory where name like '%".$term."%' or phone like '%".$term."%' order by name asc";
$result = mysqli_query($con,$sql);
//Инициализируем переменную $string, чтобы сохранить результаты, затем используем mysql_num_rows() для проверки наличия в ответе любых строк. Если результаты для поискового термина не получены, $string будет содержать значение "No matches!" Если они есть, будет распечатано каждое имя и номер телефона из множества результатов. В конце процесса вся строка выводится на экран командой echo:
$string = '';
if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_object($result)){
    $string .= "<b>".$row->name."</b> - ";
    $string .= $row->phone."</a>";
    $string .= "<br/>\n";
  }

}else{
  $string = "Нет результатов!";
} 

echo $string;
?>