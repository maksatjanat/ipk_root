<?php
    //Подключение шапки
   // require_once("header.php");
	require_once("includes/connection.php");
	$term = strip_tags(substr($_POST['user_company'],0, 100));
	$term = mysql_escape_string($term);
?>
<div class="container">
<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
        //Если в сессии существуют сообщения об ошибках, то выводим их
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        //Если в сессии существуют радостные сообщения, то выводим их
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не выводились заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму регистрации, 
    //иначе выводим сообщение о том, что он уже зарегистрирован
    $sql = "select FirstName,Phone from persona where FirstName like '%$term%' or Phone like '%$term%' order by FirstName asc";

$result = mysql_query($sql);
?>
<?php
    //Подключение подвала
    require_once("footer.php");
?>