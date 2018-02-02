    $(function(){
        $(".element").typed({
            strings: ["\"«Өмір бойы білім алу әрбір қазақстандықтың жеке кредосына айналуы тиіс». Н.Ә. Назарбаев\";", "\"«Личным кредо каждого казахстанца должно стать образование в течение жизни». Н.А. Назарбаев\";",
            "\"«The personal credo of every citizen of Kazakhstan should be education during a life.» N.A. Nazarbayev\";"], // строки выводимые в печать
            typeSpeed: 80, // скорость набора
            backSpeed: 0, // скорость удаления текста
            startDelay: 0, // начальная задержка перед набором
            backDelay: 500, // пауза перед удалением текста
            loop: true, // повтор (true или false)
            loopCount: false, // число повторов, false = бесконечно
            showCursor: true, // отображение курсора
            attr: null, // атрибут
            callback: function(){ } // функция вызываемая после окончания работы плагина
        });
    });

	// Options
	var options = {
	  offset: 700
	}

	// Create a new instance of Headhesive
	var header = new Headhesive('.header', options);

$(document).ready(function(){

	// = Добавляем ссылку наверх к заголовку
	$('h2').append('<a href="#header">top</a>');

	// = Вешаем событие прокрутки к нужному месту
	//	 на все ссылки якорь которых начинается на #
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});

});

$( document ).ready( function( )
{
    new ScrollFlow(); 
});

	$(document).ready(function(){  

		$(".maian_menu_button").click(function(){
			$(".nav-panel ul").slideToggle();
		});
	});