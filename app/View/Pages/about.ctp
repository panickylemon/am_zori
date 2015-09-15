<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>О компании</title>
	<?php
	echo $this->Html->css('style');
	echo $this->Html->script('jquery-1.11.3');
	?>

</head>
<body>
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
					<li><a href="#">О компании</a></li>
				</ul>
			</div>

			<div class="about_page">

				<div class="left_box_about about_first">
					<div class="about_title1 bold">КОМПАНИЯ</div>
					<div class="about_title2">СЕГОДНЯ</div>
					<div class="about_title3">Компания "Амурские зори"
						одна из лидирующих продавцов
						на рынке загородной
						недвижимости Амурской области
					</div>
				</div>
				<div class="right_box_about">

					<div>Компания "Амурские зори" занимается продажей земельных участков в коттеджных и дачных поселках
						рядом с Благовещенском.
						Начав деятельность в 2008 году с агентских продаж небольшого участка земли, мы выросли до
						крупного девелопера полного цикла.
						В сфере наших интересов - приобретение земельных участков, межевание, подведение коммуникаций и
						строительство малоэтажных жилых
						поселков различных форматов и уровней. Земельный банк группы насчитывает более 200 га земель
						различного назначения.
						Мы единственная компания в Амурской области,
						которая работает, как собственник проектов, во всех сегментах рынка: эконом, средний, средний
						плюс и бизнес.
					</div>
				</div>

			</div>

			<div class="about_page">
				<div class="left_box_about about_second">
					<div class="about_title1">НАШИ</div>
					<div class="about_title2 bold">ЦЕННОСТИ</div>
					<div class="about_title3">Дарим радость!<br>
						Улучшаем мир вокруг себя!
						Невозможное – возможно!
					</div>
				</div>

				<div class="right_box_about">

					<div class="about_line_icon">
						<div class="about_icon_box left_icon_about">
							<div class="about_icon">
								<?php
								echo $this->Html->image('pictures/agreement2.png');
								?>
							</div>
							<div class="about_icon_text">Гибкость и простота сделки,
								индивидуальный подход к каждому клиенту
							</div>
						</div>

						<div class="about_icon_box right_icon_about">
							<div class="about_icon ">
								<?php
								echo $this->Html->image('pictures/circle39.png');
								?>
							</div>
							<div class="about_icon_text">Уникальный товар, востребованный рынком,
								широкая продуктовая линейка товара
							</div>
						</div>
					</div>

					<div class="about_line_icon">
						<div class="about_icon_box left_icon_about">
							<div class="about_icon">
								<?php
								echo $this->Html->image('pictures/premium1.png');
								?>
							</div>
							<div class="about_icon_text">Подтверждаем слова – делом, надежность компании с
								успешной 7-ти летней историей и опытом реализации проектов застройки
							</div>
						</div>

						<div class="about_icon_box right_icon_about">
							<div class="about_icon">
								<?php
								echo $this->Html->image('pictures/family24.png');
								?>
							</div>
							<div class="about_icon_text">Мы дарим радость нашим клиентам как в момент заключения
								договора/сделки, так и в течение проживания в наших комплексах.
							</div>
						</div>
					</div>

				</div>

			</div>

			<div class="about_page">

				<div class="left_box_about about_third">
					<div class="about_title1">НАША</div>
					<div class="about_title2 bold">КОМАНДА</div>
					<div class="about_title3">Команда профессионалов
						с успешным опытом реализации
						проектов любой сложности
					</div>
				</div>
				<div class="right_box_about">

					<div>В компании "Амурские зори" работают квалифицированные, опытные специалисты.
						Команда  состоит из работников, стоящих у истоков создания компании, а также молодых специалистов
						с современным подходом к реализации проектов. Мы – команда единомышленников!
						Нас объединяют увлеченность делом, энтузиазм, профессионализм, желание улучшить условия проживания
						людей в нашем регионе и сделать мир вокруг себя лучше!
					</div>

					<div>Лидером и идейным вдохновителем нашей команды является генеральный директор компании
						"Амурские зори" - Иванова Анна Сергеевна. Она вдохновляет команду на успех, мотивирует
						на результат, создает и поддерживает положительный климат в компании и продуктивную
						рабочую атмосферу,занимается развитием и обучением сотрудников компании.
					</div>

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