<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "test";

// Точка подключения к базе данных
$con = new mysqli($servername, $username, $password, $dbname); 
 

// Указываем кодировку, в которой будет получена информация из базы 
@mysqli_query ($con, 'set character_set_results = "utf8"');

// Получаем IP-адрес посетителя и сохраняем текущую дату	
$visitor_ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Asia/Almaty');
$date = date("Y-m-d");

// Узнаем, были ли посещения за сегодня   
$res = mysqli_query($con, "SELECT `visit_id` FROM `visits` WHERE `date`='$date'") or die ("Проблема при подключении к БД");

// Если сегодня еще не было посещений
if (mysqli_num_rows($res) == 0)
{
    // Очищаем таблицу ips
    mysqli_query($con, "DELETE FROM `ips`");
    
    // Заносим в базу IP-адрес текущего посетителя
    mysqli_query($con, "INSERT INTO `ips` SET `ip_address`='$visitor_ip'");
    
    // Заносим в базу дату посещения и устанавливаем кол-во просмотров и уник. посещений в значение 1
    $res_count = mysqli_query($con, "INSERT INTO `visits` SET `date`='$date', `hosts`=1,`views`=1");
}

// Если посещения сегодня уже были
else
{   
    // Проверяем, есть ли уже в базе IP-адрес, с которого происходит обращение
    $current_ip = mysqli_query($con, "SELECT `ip_id` FROM `ips` WHERE `ip_address`='$visitor_ip'");
    // Если такой IP-адрес уже сегодня был (т.е. это не уникальный посетитель) 
    if (mysqli_num_rows($current_ip) == 1)
    {
        // Добавляем для текущей даты +1 просмотр (хит)
        mysqli_query($con, "UPDATE `visits` SET `views`=`views`+1 WHERE `date`='$date'");
    }
    
    // Если сегодня такого IP-адреса еще не было (т.е. это уникальный посетитель)
    else
    {   
        // Заносим в базу IP-адрес этого посетителя
        mysqli_query($con, "INSERT INTO `ips` SET `ip_address`='$visitor_ip'");
        
        // Добавляем в базу +1 уникального посетителя (хост) и +1 просмотр (хит)
        mysqli_query($con, "UPDATE `visits` SET `hosts`=`hosts`+1,`views`=`views`+1 WHERE `date`='$date'");
    }
}