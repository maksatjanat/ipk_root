<?php 
session_start();
//-------------------------------------------------------------------------
//-Проверка суперглобальных переменных
// $globals = array(
    // '$_SESSION' => $_SESSION, 
    // '$_POST' => $_POST, '$_COOKIE' => $_COOKIE
    
// );
// echo '<h1>Superglobals</h1>';
        // foreach ($globals as $globalkey => $global) {
            // echo '<h3>' . $globalkey . '</h3>';
            // foreach ($global as $key => $value) {
                // echo '<span class="left">' . $globalkey . '[<span class="key">\'' . $key . '\'</span>]</span> = <span class="right">' . $value . '</span><br />';
            // }
        // }
//---------------------------------------------------------------------------
require_once("includes/connection.php");
include("header.php"); 
	//------------------------------------------------
if(isset($_POST['bid_button']))
{
	if (isset($_POST['idCourse']))
	{/* выводит существующее количество слушателей, наименование  */
		$insert_sum=mysqli_fetch_array(mysqli_query($con,"SELECT title,memb_int FROM tbl_courses WHERE id='".$_POST['idCourse']."'"));
		$bids_sum=$insert_sum[1]+$_POST['kolvo'];
		$bids_title=$insert_sum[0];
	} else printf("Вы не выбрали курс повышения квалификации.\n");
	//формируем текст сообщения----------------------->
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
		  <th>Компания</th><th>Ф.И.О.</th><th>Телефон</th><th>Кол-во</th>
		</tr>
		<tr>
		 <td>'.$_POST['Company'].'</td><td>'.$_POST['Zayavitel'].'</td><td>'.$_POST['Phone'].'</td><td>'.$_POST['kolvo'].'</td>
		</tr>
	  </table>
	  <p>На тему:'.$bids_title.' 
	</body>
	</html>
	';

	// Для отправки HTML-письма должен быть установлен заголовок Content-type
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-type: text/html; charset=\"utf-8\"\r\n";
	$headers .= "From: Администратор <admin.ipk@aipet.kz>\r\n";
	//------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	// Для отправки HTML-письма должен быть установлен заголовок Content-type
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "Content-type: text/html; charset=\"utf-8\"\r\n";
		$headers .= "From: Администратор <admin.ipk@aipet.kz>\r\n";
	//------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	//INSERT INTO `test`.`tbl_persona` (`id_persona`, `CompanyId`, `FirstName`, `SurName`, `MiddleName`, `EmailUser`, `PhoneUser`, `b_employee`) VALUES ('10000', NULL, 'Guest', 'Guest', 'Guest', 'quest@aues.kz', NULL, '0');
	if (mysqli_query($con, "INSERT INTO tbl_persona(FirstName,SurName,PhoneUser,b_employee) VALUES('".$_POST['Zayavitel']."','Guest','".$_POST['Phone']."',0)") === TRUE)  
	{
		$idPerson=mysql_insert_id();
		mysqli_query($con, "INSERT INTO coursepers(CourseId,PersonaId,CountStudent,comment) VALUES(".$_POST['idCourse'].",".$idPerson.",".$_POST['kolvo'].",'".$_POST['comment']."')");
		mysqli_query($con, "UPDATE tbl_courses SET memb_int=".$bids_sum." WHERE id=".$_POST['idCourse']."");
		mail ($to,$subject,$message,iconv ('utf-8', 'windows-1251', $headers));
		printf("Данные успешно обновлены.\n");
	}
	elseif (mysqli_query($con, "INSERT INTO coursepers(CourseId,PersonaId,CountStudent,comment) VALUES(".$_POST['idCourse'].",10000,".$_POST['kolvo'].",'".$_POST['comment']."')") === TRUE AND mysqli_query($con, "UPDATE tbl_courses SET memb_int=".$bids_sum." WHERE id=".$_POST['idCourse']."")===TRUE) 
	{
		mail ($to,$subject,$message,iconv ('utf-8', 'windows-1251', $headers));
		printf("Данные обновлены.\n");
	} elseif (mysqli_errno($con)=='1062')
	{
		printf("Выберите другой курс повышения квалификации, данная заявка существует.\n");
	}
	else mysqli_connect_error();
};
?>
<script type='text/javascript'> 
$(document).ready(function()
{ 
	//$("#search_results").slideUp(); 
	ajax_search();
	$("#select_direct").change(function(e)
	{ 
		//e.preventDefault(); 
		ajax_search(); 
	}); 
});

function ajax_search(){ 
  $("#search_results").show(); 
  var search_val=$("#select_direct option:selected").val(); 
  
  $.post("./find_guest.php", {select_direct : search_val}, function(data){
   if (data.length>0){ 
     $("#search_results").html(data); 
   } else $("#search_results").html("нет результатов");
  }) 
};

  $(function() {
    //при нажатии на кнопку с id="bid_button"
    $('#bid_button').click(function() {
      //переменная formValid
      var formValid = true;
      //перебрать все элементы управления input 
      $('input').each(function() {
      //найти предков, которые имеют класс .form-group, для установления success/error
      var formGroup = $(this).parents('.form-group');
      //найти glyphicon, который предназначен для показа иконки успеха или ошибки
      var glyphicon = formGroup.find('.form-control-feedback');
      //для валидации данных используем HTML5 функцию checkValidity
      if (this.checkValidity()) {
        //добавить к formGroup класс .has-success, удалить has-error
        formGroup.addClass('has-success').removeClass('has-error');
        //добавить к glyphicon класс glyphicon-ok, удалить glyphicon-remove
        glyphicon.addClass('glyphicon-ok').removeClass('glyphicon-remove');
      } else {
        //добавить к formGroup класс .has-error, удалить .has-success
        formGroup.addClass('has-error').removeClass('has-success');
        //добавить к glyphicon класс glyphicon-remove, удалить glyphicon-ok
        glyphicon.addClass('glyphicon-remove').removeClass('glyphicon-ok');
        //отметить форму как невалидную 
        formValid = false;  
      }
    });
    //если форма валидна, то
    // if (formValid) {
      // //сркыть модальное окно
      // //$('#myModal').modal('hide');
      // //отобразить сообщение об успехе
      // $('#success-alert').removeClass('hidden');
    // }
  });
});   
</script>
<div class="container">
	<div id="welcome">	
		<div class="col-xs-12" style="text-align: left;"><h4>Добро пожаловать, Гость! 
		</BR>Выберите курс повышения квалификации, оставьте свои данные и укажите количество обучаемых</h4>
		</div>	
	</div>		
		
	<form role="form" method="post" action="introquest.php"> <!--всегда добавлять role="form" для bootstrap-->
		<div class="form-group" id="SelectCourses">
	
			<select class="form-control" id="select_direct">
				<option value="1">Выберите направление курсов повышения квалификации:</option>
				<option value="1">Электрические станции</option>
				<option selected="selected" value="2">Электрические сети </option>
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
		<!--span class="controls">     
			// <input class="form-control" id="comment" name="comment" type="text" placeholder="Комментарий или новое предложение" />    		
		// </span-->
		</BR>
		<div class="col-xs-12">
			<h5>Обязательные поля: Ф.И.О., Телефон, Количество</h5>
		</div>	
		
		<div class="row">
			<div class="col-xs-4">
				
				<input type="text" id="Company" name="Company" placeholder="Предприятие" class="form-control">
									
			</div>
			<div class="col-xs-4">
				<input type="text" id="Zayavitel" name="Zayavitel" required="required" placeholder="Ф.И.О." class="form-control">
				<span class="glyphicon form-control-feedback"></span>
			</div>
			<div class="col-xs-4">
				<input type="text" id="Phone" name="Phone" required="required" placeholder="Телефон 7(___)777-77-77" class="form-control" pattern="7\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}">
				<span class="glyphicon form-control-feedback"></span>
			</div>
		</div>
			
		</BR>
			<div class="row">
				<div class="col-xs-4">
					<select id="kolvo" name="kolvo" class="form-control">
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
				</div>
				<div class="col-xs-4">
					<input type="text" id="comment" name="comment" placeholder="Комментарий" class="form-control">
				</div>
				<div class="col-xs-4"> 
					<input type="submit" value="Подать заявку" id="bid_button" name="bid_button" class="btn btn-success"/> 
				</div>
			</div>
	
		<!--div class="col-lg-6 col-md-6 col-sm-6" style="text-align: left;"> 
			<input type="submit" value="Добавить предложение" name="new_proposal" class="btn btn-primary"/> 
		</div-->	
	</form>
		
			
	</div>
<?php
	include("footer.php");
	Printf("</html>\n");
?>