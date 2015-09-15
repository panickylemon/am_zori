
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Амурские зори</title>
	<?php
	echo $this->Html->meta('icon');

	echo $this->Html->css('style');
	echo $this->Html->css('jquery.bxslider');
	echo $this->Html->script('jquery-1.11.3');
	echo $this->Html->script('jquery.bx-slider.min');
	echo $this->Html->script('main');

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>

	<!--[if lte IE 8]>
	<?php echo $this->Html->css('ie8');?>
	<![endif]-->

	<script type="text/javascript">
		$(function () {
			$('.bxslider_main').bxSlider({
				mode: 'fade',
				auto: true,
				pause: 6000,
				speed: 800,
				captions: true
			});
		});

		$(document).ready(function () {
			$('.slider_right').bxSlider({
				mode: 'vertical',
				auto: true,
				pause: 7000,
				speed: 800,

				minSlides: 2,
				maxSlides: 4,
				captions: true,
				slideMargin: 5
			});
		});
	</script>


</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="header_layout">
			<div><a href="<?php echo site_url();?>"><?php
					echo $this->Html->image('pictures/logo.png', array("alt"=>"логотип Амурские зори", "class"=>"logo"));
					?>
				</a></div>

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
			</div>
		</div>
	</div>


	<ul class="bxslider">
		<div class="bxslider_main">
			<li>
				<?php
				echo $this->Html->image('pictures/image1.png');
				?>

				<div class="container_text_slider">
					<h1>Земляничные поляны</h1>

					<h2>готовый коттеджный поселок в котором уже живут и активно строят свои дома более 120 семей,
						оптимальный вариант приобретения жилья по экономичной цене</h2>
				</div>
			</li>
			<li><?php
				echo $this->Html->image('pictures/image2.png');
				?>

				<div class="container_text_slider">
					<h1>Pощинская слобода</h1>

					<h2>посёлок комфорт-класса с авторским ландшафтным дизайном общественной зоны на самой границе с
						городом</h2>
				</div>
			</li>
			<li><?php
				echo $this->Html->image('pictures/image3.png');
				?>


				<div class="container_text_slider">
					<h1>Медовое</h1>

					<h2>масштабный стилизованный проект в одном из самых экологически чистых районов, в 1 км от
						Орельского озера и песчаного карьера — прекрасного места для летнего купания</h2>
				</div>
			</li>
		</div>
	</ul>


	<div class="content">
		<div class="content_layout">
			<div class="icon_mainpage">
				<div class="box_icon_picture">
					<?php
					echo $this->Html->image('pictures/icon_localization.png', array("class"=>"pictire_icon"));
					?>
				</div>
				<div class="box_text_icon">
					<div class="text_icon_title"><a href="#">Выбрать посёлок</a></div>
					<div>Коттеджные посёлки <br>от эконом-класса <br>до премиум-класса</div>
				</div>
			</div>

			<div class="icon_mainpage">
				<div class="box_icon_picture">
					<?php
					echo $this->Html->image('pictures/icon_home.png', array("class"=>"pictire_icon"));
					?>
				</div>
				<div class="box_text_icon">
					<div class="text_icon_title"><a href="#">Подобрать участок</a></div>
					<div>Приобретите загородный<br> участок и избавьтесь от<br> городской суеты, шума <br>и пыли</div>
				</div>
			</div>

			<div class="icon_mainpage">
				<div class="box_icon_picture">
					<?php
					echo $this->Html->image('pictures/icon_wallet.png', array("class"=>"pictire_icon"));
					?>
				</div>
				<div class="box_text_icon">
					<div class="text_icon_title"><a href="#">Как купить</a></div>
					<div>Множество вариантов <br> приобретения участка, <br>а также скидки и акции</div>
				</div>
			</div>
		</div>

	</div>


	<div class="main_content">
		<div class="right_box_content">
			<h1>Амурские зори</h1>

			<div>"Амурские зори" - это уникальные концепции, качество услуг, экологическая сертификация.
				Наша компания была основана с целью строительства, продажи и обслуживания загородных проектов
				качественно нового уровня.
				Мы любим свое дело и верим, что нет ничего более настоящего и понятного любому человеку, чем
				строительство собственного дома.
				Дом — это олицетворение всех семейных ценностей.
			</div>

			<div>Компания «Амурские зори» - одна из немногих компаний, которая вот уже более 10 лет предоставляет
				требовательному
				Клиенту комплексный подход в области строительства и всех операций с недвижимостью.
			</div>
			<ul>5 причин купить недвижимость у нас:

				<li>Лучшие цены</li>
				<li>Хорошая транспортная доступность</li>
				<li>Развитая инфраструктура</li>
				<li>Быстрое оформление сделки</li>
				<li>Полное юридическое сопровождение на всех этапах</li>
				<li>Оформление в собственность</li>
			</ul>
			<div>На данный момент, в разных стадиях строительства, нами представлено три коттеджных поселка:
				"Рощинская слобода", "Земляничные поляны" и "Медовое".
				Они ориентированы на разные категории клиентов. Мы предлагаем как проекты поселков без подряда,
				так и с обязательным подрядом (заключение договора на строительство индивидуального дома с нашей
				строительной компанией).
			</div>

			<div>Будущим владельцам загородного жилья предлагается широкий спектр услуг, включающий проектирование
				коттеджей, строительство из любых материалов,
				ландшафтный дизайн, охрана территорий, создание комфортной среды проживания и управление
				собственными девелоперскими проектами.
			</div>

			<div>Немаловажное значение для нас имеют вопросы экологии и безопасности для людей, приобретающих наши
				продукты.
				Все существующие и будущие поселки проходят тщательную проверку на предмет загрязнения воздуха, почв
				и подземных вод.
				Мы не жалеем на это ни средств, ни времени, так как понимаем, что пришли на этот рынок всерьез и
				надолго.
			</div>


			<div>По состоянию на 1 августа 2015 года компанией "Амурские зори" реализовано более 800 земельных
				участков.
				На них построено около 400 индивидуальных домов.
			</div>
		</div>

		<div class="sidebar">
			<div class="bxslider bxslider2">
				<div class="slider_right">

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale1.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale2.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale3.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale4.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale5.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale6.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale7.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale8.png', array("class"=>"item"));
							?>
						</a>
					</div>

					<div><a href="#">
							<?php
							echo $this->Html->image('pictures/sale9.png', array("class"=>"item"));
							?>
						</a>
					</div>
				</div>
			</div>
			<div class="link_to_galery"><a href="#"> Перейти в галерею >></a></div>
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