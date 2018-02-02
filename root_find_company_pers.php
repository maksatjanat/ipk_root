<?php
# include data base
require_once("includes/connection.php");
if(isset($_POST['idCourse'])) {
	//Я использую функции strip_tags() и substr() для удаления из поискового термина всех тегов HTML и сокращения его размера. Такая обработка никогда не помешает — нельзя целиком доверять тому, что вводит пользователь.
	//При очистке поискового термина выполним один дополнительный шаг в виде процедуры mysql_escape_string(), которая удалит все прочие глюки (такие как одинарные знаки кавычек), которые могут поставить базу данных в тупик. 
	$idCourse = $_POST['idCourse'];
	//Мы хотим извлекать из таблицы любые имена и номера телефона, соответствующие поисковому термину. Последний должен сравниваться методом LIKE как с полем имени, так и с полем номера телефона, после чего выполняется запрос mysql_query().
	//$sql = "select id,title,date,duration from sel_courses where direct_id = '$term'";
	//$sql="SELECT p.CompanyId, p.FirstName, p.SurName, p.PhoneUser, c.CourseId, c.CountStudent  FROM coursepers c, tbl_persona p WHERE c.PersonaId=p.id_persona AND CourseId='$idCourse' ";
	$sql="SELECT p.CompanyId, p.FirstName, p.SurName, p.PhoneUser, p.b_employee, c.CountStudent,c.idBid, 
	/** Начало изменении, Maksat **/
	c.comment 
	/** Конец изменении, Maksat **/
	FROM coursepers c INNER JOIN tbl_persona p ON c.PersonaId = p.id_persona WHERE c.CourseId='$idCourse'";
	$result = mysqli_query($con,$sql);
	//Инициализируем переменную $string, чтобы сохранить результаты, затем используем mysql_num_rows() для проверки наличия в ответе любых строк. Если результаты для поискового термина не получены, $string будет содержать значение "No matches!" Если они есть, будет распечатано каждое имя и номер телефона из множества результатов. В конце процесса вся строка выводится на экран командой echo:
	$string = '';
	// Начало изменении, Maksat
	$string .= '<tr><th>ID</th><th>Имя</th><th>Фамимлия</th><th>Телефонный номер</th><th>Юр. или физ. лицо</th><th>Комментарий</th><th>Количество студентов</th></tr>';
	// Конец изменении, Maksat
	if (mysqli_num_rows($result) > 0){
	  while($row = mysqli_fetch_object($result)){
		$string .= '<tr><td>'.$row->idBid.'</td><td>';
		$string .= $row->FirstName.'</td><td>';
		$string .= $row->SurName.'</td><td>';
		$string .= $row->PhoneUser.'</td><td>';
		if ($row->b_employee==1){
		$string .= 'юр.лицо </td><td>';	
		} else $string .= 'физ.лицо </td><td>';	
		/** Начало изменении, Maksat **/
		$string .= $row->comment.'</td><td>';
		/** Конец изменении, Maksat **/
		$string .= $row->CountStudent.'</td><td></tr>\n';
		//<tr><td>' + data.duration + '</td><td><a href="docs/html/HtmlPage' + data.id + '.html" target="_blank">' + data.title + '</a></td><td>' + data.date + '</td></td></tr>
	  }

	}
	else{
		
	  $string = "Нет результатов!";
	} 
} else {
	$string = "Вы не выбрали курс повышения квалификации!";
}
echo $string;
?>