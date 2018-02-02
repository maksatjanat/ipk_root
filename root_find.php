<?php
# include data base
require_once("includes/connection.php");
date_default_timezone_set('Asia/Almaty');
//Я использую функции strip_tags() и substr() для удаления из поискового термина всех тегов HTML и сокращения его размера. Такая обработка никогда не помешает — нельзя целиком доверять тому, что вводит пользователь.
//При очистке поискового термина выполним один дополнительный шаг в виде процедуры mysql_escape_string(), которая удалит все прочие глюки (такие как одинарные знаки кавычек), которые могут поставить базу данных в тупик. 

if (isset($_POST['select_direct'])&& $_POST['select_direct']>0){
$term = $_POST['select_direct'];
echo $term;
$sql="SELECT id, direct_id, title, date, duration, memb_int FROM tbl_courses WHERE direct_id=".$term." GROUP BY date DESC";
//$sql="SELECT t.id, t.direct_id, t.title, t.date, t.duration, SUM(c.CountStudent) FROM coursepers c, tbl_courses t WHERE c.CourseId = t.id AND t.direct_id=".$term." GROUP BY t.id";
} else {
	$sql="SELECT t.id, t.direct_id, t.title, t.date, t.duration, t.memb_int FROM tbl_courses t ORDER BY t.date DESC";
	//$sql="SELECT t.id, t.direct_id, t.title, t.date, t.duration, SUM(c.CountStudent) FROM coursepers c, tbl_courses t WHERE c.CourseId = t.id GROUP BY t.id";
}
//$term = mysql_real_escape_string($term);
//Мы хотим извлекать из таблицы любые имена и номера телефона, соответствующие поисковому термину. Последний должен сравниваться методом LIKE как с полем имени, так и с полем номера телефона, после чего выполняется запрос mysql_query().
//$sql = "select id,title,date,duration from sel_courses where direct_id = '$term'";
//$sql="SELECT t.id, t.direct_id, t.title, t.date, t.duration, c.CountStudent  FROM coursepers c INNER JOIN tbl_courses t ON c.CourseId = t.id";

$result = mysqli_query($con,$sql);
//Инициализируем переменную $string, чтобы сохранить результаты, затем используем mysql_num_rows() для проверки наличия в ответе любых строк. Если результаты для поискового термина не получены, $string будет содержать значение "No matches!" Если они есть, будет распечатано каждое имя и номер телефона из множества результатов. В конце процесса вся строка выводится на экран командой echo:
$string = '';
//

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){
	
    $string .= '<tr><td><input type="radio" name="idCourse" value="'.$row[0].'"/>'.$row[0].'</td><td>';
	$string .=$row[1].'</td><td>'.$row[2].', '.$row[4].'ч.</b> </td><td>';
    $string .= '<input type="text" value="'.date("d.m.Y",$row[3]).'" class="form-control" id="datetimepicker_'.$row[0].'"></td><td>';
	$string .= $row[5].'</td></tr>\n';
	
  }

}else{
  $string = "Нет результатов!";
} 

echo $string;
?>
<script type="text/javascript">
  $(function () {
    $("input.form-control").datetimepicker(
      {pickTime: false, language: 'ru',daysOfWeekDisabled: [0,6]}
    );
  });
</script>