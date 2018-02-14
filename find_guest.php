<?php
# include data base
require_once("includes/connection.php");
date_default_timezone_set('Asia/Almaty');
//Я использую функции strip_tags() и substr() для удаления из поискового термина всех тегов HTML и сокращения его размера. Такая обработка никогда не помешает — нельзя целиком доверять тому, что вводит пользователь.
//При очистке поискового термина выполним один дополнительный шаг в виде процедуры mysql_escape_string(), которая удалит все прочие глюки (такие как одинарные знаки кавычек), которые могут поставить базу данных в тупик. 
$term = strip_tags(substr($_POST['select_direct'],0, 100));
//$term = mysql_real_escape_string($term);
$today=time();
//Мы хотим извлекать из таблицы любые имена и номера телефона, соответствующие поисковому термину. Последний должен сравниваться методом LIKE как с полем имени, так и с полем номера телефона, после чего выполняется запрос mysql_query().
$sql = "select id,title,refer,date,duration,memb_int from tbl_courses where direct_id = '$term' AND date<'$today' ORDER BY date ASC";
$result = mysqli_query($con,$sql);
//Инициализируем переменную $string, чтобы сохранить результаты, затем используем mysql_num_rows() для проверки наличия в ответе любых строк. Если результаты для поискового термина не получены, $string будет содержать значение "No matches!" Если они есть, будет распечатано каждое имя и номер телефона из множества результатов. В конце процесса вся строка выводится на экран командой echo:
$string = '';
if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_object($result)){
    $string .= '<tr><td><input type="radio" name="idCourse" value="'.$row->id.'"/>'.$row->id.'</td><td>';
	if (is_null($row->refer)){
	$string .='<b>'.$row->title.', '.$row->duration.'ч.</b> </td><td>';}
	else {$string .='<b><a href="'.$row->refer.'"  target="_blank">'.$row->title.'</a>, '.$row->duration.'ч.</b> </td><td>';}
	$string .='<b>'.date("d.m.Y",$row->date).'</b> </td><td>&nbsp-';
    $string .= $row->memb_int.' чел.</td><td></tr>\n';
	//<tr><td>' + data.duration + '</td><td><a href="docs/html/HtmlPage' + data.id + '.html" target="_blank">' + data.title + '</a></td><td>' + data.date + '</td></td></tr>
  }

}else{
  $string = "Нет результатов!";
} 

echo $string;
?>