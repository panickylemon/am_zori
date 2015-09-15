<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Как купить</title>
	<link href="ui_accord/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="ui_accord/jquery-ui.theme.css" type="text/css" rel="stylesheet">
	<link href="styles/style.css" type="text/css" rel="stylesheet">
	<script src="js/jquery-1.11.3.js"></script>
	<script src="ui_accord/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$( "#accordion" ).accordion({
				collapsible: true
			});
		});
	</script>


</head>
<body>
<div class="header">
	<div class="header_layout">
		<div><a href="index.html"><img src="pictures/logo.png" alt="логотип Амурские зори" class="logo"></a></div>

		<div class="menu">
			<div class="menu_block">
				<ul id="navbar">
					<li>
						<div><a href="about.html">О компании</a></div>
					<li>
						<div><a href="village.html">Посёлки</a></div>
					<li>
						<div><a href="selection.html">Подбор участка</a></div>
					<li>
						<div><a href="how_buy.html">Как купить</a></div>
					<li>
						<div><a href="contacts.html">Контакты</a></div>
				</ul>
			</div>
			<!--<div class="ie_navbar"></div>-->
		</div>
	</div>
</div>


<div class="wrapper">
	<div class="content_village">
		<div class="content_layout_village">

			<div class="breadcrumbs">
				<ul>
					<li><a href="index.html">Амурские зори ></a></li>
					<li><a href="#">Как купить</a></li>
				</ul>
			</div>

			<div class="title_buy">
				<img src="pictures/title_buy2.png">
			</div>


			<div class="layout_icons_buy">
				<div class="icon_buy_box">
					<div class="icon_buy">
						<img src="pictures/phone64.png">
					</div>
					<div class="text_icon_buy">Позвонить <br> по телефону</div>
				</div>

				<div class="icon_buy_box ">
					<div class="icon_buy icon_arrow">
						<img src="pictures/right11.png">
					</div>
				</div>

				<div class="icon_buy_box">
					<div class="icon_buy">
						<img src="pictures/network57.png">
					</div>
					<div class="text_icon_buy">Записаться <br> на просмотр</div>
				</div>

				<div class="icon_buy_box ">
					<div class="icon_buy icon_arrow">
						<img src="pictures/right11.png">
					</div>
				</div>

				<div class="icon_buy_box">
					<div class="icon_buy">
						<img src="pictures/marker19.png">
					</div>
					<div class="text_icon_buy">Выбрать участок в посёлке</div>
				</div>

				<div class="icon_buy_box ">
					<div class="icon_buy icon_arrow">
						<img src="pictures/right11.png">
					</div>
				</div>

				<div class="icon_buy_box">
					<div class="icon_buy">
						<img src="pictures/contract11.png">
					</div>
					<div class="text_icon_buy">Заключить договор</div>
				</div>
			</div>

			<div class="main_text_buy">
				<h4>Шаг первый. Обзор окрестностей и выбор участка</h4>
				<ul>
					<li>Выберите удобные для вас время и день посещения поселка;</li>
					<li>Свяжитесь с нашими менеджерами по телефону +7 (383) 88-88-88 или обратитесь в офис продаж;</li>
					<li>В назначенное время мы будем ждать вас на месте. Если вдруг вы заблудились, то позвоните нам, и
						мы непременно поможем вам найти дорогу;
					</li>
					<li>Если какой-то конкретный участок вам понравился, Вы можете внести задаток в размере 5000 р. и
						забронировать его на срок до 7 дней.
					</li>
				</ul>

				<h4>Шаг второй. Подготовительный этап</h4>

				<div>Вы приезжаете в наш офис и мы оговариваем условия сделки, начинаем подготовку документов, а также
					назначаем день похода в РосРеестр.
				</div>


				<h4>Шаг третий. Приобретение и оформление права собственности на земельный участок</h4>
				<ul>После внесения вами оплаты, юристы компании формируют пакет документов:
					<li>Договор купли-продажи земельного участка;</li>
					<li>Договор на коммуникации.</li>
				</ul>
				<div>Далее наши менеджеры сопровождают Вас в Управление Федеральной службы Государственной регистрации
					кадастра и картографии по РБ (РосРеестр),
					где и заключается договор. После подписания договора вы оплачиваете указанную сумму в течение
					установленного срока на условиях, указанных в договоре.
					В течение 18 календарных дней вы получаете документы на руки и становитесь полноправным владельцем
					своего земельного участка.
				</div>

				<h4>Акции и скидки</h4>
				<div>Компания "Амурские зори" предлагает различные спецпредложения для покупки загородной недвижимости.
					Перейти в раздел <a href="discounts.html">спецпредложений</a>. </div>
			</div>

			<div class="accord_quetions">

				<h4>Часто задаваемые вопросы</h4>
				<div id="accordion">
					<h4>Могу ли я купить участок в кредит и есть ли беспроцентная рассрочка?</h4>
					<div>Да, Вы можете воспользоваться рассрочкой или ипотекой, данный вопрос обсуждается индивидуально.
						За дополнительной информацией обращайтесь к нашим специалистам по телефону +7 (383) 88-88-88, либо в офис продаж.</div>
					<h4>Возможно ли рассчитаться за землю материнским капиталом?</h4>
					<div>К сожалению, материнский капитал не выдается на приобретение земельного участка, так как это не предусмотрено законом РФ.
						С условиями использования материнского капитала Вы можете ознакомиться на сайте Пенсионного фонда Российской Федерации.</div>
					<h4>Мы бы хотели воспользоваться акцией - скидка 1% за каждого ребенка, что нужно сделать для этого?</h4>
					<div>Вам нужно принести копии свидетельства о рождении Ваших детей.</div>

					<h4>Можно ли воспользоваться несколькими акциями сразу?</h4>
					<div>Есть некоторые акции, которыми можно воспользоваться одновременно. Подробнее этот вопрос необходимо уточнить
						у наших специалистов по телефону +7 (383) 88-88-88, либо в офисе продаж.</div>
				</div>

			</div>
		</div>
	</div>
</div>


<div class="footer">
	<div class="footer_content">
		<div class="box_footer">
			<a href="village.html">Выбери свой райский <br>уголок</a>
		</div>
		<div class="box_footer">
			<a href="selection.html">Построй дом своей <br>мечты</a>
		</div>
		<div class="box_footer">
			<a href="contacts.html">Ответим на все Ваши <br>вопросы</a>
		</div>

	</div>
</div>

</body>
</html>