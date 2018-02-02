<?php
    //Подключение шапки
    require_once("header.php");
?>
<script type='text/javascript'> 
$(document).ready(function(){ 
$(".accordion h3:first").addClass("active");
$(".accordion p:not(:first)").hide();
    $(".accordion h3").click(function(){ 
       $(this).next("p").slideToggle("slow").siblings("p:visible").slideUp("slow");
	   $(this).toggleClass("active");
	   $(this).siblings("h3").removeClass("active");
    }); 
});
</script>
<!-- блок второй -->
	<div class="container">
		<div class="row">
			<div id="block2" class="col-md-12 col-sm-12 col-xs-12">
				<p class="nav-header" style="margin-left: 25px">Информация об "Институте повышения квалификации и двудипломного образования"</p>
			</div>						
				<div class="col-md-12 col-sm-12 scrollflow -slide-left -opacity" style="filter: opacity(0); transform: translate3d(100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<div class="block2-pos ">
					<p class="paragraph2"><b>"Институт повышения квалификации и двудипломного образования"</b>
 является структурным подразделением НАО «АУЭС», который реализует дополнительные платные образовательные услуги для слушателей курсов 
повышения квалификации, студентов, учащихся школ.
					</p>
				</div>
					<h3>Направления деятельности института:</h3>											
					<ul>
						<li class="paragraph2">Курсы повышения квалификации (КПК) для специалистов в области энергетики и телекоммуникаций.<a href="./index.php#block6"> План-график</a></li>
						<li class="paragraph2">Образование по программе двух дипломов с вузами-партнерами.<a href="./DUO_MEI.php#block5"> Подробнее...</a></li>
						<li class="paragraph2">Учебный центр по переподготовке и повышению квалификации кадров, 
						осуществляющих энергетический аудит и/или экспертизу энергосбережения.<a href="./uchebn_centre.php#block8"> Подробнее...</a></li>
						<li class="paragraph2">Центр обучения языкам и перевода.<a href="./centre_of_language.php#block8"> Подробнее...</a></li>
					</ul>
					
				</div>
		</div>
	</div>
<!-- конец второго блока -->


	<!-- курсы повышения квалификации-->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<h3>Курсы повышения квалификации</h3>
				<p class="paragraph2">Курсы повышения квалификации для специалистов
				в области энергетики и телекоммуникаций в НАО «Алматинский университет 
				энергетики и связи» начали функционировать с сентября 1999 года. За этот
				период проведено свыше 500 курсов, на которых прошли обучение более 
				7000 слушателей. Ежегодно на курсах повышают квалификацию более 400 
				специалистов топливно-энергетического комплекса, промышленных 
				предприятий, специалистов в области телекоммуникаций.</p>
				<p class="paragraph2">С целью повышения качества обучения 
слушателей разрабатываются и внедряются в учебный процесс новые 
тематические курсы, в которых освещаются современные достижения науки, 
техники, технологии, тенденции развития техники, новые законодательные 
акты.</p>
				<p class="paragraph2">Теоретические занятия проводятся в 
лекционных аудиториях с мультимедийной техникой, практические и 
лабораторные занятия – в классах, оснащенных современной компьютерной 
техникой с выходом в Интернет и программным обеспечением, учебными 
стендами, промышленным оборудованием электро- и теплоэнергетики компаний
АВВ, Siemens, Schneider Electric и др.</p>
				<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-top -opacity" style="padding: 2%; filter: opacity(0); transform: translate3d(0px, 100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<a href="https://www.siemens.com/global/en/home.html"><img src="./images/Siemens.png" alt="" style="width: 200px; height: auto; display:inline-block; margin-left:10%;"></a>
					<a href="http://www.kz.schneider-electric.com/sites/kazakhstan/ru/general/contact/contact.page"><img src="./images/9.jpg" alt="Schneider Electric" style="margin-left:2%;"></a>
					<a href="http://new.abb.com/kz"><img src="./images/8.png" alt="«АВВ»" style="margin-left:2%;"></a>
				</div>
				<p class="paragraph2">Особое внимание уделяется работе по 
индивидуальным заказам организаций. Были организованы и проведены курсы 
для специалистов Энергетической таможни РК, сотрудников Центра 
обеспечения Правительственной связи КНБ РК, сотрудников Службы охраны 
Президента РК и сотрудников МВД РК, работников Народного Банка, и др.
				</p>
				<p class="paragraph2">К проведению занятий на курсах привлекается профессорско-преподавательский состав следующих специализированных кафедр:
				</p>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<ul>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/epp/index.html">Кафедра Электроснабжения и возобновляемых источникок энергии</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/essis/index.html">Кафедра Электрических станций и электроэнергетических систем</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/tey/index.html">Кафедра Тепловых энергетических установок</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/pte/index.html">Кафедра Промышленной теплоэнергетики</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/e/index.html">Кафедра Электроники и робототехники</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/suat/index.html">Кафедра Космической техники и технологии</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/eiapu/index.html">Кафедра Электропривода и автоматизации</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/bzhizos/index.html">Кафедра Безопасности труда и инженерной экологии</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/kirya/index.html">Кафедра Языковых знаний</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/kib/index.html">Кафедра Радиотехники и информационной безопасности</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/tks/index.html">Кафедра Телекоммуникационных систем и сетей</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/ik/index.html">Кафедра Инженерной кибернетики</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/is/index.html">Кафедра Информационных систем</a></li>
				</ul>	
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<img src="images/1.jpg">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="paragraph2">Наряду с профессорско-преподавательским 
				составом университета к проведению занятий на курсах привлекаются 
				высококвалифицированные специалисты предприятий, фирм-разработчиков и 
				производителей новой техники, оборудования и технологий, других учебных 
				заведений, имеющие большой научно-методический и практический опыт 
				работы.</p>
				<p class="paragraph2">В 2002-2004 г.г. были проведены пять 
				международных курсов повышения квалификации с привлечением известных 
				ученых Санкт-Петербургского энергетического института повышения 
				квалификации энергетиков, на которых прошли обучение около 100 
				слушателей, из них 29 сотрудников университета.</p>
				<p class="paragraph2">В 2016 году подписано соглашение о дальнейшем
				сотрудничестве с Санкт-Петербургским энергетическим институтом 
				повышения квалификации специалистов-энергетиков.</p>
				<p class="paragraph2">Продолжительность обучения зависит от тематики курса и составляет 36 и 72 часа.</p>
				<p class="paragraph2">После окончания курсов слушателям выдается сертификат о повышении квалификации и раздаточный материал на CD-дисках.</p>
				<p class="paragraph2">Кроме того, в АУЭС действуют Региональная 
				Академия международной корпорации Cisco Sistem, Академия Microsoft, 
				учебные центры D-Link и ISCRATEL по повышению квалификации специалистов в
				области телекоммуникаций с выдачей дипломов этих фирм. Занятия проводят
				сотрудники АУЭС, имеющие международные сертификаты.</p>
			</div>
			
		</div>
	</div>
<!-- конец четвертого блока -->

<!-- шестой блок -->
	<div id="block6" class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-bottom -opacity" style="filter: opacity(0); transform: translate3d(0px, -100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="nav-header"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf"  target="_blank">План-график на 2017 год</a></p>
			</div>
				<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<ul>
						<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=7"  target="_blank">ЭЛЕКТРИЧЕСКИЕ И ТЕПЛОВЫЕ СТАНЦИИ</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=17"  target="_blank">ЭЛЕКТРИЧЕСКИЕ СЕТИ И СИСТЕМЫ</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=29"  target="_blank">ЭНЕРГОСНАБЖЕНИЕ И ЭНЕРГОСБЕРЕЖЕНИЕ</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=37"  target="_blank">ЭКОЛОГИЯ и БЕЗОПАСНОСТЬ ЖИЗНЕДЕЯТЕЛЬНОСТИ ЧЕЛОВЕКА</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=43"  target="_blank">ТЕЛЕКОММУНИКАЦИИ</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=53"  target="_blank">IT-ТЕХНОЛОГИИ</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=63"  target="_blank">АВТОМАТИЗАЦИЯ ТЕХНОЛОГИЧЕСКИХ ПРОЦЕССОВ</a></li>
				</ul></div>
		</div>
	</div>
<!-- конец шестого блока -->


<!-- третий блок -->
	<div id="block3" class="container">
		<div class="row">
			<div class="col-md-12 scrollflow -slide-bottom -opacity" style="filter: opacity(0); transform: translate3d(0px, -100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="nav-header">Кадровый состав</p>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-top -opacity" style="text-align: center; filter: opacity(0); transform: translate3d(0px, 100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/dekan.jpg) no-repeat center top; background-position:center center;background-size:cover;width: 230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p style="font-size:20px;margin:0px;">Директор института</p>
				
				<p style="font-size:20px;"><b>Манапова Гульнар Джамбуловна</b><br>Кандидат технических наук, доцент</p>
			</div>
			<div class="col-md-12" style="margin-top:30px;"></div>
			<div class="col-md-3 col-sm-4 col-xs-12 scrollflow -pop" style="text-align: center; filter: opacity(1); transform: translate3d(0px, 0px, 0px) scale(0.8); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/zam_direktora_damir.jpg) no-repeat center top; background-position:center center;background-size:cover;width: 230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p class="paragraph"><b>Джексенбинов Дамир Жанатбекович</b></p>
				<p>Зам. директора <br>по повышению квалификации</p>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 scrollflow -pop" style="text-align: center; filter: opacity(1); transform: translate3d(0px, 0px, 0px) scale(0.8); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/2.jpg) no-repeat center top;background-position:center center;background-size:cover;width:230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p class="paragraph"><b>Сугирбекова Асем <br> Жумабековна</b></p>
				<p>Специалист</p>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 scrollflow -pop" style="text-align: center; filter: opacity(1); transform: translate3d(0px, 0px, 0px) scale(0.8); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/3.jpg) no-repeat center top;background-position:center center;background-size:cover;width:230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p class="paragraph"><b>Дельмухамбетова Асия Гадылбековна</b></p>
				<p>Специалист</p>
			</div>
		</div>
	</div>
<!-- конец третьего блока -->
<!-- блок объявлений-->
	<div id="block4" class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-bottom -opacity" style="filter: opacity(0); transform: translate3d(0px, -100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="nav-header">Объявления</p>
				<div class="accordion">
					<h3>ИПК и ДО приглашает  ППС и сотрудников АУЭС на бесплатный  внутривузовский  курс повышения квалификации по теме  «Электрика для неэлектриков». Бесплатный  внутривузовский  курс повышения квалификации по теме  «Электрика для неэлектриков».Начало занятий  15 января 2018 года.  Запись на курсы: +7(727)292 74 81, +77076006425. 
					<a href="./docs/Elecric_Course.pdf" target="_blank">Подробнее...</a></h3>
					<p> <a href="./docs/Elecric_Course.pdf" target="_blank"> Программа курса</a></p>
					<h3>В ИПКиДО открылась школа современного програмирования</h3>
					<p> <a href="./docs/courses of programs.pdf" target="_blank"> Подробнее...</a></p>
					<h3>MINI МВА «Управление внутренними проектами»</h3>
					<p>MINI МВА «Управление внутренними проектами» <a href="./info/mba1.pdf" target="_blank"> Подробнее...</a></p>
					<h3>Архив</h3>
					<p>02 ноября  2017г. в 18 40 ч. состоится открытая лекция директора Институт дистанционного и дополнительного образоваия МЭИ, доктора экономических наук, доцента Шиндиной Татьяны Александровны</p>
				
				</div>
			</div>
		</div>
	</div>
	<!-- конец блока объявлений-->
<?php
    //Подключение подвала
    require_once("footer.php");
?>