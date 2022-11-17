<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-test-theme
 */

?>

<footer class="footer">
			<div class="ocean">
				<div class="wave"></div>
				<div class="wave"></div>
				<div class="wave"></div>
			</div>
			<div class="footer__top">
				<div class="footer__container">
					<div class="footer__links">
						<h1>Абонентам</h1>
						<a class="footerlink" href="#">Ответы на вопросы</a>
						<a class="footerlink" href="#">Нормативно-правовая база</a>
						<a class="footerlink" href="#">Противодействие коррупции</a>
						<a class="footerlink" href="#">Обратная связь</a>
					</div>
					<div class="footer__contacts">
						<h1>Контакты</h1>
						<span>3300, Тирасполь, Луначарского, д.9</span>
						<a href="tel:+37353393397" class="footerlink" target="_blank" rel="noopener noreferrer">(533)
							9-33-97</a>
						<a class="footerlink" href="mailto:viv@vodokanal-pmr.com">viv@vodokanal-pmr.com</a>
					</div>
					<div class="footer__tel">
						<h1><a class="footerlink" href="tel:+3735331099" style="font-size: 31px;">1099</a><br> Единый номер
						</h1>
						<a class="footerlink"
							href="https://invite.viber.com/?g2=AQAdmKDfP22GMkup4jFYeIlwKqx1iJRy3ID9gTUWBgY5B95vbAd4mv3VhhAVNp4%2B&lang=ru"
							target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/viber.svg' ?>" alt=""></a>
						<a class="footerlink" href="https://t.me/joinchat/LKU85jXkhDFjYmFi" target="_blank"
							rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(  ) . '/assets/img/tg.svg' ?>" alt=""></a>
					</div>
				</div>
			</div>
			<div class="footer__btm">
				<div class="footerbtm__container">
					<div class="footer__copy">
						<span class="copy">©</span>ГУП "Водоснабжение и водоотведение", <?php echo date("Y"); ?>
					</div>
					<div class="footer__politics"><a href="#" target="_blank" rel="noopener noreferrer">Политика
							конфиденциальности</a></div>
					<div class="footer__creator">GG Creators</div>
				</div>
			</div>
		</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
