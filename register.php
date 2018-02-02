<?php
session_start();
?>
<?php require_once("includes/connection.php"); ?>

<?php
//-Проверка суперглобальных переменных
  // $globals = array(
     // '$_SESSION' => $_SESSION, 
     // '$_POST' => $_POST,
	 // '$_COOKIE' => $_COOKIE
    
 // );
 // echo '<h1>Superglobals</h1>';
 // foreach ($globals as $globalkey => $global) {
	 // echo '<h3>' . $globalkey . '</h3>';
	 // foreach ($global as $key => $value) {
		 // echo '<span class="left">' . $globalkey . '[<span class="key">\'' . $key . '\'</span>]</span> = <span class="right">' . $value . '</span><br />';
	 // }
 // } 
//--------------------------------------------------------------------------
if(isset($_POST["register"])){
	function after ($after, $string){ 
		if (!is_bool(strpos($string, $after)))
		return substr($string, strpos($string,$after)+strlen($after));
	}
	function before ($before, $string){
		return substr($string, 0, strpos($string, $before));
	}


	function between ($after, $before, $string){
		return before ($before, after($after, $string));
	}
	//Если не отмечено поле физ лица то выяснить наименование компании
	if (!isset($_REQUEST['user_persona'])){
		$_SESSION['b_employee']=TRUE;
		$userCompany=trim($_POST['user_company']);
		$typeCompany=$_POST['type_company'];
		//Maksat
		$array = array($typeCompany, $userCompany);
		$fullcompany = implode(" ", $array);
		//Maksat
		//$fullcompany=implode($typeCompany," ",$userCompany);
		
		
		if(
			!empty($_POST['full_name']) && !empty($_POST['email'])
		 	&& !empty($_POST['username']) && !empty($_POST['password']) 
			 && !empty($_POST['user_company']) && !empty($_POST['user_phone']) && !empty($userCompany)
		) {
			$full_name=$_POST['full_name'];
			$email=$_POST['email'];
		
			$userPhone=$_POST['user_phone'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$fullnamearray=explode(" ",trim($full_name));
			
			//Разделение данных от поля ФИО
			switch (count($fullnamearray)){
				case 3:
					$surName=$fullnamearray[0];
					$firstName=$fullnamearray[1];
					$middleName=$fullnamearray[2];
					break;
				case 2:
					$surName=$fullnamearray[0];
					$firstName=$fullnamearray[1];
					$middleName="";
					break;
				case 1:
					$surName=$fullnamearray[0];
					$firstName="";
					$middleName="";
					break;
				default:
					$message="Проверьте ФИО";
					break;
			}
			
			//вставка в таблицу company
			// 
			$query_company = "SELECT * FROM tbl_company WHERE NameCompany like '%".$userCompany."%' LIMIT 1";
			$result_company = mysqli_query($con,$query_company);
			$numCompany = mysqli_num_rows($result_company);
			$row_company = mysqli_fetch_row($result_company);

			//надо проверить нужен ли? $_SESSION['CompanyId']
			if($numCompany == 0 /*OR isset($_SESSION['CompanyId'])*/ ){
				$queryPerson=mysqli_query($con,
					"SELECT * FROM tbl_persona WHERE FirstName like '".$firstName."' AND SurName like '".$surName."'");
				$numPers=mysqli_num_rows($queryPerson);
				if($numPers==0){
					
					
					$query=mysqli_query($con,"SELECT * FROM tbl_passwords WHERE UserLogin='".$username."'");
					$numLogin=mysqli_num_rows($query);
					
					if($numLogin==0){//вставка в таблицу persona используя последний id
						if (isset($_SESSION['CompanyId'])){
						$idcompany=$_SESSION['CompanyId'];
						echo $idcompany.'test2';
						} else {
						$sql="INSERT INTO tbl_company (NameCompany) VALUES ('$fullcompany')";
						$ins_company=mysqli_query($con,$sql);
						$idcompany=mysqli_insert_id($con);
						$_SESSION['CompanyId']=$idcompany;
						
						}
						echo $sql;
						echo $idcompany.'test1';
						//добавлено обязательное поле в запрос b_employee
						$sql="INSERT INTO tbl_persona(CompanyId,FirstName,SurName,MiddleName,EmailUser,PhoneUser,b_employee) 
						 VALUES('$idcompany','$firstName','$surName','$middleName','$email','$userPhone','1')";
						$ins_persona=mysqli_query($con,$sql);
						$idpersona=mysqli_insert_id($con);
						if($ins_persona){
							$message = "Вы успешно зарегистрировались";
							$_SESSION['idpersona']=$idpersona;
							$_SESSION['fullname']=$_POST['full_name'];
							$_SESSION['companyname']=$userCompany;
							$sql="INSERT INTO tbl_passwords(PersonaId,UserLogin,UserPassword) VALUES($idpersona,'$username','$password')";
							$ins_password=mysqli_query($con,$sql);
							
							/* Redirect browser */
							header("Location: intropage.php");
						} 
						else {$message = "Ошибка регистрации! {!001}";}
					}
					else {$message = "Пользователь с таким логином уже существует!";}
				}
				else {$message = "Пользователь с таким именем и фамилией уже существует!";}
			} 
			else {
				//нужно добавить обработку отдельного запроса с использованием $				//$queryPersons=mysqli_query($con,"SELECT * FROM tbl_persona WHERE CompanyId='".$row_company[0]."'");query_company
				//вставка в таблицу persona используя последний id

				//$numPersons=mysqli_num_rows($queryPersons);
				$_SESSION['CompanyId']=$row_company[0];
				$message = "В базе данных уже существуют сотрудники указанной компании,<br>нажмите еще раз кнопку Зарегистрироваться, чтобы посмотреть зарегистрированных сотрудников";
				//while ($row = mysqli_fetch_row($queryPersons)) {
				//	printf ("%s (%s)\n", $row[0], $row[1]);
				//}
			} 
		} else { 
			if (empty($message)){
			$message = "Заполните пожалуйста все поля!";}
		}
	//иначе если это физ лицо------------------------------------------------------------------------------------------------
	} else {
		$_SESSION['b_employee']=FALSE;
		
		if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])&& !empty($_POST['user_phone'])) 
		{
			$full_name=$_POST['full_name'];
			$email=$_POST['email'];
		
			$userPhone=$_POST['user_phone'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$fullnamearray=explode(" ",trim($full_name));
			
					
			switch (count($fullnamearray)){
				case 3:
					$surName=$fullnamearray[0];
					$firstName=$fullnamearray[1];
					$middleName=$fullnamearray[2];
					break;
				case 2:
					$surName=$fullnamearray[0];
					$firstName=$fullnamearray[1];
					$middleName="";
					break;
				case 1:
					$surName=$fullnamearray[0];
					$firstName="";
					$middleName="";
					break;
				default:
					$message="Проверьте ФИО";
					break;
			}
			
			
			$queryPerson=mysqli_query($con,"SELECT * FROM tbl_persona WHERE FirstName like '".$firstName."' AND SurName like '".$surName."'");
			$numPers=mysqli_num_rows($queryPerson);
			if($numPers==0){
				$query=mysqli_query($con,"SELECT * FROM tbl_passwords WHERE UserLogin='".$username."'");
				$numLogin=mysqli_num_rows($query);
				
				if($numLogin==0){//вставка в таблицу persona используя последний id
				//добавлена обработка базы данных с учетом признака логического поля b_employee
					$sql="INSERT INTO tbl_persona(FirstName,SurName,MiddleName,EmailUser,PhoneUser,b_employee) VALUES('$firstName','$surName','$middleName','$email','$userPhone',0)";
					$ins_persona=mysqli_query($con,$sql);
					$idpersona=mysqli_insert_id($con);
					if($ins_persona){
						$message = "Вы успешно зарегистрировались";
						$_SESSION['idpersona']=$idpersona;
						$_SESSION['fullname']=$_POST['full_name'];
						$sql="INSERT INTO tbl_passwords(PersonaId,UserLogin,UserPassword) VALUES($idpersona,'$username','$password')";
						$ins_password=mysqli_query($con,$sql);
						/* Redirect browser */
						if (isset ($_SESSION['session_MBA'])){
							header("Location: intro_MBA.php");
						} elseif (isset ($_SESSION['session_centre'])){
							header("Location: intro_centre.php");
						} else {
							header("Location: intropage.php");
						}
					} 
					else {$message = "Ошибка регистрации! {!002}";}
				}
				else {$message = "Пользователь с таким логином уже существует!";}
			}
			else {$message = "Пользователь с таким именем и фамилией уже существует!";}
		} else { 
			if (empty($message)){
			$message = "Заполните пожалуйста все поля!";}
		}
		//--------------------------------------------------------------
	}
	
}
?>

<?php include("header.php"); ?>
<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
	<div style="margin-top: 51px; margin-left: 50%;">
	
<!--div class="container mregister">
	<div id="login"-->
		<h1>Регистрация</h1>
		<form role="form" name="registerform" id="registerform" action="register.php" method="post">
			<p>
				<label for="full_name">Фамилия Имя (Отчество)<br />
				<input type="text" class="form-control" name="full_name" id="full_name" size="40" value="<?php if(isset ($_POST['full_name'])) echo $_POST['full_name'];?>"/></label>
			</p>
			
			
			<p>
				<label for="email">Email<br />
				<input type="text" class="form-control" name="email" id="email" value="<?php if(isset ($_POST['email'])) echo $_POST['email'];?>" size="40" /></label>
			</p>
			<p>
				<!-- Начало изменении, Maksat -->
				<div>Являетесь ли вы физическим лицом? Да &nbsp;<input type="checkbox" name="user_persona" id="user_persona"/></div><BR/>

				<script type="text/javascript">
					$(document).ready(function(){
						$('input[type="checkbox"]').click(function(){
							//var item = $(this).attr('name');
					        $('input[name="user_company"][type="text"]').toggle();
					        $('label[name="user_company"]').toggle();
						});
					});

				</script>
				 
				<!-- Конец изменении, Maksat -->
				<label for="user_company" name="user_company">Наименование компании<br />
				<!--p><input type="text" name="user_company" value="ON" onclick='
										   // ajax({
																		   // url:"get_ajax.php",
																		   // statbox:"status",
																		   // method:"POST",
																		   // data:
																		   // {
																					// company:document.getElementById("company").value,
																		   // },
																		   // success:function(data){document.getElementById("welcome").innerHTML=data;}
														   // })'
				>Физическое лицо</p--> 
				<input type="radio" class="control" name="type_company" value="АО" checked="checked"/><span class="help-inline">АО</span>&nbsp
				<input type="radio" class="control" name="type_company" value="ТОО" /><span class="help-inline">ТОО</span>&nbsp
				<input type="radio" class="control" name="type_company" value="ИП" /><span class="help-inline">ИП</span>&nbsp
				<input type="radio" class="control" name="type_company" value="Неком. АО" /><span class="help-inline">Неком. АО</span>&nbsp
				<input type="radio" class="control" name="type_company" value="РГП" /><span class="help-inline">РГП</span>&nbsp
				<input type="radio" class="control" name="type_company" value="АЮЛ" /><span class="help-inline">АЮЛ</span>
				<input type="text" class="form-control" name="user_company" id="user_company" class="input" value="<?php if(isset ($_POST['user_company'])) echo $_POST['user_company'];?>" size="40" /></label>
			</p>
			<p>
				<label for="user_phone">Рабочий телефон<br />
				<input type="text" class="form-control" name="user_phone" id="phone" class="input" value="<?php if(isset ($_POST['user_phone'])) echo $_POST['user_phone'];?>" size="40" /></label>
			</p>
			
			<p>
				<label for="username">Логин<br />
				<input type="text" class="form-control" name="username" id="username" class="input" value="<?php if(isset ($_POST['username'])) echo $_POST['username'];?>" size="20" /></label>
			</p>
			
			<p>
				<label for="user_pass">Введите пароль<br />
				<input type="password" class="form-control" name="password" id="password" class="input" value="" size="20" /></label>
			</p>	
			

				<p>
				<input type="submit" сlass="btn btn-success" name="register" id="register" class="button" value="Зарегистрироваться" />
			</p>
			
			<p class="regtext">Зарегистрировались? <a href="login.php" >Войти в аккаунт</a>!</p>
		</form>
		 <div id="search_results"></div> 
	</div>
</div>
</div>
</div>

	
	
	<?php include("footer.php"); ?>
	</html>