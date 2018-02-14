<?php 
session_start();
$_SESSION['session_centre']="1";
if(!isset($_SESSION["session_username"])) 
{
	
	header("location:./login.php");
	//$insertBid=mysqli_query($con,"INSERT INTO tbl_persona (CourseId,KolvoStudent) values ('".$_POST['voice']."','".$_POST['kolvo']."') WHERE id_persona='".$_SESSION['idpersona']."'");
} elseif ($_SESSION["session_username"]=='root')
{ 
	header("location:./root.php");
} else 
{
	echo $_SESSION["session_username"];
	require_once("./includes/connection.php");
	include("./header_eng.php"); 
	//------------------------------------------------
	if(isset($_POST['idCourse'])){
		if (isset($_POST['kolvo'])){$kolvo=$_POST['kolvo'];} else {$kolvo=1;}
		/* Create table doesn't return a resultset */
		$insert_sum=mysqli_fetch_array(mysqli_query($con,"SELECT memb_int FROM tbl_courses WHERE id='".$_POST['idCourse']."'"));
		$bids_sum=$insert_sum[0]+$kolvo;
		//Если заявка добавлена и обновлены данные количеству человек на данный курс то выполнить
		$sql="INSERT INTO coursepers(CourseId,PersonaId,CountStudent,comment) VALUES(".$_POST['idCourse'].",".$_SESSION['idpersona'].",".$kolvo.",'".$_POST['comment']."')";
		//echo $sql;
		if (mysqli_query($con,$sql) === TRUE AND
			mysqli_query($con, "UPDATE tbl_courses SET memb_int=".$bids_sum." WHERE id=".$_POST['idCourse']."")===TRUE) {
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
<!-- обработка события смены учебного центра-->
<script type='text/javascript'> 
$(document).ready(function(){ 
$("#search_results").slideUp(); 
    $("#select_direct").change(function(e){ 
        //e.preventDefault(); 
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
	<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: left;"><h3>Welcome,</h3><h4><?php echo $_SESSION['fullname'];?>! </h4></div>
	<div class="col-lg-6 col-md-6 col-sm-6"style="text-align: right;"><a href="logout.php">Exit</a> from account</br><h4><?php echo $_SESSION['NameCompany'];?></h4></div>
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
				<option selected="selected" value="0">Choose the direction of refresher courses:</option>
				<option value="9">Training center in the field of expertise in energy saving and energy efficiency</option> 
				<option value="10">Language and Translation Center</option> 
				<option value="11">School of Modern Programming</option> 
			</select>
				<!--input type="submit" value="Выбрать" /-->
			
		</div>
		<table class="table" name="search_results" id="search_results">
		</table>
		<span class="controls">     
			<input class="form-control" id="comment" name="comment" type="text" placeholder="Комментарий" />    		
		</span>
<?php 
if (isset($_SESSION['b_employee'])) {
	if 	($_SESSION['b_employee']==TRUE){
		print <<<HERE
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
		</div><BR/>
HERE;
	} else {echo '<BR/>';}
}

?>
		
		<div class="col-lg-6 col-md-6 col-sm-6" style="text-align: right;"> <input type="submit" value="подать заявку" name="bid_button" class="btn btn-success"/> 
		</div>	
	</form>
		
			
</div>

	
	
	<?php include("./footer_eng.php"); ?>
	
</html>
<?php
}
?>
