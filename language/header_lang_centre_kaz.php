<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html"; charset="UTF-8">
	<!--meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Институт повышения квалификации и двудипломного образования</title>

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

	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/main.css">
	<!-- Слайдер --> <link rel="stylesheet" href="/css/hslider.css">
	<link rel="stylesheet" href="/css/media_eiapu.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/latofonts.css">
	<!--link rel="stylesheet" href="../css/fotorama.css" -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<!-- 6. Подключить CSS виджета "Bootstrap datetimepicker" -->  
	<link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css"/>
		
<script src="/js/jquery.min.js"></script> <!-- 33 KB -->
<script src="/js/bootstrap.min.js"></script>
  <!-- 2. Подключить скрипт moment-with-locales.min.js для работы с датами -->
<script src="/js/moment-with-locales.min.js"></script>
<!-- 4. Подключить скрипт виджета "Bootstrap datetimepicker" -->
<script src="/js/bootstrap-datetimepicker.min.js"></script>


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
<div class="container-fluid">
	<div class="row">
		<div class="dropdown">
			<nav role="navigation" class="navbar navbar-default" style="background:#010039;height:76px;font-size:16px;border-color:#010039; margin-right: 0px;">
					
			<div class="navbar-header" style="margin-left: 30px;">
				<a href="../index_kaz.php"><img src="../images/Menu/log_kaz.png" class="log" style="width:28%;	margin-top:4px;"></a>
			</div>	
			<ul class="nav navbar-nav navbar-right" style="margin-right:30px;">
			
				<a href="index_kaz.php"><p style="font-family:fantasy;display:inline-block;font-size:22px;">KZ</p></a>
				<a href="index.php"><p style="font-family:fantasy;display:inline-block;font-size:22px;">RU</p></a>
				<a href="index_eng.php"><p style="font-family:fantasy;display:inline-block;font-size:22px;">EN</p></a>
			
			</ul>	
		</nav>
			<div id="block1" class="background-fone_fdo">
				<div class="blackout1">
					<div class="container-fluid" style="margin-top: 0px; margin-bottom: 0px;">

						<!-- Начало слайдера -->
						<div class="hsldr-container" style="max-height: 600px;">
                    		<div class="rowOfContainer">
						  	<!-- <figure> -->
								<!-- <a href="../centre_of_language.php#angl"> -->
						  		<!-- <img src="images/language_courses/deutsh.png" height="300px" /></a> -->
						  		<!-- <figcaption>Car in the snow</figcaption> -->
						  	<!-- </figure> -->
							<figure>
								<img src="../images/language_courses/deutsh.png" height="300px" >
								<a href="index_kaz.php#deutsh" class="banner">
								<figcaption>Car in the snow</figcaption>
								</a>
							</figure>

						  	<figure>
						  		<img src="../images/language_courses/china.png" height="300px" />
						  		<a href="index_kaz.php#angl" class="banner">
								<figcaption>Car in the snow</figcaption>
								</a>
						  	</figure>
						  	<figure>
								<img src="../images/language_courses/angl.png" height="300px" />
						  		<a href="index_kaz.php#angl" class="banner">
								<figcaption>Car in the snow</figcaption>
								</a>
						  	</figure>
						  	<figure>
						  		<img src="../images/language_courses/french.png" height="300px" />
						  		<a href="index_kaz.php#french" class="banner">
								<figcaption>Car in the snow</figcaption>
								</a>
						  	</figure>
						  	<figure>
						  		<img src="../images/language_courses/korean.png" height="300px" />
						  		<a href="index_kaz.php#angl" class="banner">
								<figcaption>Car in the snow</figcaption>
								</a>
						  	</figure>
						  	<figure>
						  		<img src="../images/language_courses/spanish.png" height="300px" />
						  		<a href="index_kaz.php#angl" class="banner">
								<figcaption>Car in the snow</figcaption>
								</a>
						  	</figure>
						  	</div>
						</div>	
						<!-- Конец слайдера -->

						
						<!-- <div class="row">
							<div style="background: url(../icons/logo2.png) no-repeat center top;background-position:center center;background-size:cover;width:80px;height:205px;margin:auto;margin-top:150px">
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div style="color:#FFF; margin-top:80px;margin-left:50px;font-size:1.8em;">
								<span class="element"></span>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div style="width:25px; height:auto;margin:auto;margin-top:0px;">
								<a href="#block2"><img src="../images/dwn.png" alt="" style="width:25px; height:auto;"></a>
							</div>
						</div> -->	
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
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_kaz.php#block2">Мамандарды біліктілігін арттыру <br>және қайта даярлау курстары</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_kaz_kaz.php#block3">Қызметкерлер</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_kaz.php#block6">Жоспар-График 2017ж.</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_kaz.php#block4">Хабарландырулар</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="../index_kaz.php#block5">Байланыс</a></li>
					</ul>
						</li>
							<li class="dropdown">
								<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Mini MBA
									<span class="caret"></span>
								</a>
						<ul class="dropdown-menu" style="background:#d11633">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../mini_mba_kaz.php#block8">Ішкі жобаларды басқару</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../mini_mba2_kaz.php#block8">Өзерістерді басқару</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../study_process_kaz.php#block8">MiniMBA оқу технологиясы</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intro_MBA_kaz.php">MiniMBA оқуға өтініш</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Оқу орталықтары<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../uchebn_centre_kaz.php#block8">
							Энергия үнемдеу және энергия тиімділігін<br> сараптау саласындағы оқу орталығы</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="index_kaz.php#block8">
							Аудару мен тілдерді үйренетін орталық</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../programm/index_kaz.php#block8">
							Заманауи бағдарламалау мектебі</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intro_centre.php">Орталықта оқуға өтініш</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Екі дипломды білім беру<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633;">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../DUO_MEI_kaz.php#block5">НИУ МЭИ</a></li>
							<!--li role="presentation"><a role="menuitem" tabindex="-1" href="menu_left/sotrudnik/index.html">Самарский университет</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="student/index.html#block3">НИЯУ МИФИ</a></li--> 
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intro_MEI_kaz.php">Оқуға өтініш</a></li>
						</ul>
					</li>
					<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Жоспар-График 2018 жылға
								<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633;">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_adminstr.pdf">Іскерлік әкімшелендіру<br>курстары</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_teplov.pdf">Жылу электр станциялары<br>
							және қазандық қондырғылар</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_electro.pdf">Тоқтық желілер мен жүйелер</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/ee.pdf">Энергиямен жабдықтау и энергия үнемдеу</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Plan_2018_yazyk.pdf">Тіл курстары</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/Ekologiya.pdf">Экология және БЖД</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/telecommunikacii.pdf">Телекоммуникациялар</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/IT.pdf">IT-технологиялар</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../docs/automation.pdf">ТП Автоматтандару</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intropage_kaz.php">Оқуға өтініш</a></li>
						</ul>
						</li>
						<li class="dropdown">
							<a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown">Өтініштер кабинеті
								<span class="caret"></span></a>
						<ul class="dropdown-menu" style="background:#d11633;">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../register.php">Тіркелу</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../login.php">Кіру</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../intropage.php">Оқуға өтініш</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="../logout.php">Шығу</a></li>
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

<!-- Начало: Для слайдера -->
<script src="/js/imagesloaded.pkgd.min.js"></script>
<script src="/js/jquery.hslider.js"></script>

<script type="text/javascript">       
	$( document ).ready(function() { 
		$( ".hsldr-container" ).hslider({
		  navBar: true,
		  auto: true,
		  delay: 4000
		});
	});	
</script> 
<!-- Конец -->