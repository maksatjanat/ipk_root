<?php
session_start();
if(!isset($_SESSION["session_username"])&&!isset($_SESSION["session_password"])) {
	header("location:login.php");
	$message = "Отсутствуют имя пользователя или пароль!";
} else {
		require_once("includes/connection.php");
		include("header.php"); 
		$message="";
		//-------------------------------------------------------------
		$username=$_SESSION["session_username"];
		$password=$_SESSION["session_password"];
		$queryLogin=mysqli_query($con,"SELECT * FROM tbl_passwords WHERE UserLogin='root' LIMIT 1");
		$numrows=mysqli_num_rows($queryLogin);
		//printf("В выборке %d рядов.\n", $numrows);
		if($numrows!==0)    {
			$row=mysqli_fetch_assoc($queryLogin);
			if($password == $row['UserPassword']) {
				print <<<HERE
<div class="container">
<div class="row">
	<div id="welcome">	
	<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: left;"><h4>Добро пожаловать, Администратор!</h4></div>
	<div class="col-lg-6 col-md-6 col-sm-6"style="text-align: right;"><a href="logout.php">Выйти</a> из аккаунта</br><h4>Неком. АО АУЭС</h4></div>
	</div>		
</div>	
<form role="form" method="post" action=""> <!--всегда добавлять role="form" для bootstrap-->
		<div class="form-group" id="SelectCourses">
	
				<button type="button" class="btn btn-primary" id="Zayavki" name="Zayavki">Показать все курсы</button>
				<button type="button" class="btn btn-primary" id="Сompany" name="Сompany">Показать компании</button>
				<button type="button" class="btn btn-primary" id="DATEUP" name="DATEUP">Обновить дату</button>
				<button type="button" class="btn btn-primary" id="SENDSQL" name="SENDSQL">Отправить запрос</button>
				<button type="button" class="btn btn-primary" id="show_proposal" name="show_proposal">Посмотреть предложения</button>
				<button type="button" class="btn btn-info" id="show_stats" name="show_stats">Статистика посещения</button>
				<textarea rows="4" maxlength="500" class="form-control" id="SQLZAPR" name="SQLZAPR"> </textarea>
				<!-- Элемент HTML с id равным datetimepicker1 -->
				 				
				<select class="form-control" id="select_direct">
					<option selected="selected" value="0">Выберите направление курсов повышения квалификации:</option>
					<option  value="1">Электрические станции</option>
					<option  value="2">Электрические сети </option>
					<option  value="3">Энергосбережение </option>
					<option  value="4">Экология</option> 
					<option  value="5">Телекоммуникации </option>
					<option  value="6">ИТ-технологии</option> 
					<option  value="7">Автоматизация</option> 
					<option  value="8">МиниMBA </option> 
					<option value="9">Учебный центр в области экспертизы энергосбережения и повышения энергоэффективности</option> 
					<option value="10">Центр обучения языкам и перевода</option> 
					<option value="11">Школа современного программирования</option> 
				</select>
				  
		</div>
		<table class="table" name="search_results" id="search_results">
		</table>
		<div class="form-group" id="ResultMessage">
		</div>
HERE;
			
			
			} else {
				$message = "Неверное имя пользователя или пароль!";
				header("location:login.php");
			}
		}  else {
			$message = "Данный пользователь отсутствуют!".$query;
			header("location:login.php");
		}
	} 	

if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ".$message."</p>";} 
?>
<!--скрипт AJAX для загрузки данных по курсам повышения квалификации-->
<script type='text/javascript'> 
 
 
	
$(document).ready(function(){ 
	$("#search_results").slideUp(); 
	
    $("#Zayavki").click(function(e){ 
       ajax_search(); 
    }); 
	$("#Сompany").click(function(e){ 
        ajax_search_root(); 
	});
	$("#SENDSQL").click(function(e){ 
//	$("#idCourse").on( 'click',function(){ 
       // e.preventDefault(); 
        ajax_sql(); 
	});
	$("#show_proposal").click(function(e){
		ajax_search_proposal();
	});
	$("#show_stats").click(function(e){
		ajax_search_stats();
	});
	$("#select_direct").click(function(e){ 
        ajax_search_direct(); 
    }); 
	
	$("#DATEUP").click(function(e){ 
        var val=$("#select_direct option:selected").val(); 
		ajax_date(val); 
    }); 
	

});

//функция обновления даты
function ajax_date(direct_val){ 
  var id_val=$("input:radio:checked").val(); 
  var id_datapick='#datetimepicker_';
  id_datapick=id_datapick+id_val;
  var date_upd=$(id_datapick).val(); 
  $("#search_results").show(); 
  $.post("./root_date.php", {"idCourse" : id_val, "DateVal":date_upd}, function(data){
  $("#ResultMessage").html(data); 
  });

} 
//обновить страницу изменением selecta  
function select_update (val){
   $("#select_direct").each(function(){
        if($(this).attr('value') == val){
            $(this).attr('selected', 'selected');
        }
    });
	$("#select_direct").change();
}
//функция выбора заявок по направлениям
function ajax_search_direct(){ 

  $("#search_results").show(); 
  var search_val=$("#select_direct option:selected").val(); 
  
  $.post("./find.php", {select_direct : search_val}, function(data){
   if (data.length>0){ 
     $("#search_results").html(data); 
   } else $("#search_results").html("нет результатов");
  }) 
 
 // $("#search_results").show(); 
  // var search_val=$("#select_direct option:selected").val(); 
  // //select_update(search_val);
  // $.post("./root_find.php", {select_direct : search_val}, function(data){
   // if (data.length>0){ 
     // $("#search_results").html(data); 
   // } else $("#search_results").html("нет результатов");
  // });
} 


//функция отправки SQL запроса
function ajax_sql(){ 
  var search_val=$("textarea").val(); 
  $("#search_results").show(); 
  $.post("./root_sql.php", {SQLZAP:search_val}, function(data){
   if (data.length>0){ 
     $("#search_results").html(data); 
   } else $("#search_results").html("нет результатов");
  })
  
 } 
 
//функция выбора всех курсов с заявками /\ кнопка "Показать все курсы"
function ajax_search(){ 
  $("#search_results").show(); 
  $("#search_results").load('./root_find.php'); 
 } 
 
//функция показа предложении
function ajax_search_proposal(){
	$("#search_results").show();
	$("#search_results").load('./proposal_find.php');	
}

//функция показа статистики посещении
function ajax_search_stats(){
	$("#search_results").show();
	$("#search_results").load('./stats_find.php');	
}

 //функция отображения заявок по выбранному курсу
 function ajax_search_root(){ 
  var search_val=$("input:radio:checked").val(); 
  $("#search_results").show(); 
  $.post("./root_find_company_pers.php", {idCourse : search_val}, function(data){
   if (data.length>0){ 
     $("#search_results").html(data); 
   } else $("#search_results").html("нет результатов");
  }) 
 } 
 

</script>

<!-------------------------------------------------------------          -->

<!-------------------------------------------------------------          -->
	<?php include("footer.php"); ?>