<?php
  // Начните сеанс, вы можете начать это где-то еще.
  session_start();

  // Какие языки мы поддерживаем
  $available_langs = array('en','kz','ru');

  // Задайте наш языковой сеанс по умолчанию
  $_SESSION['lang'] = 'ru';   

  // Перевыбор языка
	if(isset($_POST['select1'])){
		$_SESSION['lang'] = $_POST['select1'];
	}
  // Включить активный язык
  include('lang/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php')
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><?php echo $lang['about'] ?><span class="sr-only">(current)</span></a></li>
        <li><a href="#"><?php echo $lang['develop'] ?></a></li>
        <li><a href="#"><?php echo $lang['Comand'] ?></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <form action="" method="post" class="navbar-form navbar-left">
      <select name="select1" class="form-control">
        <option value="" selected disabled hidden>
          <?php
            switch ($_SESSION['lang'] ) {
              case 'ru':
                  echo "Рус";
                  break;
              case 'kz':
                  echo "Қаз";
                  break;
              case 'en':
                  echo "Eng";
                  break;
          }
             
           ?>
        </option>
        <option value="ru">Рус</option>
        <option value="en">Eng</option>
        <option value="kz">Қаз</option>
      </select>
      <input type="submit" name="submit" value="Изменить язык"/>
    </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>






<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>