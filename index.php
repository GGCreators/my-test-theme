<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my-test-theme
 */

get_header();
?>

<main class="main">
			<!-- #region Section Announce -->
			<section class="announce">
				<div class="announce__container">
					<div class="announce__content">
						<marquee behavior="scroll" scrollamount="5" direction="left"><span
								style="color:red; font-size: 24px;">Уважаемые абоненты!</span> ГУП «Водоснабжение и
							водоотведение» уведомляет вас о необходимости заблаговременно за счет собственных средств
							осуществить поверку приборов учета. В соответствии с Правилами предоставления услуг по питьевому
							водоснабжению и водоотведению в ПМР показания водомеров с истекшим сроком поверки не могут
							приниматься в расчетах. В случае если прибор учета не прошел поверку оплата за водоснабжение будет
							переведена по нормам потребления. Обращаем ваше внимание, что именно на собственника прибора учета
							(Абонента) возложена обязанность по своевременной поверке/замене прибора учета. ГУП «Водоснабжение
							и водоотведение» лишь извещает своих абонентов о приближении сроков поверки за два месяца до его
							окончания путем разноса уведомлений в почтовые ящики. Заказать комплексную услугу по поверке/замене
							приборов учета можно в ЗАО «Метрологический Центр». Телефон для справок (533) 9-12-60.</marquee>
					</div>
				</div>
			</section>
			<!-- #endregion Section Announce -->

			<!-- #region Section News -->
			<section class="news">
				<div class="news__container">
					<div class="news__content js-flickity"
						data-flickity-options='{ "wrapAround": true, "draggable": false, "autoPlay": true, "groupCells": true }'>
			<?php 
				if(have_posts()) : query_posts("cat=4");
				while(have_posts()) : the_post();
			?>
						<div class="news__item">
							<a href="#"> <!-- нужно добавить ссылку на новость когда будет страница поста -->
								<h1 class="news__title"><?php the_title(); ?></h1>
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
									class="news__image">
							</a>
						</div>
			<!-- #endregion Section News -->
			<?php
				endwhile;
				endif;
				wp_reset_query();
			?>
					</div>
				</div>
			</section>
			<!-- #region Section Tabs -->
			<section class="tabs">
				<div class="tabs__container">
					<div class="tabs__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block1.jpg' ?>" class="tabs__background">
						<a href="#" class="tabs__link">
							<div class="tabs__content">
								<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block1-icon.png' ?>" alt="" class="tabs__image">
								<h1 class="tabs__header">Абонентам</h1>
								<h2 class="tabs__text">Информация о регионах, нормативно-правовая база водоканала, ответы на
									вопросы</h2>
								<button class="tabs__button">Подробнее</button>
							</div>
						</a>
					</div>
					<div class="tabs__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block2.jpg' ?>" class="tabs__background">
						<a href="#" class="tabs__link">
							<div class="tabs__content">
								<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block2-icon.png' ?>" alt="" class="tabs__image">
								<h1 class="tabs__header">Услуги</h1>
								<h2 class="tabs__text">Широкий спектр услуг от установки счетчика до строительства сетей</h2>
								<button class="tabs__button">Подробнее</button>
							</div>
						</a>
					</div>
					<div class="tabs__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block3.jpg' ?>" class="tabs__background">
						<a href="#" class="tabs__link">
							<div class="tabs__content">
								<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block3-icon.png' ?>" alt="" class="tabs__image">
								<h1 class="tabs__header">Тарифы</h1>
								<h2 class="tabs__text">Тарифы на обслуживание в ГУП "Водоснабжение и водоотведение"</h2>
								<button class="tabs__button">Подробнее</button>
							</div>
						</a>
					</div>
					<div class="tabs__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block4.jpg' ?>" class="tabs__background">
						<a href="#" class="tabs__link">
							<div class="tabs__content">
								<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block4-icon.png' ?>" alt="" class="tabs__image">
								<h1 class="tabs__header">Закупки</h1>
								<h2 class="tabs__text">Открытый запрос коммерческих предложений</h2>
								<button class="tabs__button">Подробнее</button>
							</div>
						</a>
					</div>
					<div class="tabs__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block5.jpg' ?>" class="tabs__background">
						<a href="#" class="tabs__link">
							<div class="tabs__content">
								<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block5-icon.png' ?>" alt="" class="tabs__image">
								<h1 class="tabs__header">Внимание!</h1>
								<h2 class="tabs__text">Сообщи о несанкционированном отборе воды!</h2>
								<button class="tabs__button">Подробнее</button>
							</div>
						</a>
					</div>
					<div class="tabs__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block6.jpg' ?>" class="tabs__background">
						<a href="#" class="tabs__link">
							<div class="tabs__content">
								<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tabs/block6-icon.png' ?>" alt="" class="tabs__image">
								<h1 class="tabs__header">Отключения</h1>
								<h2 class="tabs__text">Информация об отключениях на сетях водоснабжения</h2>
								<button class="tabs__button">Подробнее</button>
							</div>
						</a>
					</div>
				</div>
			</section>
			<!-- #endregion Section Tabs -->

			<!-- #region Section Stat-->
			<section class="stat">
				<div class="stat__container">
					<div class="stat__title">Водоканал в цифрах</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_1.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('polzovateli', 79); ?></div>
						<div class="stat__description">тыс. пользователей</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_2.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('protyazhennost_vodosetej', 79); ?></div>
						<div class="stat__description">тыс. км протяженность водосетей</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_3.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('artezianskie_skvazhiny', 79); ?></div>
						<div class="stat__description">ед. артезианские скважины</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_4.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('protyazhennost_kanalizaczii', 79); ?></div>
						<div class="stat__description">км протяженность канализации</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_5.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('regionov_prisutstviya', 79); ?></div>
						<div class="stat__description">регионов присутствия</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_6.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('sobiraemost_platezhej_s_fizicheskih_abonentov', 79); ?></div>
						<div class="stat__description">собираемость платежей с физических абонентов</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_7.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('napornyh_stanczij', 79); ?></div>
						<div class="stat__description">ед. напорных станций</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_8.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('kubometrov_podannoj_v_god_vody', 79); ?></div>
						<div class="stat__description">млн. кубометров поданной в год воды</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_9.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('sobiraemost_platezhej_s_promyshlennyh_abonentov', 79); ?></div>
						<div class="stat__description">собираемость платежей с промышленных абонентов</div>
					</div>
					<div class="stat__item">
						<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/stat/stat_10.png' ?>" alt="" class="stat__image">
						<div class="stat__number"><?php the_field('nasosnyh_stanczij', 79); ?></div>
						<div class="stat__description">ед. насосных станций</div>
					</div>
				</div>
			</section>
			<!-- #endregion Section Stat-->

			<!-- #region Section TechWork-->

			<section class="techwork">
				<div class="techwork__container">
					<div class="techwork__title">Заголовок</div>
					<div class="techwork__content">
						<div class="techwork__left">
							<div class="techwork__search">
								<input type="text" class="search__input" placeholder="Поиск по адресу">
								<a href="#" class="search__link"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/search.svg' ?>" alt="" class="search__image"></a>
							</div>
							<div class="techwork__adreses" id="techwork__adreses">
							<?php
								for($i = 1; $i < 5; $i++) {
							?>
								
							<div class="adreses__item">
									<div class="item__tab"><?php echo get_option('accident')[$i][0]; ?></div>
									<div class="item__content">
										<div class="item__title">ПРОВЕДЕНИЕ РЕМОНТНЫХ РАБОТ ПО АДРЕСУ <?php echo get_option('accident')[$i][0]; ?>
										</div>
										<div class="item__time">
											<div class="item__time__start">
												<div class="item__time__title">Отключение фактическое</div>
												<div class="item__time__time" id="starttime<?php echo $i; ?>"><?php echo get_option('accident')[$i][1]; ?></div>
												<div class="item__time__date" id="startdate<?php echo $i; ?>"><?php echo get_option('accident')[$i][2]; ?></div>
											</div>
											<div class="item__time__end">
												<div class="item__time__title">Возобновление плановое</div>
												<div class="item__time__time" id="endtime<?php echo $i; ?>"><?php echo get_option('accident')[$i][3]; ?></div>
												<div class="item__time__date" id="enddate<?php echo $i; ?>"><?php echo get_option('accident')[$i][4]; ?></div>
											</div>
										</div>
									</div>
									<div class="item__progressbar">
										<span class="item__progressbar__text" id="otkl<?php echo $i; ?>"></span>
										<div class="item__progressbar_value" id="polosa<?php echo $i; ?>"></div>
									</div>
									<div class="item__info"><?php echo get_option('accident')[$i][5]; ?></div>
								</div>
									<?php } ?>
								</div>
						</div>
						<div class="techwork__right">
							<div class="techwork__map" style="height:100%;" id="map"></div>
						</div>
					</div>
				</div>
			</section>

			<!-- #endregion Section TechWork-->

			<!-- #region Section Contacts-->
			<section class="contacts">
				<div class="contacts__container">
					<div class="contacts__title">
						Контакты ГУП «Водоснабжение и водоотведение»
					</div>
					<div class="contacts__content">
						<div class="contacts__tabs">
							<ul data-tabs>
								<li>
									<a data-tabby-default href="#tiraspol">Тирасполь</a>
								</li>
								<li>
									<a href="#bendery">Бендеры</a>
								</li>
								<li>
									<a href="#rybnitsa">Рыбница</a>
								</li>
								<li>
									<a href="#dybossary">Дубоссары</a>
								</li>
								<li>
									<a href="#kamenka">Каменка</a>
								</li>
								<li>
									<a href="#grigoriopol">Григориополь</a>
								</li>
								<li>
									<a href="#slobodzeya">Слободзея</a>
								</li>
								<li>
									<a href="#dnestrovsk">Днестровск</a>
								</li>
							</ul>
							<div class="contacts__text">
								<div id="tiraspol">
									<div class="content">
										<div>
											<h2>Адрес: г. Тирасполь, ул. Луначарского, 9</h2>
											<h2>Email: <a href="mailto:viv@vodokanal-pmr.com">viv@vodokanal-pmr.com</a></h2>
											<h2>Диспетчерская Наружные сети: <a href="tel: +37353393541"> (533) 9-35-41</a></h2>
											<h2>Диспетчерская Внутридомовые сети:<a href="tel: +37353389719"> (533) 8-97-19</a>
											</h2>
											<h2>Телефон/Факс: <a href="tel: +37353393397"> (533) 9-33-97</a></h2>
											<h2>Служба учёта: <a href="tel: +37353396582"> (533) 9-65-82</a>, <a
													href="tel: +37353380792">
													(533) 8-07-92</a> (юр. лица)</h2>
											<h2>Обслуживание водомеров: <a href="tel: +37353391260"> (533) 9-12-60</a></h2>
											<h2>РРИЦ: <a href="tel: +37353351319"> (533) 5-13-19</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/tiraspol.png' ?>" style="height: 300px;">
									</div>
								</div>
								<div id="bendery">
									<div class="content">
										<div>
											<h2>Адрес: г. Бендеры, ул. Котовского, д.46</h2>
											<h2>Email: <a href="mailto:mup.uvkh@gmail.ru">mup.uvkh@gmail.ru</a></h2>
											<h2>Приёмная: <a href="tel: +37355224115"> (552) 2-41-15</a></h2>
											<h2>Факс:<a href="tel: +37355220175"> (552) 2-01-75</a>
											</h2>
											<h2>Диспетчерская: <a href="tel: +37355221000"> (552) 2-10-00</a></h2>
											<h2>Наружные сети: <a href="tel: +37355223086"> (552) 2-30-86</a></h2>
											<h2>Внутридомовые сети: <a href="tel: +37355255433"> (552) 5-54-33</a></h2>
											<h2>Служба учёта: <a href="tel: +37355226524"> (552) 2-65-24</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/bendery.png' ?>" style="height: 300px;">
									</div>
								</div>
								<div id="rybnitsa">
									<div class="content">
										<div>
											<h2>Адрес: г. Рыбница, ул. Кирова, д.159</h2>
											<h2>Email: <a href="mailto:rpvkh@mail.ru">rpvkh@mail.ru</a></h2>
											<h2>Приёмная: <a href="tel: +37355543392"> (555) 4-33-92</a></h2>
											<h2>Факс:<a href="tel: +37355543392"> (555) 4-33-92</a>
											</h2>
											<h2>Телефон: <a href="tel: +37355540968"> (555) 4-09-68</a></h2>
											<h2>Диспетчерская: <a href="tel: +37355534506"> (555) 3-45-06</a></h2>
											<h2>Служба учёта: <a href="tel: +37355540968"> (555) 4-09-68</a></h2>
											<h2>Служба учёта: <a href="tel: +37355533328"> (555) 3-33-28</a></h2>
											<h2>Обслуживание водомеров: <a href="tel: +37355539955"> (555) 3-99-55</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/rybnitsa.png' ?>" style="height: 300px;">
									</div>
								</div>
								<div id="dybossary">
									<div class="content">
										<div>
											<h2>Адрес: г. Дубоссары, ул. Комсомольская, д.71</h2>
											<h2>Email: <a href="mailto:duvkh@idknet.com">duvkh@idknet.com</a></h2>
											<h2>Приёмная: <a href="tel: +37321534390"> (215) 3-43-90</a></h2>
											<h2>Факс:<a href="tel: +37321525440"> (215) 2-54-40</a>
											</h2>
											<h2>Диспетчерская: <a href="tel: +37321535671"> (215) 3-56-71</a></h2>
											<h2>Служба учёта: <a href="tel: +37321535531"> (215) 3-55-31</a></h2>
											<h2>Обслуживание водомеров: <a href="tel: +37321532796"> (215) 3-27-96</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/dybosary.png' ?>" style="height: 300px;">
									</div>
								</div>
								<div id="kamenka">
									<div class="content">
										<div>
											<h2>Адрес: г.Каменка, ул. Кирова, 171 Б</h2>
											<h2>Email: <a href="mailto:kamenka-07@mail.ru">kamenka-07@mail.ru</a></h2>
											<h2>Приёмная: <a href="tel: +37321621180"> (216) 2-11-80</a></h2>
											<h2>Факс:<a href="tel: +37321621180"> (216) 2-11-80</a>
											</h2>
											<h2>Диспетчерская: <a href="tel: +37321624546"> (216) 2-45-46</a></h2>
											<h2>РРИЦ: <a href="tel: +37321622370"> (216) 2-23-70</a></h2>
											<h2>Служба учёта: <a href="tel: +37321621180"> (216) 2-11-80</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/kamenka.png' ?>" style="height: 300px;">
									</div>
								</div>
								<div id="grigoriopol">
									<div class="content">
										<div>
											<h2>Адрес: г. Григориополь, ул. Ленина, д.12</h2>
											<h2>Email: <a href="mailto:grigoriopol-7@idknet.com">grigoriopol-7@idknet.com</a></h2>
											<h2>Приёмная: <a href="tel: +37321033994"> (210) 3-39-94</a></h2>
											<h2>Факс:<a href="tel: +37321033994"> (210) 3-39-94</a>
											</h2>
											<h2>Диспетчерская: <a href="tel: +37321035056"> (210) 3-50-56</a></h2>
											<h2>Служба учёта: <a href="tel: +37321032462"> (210) 3-24-62</a></h2>
											<h2>Обслуживание водомеров: <a href="tel: +37321032938"> (210) 3-29-38</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/grigoriopol.png' ?>" style="height: 300px;">
									</div>
								</div>
								<div id="slobodzeya">
									<div class="content">
										<div>
											<h2>Адрес: г. Слободзея ул. Тираспольская. 2 Б</h2>
											<h2>Email: <a href="mailto:water_slobodzey@mail.ru">water_slobodzey@mail.ru</a></h2>
											<h2>Приёмная: <a href="tel: +37355724522"> (557) 2-45-22</a></h2>
											<h2>Факс:<a href="tel: +37355724522"> (557) 2-45-22</a>
											</h2>
											<h2>Диспетчерская: <a href="tel: +37355722640"> (557) 2-26-40</a></h2>
											<h2>Служба учёта: <a href="tel: +37355724286"> (557) 2-42-86</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/slobodzeya.png' ?>" style="height: 300px;">
									</div>
								</div>
								<div id="dnestrovsk">
									<div class="content">
										<div>
											<h2>Адрес: г.Днестровск, ул. Первомайская д.5</h2>
											<h2>Email: <a href="mailto:vivdnestr@gmail.com">vivdnestr@gmail.com</a></h2>
											<h2>Приёмная: <a href="tel: +37321930282"> (219) 3-02-82</a></h2>
											<h2>Факс:<a href="tel: +37321930282"> (219) 3-02-82</a>
											</h2>
											<h2>Диспетчерская: <a href="tel: +37321971666"> (219) 7-16-66</a></h2>
											<h2>РРИЦ: <a href="tel: +37321930610"> (219) 3-06-10</a></h2>
											<h2>Служба учёта: <a href="tel: +37321930703"> (219) 3-07-03</a></h2>
										</div>
										<img src="<?php echo get_template_directory_uri(  ) . '/assets/img/contacts/dnestrovsk.png' ?>" style="height: 300px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- #endregion Section Contacts-->

			<!-- #region Section Partners-->
			<section class="partners">
				<div class="partners__container">
					<div class="partners__title">Возможно вы искали!</div>
					<div class="partners__content">
						<div class="partners__item">
							<a href="http://president.gospmr.org/"><img class="partners__image"
									src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/president.png' ?>" alt="">
								<div class="partners__hidetitle">
									<h2>Президент ПМР</h2>
								</div>
							</a>
						</div>
						<div class="partners__item">
							<a href="http://gov-pmr.org/"><img class="partners__image" src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/pravitelstvo.png' ?>"
									alt="">
								<div class="partners__hidetitle">
									<h2>Правительство ПМР</h2>
								</div>
							</a>
						</div>
						<div class="partners__item">
							<a href="http://www.vspmr.org/"><img class="partners__image" src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/vs.png' ?>" alt="">
								<div class="partners__hidetitle">
									<h2>Верховный совет ПМР</h2>
								</div>
							</a>
						</div>
						<div class="partners__item">
							<a href="http://minfin.gospmr.org/"><img class="partners__image" src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/minfin.png' ?>"
									alt="">
								<div class="partners__hidetitle">
									<h2>Министерство финансов ПМР</h2>
								</div>
							</a>
						</div>
						<div class="partners__item">
							<a href="http://ecology-pmr.org/"><img class="partners__image" src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/minselhoz.png' ?>"
									alt="">
								<div class="partners__hidetitle">
									<h2>Министерство сельского хозяйства и природных ресурсов ПМР</h2>
								</div>
							</a>
						</div>
						<div class="partners__item">
							<a href="http://mer.gospmr.org/"><img class="partners__image" src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/mineconom.png' ?>"
									alt="">
								<div class="partners__hidetitle">
									<h2>Министерство экономического развития ПМР</h2>
								</div>
							</a>
						</div>
						<div class="partners__item">
							<a href="http://justice.idknet.com/"><img class="partners__image" src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/minjust.png' ?>"
									alt="">
								<div class="partners__hidetitle">
									<h2>Министерство юстиции ПМР</h2>
								</div>
							</a>
						</div>
						<div class="partners__item">
							<a href="http://customs.gospmr.org/"><img class="partners__image" src="<?php echo get_template_directory_uri(  ) . '/assets/img/partners/gtk.png' ?>"
									alt="">
								<div class="partners__hidetitle">
									Государственный таможенный комитет ПМР
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- #endregion Section Partners-->
		</main>

<?php
get_footer();
