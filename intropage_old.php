<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
	//$insertBid=mysqli_query($con,"INSERT INTO tbl_persona (CourseId,KolvoStudent) values ('".$_POST['voice']."','".$_POST['kolvo']."') WHERE id_persona='".$_SESSION['idpersona']."'");
} else {
	require_once("includes/connection.php");
	include("header.php"); 
	//------------------------------------------------
	if(isset($_POST['kolvo'])&&isset($_POST['idCourse'])){
		/* выводит существующее количество слушателей, наименование  */
		$insert_sum=mysqli_fetch_array(mysqli_query($con,"SELECT title,memb_int FROM tbl_courses WHERE id='".$_POST['idCourse']."'"));
		$bids_sum=$insert_sum[1]+$_POST['kolvo'];
		$bids_title=$insert_sum[0];
		/* выводит Данные пользователя */
		$persona=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM tbl_persona WHERE id_persona='".$_SESSION['idpersona']."'"));
		//$pers_fio=$persona[2]+' '+$persona[3]+' '+$persona[4];
		//$pers_em_ph=$persona[5]+' '+$persona[6];
//формируем текст сообщения-------------------------------------------------------------------------------------------------------------------------------------->
		$to = 'djdamir@aipet.kz, kpk@aipet.kz'; // обратите внимание на запятую

// тема письма
$subject = 'Заявка на КПК';

// текст письма
$message = '
<html>
<head>
  <title>Заявка на КПК</title>
</head>
<body>
  <p>Подана заявка на курс повышения квалификации от персоны:</p>
  <table>
    <tr>
      <th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Емайл</th><th>Телефон</th><th>Компания</th>
    </tr>
    <tr>
      <td>'.$persona[3].'</td><td>'.$persona[2].'</td><td>'.$persona[4].'</td><td>'.$persona[5].'</td><td>'.$persona[6].'</td><td>1970</td>
    </tr>
  </table>
  <p>На тему:'.$bids_title.' в количестве '.$_POST['kolvo'].' человек</p>
</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset=\"utf-8\"\r\n";
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

		//INSERT INTO coursepers(CourseId,PersonaId,CountStudent) VALUES($_POST['idCourse'],$_SESSION['idpersona'],$_POST['kolvo'])
		//"UPDATE tbl_persona SET CourseId=".$_POST['voice'].", KolvoStudent=".$_POST['kolvo']." WHERE id_persona=".$_SESSION['idpersona'].""
		if (mysqli_query($con, "INSERT INTO coursepers(CourseId,PersonaId,CountStudent,comment) VALUES(".$_POST['idCourse'].",".$_SESSION['idpersona'].",".$_POST['kolvo'].",'".$_POST['comment']."')") === TRUE AND
			mysqli_query($con, "UPDATE tbl_courses SET memb_int=".$bids_sum." WHERE id=".$_POST['idCourse']."")===TRUE) {
			mail ($to,$subject,$message,iconv ('utf-8', 'windows-1251', $headers));
			printf("Данные успешно обновлены.\n");
		} elseif (mysqli_errno($con)=='1062'){
			printf("Выберите другой курс повышения квалификации, данная заявка существует.\n");
		}
		else mysqli_connect_error();
		
		//mysqli_close($con);
		
		
	}
	//----------------------------------------------
	//-----------------------------------------------
	$queryCompany=mysqli_query($con,"SELECT * FROM tbl_company WHERE id_company='".$_SESSION['CompanyId']."'");
	
	//$numCompany=mysqli_num_rows($queryCompany);
	$resultCompany=mysqli_fetch_assoc($queryCompany);
	$_SESSION['NameCompany']=$resultCompany['NameCompany'];
	mysqli_close($con);
?>
<!-- Затем создадим простую функцию, которая предотвратит типичное поведение поисковой формы. 
(Для этого используется функция preventDefault().) Все нажатия кнопки Submit и события key-up 
(то есть события, которые происходят при нажатии клавиш на клавиатуре) будут переадресовываться 
к новой функции ajax_search(), которую мы сейчас создадим	-->
<script type='text/javascript'> 
$(document).ready(function(){ 
$("#search_results").slideUp(); 
    $("#select_direct").change(function(e){ 
       // e.preventDefault(); 
        ajax_search(); 
    }); 

});

function ajax_search(){ 
  $("#search_results").show(); 
  var search_val=$("#select_direct option:selected").val(); 
  
  $.post("./find.php", {select_direct : search_val}, function(data){
   if (data.length>0){ 
     $("#search_results").html(data); 
   } else $("#search_results").html("нет результатов");
  }) 
   
} 
</script>
<div class="container">
<div class="row">
	<div id="welcome">	
	<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: left;"><h3>Добро пожаловать,</h3><h4><?php echo $_SESSION['fullname'];?>! </h4></div>
	<div class="col-lg-6 col-md-6 col-sm-6"style="text-align: right;"><a href="logout.php">Выйти</a> из аккаунта</br><h4><?php echo $_SESSION['NameCompany'];?></h4></div>
	</div>		
</div>		
<!--?php echo $resultCompany[1];?>
<!--div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;"><h3>     </h3></div>	
</div-->
<!--div class="row" id="CompanyPersons">
		<!--?php 
		//нужно добавить обработку отдельного запроса с использованием $query_company
		//вставка в таблицу persona используя последний id
		echo "<b>Ваши сотрудники:</b> <br/>";
		//print_r($_SESSION);
		$queryPersons=mysqli_query($con,"SELECT * FROM(SELECT * FROM tbl_persona WHERE CompanyId='".$_SESSION['CompanyId']."')AS collegs WHERE id_persona<>'".$_SESSION['idpersona']."'");
		$numPersons=mysqli_num_rows($queryPersons);
		$string = '';
		if ($numPersons > 0){
			while ($row = mysqli_fetch_assoc($queryPersons)) {
			$string.="<b>".$row['FirstName']." ";
			$string.=$row['SurName']."</b> - ";
			$string.=$row['PhoneUser']."<br/>\n";
			}
		} else {$string = "Нет результатов!";} 
		echo $string;
		?>
</div-->
	
		
	<form role="form" method="post" action=""> <!--всегда добавлять role="form" для bootstrap-->
		<div class="form-group" id="SelectCourses">
	
			<select class="form-control" id="select_direct">
				<option selected="selected" value="0">Выберите направление курсов повышения квалификации:</option>
				<option value="1">Электрические станции</option>
				<option value="2">Электрические сети </option>
				<option value="3">Энергосбережение </option>
				<option value="4">Экология</option> 
				<option value="5">Телекоммуникации </option>
				<option value="6">ИТ-технологии</option> 
				<option value="7">Автоматизация</option> 
			</select>
				<!--input type="submit" value="Выбрать" /-->
			
		</div>
		<table class="table" name="search_results" id="search_results">
		</table>
		<span class="controls">     
			<input class="form-control" id="comment" name="comment" type="text" placeholder="Комментарий" />    		
		</span>
		<div class="input-group">
				<!--H4>Выберите количество обучаемых человек</H4>
					<span class="input-group-addon">@</span-->
					<select id="kolvo" name="kolvo">
					 <option>количество</option>
					 <option>1</option>
					 <option>2</option>
					 <option>3</option>
					 <option>4</option>
					 <option>5</option>
					 <option>6</option>
					 <option>7</option>
					 <option>8</option>
					 <option>9</option>
					 <option>10</option>
					 <option>11</option>
					 <option>12</option>
					 <option>13</option>
					 <option>14</option>
					 <option>15</option>
					 <option>16</option>
					 <option>17</option>
					 <option>18</option>
					 <option>19</option>
					 <option>20</option>
					 <option>21</option>
					 <option>22</option>
					 <option>23</option>
					 <option>24</option>
					 <option>25</option>
					 <option>26</option>
					 <option>27</option>
					 <option>28</option>
					 <option>29</option>
					 <option>30</option>
					</select>
			<!--input type="text" maxlength="100" class="input-xxlarge" placeholder="Комментарий" name="comment" id="comment"></input-->
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;"> <input type="submit" value="подать заявку" name="bid_button" class="btn btn-success"/> 
		</div>	
	</form>
		
			
</div>

	
	
	<?php include("footer.php"); ?>
	
</html>
<?php
}
?>
