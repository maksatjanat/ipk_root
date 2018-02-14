<?php
    //Подключение шапки
    require_once("header_eng.php");
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
				<p class="nav-header" style="margin-left: 25px">Information on the "Institute for Advanced Studies and two- Diploma Education"</p>
			</div>						
				<div class="col-md-12 col-sm-12 scrollflow -slide-left -opacity" style="filter: opacity(0); transform: translate3d(100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<div class="block2-pos ">
					<p class="paragraph2"><b>Institute for Advanced Studies and two- Diploma Education</b>
					is a structural subdivision of the NAO "AUPET", which implements additional paid educational services for the course attendees
					advanced training, students, students of schools.
					</p>
				</div>
					<h3>Directions of the Institute:</h3>											
					<ul>
						<li class="paragraph2">Advanced training courses for specialists in the field of energy and telecommunications. <a href="./index.php#block6"> Schedule</a></li>
						<li class="paragraph2">Education on the program of two diplomas with partner universities.<a href="./DUO_MEI.php#block5"> Learn More...</a></li>
						<li class="paragraph2">Training center for retraining and advanced training of personnel,
						       carrying out energy audit and / or energy conservation expertise.<a href="./uchebn_centre.php#block8"> Learn More...</a></li>
						<li class="paragraph2">Center for Language Teaching and Translation.<a href="./centre_of_language.php#block8"> Learn More...</a></li>
					</ul>
					
				</div>
		</div>
	</div>
<!-- конец второго блока -->


	<!-- курсы повышения квалификации-->
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<h3>Refresher courses</h3>
				<p class="paragraph2">Advanced training courses for specialists in the field of electrical engineering and
				telecommunications in the Non-Profit JSC "Almaty University of Power Engineering and
				Telecommunications" started functioning from September 1999. During this period,
				conducted more than 500 courses, which trained more than 7,000 people.
				Every year on the courses improve skills of more than 400 specialists of the fuel and
				energy complex, industrial enterprises, experts in the field of telecommunications.</p>
				<p class="paragraph2">In order to improve the quality of education
				students are developed and implemented in the learning process, new
				thematic courses, which highlight the modern achievements of science,
				technology, technology trends, new legislative
				acts.</p>
				<p class="paragraph2">Theoretical studies in
				lecture audiences with multimedia technology, practical and
				laboratory classes - in classrooms equipped with a modern computer
				equipment with Internet access and software, educational
				stands, industrial equipment of power and heat power companies
				ABB, Siemens, Schneider Electric and others.</p>
				<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-top -opacity" style="padding: 2%; filter: opacity(0); transform: translate3d(0px, 100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<a href="https://www.siemens.com/global/en/home.html"><img src="./images/Siemens.png" alt="" style="width: 200px; height: auto; display:inline-block; margin-left:10%;"></a>
					<a href="http://www.kz.schneider-electric.com/sites/kazakhstan/ru/general/contact/contact.page"><img src="./images/9.jpg" alt="Schneider Electric" style="margin-left:2%;"></a>
					<a href="http://new.abb.com/kz"><img src="./images/8.png" alt="«АВВ»" style="margin-left:2%;"></a>
				</div>
				<p class="paragraph2">Particular attention is paid to work on
				individual orders of organizations. We organized and attended courses
				for the specialists of the Energy of the Republic of Kazakhstan, the staff of the Center
				Provision of government communications of the Committee of the National Security of the Republic of Kazakhstan,
				President of the Republic of Kazakhstan and employees of the Ministry of Internal Affairs of the Republic of Kazakhstan, employees of the National Bank
				</p>
				<p class="paragraph2">To conduct the training courses involved the teaching stuff of the following specialized
departments:
				</p>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<ul>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/epp/index.html">Department of Electricity and Renewable Energy Sources</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/essis/index.html">Department of Electrical Stations and Electric Power Systems</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/tey/index.html">Department of Thermal Power Plants</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/pte/index.html">Department of industrial power system</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/e/index.html">Department of Electronics and Robotics</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/suat/index.html">Department of Space technology and technology</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/eiapu/index.html">Department of electric drive and automation</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/bzhizos/index.html">Department of Occupational Safety and Environmental Engineering</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/kirya/index.html">Department for Language Studies</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/kib/index.html">Department of Radio Engineering and Information Security</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/tks/index.html">Department of Telecommunication Systems and Networks</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/ik/index.html">Department of Engineering Cybernetics</a></li>
					<li class="paragraph2"><a href="http://www.aipet.kz/main_menu/faculty/is/index.html">Department of Information Systems</a></li>
				</ul>	
			</div>
			<div class="col-md-5 col-sm-5 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<img src="images/1.jpg">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="paragraph2">In addition to teaching staff of the University to conduct training on the courses are involved
				highly qualified specialists of enterprises, development companies and manufacturers of
				new machinery, equipment and technology, other educational institutions, with extensive
				scientific and methodological and practical experience.</p>
				<p class="paragraph2">In 2002-2004 years have been conducted five international training courses with the
				involvement of well-known scientists of the St. Petersburg Energy Institute of Advanced
				Training, which trained about 100 listeners, including 29 employees of the university.</p>
				<p class="paragraph2">In 2016, signed an agreement on further cooperation with the St. Petersburg Energy
				Institute of Advanced Training of energy experts.</p>
				<p class="paragraph2">The duration of training depends on the subjects of the course and amounts to 36 and 72
hours.</p>
				<p class="paragraph2">After the completion of the course, students receive a certificate of further training and handouts on CD-ROMs.</p>
				<p class="paragraph2">In addition, there are regional
				Academy of International Corporation Cisco Sistem, Microsoft Academy,
				D-Link and ISCRATEL training centers in terms of
				these telecommunications with the issuance of diplomas of these firms. Classes
				employees of AULP with international certificates</p>
			</div>
			
		</div>
	</div>
<!-- конец четвертого блока -->

<!-- шестой блок -->
	<div id="block6" class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-bottom -opacity" style="filter: opacity(0); transform: translate3d(0px, -100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="nav-header"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf"  target="_blank">Schedule for 2017y</a></p>
			</div>
				<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-right -opacity" style="filter: opacity(0); transform: translate3d(-100px, 0px, 0px) scale(1); transition: all 500ms ease-out 0s;">
					<ul>
						<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=7"  target="_blank">ELECTRIC AND THERMAL STATIONS</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=17"  target="_blank">ELECTRICAL NETWORKS AND SYSTEMS</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=29"  target="_blank">ENERGY SUPPLY AND ENERGY SAVING</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=37"  target="_blank">ECOLOGY AND SAFETY OF HUMAN LIFE</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=43"  target="_blank">TELECOMMUNICATIONS</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=53"  target="_blank">IT TECHNOLOGIES</a></li>
							<li class="paragraph2"><a href="http://www.aipet.kz/ipk/info/Plan_grafik_2017.pdf#page=63"  target="_blank">AUTOMATION OF TECHNOLOGICAL PROCESSES</a></li>
				</ul></div>
		</div>
	</div>
<!-- конец шестого блока -->


<!-- третий блок -->
	<div id="block3" class="container">
		<div class="row">
			<div class="col-md-12 scrollflow -slide-bottom -opacity" style="filter: opacity(0); transform: translate3d(0px, -100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="nav-header">Staffing</p>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-top -opacity" style="text-align: center; filter: opacity(0); transform: translate3d(0px, 100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/dekan.jpg) no-repeat center top; background-position:center center;background-size:cover;width: 230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p style="font-size:20px;margin:0px;">Director of the Institute</p>
				
				<p style="font-size:20px;"><b>Manapova Gulnar Dzhambulovna Candidate of Technical Sciences, Associate Professor</p>
			</div>
			<div class="col-md-12" style="margin-top:30px;"></div>
			<div class="col-md-3 col-sm-4 col-xs-12 scrollflow -pop" style="text-align: center; filter: opacity(1); transform: translate3d(0px, 0px, 0px) scale(0.8); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/zam_direktora_damir.jpg) no-repeat center top; background-position:center center;background-size:cover;width: 230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p class="paragraph"><b>Djeksenbinov Damir Zhanatbekovich</b></p>
				<p>Deputy. Director for Advanced Studies</p>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 scrollflow -pop" style="text-align: center; filter: opacity(1); transform: translate3d(0px, 0px, 0px) scale(0.8); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/2.jpg) no-repeat center top;background-position:center center;background-size:cover;width:230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p class="paragraph"><b>Sugirbekova Asem <br> Zhumabekovna</b></p>
				<p>Specialist</p>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 scrollflow -pop" style="text-align: center; filter: opacity(1); transform: translate3d(0px, 0px, 0px) scale(0.8); transition: all 500ms ease-out 0s;">
				<div style="background:url(./images/3.jpg) no-repeat center top;background-position:center center;background-size:cover;width:230px;height:230px;border-radius:200px;margin:auto;"></div>
				<p class="paragraph"><b>Delmukambetova Asiya Gadylbekovna</b></p>
				<p>Specialist</p>
			</div>
		</div>
	</div>
<!-- конец третьего блока -->
<!-- блок объявлений-->
	<div id="block4" class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 scrollflow -slide-bottom -opacity" style="filter: opacity(0); transform: translate3d(0px, -100px, 0px) scale(1); transition: all 500ms ease-out 0s;">
				<p class="nav-header">Advertisement</p>
				<div class="accordion">
					<h3>IASand DE invites PPP and AULP staff to a free in-house advanced training course on "Electrics for non-electricians". Free internal higher education course on "Electrics for non-electricians". Classes start in  January 15, 2018. Registration for the courses: +7 (727) 292 74 81, +77076006425. 
					<a href="./docs/Elecric_Course.pdf" target="_blank">Learn more...</a></h3>
					<p> <a href="./docs/Elecric_Course.pdf" target="_blank"> Course program</a></p>
					<h3>In IASandDE the school of modern programming was opened</h3>
					<p> <a href="./docs/courses of programs.pdf" target="_blank"> Learn more...</a></p>
					<h3>MINI MBA "Management of internal projects"</h3>
					<p>MINI MBA "Management of internal projects" <a href="./info/mba1.pdf" target="_blank"> Learn more...</a></p>
					<h3>Archive</h3>
					<p>November 2, 2017 at 18:40 the open lecture of the director of the Institute of Distance and Additional Education of MPEI, Doctor of Economics, Associate Professor Shindina Tatiana Alexandrovna will take place</p>
				
				</div>
			</div>
		</div>
	</div>
	<!-- конец блока объявлений-->
<?php
    //Подключение подвала
    require_once("footer_eng.php");
?>