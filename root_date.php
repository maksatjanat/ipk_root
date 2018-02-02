<?php
# include data base
require_once("includes/connection.php");
date_default_timezone_set('Asia/Almaty');
if(isset($_POST['idCourse'])AND isset($_POST['DateVal'])) {
	//Я использую функции strip_tags() и substr() для удаления из поискового термина всех тегов HTML и сокращения его размера. Такая обработка никогда не помешает — нельзя целиком доверять тому, что вводит пользователь.
	//При очистке поискового термина выполним один дополнительный шаг в виде процедуры mysql_escape_string(), которая удалит все прочие глюки (такие как одинарные знаки кавычек), которые могут поставить базу данных в тупик. 
	$idCourse = $_POST['idCourse'];
	$term = htmlspecialchars(strip_tags(substr($_POST['DateVal'],0, 12)));
	list($day, $month, $year) = explode(".", $term);
	$udate=date("U",mktime(0,0,0,(integer)$month,(integer)$day,(integer)$year));
	
	//Мы хотим извлекать из таблицы любые имена и номера телефона, соответствующие поисковому термину. Последний должен сравниваться методом LIKE как с полем имени, так и с полем номера телефона, после чего выполняется запрос mysql_query().
	//$sql = "select id,title,date,duration from sel_courses where direct_id = '$term'";
	//$sql="SELECT p.CompanyId, p.FirstName, p.SurName, p.PhoneUser, c.CourseId, c.CountStudent  FROM coursepers c, tbl_persona p WHERE c.PersonaId=p.id_persona AND CourseId='$idCourse' ";
	$sql="UPDATE tbl_courses SET date=$udate WHERE id='$idCourse'";
	$result=mysqli_query($con,$sql);
	if (mysqli_affected_rows($con)>0){
		$string = "Данные обновлены ";
	}else{
	  $string = "Нет результатов! ";
	} 
} else {
	$string = "Вы не выбрали курс повышения квалификации!";
}
echo $string;
?>