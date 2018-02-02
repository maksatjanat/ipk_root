<?php
session_start();
require_once("./includes/connection.php"); ?>
<?php


if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$_SESSION['session_username']=$_POST['username'];
		$_SESSION['session_password']=$_POST['password'];
		if ($_SESSION['session_username']!=='root'){
		//$data = mysql_fetch_assoc(mysql_query("SELECT * FROM persona WHERE Username='".mysql_real_escape_string($_POST['username'])."' AND Password='".mysql_real_escape_string($_POST['password'])."' LIMIT 1"));"'"
		$queryLogin=mysqli_query($con,"SELECT * FROM tbl_passwords WHERE UserLogin='".mysqli_real_escape_string($con,$_POST['username'])."' LIMIT 1");

		$numrows=mysqli_num_rows($queryLogin);
		//printf("В выборке %d рядов.\n", $numrows);
			if($numrows!=0)    {
				$row=mysqli_fetch_assoc($queryLogin);
				
				$dbusername=$row['UserLogin'];
				$dbpassword=$row['UserPassword'];
				$idpersona=$row['PersonaId'];
				$queryPerson=mysqli_query($con,"SELECT * FROM tbl_persona WHERE id_persona='".$idpersona."' LIMIT 1");
				$rows=mysqli_num_rows($queryPerson);
				if ($rows!=0){
					$rowPerson=mysqli_fetch_assoc($queryPerson);
					$companyid=$rowPerson['CompanyId'];
					$fullname=$rowPerson['SurName']." ".$rowPerson['FirstName']." ".$rowPerson['MiddleName'];
				} else {$message =  "Отсутствует персона с данным идентификатором".$query;}

				if($_SESSION['session_username'] == $dbusername && $_SESSION['session_password'] == $dbpassword)   {
					$_SESSION['fullname']=$fullname;
					$_SESSION['CompanyId']=$companyid;	
					$_SESSION['idpersona']=$idpersona;
					$_SESSION['b_employee']=$rowPerson['b_employee'];
					/* Redirect browser */
					if (isset ($_SESSION['session_MBA'])){
						header("Location: intro_MBA.php");
					} elseif (isset ($_SESSION['session_centre'])){
						header("Location: ./intro_centre.php");
					} elseif (isset ($_SESSION['session_MEI'])){
						header("Location: ./intro_MEI.php");
					} else {
					header("Location: ./intropage.php");
					}
				}
			} else {
				$message =  "Неверное имя пользователя или пароль!".$query;
			}
		} else header("Location:./root.php");
	} else {$message = "Заполните все поля!";}
}
?>

<?php include("./header.php"); ?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ".$message."</p>";} ?>

<!--div class="container mlogin" //http://www.internet-technologies.ru/articles/article_2077.html надо почистить стили-->
          
<div class="container">
<div class="row">
<div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
	<div style="margin-top: 51px; margin-left: 50%;">
	<form role="form" id="loginform" action="" method="POST">
		<div class="form-group">
			<p>
				<label for="user_login">Пользователь<br />
				<input type="text" class="form-control" name="username" id="username" class="input" value="" size="20" /></label>
			</p>
			<p>
				<label for="user_pass">Пароль<br />
				<input type="password" class="form-control" name="password" id="password" class="input" value="" size="20" /></label>
			</p>
				<p class="submit">
				<input type="submit" name="login" class="btn btn-success" value="Войти" />
			</p>
		</div>
			<p class="regtext">Не зарегистрированы? <a href="register.php" >Пройти регистрацию</a>!</p>
	</form>
	</div>

</div>
</div>
</div>

<?php include("./footer.php"); ?>
	
	
	