<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8">
	<!--meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Institute for Advanced Studies and two- Diploma Education</title>

	<meta name="Keywords" content="Курсы повышения квалификации,
	Функции оперативного персонала электрических станций,
	Диагностика паровых и газовых турбин,
	Эксплуатация и ремонт приводов двигателей собственных нужд 0,4 кВ подстанций и силовых двигателей 6-10 кВ электрических станций,
	Диспетчеризация и режимы работы электрических станций,
	Ремонт электрооборудования ТЭЦ ГРЭС,
	Профессиональный казахский язык по направлению Электроэнергетика,
	Особенности оперативных переключений по отключению и включению электрических цепей,	
	Релейная защита распределительных электрических сетей,
	Диагностика силовых трансформаторов, генераторов и кабелей,	
	Режимы межрегиональных и распределительных электрических сетей,	
	Эксплуатация и модернизация электрооборудования подстанций,	
	Эксплуатация высоковольтных линий, 	
	Противоаварийная автоматика,	
	Функции оперативного персонала электрических подстанций 220кВ и выше,	
	Релейная защита электроэнергетических систем, 
	Электрохимзащита металлических труб проложенных в земле,
	Организация энергоменеджмента на промышленных предприятиях,
	Энергосбережение и энергоаудит в системах производства и распределения энергоносителей,
	Основы прикладной экологии,
	Надежность и безопасность обслуживания энергетического оборудования и технических процессов,
	Геоинформационные системы в управлении промыленной безопасностью,
	Курсы IP-телефония,
	Защита информации в телекоммуникационных системах,
	Коммутация и маршрутизация в сетях Cisco,
	Программируемые логические интегральные схемы в автоматизации технологических процессов,
	Автоматизация технологических процессов на контроллерах Simatic 1500 1200
	">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/media_eiapu.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/latofonts.css">
	<!--link rel="stylesheet" href="../css/fotorama.css" -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<!-- 6. Подключить CSS виджета "Bootstrap datetimepicker" -->  
	<link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css"/>
		
<script src="../js/jquery.min.js"></script> <!-- 33 KB -->
<script src="../js/bootstrap.min.js"></script>
  <!-- 2. Подключить скрипт moment-with-locales.min.js для работы с датами -->
<script src="../js/moment-with-locales.min.js"></script>
<!-- 4. Подключить скрипт виджета "Bootstrap datetimepicker" -->
<script src="../js/bootstrap-datetimepicker.min.js"></script>


<script Language="JavaScript">
function XmlHttp()
{
var xmlhttp;
try{xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");}
catch(e)
{
 try {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} 
 catch (E) {xmlhttp = false;}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined')
{
 xmlhttp = new XMLHttpRequest();
}
  return xmlhttp;
}
 
function ajax(param)
{
                if (window.XMLHttpRequest) req = new XmlHttp();
                method=(!param.method ? "POST" : param.method.toUpperCase());
 
                if(method=="GET")
                {
                               send=null;
                               param.url=param.url+"&ajax=true";
                }
                else
                {
                               send="";
                               for (var i in param.data) send+= i+"="+param.data[i]+"&";
                               send=send+"ajax=true";
                }
 
                req.open(method, param.url, true);
                if(param.statbox)document.getElementById(param.statbox).innerHTML = '<img src="images/wait.gif">';
                req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                req.send(send);
                req.onreadystatechange = function()
                {
                               if (req.readyState == 4 && req.status == 200) //если ответ положительный
                               {
                                               if(param.success)param.success(req.responseText);
                               }
                }
}

</script>
	
</head>
<style type="text/css">
#block1.background-fone_fdo{
background: url("../images/rus.png") no-repeat center top;
  background-position: center center;
  background-attachment: fixed;
  background-size: cover;
  width: 100%;
  min-height: 469px; 
}
  .accordion{
	width:500 px;
	border-bottom:solid 1px #C0C0C0;
}
.accordion h3{
	padding:8px 16px;
	margin:0;
	font: bold 120%/100% ARIAL, Helvetica, sans-serif;
	border:solid 1 px #C0C0C0;
	border-bottom:none;
	cursor:pointer;
}
.accordion h3.active{
	background-position:right 5px;
}
.accordion h3.hover{
	background-color:#D3D3D3;
}
.accordion p{
	background:#F0F0F0;
	margin:0;
	padding: 10px 10px 10px;
	border-left:solid 1 px #C5C5C5;
	border-right:solid 1 px #C5C5C5;
}
.paragraph2 {
    font-size: 16px;
}
p {
    margin: 0 0 10px;
}
p {
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
}
body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
body {
    text-align: justify;
    color: black;
    overflow-x: hidden;
}
</style>
<body style="text-align: justify; color:#000;overflow-x:hidden;">
<!-- блок первый -->
<!-- меню -->
<div class="container" style="width:101%;">
	<div class="row">
		<div class="dropdown">
			
 			<nav role="navigation" class="navbar navbar-default" style="background:#010039;height:76px;font-size:16px;border-color:#010039;">
				<div class="navbar-header" style="margin-left: 30px;">
					<a href="../index.php"><img src="../images/Menu/log_rus.png" class="log" style="width:28%;margin:-15px;margin-top:0;"></a>
				</div>	
					<ul class="navbar-right"  style="margin-right: 30px;">
						<a href="index_kaz.php"><p style="font-family:fantasy;display:inline-block;font-size:22px;">KZ</p></a>
						<a href="index.php"><p style="font-family:fantasy;display:inline-block;font-size:22px;">RU</p></a>
						<a href="index_eng.php"><p style="font-family:fantasy;display:inline-block;font-size:22px;">EN</p></a>
					</ul>
				
			</nav>
			
			<div id="block1" class="background-fone_fdo">
				<div class="blackout1">
					<div class="container">
						<div class="row">
							<div style="background: url(../icons/logo2.png) no-repeat center top;background-position:center center;background-size:cover;width:80px;height:205px;margin:auto;margin-top:150px">
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div style="color:#FFF; margin-top:80px;margin-left:50px;font-size:1.8em;">
								<span class="element"></span>
							</div>
						</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- конец блока -->
<!-- шапка -->
<header class="header" style="background-color:#010039;">
<div class="container">
<div class="row">
<div class="dropdown">
	<div class="col-md-12">
		<nav role="navigation" class="navbar navbar-default text-center" style="background-color:#010039; border-style:none; height:50px; font-size:16px;">
			<!-- класс для появления шапки меню-->
			<!--div id="navbarCollapse" class="collapse navbar-collapse text-center"-->
			
				<div style="display: inline-block;">
					<ul class="nav navbar-nav navbar">
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">ИПКиДО
								<span class="caret"></span></a>
					<ul class="dropdown-menu" style="background:#d11633">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_eng.php#block2">Курсы повышения квалификации</br>
																											и переподготовки специалистов</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_eng.php#block3">Кадровый состав</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_eng.php#block6">План-График 2017г.</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_eng.php#block4">Объявления</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_eng.php#block5">Контакты</a></li>
					</ul>
						</li>
							<li class="dropdown">
								<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Mini MBA
									<span class="caret"></span>
								</a>
						<ul class="dropdown-menu" style="background:#d11633">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../mini_mba_eng.php#block8">Управление внутренними проектами</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../mini_mba2_eng.php#block8">Управление изменениями</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../study_process_eng.php#block8">Технология обучения MiniMBA</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intro_MBA_eng.php">Заявка на обучение MiniMBA</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Учебные центры<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../uchebn_centre_eng.php#block8">
							Учебный центр в области экспертизы
							<br> энергосбережения и повышения энергоэффективности</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../language/index_eng.php">
							Центр обучения языкам и перевода</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="index_eng.php#block8">
							Школа современного программирования</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intro_centre_eng.php">Заявка на обучение в центре</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Двудипломное образование<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633;">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../DUO_MEI_eng.php#block5">НИУ МЭИ</a></li>
							<!--li role="presentation"><a role="menuitem" tabindex="-1" href="menu_left/sotrudnik/index.html">Самарский университет</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="student/index.html#block3">НИЯУ МИФИ</a></li--> 
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intro_MEI_eng.php">Заявка на обучение</a></li>
						</ul>
					</li>
					<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">План-График на 2018 год
								<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633;">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_adminstr.pdf">Курсы делового<br>администрирования</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_teplov.pdf">Тепловые электростанции<br>
																												и котельные установки</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_electro.pdf">Электрические сети и системы</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/ee.pdf">Энергоснабжение и энергосбережение</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_yazyk.pdf">Языковые курсы</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Ekologiya.pdf">Экология и БЖД</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/telecommunikacii.pdf">Телекоммуникации</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/IT.pdf">IT-технологии</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/automation.pdf">Автоматизация ТП</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intropage_eng.php">Заявка на обучение</a></li>
						</ul>
						</li>
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Кабинет заявок
								<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633;">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../register.php">Регистрация</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../login.php">Войти</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intropage.php">Заявка на обучение</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../logout.php">Выйти</a></li>
						</ul>
					</li>
					</ul>
				</div>
			</div>
			
		</nav>
	</div>
</div>
</div>
</div>
</header>