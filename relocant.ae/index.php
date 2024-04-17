<?php 
$DefData = [
	"Title" => "<span>Оформим или продлим<br data-v-c046ed3e=''/>резидентскую визу в ОАЭ ОТ 1 ГОДА ДО 10 ЛЕТ</span>",
	"Phone" => "+971 50 719 0519",
];
require_once("PL/UTMCheck.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="icon" type="image/png" href="/icon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta
			name="description"
			content="Резидентская виза Объединённых Арабских Эмиратов всего за 7 дней"
		/>
		<title>RELOCANT</title>
		<style>
			.hide {
				display: none !important;
			}
			@media (min-width: 1001px) {
				.item-selected {
					margin-bottom: 50px !important;
				}
			}
			@media (max-width: 1000px) {
				.carousel__slide {
					width: 180% !important;
				}
			}
		</style>
		<!-- <link rel="preload" href="assets/index.css" as="style" /> -->
		<link rel="stylesheet" crossorigin href="assets/index.css" />
		<!-- <link rel="preload" href="assets/slider.js" as="script" /> -->
		<!-- <link rel="preload" href="assets/index.js" as="script" /> -->
		<link
			rel="preload"
			href="/header-img/header-building.webp"
			as="image"
			type="image/webp"
		/>
		<link rel="preload" href="/dust.webp" as="image" />
		<link
			rel="preload"
			href="/header-img/header-building.webp"
			as="image"
		/>
		<link
			rel="preload"
			href="/header-img/sky.webp"
			as="image"
			type="image/png"
		/>
	</head>
	<body>
		<div id="app" data-v-app="">
			<div
				data-v-61485933=""
				id="phone-modal"
				data-v-719c0bb5=""
				class="modal hide"
				style="--b6ff6232: url('/modal-msg-bg.jpg')"
			>
				<div data-v-61485933="" class="modal-content">
					<div data-v-61485933="" class="modal-top">
						<div
							data-v-61485933=""
							class="close-button"
							onclick="document.getElementById('phone-modal').classList.toggle('hide');"
						>
							<img
								data-v-61485933=""
								src="/icns/close.svg"
								style="vertical-align: middle; width: 2em"
							/>
						</div>
					</div>
					<div data-v-61485933="" style="padding-bottom: 2em">
						<div data-v-61485933="">
							<div
								data-v-719c0bb5=""
								class="modal-contact-messenger"
							>
								<h1 data-v-719c0bb5="">
									введите свой номер телефона и мы свяжемся с
									вами
								</h1>
								<form class="send_mail"
									action="mail.php"
									method="post"
									data-v-719c0bb5=""
								>
									<input
										data-v-719c0bb5=""
										placeholder="НОМЕР ТЕЛЕФОНА"
										name="username"
										required=""
										aria-required=""
									/><!----><!---->
									<div data-v-719c0bb5="" class="check-group">
										<input
											data-v-719c0bb5=""
											type="checkbox"
											required=""
											checked
										/>
										<p data-v-719c0bb5="">
											Я согласен на обработку персональных
											данных
										</p>
									</div>
									<!----><button
										data-v-719c0bb5=""
										type="submit"
										class="fancy-button"
									>
										ОТПРАВИТЬ
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div
				data-v-61485933=""
				id="messagers-modal"
				data-v-719c0bb5=""
				class="modal hide"
				style="--b6ff6232: url('/modal-msg-bg.jpg')"
			>
				<div data-v-61485933="" class="modal-content">
					<div data-v-61485933="" class="modal-top">
						<div
							data-v-61485933=""
							class="close-button"
							onclick="document.getElementById('messagers-modal').classList.toggle('hide');"
						>
							<img
								data-v-61485933=""
								src="/icns/close.svg"
								style="vertical-align: middle; width: 2em"
							/>
						</div>
					</div>
					<div data-v-61485933="" style="padding-bottom: 2em">
						<div data-v-61485933="">
							<div
								data-v-719c0bb5=""
								class="modal-contact-messenger"
							>
								<h1 data-v-719c0bb5="">
									введите ваши данные и мы напишем вам в
									мессенджере
								</h1>
								<form class="send_mail"
									action="mail.php"
									method="post"
									data-v-719c0bb5=""
								>
									<input
										data-v-719c0bb5=""
										placeholder="НОМЕР ТЕЛЕФОНА"
										name="username"
										required=""
										aria-required=""
									/>
									<p
										data-v-719c0bb5=""
										style="margin-top: 1em"
									>
										ПО ЖЕЛАНИЮ, ВЫБЕРИТЕ УДОБНЫЙ ВАМ
										МЕССЕНДЖЕР
										<!---->
									</p>
									<div data-v-719c0bb5="" class="socials">

										<img data-v-719c0bb5="" id="messagers-modal-tg" class="icon" src="assets/telegram.svg" alt="telegram" 
										onclick="this.classList.toggle('selected');document.getElementById('messagers-modal-ws').classList.remove('selected'); document.getElementById('messagers-modal-type').value = 'Телеграмм';">

										<img data-v-719c0bb5="" id="messagers-modal-ws" class="icon" src="assets/whatsapp.svg" alt="whatsapp" 
										onclick="this.classList.toggle('selected');document.getElementById('messagers-modal-tg').classList.remove('selected'); document.getElementById('messagers-modal-type').value = 'Ватсап';">

									</div>
									<div data-v-719c0bb5="" class="check-group">
										<input
											data-v-719c0bb5=""
											checked
											type="checkbox"
											required=""
										/>
										<p data-v-719c0bb5="">
											Я согласен на обработку персональных
											данных
										</p>
									</div>
									<!---->
									<input
										type="hidden"
										value=""
										name="type"
										id="messagers-modal-type"
									/>
									<button
										data-v-719c0bb5=""
										type="submit"
										class="fancy-button"
									>
										ОТПРАВИТЬ
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div
				data-v-61485933=""
				id="all-modal"
				data-v-719c0bb5=""
				class="modal hide"
				style="--b6ff6232: url('/modal-msg-bg.jpg')"
			>
				<div data-v-61485933="" class="modal-content">
					<div data-v-61485933="" class="modal-top">
						<div
							data-v-61485933=""
							class="close-button"
							onclick="document.getElementById('all-modal').classList.toggle('hide');"
						>
							<img
								data-v-61485933=""
								src="/icns/close.svg"
								style="vertical-align: middle; width: 2em"
							/>
						</div>
					</div>
					<div data-v-61485933="" style="padding-bottom: 2em">
						<div data-v-61485933="">
							<div
								data-v-719c0bb5=""
								class="modal-contact-messenger"
							>
								<h1 data-v-719c0bb5="">
									введите ваши данные и мы свяжемся с вами
									удобным для вас способом
								</h1>
								<form class="send_mail"
									action="mail.php"
									method="post"
									data-v-719c0bb5=""
								>
									<input
										data-v-719c0bb5=""
										placeholder="НОМЕР ТЕЛЕФОНА"
										name="username"
										required=""
										aria-required=""
									/>
									<p
										data-v-719c0bb5=""
										style="margin-top: 1em"
									>
										ПО ЖЕЛАНИЮ, ВЫБЕРИТЕ УДОБНЫЙ ВАМ
										МЕССЕНДЖЕР
										<span data-v-719c0bb5=""
											>ИЛИ ТЕЛЕФОН</span
										>
									</p>
									<div data-v-719c0bb5="" class="socials">
										<img data-v-719c0bb5="" style="transform: scale(0.85);" id="all-modal-phone" class="icon" src="assets/phone.png" alt="phone" 
										onclick="this.classList.add('selected');document.getElementById('all-modal-ws').classList.remove('selected');document.getElementById('all-modal-tg').classList.remove('selected'); document.getElementById('all-modal-type').value = 'Телефон';">
										
										<img data-v-719c0bb5="" id="all-modal-tg" class="icon" src="assets/telegram.svg" alt="telegram" 
										onclick="this.classList.add('selected');document.getElementById('all-modal-ws').classList.remove('selected');document.getElementById('all-modal-phone').classList.remove('selected'); document.getElementById('all-modal-type').value = 'Телеграмм';">

										<img data-v-719c0bb5="" id="all-modal-ws" class="icon" src="assets/whatsapp.svg" alt="whatsapp" 
										onclick="this.classList.add('selected');document.getElementById('all-modal-tg').classList.remove('selected');document.getElementById('all-modal-phone').classList.remove('selected'); document.getElementById('all-modal-type').value = 'Ватсап';">
									</div>
									<div data-v-719c0bb5="" class="check-group">
										<input
											data-v-719c0bb5=""
											type="checkbox"
											required=""
											checked
										/>
										<p data-v-719c0bb5="">
											Я согласен на обработку персональных
											данных
										</p>
									</div>
									<!---->
									<input
										type="hidden"
										value=""
										name="type"
										id="all-modal-type"
									/>
									<button
										data-v-719c0bb5=""
										type="submit"
										class="fancy-button"
									>
										ОТПРАВИТЬ
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div
				data-v-61485933=""
				id="tg-modal"
				data-v-719c0bb5=""
				class="modal hide"
				style="--b6ff6232: url('/modal-msg-bg.jpg')"
			>
				<div data-v-61485933="" class="modal-content">
					<div data-v-61485933="" class="modal-top">
						<div
							data-v-61485933=""
							class="close-button"
							onclick="document.getElementById('tg-modal').classList.toggle('hide');"
						>
							<img
								data-v-61485933=""
								src="/icns/close.svg"
								style="vertical-align: middle; width: 2em"
							/>
						</div>
					</div>
					<div data-v-61485933="" style="padding-bottom: 2em">
						<div data-v-61485933="">
							<div
								data-v-719c0bb5=""
								class="modal-contact-messenger"
							>
								<h1 data-v-719c0bb5="">
									введите ваши данные и мы напишем вам в
									telegram
								</h1>
								<form class="send_mail"
									action="mail.php"
									method="post"
									data-v-719c0bb5=""
								>
									<input
										data-v-719c0bb5=""
										type="text"
										placeholder="НОМЕР ТЕЛЕФОНА ИЛИ ИМЯ ПОЛЬЗОВАТЕЛЯ"
										name="username"
										required=""
									/><!----><!---->
									<div data-v-719c0bb5="" class="check-group">
										<input
											data-v-719c0bb5=""
											type="checkbox"
											checked
											required=""
										/>
										<p data-v-719c0bb5="">
											Я согласен на обработку персональных
											данных
										</p>
									</div>
									<!---->
									<input
										type="hidden"
										value="Телеграмм"
										name="type"
										id="messagers-modal-type"
									/>
									<button
										data-v-719c0bb5=""
										type="submit"
										class="fancy-button"
									>
										ОТПРАВИТЬ
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div
				data-v-61485933=""
				id="ws-modal"
				data-v-719c0bb5=""
				class="modal hide"
				style="--b6ff6232: url('/modal-msg-bg.jpg')"
			>
				<div data-v-61485933="" class="modal-content">
					<div data-v-61485933="" class="modal-top">
						<div
							data-v-61485933=""
							class="close-button"
							onclick="document.getElementById('ws-modal').classList.toggle('hide');"
						>
							<img
								data-v-61485933=""
								src="/icns/close.svg"
								style="vertical-align: middle; width: 2em"
							/>
						</div>
					</div>
					<div data-v-61485933="" style="padding-bottom: 2em">
						<div data-v-61485933="">
							<div
								data-v-719c0bb5=""
								class="modal-contact-messenger"
							>
								<h1 data-v-719c0bb5="">
									введите ваши данные и мы напишем вам в
									whatsapp
								</h1>
								<form class="send_mail"
									action="mail.php"
									method="post"
									data-v-719c0bb5=""
								>
									<input
										data-v-719c0bb5=""
										placeholder="НОМЕР ТЕЛЕФОНА"
										name="username"
										required=""
										aria-required=""
									/><!----><!---->
									<div data-v-719c0bb5="" class="check-group">
										<input
											data-v-719c0bb5=""
											type="checkbox"
											checked
											required=""
										/>
										<p data-v-719c0bb5="">
											Я согласен на обработку персональных
											данных
										</p>
									</div>
									<!---->
									<input
										type="hidden"
										value="Ватсап"
										name="type"
										id="messagers-modal-type"
									/>
									<button
										data-v-719c0bb5=""
										type="submit"
										class="fancy-button"
									>
										ОТПРАВИТЬ
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div
				data-v-61485933=""
				id="zoom-modal"
				data-v-719c0bb5=""
				class="modal hide"
				style="--b6ff6232: url('/modal-zoom-bg.jpg')"
			>
				<div data-v-61485933="" class="modal-content">
					<div data-v-61485933="" class="modal-top">
						<div
							data-v-61485933=""
							class="close-button"
							onclick="document.getElementById('zoom-modal').classList.toggle('hide');"
						>
							<img
								data-v-61485933=""
								src="/icns/close.svg"
								style="vertical-align: middle; width: 2em"
							/>
						</div>
					</div>
					<div data-v-61485933="" style="padding-bottom: 2em">
						<div data-v-61485933="">
							<div
								data-v-719c0bb5=""
								class="modal-contact-messenger zoom"
								style="width: 90%"
							>
								<h1 data-v-719c0bb5="">
									Введите ваши данные для конференции
								</h1>
								<img
									data-v-719c0bb5=""
									src="/assets/zoom-CUWC7mcD.svg"
									style="width: 8em"
								/>
								<form class="send_mail"
									data-v-719c0bb5=""
									action="mail.php"
									method="post"
									style="width: 100%"
								>
								<div data-v-719c0bb5="" class="zoom-input">

									<input
										data-v-719c0bb5=""
										type="tel"
										name="username"
										required=""
										placeholder="Введите телефон"
									/>

									<label class="form-zoom" data-custom-date>
										<div class="custom-input">Введите дату</div>
										<input type="date" name="date1" 
											data-v-719c0bb5=""
											min="2024-03-27"
											required=""
											checked
											value="дд.мм.гггг"
										/>
									</label>

									<label class="form-zoom" data-custom-date>
										<div class="custom-input">Введите время</div>
										<input type="time" name="date2" 
											data-v-719c0bb5=""
											min="12:00"
											max="24:00"
											required=""
										/>
									</label>

									</div>
									<div data-v-719c0bb5="" class="check-group">
										<input
											data-v-719c0bb5=""
											type="checkbox"
											required=""
											checked
										/>
										<p data-v-719c0bb5="">
											Я согласен на обработку персональных
											данных
										</p>
									</div>
									<!---->
									<input
										type="hidden"
										value="ZOOM"
										name="type"
										id="messagers-modal-type"
									/><button
										data-v-719c0bb5=""
										type="submit"
										class="fancy-button"
									>
										ОТПРАВИТЬ
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!---->
			<!---->
			<!---->
			<div data-v-c046ed3e="" class="page">
				<div data-v-c046ed3e="" class="img-building"></div>
				<div data-v-c046ed3e="" class="bg">
					<main data-v-c046ed3e="">
						<header data-v-a4809a0c="" data-v-c046ed3e="">
							<div data-v-a4809a0c="" class="logo">
								<img
									data-v-a4809a0c=""
									href="#"
									src="assets/logo-CdUlCAu5.svg"
									width="162"
									height="48"
									alt="logo"
								/>
							</div>
							<div data-v-a4809a0c="" class="phone">
								<img
									onclick="document.getElementById('phone-modal').classList.toggle('hide');"
									data-v-a4809a0c=""
									src="data:image/svg+xml,%3csvg%20width='60'%20height='60'%20viewBox='0%200%2060%2060'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='30'%20cy='30'%20r='29.5'%20stroke='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M23%2022C23%2020.3431%2024.3431%2019%2026%2019H34C35.6569%2019%2037%2020.3431%2037%2022V38C37%2039.6569%2035.6569%2041%2034%2041H26C24.3431%2041%2023%2039.6569%2023%2038V22ZM26%2021C25.4477%2021%2025%2021.4477%2025%2022V38C25%2038.5523%2025.4477%2039%2026%2039H34C34.5523%2039%2035%2038.5523%2035%2038V22C35%2021.4477%2034.5523%2021%2034%2021H26Z'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M31.5%2038H28.5V36H31.5V38Z'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M26%2020C26%2019.4477%2026.4477%2019%2027%2019H33C33.5523%2019%2034%2019.4477%2034%2020V20.5C34%2022.1569%2032.6569%2023.5%2031%2023.5H29C27.3431%2023.5%2026%2022.1569%2026%2020.5V20ZM28.1338%2021C28.3067%2021.2989%2028.6299%2021.5%2029%2021.5H31C31.3701%2021.5%2031.6933%2021.2989%2031.8662%2021H28.1338Z'%20fill='white'/%3e%3c/svg%3e"
									alt="tel"
								/>
								<div data-v-a4809a0c="">
									<a
										data-v-a4809a0c=""
										class="phone-number"
										href="tel:+<?php echo $PageUTMData["Phone"]["PhoneLink"];?>"
										><?php echo $PageUTMData["Phone"]["PhoneShow"];?></a
									><a
										onclick="document.getElementById('phone-modal').classList.toggle('hide');"
										class="call"
										href="#"
										>Заказать звонок</a
									>
								</div>
							</div>
						</header>
						<h3 data-v-c046ed3e="" class="rel">
							РЕЗИДЕНТСКАЯ ВИЗА<br data-v-c046ed3e="" />ВСЕГО ЗА 7
							ДНЕЙ
						</h3>
						<h1 data-v-c046ed3e="">
							Объединённые Арабские Эмираты
						</h1>
						<div
							data-v-c046ed3e=""
							class="slide1"
							style="margin-top: -35px"
						>
							<h3 data-v-c046ed3e="" class="subtitle">
								<span>
									<!-- Оформим или продлим<br data-v-c046ed3e="" />
									резидентскую визу в ОАЭ ОТ 1 ГОДА ДО 10 ЛЕТ -->
									<?php echo $PageUTMData["Title"]; ?>
								</span>
							</h3>
						</div>
						<div data-v-c046ed3e="" class="rel">
							<div
								data-v-5896af8b=""
								data-v-c046ed3e=""
								class="features-wrapper"
							>
								<div data-v-5896af8b="" class="features">
									<div class="feature" data-v-5896af8b="">
										<img
											src="/assets/cc-Di3u6Lpx.svg"
											data-v-5896af8b=""
											alt="payments"
											height="100"
											width="100"
										/>
										<p data-v-5896af8b="">
											Без скрытых платежей
										</p>
									</div>
									<div class="feature" data-v-5896af8b="">
										<img
											src="/assets/diamond-YV5-JgkN.svg"
											data-v-5896af8b=""
											height="100"
											width="100"
											alt="diamond"
										/>
										<p data-v-5896af8b="">Всё включено</p>
									</div>
									<div
										class="arrows"
										data-v-5896af8b=""
									></div>
									<div
										data-v-5896af8b=""
										class="button-container"
									>
										<div
											data-v-5896af8b=""
											class="fancy-button"
										>
											<div
												data-v-5896af8b=""
												class="contact-text"
												onclick="document.getElementById('messagers-modal').classList.toggle('hide');"
											>
												<h1 data-v-5896af8b="">
													НАПИШИТЕ НАМ
												</h1>
												<p data-v-5896af8b="">
													в мессенджере сейчас!
												</p>
											</div>
										</div>
									</div>
									<div
										class="arrows right"
										data-v-5896af8b=""
									></div>
									<div class="feature" data-v-5896af8b="">
										<img
											src="/assets/contract-LtWtikt2.svg"
											data-v-5896af8b=""
											height="100"
											width="100"
											alt="agreement"
										/>
										<p data-v-5896af8b="">
											Работаем по договору
										</p>
									</div>
									<div class="feature" data-v-5896af8b="">
										<img
											src="/assets/money-gtXifAwC.svg"
											data-v-5896af8b=""
											height="100"
											width="100"
											alt="return"
										/>
										<p data-v-5896af8b="">
											100% Возврат денег
										</p>
									</div>
								</div>
								<div
									data-v-5896af8b=""
									class="features mobile"
									style="margin-bottom: 4em"
								>
									<div
										data-v-5896af8b=""
										onclick="document.getElementById('messagers-modal').classList.toggle('hide');"
										class="fancy-button"
									>
										<div
											data-v-5896af8b=""
											class="contact-text"
										>
											<h1 data-v-5896af8b="">
												НАПИШИТЕ НАМ
											</h1>
											<p data-v-5896af8b="">
												в мессенджере сейчас!
											</p>
										</div>
									</div>
									<div
										data-v-5896af8b=""
										class="socials"
										style="margin-top: 2em"
									>
										<img
											data-v-5896af8b=""
											onclick="document.getElementById('tg-modal').classList.toggle('hide');"
											src="assets/telegram.svg"
											style="width: 64px;height: 64px;"
											alt="telegram"
										/>
										<img
											data-v-5896af8b=""
											onclick="document.getElementById('ws-modal').classList.toggle('hide');"
											src="assets/whatsapp.svg"
											style="width: 64px;height: 64px;"
											alt="instagram"
										/>
									</div>
								</div>
								<div class="features mobile" data-v-5896af8b="">
									<div
										class="feature-grid"
										data-v-5896af8b=""
									>
										<div class="feature" data-v-5896af8b="">
											<img
												src="/assets/cc-Di3u6Lpx.svg"
												alt="payments"
												width="100"
												height="100"
												data-v-5896af8b=""
											/>
											<p data-v-5896af8b="">
												Без скрытых платежей
											</p>
										</div>
										<div class="feature" data-v-5896af8b="">
											<img
												src="/assets/diamond-YV5-JgkN.svg"
												alt="diamond"
												width="100"
												height="100"
												data-v-5896af8b=""
											/>
											<p data-v-5896af8b="">
												Всё включено
											</p>
										</div>
										<div class="feature" data-v-5896af8b="">
											<img
												src="/assets/contract-LtWtikt2.svg"
												alt="agreement"
												width="100"
												height="100"
												data-v-5896af8b=""
											/>
											<p data-v-5896af8b="">
												Работаем по договору
											</p>
										</div>
										<div class="feature" data-v-5896af8b="">
											<img
												src="/assets/money-gtXifAwC.svg"
												alt="return"
												width="100"
												height="100"
												data-v-5896af8b=""
											/>
											<p data-v-5896af8b="">
												100% Возврат денег
											</p>
										</div>
									</div>
								</div>
								<div
									data-v-5896af8b=""
									class="socials no-mobile"
								>
									<img
										data-v-5896af8b=""
										onclick="document.getElementById('tg-modal').classList.toggle('hide');"
										src="assets/telegram.svg"
										alt="telegram"
										style="width: 64px;height: 64px;"
									/><img
										data-v-5896af8b=""
										onclick="document.getElementById('ws-modal').classList.toggle('hide');"
										src="assets/whatsapp.svg"
										alt="whatsapp"
										style="width: 64px;height: 64px;"
									/>
								</div>
								<img
									data-v-5896af8b=""
									class="arrow-down"
									src="/arrow-down.svg"
									width="12"
									height="48"
									alt="arrow-down"
								/>
							</div>
							<div
								data-v-8aaa8106=""
								data-v-c046ed3e=""
								class="main"
							>
								<div data-v-8aaa8106="" class="image-wrapper">
									<img
										data-v-8aaa8106=""
										class="lazy"
										data-src="/assets/chel-SQiY2Tyc.webp"
										alt="man"
										width="504"
										height="620"
									/>
								</div>
								<div data-v-8aaa8106="" class="book mobile">
									<h3 data-v-8aaa8106="">
										Забронируйте цену сейчас!
									</h3>
									<button
										data-v-8aaa8106=""
										onclick="document.getElementById('all-modal').classList.toggle('hide');"
										class="fancy-button"
									>
										ОФОРМИТЬ
									</button>
								</div>
								<div data-v-8aaa8106="" class="description">
									<h1 data-v-8aaa8106="">
										ДО
										<span
											data-v-8aaa8106=""
											id="date"
											class="promotion"
										></span>
									</h1>
									<p data-v-8aaa8106="">
										оформите или продлите визу в ОАЭ всего
										от
									</p>
									<h1
										data-v-8aaa8106=""
										id="promotion-vault"
										class="text"
									>
										<span
											data-v-8aaa8106=""
											class="promotion"
											>1400</span
										>
										USD
									</h1>
								</div>
								<div data-v-8aaa8106="" class="book">
									<h3 data-v-8aaa8106="">
										Забронируйте цену сейчас!
									</h3>
									<button
										onclick="document.getElementById('phone-modal').classList.toggle('hide');"
										data-v-8aaa8106=""
										class="fancy-button"
									>
										ОФОРМИТЬ
									</button>
								</div>
							</div>
							<h1 data-v-c046ed3e="" class="heading">FAQ</h1>
						</div>
					</main>
				</div>
				<div data-v-c046ed3e="" class="faq-background rel">
					<img
						data-v-c046ed3e=""
						class="cloud"
						data-src="/cloud.webp"
						class="lazy"
						alt="cloud"
					/>
					<main data-v-c046ed3e="">
						<div data-v-4e863fe0="" data-v-c046ed3e="" class="main">
							<div
								data-v-6685df05=""
								data-v-4e863fe0=""
								class="entry"
								onclick="document.getElementById('ask-1').classList.toggle('hide');"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										Сколько времени занимает процесс
										оформления ВНЖ в ОАЭ?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-1"
									class="content hide"
								>
									В процессе оформления (ВНЖ) в Объединённых Арабских Эмиратах (ОАЭ), обычно требуется около 7 рабочих дней. Этот период времени включает в себя подачу всех необходимых документов и их последующую обработку соответствующими органами. Однако, стоит учитывать, что этот срок является средним и может варьироваться в зависимости от конкретных обстоятельств и требований.
								</p>
							</div>
							<div
								data-v-6685df05=""
								data-v-4e863fe0=""
								class="entry"
								onclick="document.getElementById('ask-2').classList.toggle('hide');"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										Есть ли скрытые платежи при оформлении
										визы?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-2"
									class="content hide"
								>
									При оформлении визы скрытых платежей нет. Все необходимые платежи полностью включены в первоначальную стоимость услуги, составляющую 4990 AED. Это обеспечивает прозрачность и понимание всех затрат заранее.
								</p>
							</div>
							<div
								data-v-6685df05=""
								onclick="document.getElementById('ask-3').classList.toggle('hide');"
								data-v-4e863fe0=""
								class="entry"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										Могу ли я спонсировать визы для своей
										семьи?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-3"
									class="content hide"
								>
									Да, конечно! Мы предлагаем услугу спонсирования виз для членов вашей семьи. Однако, для того чтобы воспользоваться этой возможностью, вы должны сначала получить Emirates ID. После успешного получения вашего Emirates ID, вы сможете спонсировать визы для своих близких.
								</p>
							</div>
							<div
								data-v-6685df05=""
								onclick="document.getElementById('ask-4').classList.toggle('hide');"
								data-v-4e863fe0=""
								class="entry"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										Сколько стоит оформление резидентской
										визы в ОАЭ?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-4"
									class="content hide"
								>
									Оформление резидентской визы в ОАЭ на 1 год стоит 4990 AED "под ключ". Эта цена включает все необходимые услуги и сборы, связанные с процессом получения визы.
							</div>
							<div
								data-v-6685df05=""
								onclick="document.getElementById('ask-5').classList.toggle('hide');"
								data-v-4e863fe0=""
								class="entry"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										Что делать, если мою заявку отклонили
										ранее?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-5"
									class="content hide"
								>
									Если вашу заявку на визу отклонили ранее, не стоит отчаиваться. Вам следует подавать заявку снова, и мы готовы помочь в этом процессе. Благодаря нашему опыту, мы знаем, как правильно подготовить и подать документы, чтобы максимально минимизировать риск повторного отказа. Мы поможем вам на каждом этапе подачи заявки, чтобы увеличить ваши шансы на успешное получение визы.
								</p>
							</div>
							<div
								data-v-6685df05=""
								onclick="document.getElementById('ask-6').classList.toggle('hide');"
								data-v-4e863fe0=""
								class="entry"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										Где я могу проживать, имея резидентскую
										визу ОАЭ?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-6"
									class="content hide"
								>
									С резидентской визой ОАЭ вы можете проживать где угодно в пределах страны, а также за её пределами. Единственное требование — вам необходимо возвращаться в ОАЭ как минимум один раз каждые шесть месяцев, чтобы подтвердить свой резидентский статус. В остальном, нет никаких ограничений на ваше место проживания, предоставляя вам свободу выбора места, которое наилучшим образом соответствует вашим нуждам и предпочтениям.
								</p>
							</div>
							<div
								data-v-6685df05=""
								onclick="document.getElementById('ask-7').classList.toggle('hide');"
								data-v-4e863fe0=""
								class="entry"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										На какой срок выдается резидентская виза
										ОАЭ?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-7"
									class="content hide"
								>
									Срок действия резидентской визы в ОАЭ варьируется от 1 года до 10 лет в случае получения так называемой "золотой визы". Также существуют варианты на 2, 3 и 5 лет. Конкретный срок зависит от индивидуальных потребностей и критериев, которые вы удовлетворяете. Возможность выбора срока позволяет гибко подойти к планированию вашего пребывания в стране, исходя из ваших личных и профессиональных обстоятельств.
								</p>
							</div>
							<div
								data-v-6685df05=""
								onclick="document.getElementById('ask-8').classList.toggle('hide');"
								data-v-4e863fe0=""
								class="entry"
							>
								<div data-v-6685df05="" class="entry-heading">
									<h3 data-v-6685df05="">
										Может ли быть отказано в получении
										резидентской визы ОАЭ?
									</h3>
									<img
										data-v-6685df05=""
										class=""
										src="data:image/svg+xml,%3csvg%20width='20'%20height='20'%20viewBox='0%200%2020%2020'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3ccircle%20cx='10'%20cy='10'%20r='10'%20fill='white'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M11.2071%2014.5V6C11.2071%205.44772%2010.7594%205%2010.2071%205C9.65482%205%209.20711%205.44772%209.20711%206V14.5H11.2071Z'%20fill='%23A38668'/%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M10.2071%2013.5858L8.12132%2011.5C7.7308%2011.1095%207.09763%2011.1095%206.70711%2011.5C6.31658%2011.8905%206.31658%2012.5237%206.70711%2012.9142L9.5%2015.7071C9.89052%2016.0976%2010.5237%2016.0976%2010.9142%2015.7071L13.7071%2012.9142C14.0976%2012.5237%2014.0976%2011.8905%2013.7071%2011.5C13.3166%2011.1095%2012.6834%2011.1095%2012.2929%2011.5L10.2071%2013.5858Z'%20fill='%23A38668'/%3e%3c/svg%3e"
										alt="arrow-down"
									/>
									<!---->
								</div>
								<p
									data-v-6685df05=""
									id="ask-8"
									class="content hide"
								>
									Безусловно, в получении резидентской визы ОАЭ может произойти отказ, однако такие случаи крайне редки. На основе нашего опыта, за время работы мы успешно оформили более 2000 виз, и лишь в одном случае столкнулись с отказом. Этот отказ был вызван тем, что клиент не сообщил о наличии судимости за мелкое хулиганство в своей стране. Поэтому мы настоятельно рекомендуем предоставлять полную и точную информацию при подаче документов на визу, чтобы минимизировать риск отказа.


								</p>
							</div>
						</div>
						<h1 data-v-c046ed3e="" class="heading">
							<span data-v-c046ed3e="" class="feature"
								>Возможности</span
							>
							и преимущества, открываемые
							<span data-v-c046ed3e="" class="feature"
								>Emirates ID</span
							>
						</h1>
						<h2
							data-v-c046ed3e=""
							class="opportunity-header"
							style="margin-bottom: 0px"
						>
							ЛИЧНАЯ СВОБОДА И МОБИЛЬНОСТЬ:
						</h2>
					</main>
				</div>
				<div data-v-c046ed3e="" class="opportunities-wrapper">
					<main data-v-c046ed3e="">
						<div data-v-f64730cc="" data-v-c046ed3e="">
							<div data-v-f64730cc="" class="main">
								<div
									data-v-c00191d9=""
									data-v-f64730cc=""
									class="opportunity"
								>
									<div data-v-c00191d9="" class="icon">
										<img
											data-v-c00191d9=""
											src="icns/hourglass.svg"
											alt="hourglass"
										/>
									</div>
									<div data-v-c00191d9="" class="desc">
										<h3 data-v-c00191d9="">
											Проживание в ОАЭ без ограничений по
											времени:
										</h3>
										<p data-v-c00191d9="">
											Emirates ID позволяет вам находиться
											в стране столько, сколько необходимо
											без дополнительных условий.
										</p>
									</div>
								</div>
								<div
									data-v-c00191d9=""
									data-v-f64730cc=""
									class="opportunity"
								>
									<div data-v-c00191d9="" class="icon">
										<img
											data-v-c00191d9=""
											src="icns/driving-licence.svg"
											alt="driving-licence"
										/>
									</div>
									<div data-v-c00191d9="" class="desc">
										<h3 data-v-c00191d9="">
											Получение водительских прав в ОАЭ:
										</h3>
										<p data-v-c00191d9="">
											С Emirates ID вы можете пройти
											процесс получения местных
											водительских прав.
										</p>
									</div>
								</div>
							</div>
							<h2 data-v-f64730cc="" class="opportunity-header">
								Бизнес и финансы:
							</h2>
							<div data-v-f64730cc="" class="main2">
								<div data-v-f64730cc="" class="left">
									<div
										data-v-c00191d9=""
										data-v-f64730cc=""
										class="opportunity"
									>
										<div data-v-c00191d9="" class="icon">
											<img
												data-v-c00191d9=""
												src="icns/cc-alt.svg"
												alt="bank account"
											/>
										</div>
										<div data-v-c00191d9="" class="desc">
											<h3 data-v-c00191d9="">
												Открытие банковского счета:
											</h3>
											<p data-v-c00191d9="">
												Emirates ID дает возможность
												открытия личного банковского
												счета в местных банках.
											</p>
										</div>
									</div>
									<div
										data-v-c00191d9=""
										data-v-f64730cc=""
										class="opportunity"
									>
										<div data-v-c00191d9="" class="icon">
											<img
												data-v-c00191d9=""
												src="icns/launch.svg"
												alt="rocket"
											/>
										</div>
										<div data-v-c00191d9="" class="desc">
											<h3 data-v-c00191d9="">
												Запуск вашего бизнеса:
											</h3>
											<p data-v-c00191d9="">
												Оформление необходимых
												документов для запуска и ведения
												собственного бизнеса в ОАЭ.
											</p>
										</div>
									</div>
								</div>
								<div data-v-f64730cc="" class="right">
									<div
										data-v-c00191d9=""
										data-v-f64730cc=""
										class="opportunity"
									>
										<div data-v-c00191d9="" class="icon">
											<img
												data-v-c00191d9=""
												src="icns/coins.svg"
												alt="coins"
											/>
										</div>
										<div data-v-c00191d9="" class="desc">
											<h3 data-v-c00191d9="">
												Налоговые преимущества:
											</h3>
											<p data-v-c00191d9="">
												Возможность смены юрисдикции
												налогообложения на Эмираты,
												отсутствие налога на дивиденды и
												возможность получения
												сертификата налогового резидента
												для освобождения от
												налогообложения в стране вашего
												первоначального проживания.
											</p>
										</div>
									</div>
								</div>
							</div>
							<h2 data-v-f64730cc="" class="opportunity-header">
								Жилье и образование:
							</h2>
							<div data-v-f64730cc="" class="main">
								<div
									data-v-c00191d9=""
									data-v-f64730cc=""
									class="opportunity"
								>
									<div data-v-c00191d9="" class="icon">
										<img
											data-v-c00191d9=""
											src="icns/house.svg"
											alt="house"
										/>
									</div>
									<div data-v-c00191d9="" class="desc">
										<h3 data-v-c00191d9="">
											Аренда любого жилья:
										</h3>
										<p data-v-c00191d9="">
											Emirates ID предоставляет
											возможность арендовать жилье по
											более выгодным ценам.
										</p>
									</div>
								</div>
								<div
									data-v-c00191d9=""
									data-v-f64730cc=""
									class="opportunity"
								>
									<div data-v-c00191d9="" class="icon">
										<img
											data-v-c00191d9=""
											src="icns/education.svg"
											alt="education"
										/>
									</div>
									<div data-v-c00191d9="" class="desc">
										<h3 data-v-c00191d9="">
											Оформление детей в образовательные
											учреждения:
										</h3>
										<p data-v-c00191d9="">
											Упрощение процесса записи ваших
											детей в школы или детские сады ОАЭ.
										</p>
									</div>
								</div>
							</div>
							<h2 data-v-f64730cc="" class="opportunity-header">
								Дополнительные преимущества:
							</h2>
							<div data-v-f64730cc="" class="main">
								<div
									data-v-c00191d9=""
									data-v-f64730cc=""
									class="opportunity"
								>
									<div data-v-c00191d9="" class="icon">
										<img
											data-v-c00191d9=""
											src="icns/car.svg"
											alt="car"
										/>
									</div>
									<div data-v-c00191d9="" class="desc">
										<h3 data-v-c00191d9="">
											Покупка автомобиля:
										</h3>
										<p data-v-c00191d9="">
											Возможность купить машину и
											зарегистрировать ее на свое имя.
										</p>
									</div>
								</div>
								<div
									data-v-c00191d9=""
									data-v-f64730cc=""
									class="opportunity"
								>
									<div data-v-c00191d9="" class="icon">
										<img
											data-v-c00191d9=""
											src="icns/education.svg"
											alt="education"
										/>
									</div>
									<div data-v-c00191d9="" class="desc">
										<h3 data-v-c00191d9="">
											Гарантия конфиденциальности:
										</h3>
										<p data-v-c00191d9="">
											Не распространение информации о
											владении недвижимостью и другими
											активами.
										</p>
									</div>
								</div>
							</div>
						</div>
						<h2 data-v-c046ed3e="" class="subheading">
							получите эксклюзивные возможности жизни<br
								data-v-c046ed3e=""
							/>и бизнеса в ОАЭ с вашим Emirates ID сегодня
						</h2>
						<img
							data-v-c046ed3e=""
							class="arrow-down"
							src="/arrow-down.svg"
							width="12"
							height="48"
							alt="arrow-down"
						/>
						<div
							data-v-c046ed3e=""
							style="
								display: flex;
								place-items: center;
								margin-left: auto;
								margin-right: auto;
								margin-top: 1.5em;
								width: fit-content;
							"
						>
							<div data-v-c046ed3e="" class="arrows"></div>
							<button
								data-v-c046ed3e=""
								class="fancy-button"
								onclick="document.getElementById('all-modal').classList.toggle('hide');"
								style="width: fit-content"
							>
								ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ
							</button>
							<div data-v-c046ed3e="" class="arrows right"></div>
						</div>
						<img
							data-v-c046ed3e=""
							class="cloud lazy"
							data-src="/cloud.webp"
							alt="cloud"
							alt="cloud"
						/>
					</main>
				</div>
				<div data-v-c046ed3e="" class="id-wrapper faq-background">
					<main data-v-c046ed3e="">
						<img
							data-v-c046ed3e=""
							class="cloud lazy"
							data-src="/cloud.webp"
							alt="cloud"
						/>
						<h1 data-v-c046ed3e="" class="heading">
							Как наша компания
							<span data-v-c046ed3e="" class="feature"
								>помогает</span
							>
							<span data-v-c046ed3e="" class="feature"
								>в получении</span
							>
							Emirates ID:
						</h1>
						<div data-v-3137ddbc="" data-v-c046ed3e="" class="main">
							<div class="feature" data-v-3137ddbc="">
								<div class="icon" data-v-3137ddbc="">
									<img
										data-src="/assets/call-center-CSaN-SK0.png"
										class="lazy"
										data-v-3137ddbc=""
										alt="woman"
									/>
								</div>
								<div class="desc" data-v-3137ddbc="">
									<h3 data-v-3137ddbc="">
										Персонализированная консультация
									</h3>
									<p data-v-3137ddbc="">
										Мы начинаем с индивидуальной
										консультации, чтобы понять Ваши
										потребности и предоставить четкое
										представление о процессе получения
										Emirates ID. На этом этапе мы поможем
										Вам подготовиться к следующим шагам,
										обеспечивая полное понимание процедуры.
									</p>
								</div>
							</div>
							<div class="feature" data-v-3137ddbc="">
								<div class="icon" data-v-3137ddbc="">
									<img
										data-src="/assets/folder-DXC3eZva.png"
										class="lazy"
										data-v-3137ddbc=""
										alt="folder"
									/>
								</div>
								<div class="desc" data-v-3137ddbc="">
									<h3 data-v-3137ddbc="">
										Подготовка и проверка документов
									</h3>
									<p data-v-3137ddbc="">
										Наша команда экспертов займется сбором и
										тщательной проверкой всех необходимых
										документов для вашего заявления на
										Emirates ID, включая профессиональный
										перевод и заверение документов.
									</p>
								</div>
							</div>
							<div class="feature" data-v-3137ddbc="">
								<div class="icon" data-v-3137ddbc="">
									<img
										data-src="/assets/paper-and-pen-3AXkVaKf.png"
										class="lazy"
										data-v-3137ddbc=""
										alt="paper-and-pen"
									/>
								</div>
								<div class="desc" data-v-3137ddbc="">
									<h3 data-v-3137ddbc="">
										Оформление и подача заявления
									</h3>
									<p data-v-3137ddbc="">
										Мы берем на себя всю бюрократию,
										связанную с оформлением и подачей вашего
										заявления для Emirates ID. Это включает
										в себя взаимодействие с государственными
										органами и обеспечение того, чтобы ваше
										заявление было обработано без задержек.
									</p>
								</div>
							</div>
							<div class="feature" data-v-3137ddbc="">
								<div class="icon" data-v-3137ddbc="">
									<img
										data-src="/assets/medical-Zu6QwaQP.png"
										class="lazy"
										data-v-3137ddbc=""
										alt="medicine"
									/>
								</div>
								<div class="desc" data-v-3137ddbc="">
									<h3 data-v-3137ddbc="">
										Медицинское обследование и отпечатки
										пальцев
									</h3>
									<p data-v-3137ddbc="">
										Мы организуем и сопровождаем процесс
										прохождения медицинского обследования и
										сдачи отпечатков пальцев, гарантируя,
										что все проходит гладко и без лишних
										хлопот.
									</p>
								</div>
							</div>
							<div class="feature" data-v-3137ddbc="">
								<div class="icon" data-v-3137ddbc="">
									<img
										data-src="/assets/emirates-id-Dlo7vB1e.png"
										class="lazy"
										data-v-3137ddbc=""
										alt="Emirates ID"
									/>
								</div>
								<div class="desc" data-v-3137ddbc="">
									<h3 data-v-3137ddbc="">
										Получение Emirates ID
									</h3>
									<p data-v-3137ddbc="">
										осле успешного завершения всех
										предыдущих этапов мы обеспечиваем, чтобы
										ваше Emirates ID было выдано в
										кратчайшие сроки. Мы также предоставляем
										полную поддержку в получении временного
										разрешения на проживание, если это
										необходимо.
									</p>
								</div>
							</div>
						</div>
						<div data-v-c046ed3e="" class="advantage">
							<h2 data-v-c046ed3e="">ваше преимущество</h2>
							<p data-v-c046ed3e="">
								Выбирая нас, вы получаете не только экспертную
								помощь на каждом этапе получения Emirates ID, но
								и спокойствие, зная, что все аспекты процесса
								находятся под контролем профессионалов. Наша
								цель — сделать процесс максимально простым и
								эффективным для вас.
							</p>
						</div>
					</main>
				</div>
				<div data-v-c046ed3e="" class="service-wrapper">
					<main data-v-c046ed3e="">
						<h1 data-v-c046ed3e="" class="heading">
							Дополнительные
							<span data-v-c046ed3e="" class="feature"
								><br data-v-c046ed3e="" />Услуги</span
							>
						</h1>
						<div data-v-c046ed3e="" class="advantage">
							<p data-v-c046ed3e="">
								Мы предлагаем комплекс поддержки не только в
								вопросах получения виз и Emirates ID, но и во
								многих других аспектах жизни и бизнеса в ОАЭ:
							</p>
						</div>
						<div data-v-c046ed3e="" class="service-container">
							<div
								data-v-70fe3462=""
								data-v-c046ed3e=""
								class="card"
							>
								<div data-v-70fe3462="" class="number-heading">
									<h1 data-v-70fe3462="">01</h1>
								</div>
								<div data-v-70fe3462="" class="container">
									<h3 data-v-70fe3462="">
										Поддержка в получении водительских прав
									</h3>
									<p data-v-70fe3462="">
										Помощь в прохождении всех необходимых
										этапов для успешного получения
										водительских прав в ОАЭ, включая
										подготовку к теоретическому и
										практическому экзаменам
									</p>
								</div>
							</div>
							<div
								data-v-70fe3462=""
								data-v-c046ed3e=""
								class="card"
							>
								<div data-v-70fe3462="" class="number-heading">
									<h1 data-v-70fe3462="">02</h1>
								</div>
								<div data-v-70fe3462="" class="container">
									<h3 data-v-70fe3462="">
										консультации по открытию бизнеса
									</h3>
									<p data-v-70fe3462="">
										Полный спектр услуг по консультациям и
										поддержке в открытии и регистрации
										Вашего бизнеса, выборе оптимальной
										юридической формы и юрисдикци
									</p>
								</div>
							</div>
							<div
								data-v-70fe3462=""
								data-v-c046ed3e=""
								class="card"
							>
								<div data-v-70fe3462="" class="number-heading">
									<h1 data-v-70fe3462="">03</h1>
								</div>
								<div data-v-70fe3462="" class="container">
									<h3 data-v-70fe3462="">
										Бухгалтерские и налоговые услуги
									</h3>
									<p data-v-70fe3462="">
										Обеспечение Вашего бизнеса в ОАЭ
										комплексными бухгалтерскими и налоговыми
										услугами, включая налоговое планирование
										и оптимизацию.
									</p>
								</div>
							</div>
							<div
								data-v-70fe3462=""
								data-v-c046ed3e=""
								class="card"
							>
								<div data-v-70fe3462="" class="number-heading">
									<h1 data-v-70fe3462="">04</h1>
								</div>
								<div data-v-70fe3462="" class="container">
									<h3 data-v-70fe3462="">
										аренда и покупка недвижимости
									</h3>
									<p data-v-70fe3462="">
										Поиск, аренда или покупка недвижимости в
										соответствии с Вашими предпочтениями и
										бюджетом, обеспечение правовой поддержки
										сделок.
									</p>
								</div>
							</div>
							<div
								data-v-70fe3462=""
								data-v-c046ed3e=""
								class="card"
							>
								<div data-v-70fe3462="" class="number-heading">
									<h1 data-v-70fe3462="">05</h1>
								</div>
								<div data-v-70fe3462="" class="container">
									<h3 data-v-70fe3462="">
										Регистрация детей в образовательные
										учреждения
									</h3>
									<p data-v-70fe3462="">
										Подбор школ и детских садов, помощь в
										процессе регистрации и адаптации Ваших
										детей в образовательной среде ОАЭ.
									</p>
								</div>
							</div>
							<div
								data-v-70fe3462=""
								data-v-c046ed3e=""
								class="card"
							>
								<div data-v-70fe3462="" class="number-heading">
									<h1 data-v-70fe3462="">06</h1>
								</div>
								<div data-v-70fe3462="" class="container">
									<h3 data-v-70fe3462="">
										Медицинское обслуживание и страхование
									</h3>
									<p data-v-70fe3462="">
										Консультации по выбору медицинских
										страховок, помощь в оформлении и
										поддержка при выборе медицинских
										учреждений.
									</p>
								</div>
							</div>
							<div
								data-v-70fe3462=""
								data-v-c046ed3e=""
								class="card"
							>
								<div data-v-70fe3462="" class="number-heading">
									<h1 data-v-70fe3462="">07</h1>
								</div>
								<div data-v-70fe3462="" class="container">
									<h3 data-v-70fe3462="">
										перевод и легализация документов
									</h3>
									<p data-v-70fe3462="">
										Профессиональный перевод и легализация
										документов для их использования в ОАЭ,
										включая документы для бизнеса,
										образования и медицинские справки.
									</p>
								</div>
							</div>
							<div data-v-c046ed3e="" class="why-created">
								<p data-v-c046ed3e="">
									Эти дополнительные услуги созданы, чтобы
									обеспечить Вас и Вашу семью всем необходимым
									для комфортного проживания и успешного
									ведения бизнеса в ОАЭ. Мы стремимся сделать
									Ваш переход к новой жизни максимально
									гладким и беззаботным.
								</p>
								<br data-v-c046ed3e="" />
								<p data-v-c046ed3e="">
									С каждой дополнительной услугой нужна форма
									(можно просто кнопки мессенджеров, главное
									чтобы было понятно, что можно
									проконсультироваться по каждой услуге)
								</p>
								<button
									data-v-c046ed3e=""
									onclick="document.getElementById('all-modal').classList.toggle('hide');"
									style="font-size: 1.5em"
									class="fancy-button"
								>
									ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ
								</button>
							</div>
						</div>
						<h1 data-v-c046ed3e="" class="heading">
							<span data-v-c046ed3e="" class="feature"
								>почему</span
							><br data-v-c046ed3e="" />нас выбирают
						</h1>
						<div data-v-c046ed3e="" class="why-choose-us">
							<div
								data-v-9ecee501=""
								data-v-c046ed3e=""
								class="selection"
							>
								<img
									data-v-9ecee501=""
									width="120"
									height="120"
									src="icns/refund.svg"
									alt="refund"
								/>
								<h3 data-v-9ecee501="" class="box-heading">
									Гарантия Возврата Средств
								</h3>
								<p data-v-9ecee501="">
									Возврат 100% оплаты при отказе в визе.
								</p>
							</div>
							<div
								data-v-9ecee501=""
								data-v-c046ed3e=""
								class="selection"
							>
								<img
									data-v-9ecee501=""
									width="120"
									height="120"
									src="icns/direct-prices.svg"
									alt="direct-prices"
								/>
								<h3 data-v-9ecee501="" class="box-heading">
									Прямые Цены без Посредников
								</h3>
								<p data-v-9ecee501="">
									Работаем напрямую с Free Zones ОАЭ,
									обеспечивая вам экономию.
								</p>
							</div>
							<div
								data-v-9ecee501=""
								data-v-c046ed3e=""
								class="selection"
							>
								<img
									data-v-9ecee501=""
									width="120"
									height="120"
									src="icns/price-tag.svg"
									alt="price-tag"
								/>
								<h3 data-v-9ecee501="" class="box-heading">
									Гарантия Лучшей Цены
								</h3>
								<p data-v-9ecee501="">
									Если найдете аналогичную услугу по более
									низкой цене, мы предложим цену выгоднее.
								</p>
							</div>
							<div
								data-v-9ecee501=""
								data-v-c046ed3e=""
								class="selection"
							>
								<img
									data-v-9ecee501=""
									width="120"
									height="120"
									src="icns/transparency.svg"
									alt="transparency"
								/>
								<h3 data-v-9ecee501="" class="box-heading">
									Полная Прозрачность
								</h3>
								<p data-v-9ecee501="">
									Все условия фиксируются в договоре без
									скрытых платежей и неожиданных изменений.
								</p>
							</div>
						</div>
						<img
							data-v-c046ed3e=""
							class="cloud lazy"
							data-src="/cloud2.png"
							alt="cloud"
						/>
					</main>
				</div>
				<div data-v-c046ed3e="" class="history-wrapper">
					<main data-v-c046ed3e="">
						<h1 data-v-c046ed3e="" class="heading">
							истории<br data-v-c046ed3e="" /><span
								data-v-c046ed3e=""
								class="feature"
								>наших клиентов</span
							>
						</h1>
						<div data-v-c046ed3e="" style="display: flex">
							<img
								data-v-c046ed3e=""
								id="slider-button-left"
								class="controls"
								src="/icns/swipe-arrow.svg"
								alt="arrow-left"
								width="44"
								height="0"
								style="height: auto"
							/>
							<section
								data-v-c046ed3e=""
								class="carousel carousel-custom"
								dir="ltr"
								aria-label="Gallery"
								tabindex="0"
							>
								<div
									id="carousel-area"
									class="carousel__viewport"
								>
									<ol
										class="carousel__track"
										id="nav-slider"
										style="
											transform: translateX(-107.2px);
											transition: 0.5s all;
											margin: 0px 0px;
											width: 100%;
										"
									>
										<li
											data-v-c046ed3e=""
											class="carousel__slide carousel__slide--clone"
											aria-hidden="true"
											style="width: 40%; transition: 0.5s"
										>
											<div
												data-v-182029f8=""
												data-v-c046ed3e=""
												class="carousel-video small"
											>
												<div
													data-v-182029f8=""
													class="iphone"
												>
													<div
														data-v-182029f8=""
														class="screen"
													>
														<div
															data-v-182029f8=""
															class="notch"
														></div>
														<!-- <iframe
															data-v-182029f8=""
															class="lazy"
															data-src="//www.youtube.com/embed/GpcaJQ40q1Y"
															srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/GpcaJQ40q1Y?autoplay=1><img src=//img.youtube.com/vi/GpcaJQ40q1Y/hqdefault.jpg alt='Video The Dark Knight Rises: What Went Wrong? – Wisecrack Edition'><span>▶</span></a>"
															frameborder="0"
															allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen
														></iframe> -->

														<iframe 
														data-v-182029f8=""
														class="lazy"
														width="466" height="829" src="https://www.youtube.com/embed/nrqnvJCwilg" title="отзыв 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</li>
										<li
											data-v-c046ed3e=""
											class="carousel__slide carousel__slide--clone"
											aria-hidden="true"
											style="width: 40%; transition: 0.5s"
										>
											<div
												data-v-182029f8=""
												data-v-c046ed3e=""
												class="carousel-video small"
											>
												<div
													data-v-182029f8=""
													class="iphone"
												>
													<div
														data-v-182029f8=""
														class="screen"
													>
														<div
															data-v-182029f8=""
															class="notch"
														></div>
														<!-- <iframe
															data-v-182029f8=""
															class="lazy"
															data-src="//www.youtube.com/embed/y6fThXQPT6I"
															srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/y6fThXQPT6I?autoplay=1><img src=//img.youtube.com/vi/y6fThXQPT6I/hqdefault.jpg alt='Video The Dark Knight Rises: What Went Wrong? – Wisecrack Edition'><span>▶</span></a>"
															frameborder="0"
															allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen
														></iframe> -->
														
														<iframe 
														data-v-182029f8=""
														class="lazy"
														width="466" height="829" src="https://www.youtube.com/embed/OP5Mw_Lyhdg" title="отзыв 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</li>
										<li
											data-v-c046ed3e=""
											class="carousel__slide carousel__slide--clone"
											aria-hidden="true"
											style="width: 40%; transition: 0.5s"
										>
											<div
												data-v-182029f8=""
												data-v-c046ed3e=""
												class="carousel-video small"
											>
												<div
													data-v-182029f8=""
													class="iphone"
												>
													<div
														data-v-182029f8=""
														class="screen"
													>
														<div
															data-v-182029f8=""
															class="notch"
														></div>
														<!-- <iframe
															data-v-182029f8=""
															class="lazy"
															data-src="//www.youtube.com/embed/Ex2iAyaEElQ"
															srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/Ex2iAyaEElQ?autoplay=1><img src=//img.youtube.com/vi/Ex2iAyaEElQ/hqdefault.jpg alt='Video The Dark Knight Rises: What Went Wrong? – Wisecrack Edition'><span>▶</span></a>"
															frameborder="0"
															allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen
														></iframe> -->

														<iframe 
														data-v-182029f8=""
														class="lazy"
														width="466" height="829" src="https://www.youtube.com/embed/j4UJfT07GfA" title="отзыв 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</li>
										<li
											data-v-c046ed3e=""
											class="carousel__slide carousel__slide--clone"
											aria-hidden="true"
											style="width: 40%; transition: 0.5s"
										>
											<div
												data-v-182029f8=""
												data-v-c046ed3e=""
												class="carousel-video small"
											>
												<div
													data-v-182029f8=""
													class="iphone"
												>
													<div
														data-v-182029f8=""
														class="screen"
													>
														<div
															data-v-182029f8=""
															class="notch"
														></div>
														<!-- <iframe
															data-v-182029f8=""
															class="lazy"
															data-src="//www.youtube.com/embed/h02-6X_EWu0"
															srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/h02-6X_EWu0?autoplay=1><img src=//img.youtube.com/vi/h02-6X_EWu0/hqdefault.jpg alt='Video The Dark Knight Rises: What Went Wrong? – Wisecrack Edition'><span>▶</span></a>"
															frameborder="0"
															allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen
														></iframe> -->

														<iframe 
														data-v-182029f8=""
														class="lazy"
														width="466" height="829" src="https://www.youtube.com/embed/ALCJ-0OcU-U" title="отзыв 4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</li>
										<li
											data-v-c046ed3e=""
											class="carousel__slide carousel__slide--clone"
											aria-hidden="true"
											style="width: 40%; transition: 0.5s"
										>
											<div
												data-v-182029f8=""
												data-v-c046ed3e=""
												class="carousel-video small"
											>
												<div
													data-v-182029f8=""
													class="iphone"
												>
													<div
														data-v-182029f8=""
														class="screen"
													>
														<div
															data-v-182029f8=""
															class="notch"
														></div>
														<!-- <iframe
															data-v-182029f8=""
															class="lazy"
															data-src="//www.youtube.com/embed/MkPPYLiSro0"
															srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/MkPPYLiSro0?autoplay=1><img src=//img.youtube.com/vi/MkPPYLiSro0/hqdefault.jpg alt='Video The Dark Knight Rises: What Went Wrong? – Wisecrack Edition'><span>▶</span></a>"
															frameborder="0"
															allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen
														></iframe> -->

														<iframe 
														data-v-182029f8=""
														class="lazy"
														width="466" height="829" src="https://www.youtube.com/embed/_cIWS84dB2A" title="отзыв 5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
													</div>
												</div>
											</div>
										</li>
										<!-- <li
											data-v-c046ed3e=""
											class="carousel__slide carousel__slide--clone"
											aria-hidden="true"
											style="width: 40%; transition: 0.5s"
										>
											<div
												data-v-182029f8=""
												data-v-c046ed3e=""
												class="carousel-video small"
											>
												<div
													data-v-182029f8=""
													class="iphone"
												>
													<div
														data-v-182029f8=""
														class="screen"
													>
														<div
															data-v-182029f8=""
															class="notch"
														></div>
														<iframe
															data-v-182029f8=""
															class="lazy"
															data-src="//www.youtube.com/embed/W0DM5lcj6mw"
															srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=//www.youtube.com/embed/W0DM5lcj6mw?autoplay=1><img src=//img.youtube.com/vi/W0DM5lcj6mw/hqdefault.jpg alt='Video The Dark Knight Rises: What Went Wrong? – Wisecrack Edition'><span>▶</span></a>"
															frameborder="0"
															allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
															allowfullscreen
														></iframe>
													</div>
												</div>
											</div>
										</li> -->
									</ol>
								</div>
								<ol
									data-v-c046ed3e=""
									id="nav-slider-pagination"
									class="carousel__pagination"
								>
									<li class="carousel__pagination-item">
										<button
											type="button"
											class="carousel__pagination-button"
											aria-label="Navigate to slide 1"
										></button>
									</li>
									<li class="carousel__pagination-item">
										<button
											type="button"
											class="carousel__pagination-button"
											aria-label="Navigate to slide 2"
										></button>
									</li>
									<li class="carousel__pagination-item">
										<button
											type="button"
											class="carousel__pagination-button"
											aria-label="Navigate to slide 3"
										></button>
									</li>
									<li class="carousel__pagination-item">
										<button
											type="button"
											class="carousel__pagination-button"
											aria-label="Navigate to slide 4"
										></button>
									</li>
									<li class="carousel__pagination-item">
										<button
											type="button"
											class="carousel__pagination-button"
											aria-label="Navigate to slide 5"
										></button>
									</li>
									<!-- <li class="carousel__pagination-item">
										<button
											type="button"
											class="carousel__pagination-button"
											aria-label="Navigate to slide 6"
										></button>
									</li> -->
								</ol>
								<div
									class="carousel__liveregion carousel__sr-only"
									aria-live="polite"
									aria-atomic="true"
								>
									Item 2 of 5
								</div>
							</section>
							<img
								data-v-c046ed3e=""
								id="slider-button-right"
								class="controls"
								src="/icns/swipe-arrow.svg"
								width="44"
								height="0"
								alt="arrow-right"
								style="transform: rotate(180deg); height: auto"
							/>
						</div>
					</main>
				</div>
				<div data-v-c046ed3e="" class="contact-wrapper">
					<main data-v-c046ed3e="">
						<h1 data-v-c046ed3e="" class="heading">
							свяжитесь<br data-v-c046ed3e="" /><span
								data-v-c046ed3e=""
								class="feature"
								>с нами</span
							>
						</h1>
						<div data-v-a11a2958="" data-v-c046ed3e="">
							<div data-v-a11a2958="" class="container">
								<div class="box" data-v-a11a2958="">
									<img
										class="icon"
										src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='120'%20height='120'%20viewBox='0%200%20120%20120'%3e%3cdefs%3e%3cstyle%3e%20.a%20{%20fill:%20none;%20stroke:%20%23fff;%20stroke-linecap:%20round;%20stroke-miterlimit:%202.37;%20stroke-width:%201.2px;%20stroke-dasharray:%208.4%2016.8%2026.4%209.6;%20}%20.b%20{%20fill:%20%23fff;%20}%20%3c/style%3e%3c/defs%3e%3ctitle%3emap%3c/title%3e%3ccircle%20class='a'%20cx='60'%20cy='60'%20r='59.4'/%3e%3cpath%20class='b'%20d='M60,6.75h0A53.25,53.25,0,0,1,113.25,60h0A53.25,53.25,0,0,1,60,113.25h0A53.25,53.25,0,0,1,6.75,60h0A53.25,53.25,0,0,1,60,6.75Z'%20transform='translate(0%200)'/%3e%3cpath%20d='M62.89,77.5l.79.75Zm-5.78,0,.8-.74Zm17-21.18c0,3.15-1.82,7-4.34,10.84a76.73,76.73,0,0,1-7.73,9.6l1.59,1.49a78.71,78.71,0,0,0,8-9.89c2.55-3.85,4.7-8.2,4.7-12ZM57.91,76.76a76.73,76.73,0,0,1-7.73-9.6c-2.52-3.8-4.34-7.69-4.34-10.84H43.66c0,3.84,2.15,8.19,4.7,12a78.71,78.71,0,0,0,8,9.89ZM45.84,56.32A13.64,13.64,0,0,1,50,45.94a14.52,14.52,0,0,1,10-3.62V40.14a16.74,16.74,0,0,0-11.53,4.2,15.86,15.86,0,0,0-4.81,12ZM60,42.32a14.52,14.52,0,0,1,10,3.62,13.64,13.64,0,0,1,4.12,10.38h2.18a15.86,15.86,0,0,0-4.81-12A16.74,16.74,0,0,0,60,40.14Zm2.09,34.44a2.83,2.83,0,0,1-4.18,0l-1.59,1.49a5,5,0,0,0,7.36,0ZM65.45,54.3A5.45,5.45,0,0,1,60,59.75v2.18a7.64,7.64,0,0,0,7.63-7.63ZM60,59.75a5.45,5.45,0,0,1-5.45-5.45H52.37A7.64,7.64,0,0,0,60,61.93ZM54.55,54.3A5.45,5.45,0,0,1,60,48.85V46.67a7.64,7.64,0,0,0-7.63,7.63ZM60,48.85a5.45,5.45,0,0,1,5.45,5.45h2.18A7.64,7.64,0,0,0,60,46.67Z'%20transform='translate(0%200)'/%3e%3c/svg%3e"
										data-v-a11a2958=""
										alt="address"
									/>
									<h3 class="box-heading" data-v-a11a2958="">
										АДРЕС ОФИСА:
									</h3>
									<p data-v-a11a2958="">
										<a
											href="https://maps.app.goo.gl/c2JYiuvrcuGyzX4u9"
											target="_blank"
											data-v-a11a2958=""
											>Aspin Commercial Tower, 106 Sheikh
											Zayed Rd - Trade Centre - Trade
											Centre 1 – Dubai офис – 2201</a
										>
									</p>
								</div>
								<div class="box" data-v-a11a2958="">
									<img
										class="icon"
										src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='120'%20height='120'%20viewBox='0%200%20120%20120'%3e%3cdefs%3e%3cstyle%3e%20.a,%20.c%20{%20fill:%20none;%20}%20.a%20{%20stroke:%20%23fff;%20stroke-linecap:%20round;%20stroke-miterlimit:%202.37;%20stroke-width:%201.2px;%20stroke-dasharray:%208.4%2016.8%2026.4%209.6;%20}%20.b%20{%20fill:%20%23fff;%20}%20.c%20{%20stroke:%20%23000;%20stroke-linejoin:%20round;%20stroke-width:%201.91px;%20}%20%3c/style%3e%3c/defs%3e%3ctitle%3ephone%3c/title%3e%3ccircle%20class='a'%20cx='60'%20cy='60'%20r='59.4'/%3e%3cpath%20class='b'%20d='M60,6.75h0A53.25,53.25,0,0,1,113.25,60h0A53.25,53.25,0,0,1,60,113.25h0A53.25,53.25,0,0,1,6.75,60h0A53.25,53.25,0,0,1,60,6.75Z'%20transform='translate(0%200)'/%3e%3cpath%20class='c'%20d='M57.14,73.37h5.72M52.36,79.1H67.64a3.82,3.82,0,0,0,3.82-3.82V44.72a3.82,3.82,0,0,0-3.82-3.82H52.36a3.82,3.82,0,0,0-3.82,3.82V75.28A3.82,3.82,0,0,0,52.36,79.1Zm1.91-38.2H65.73v1a3.82,3.82,0,0,1-3.82,3.82H58.09a3.82,3.82,0,0,1-3.82-3.82Z'%20transform='translate(0%200)'/%3e%3c/svg%3e"
										data-v-a11a2958=""
										alt="telephone"
									/>
									<h3 class="box-heading" data-v-a11a2958="">
										ТЕЛЕФОН:
									</h3>
									<p data-v-a11a2958="">
										<a
											href="tel:+<?php echo $PageUTMData["Phone"]["PhoneLink"];?>"
											data-v-a11a2958=""
											><?php echo $PageUTMData["Phone"]["PhoneShow"];?></a
										>
									</p>
								</div>
								<div data-v-a11a2958="" class="box">
									<img
										data-v-a11a2958=""
										class="icon"
										src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='120'%20height='120'%20viewBox='0%200%20120%20120'%3e%3cdefs%3e%3cstyle%3e%20.a,%20.c%20{%20fill:%20none;%20}%20.a%20{%20stroke:%20%23fff;%20stroke-linecap:%20round;%20stroke-miterlimit:%202.37;%20stroke-width:%201.2px;%20stroke-dasharray:%208.4%2016.8%2026.4%209.6;%20}%20.b%20{%20fill:%20%23fff;%20}%20.c%20{%20stroke:%20%23000;%20stroke-linejoin:%20round;%20stroke-width:%201.91px;%20}%20%3c/style%3e%3c/defs%3e%3ctitle%3ephone%3c/title%3e%3ccircle%20class='a'%20cx='60'%20cy='60'%20r='59.4'/%3e%3cpath%20class='b'%20d='M60,6.75h0A53.25,53.25,0,0,1,113.25,60h0A53.25,53.25,0,0,1,60,113.25h0A53.25,53.25,0,0,1,6.75,60h0A53.25,53.25,0,0,1,60,6.75Z'%20transform='translate(0%200)'/%3e%3cpath%20class='c'%20d='M57.14,73.37h5.72M52.36,79.1H67.64a3.82,3.82,0,0,0,3.82-3.82V44.72a3.82,3.82,0,0,0-3.82-3.82H52.36a3.82,3.82,0,0,0-3.82,3.82V75.28A3.82,3.82,0,0,0,52.36,79.1Zm1.91-38.2H65.73v1a3.82,3.82,0,0,1-3.82,3.82H58.09a3.82,3.82,0,0,1-3.82-3.82Z'%20transform='translate(0%200)'/%3e%3c/svg%3e"
										alt="messenger"
									/>
									<h3 data-v-a11a2958="" class="box-heading">
										МЕССЕНДЖЕРЫ:
									</h3>
									<div data-v-a11a2958="" class="socials">
										<img
											data-v-a11a2958=""
											onclick="document.getElementById('tg-modal').classList.toggle('hide');"
											src="assets/telegram.svg"
											alt="telegram"
										/>
										<img
											data-v-a11a2958=""
											onclick="document.getElementById('ws-modal').classList.toggle('hide');"
											src="assets/whatsapp.svg"
											alt="whatsapp"
										/>
										<img
											data-v-a11a2958=""
											class="zoom"
											onclick="document.getElementById('zoom-modal').classList.toggle('hide');"
											src="data:image/png;base64,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"
											loading="lazy"
											alt="zoom"
										/>
									</div>
								</div>
							</div>
							<div data-v-a11a2958="" class="map">
								<img
									data-v-a11a2958=""
									class="lazy"
									data-src="/assets/chel2-DVqI974p.png"
									alt="woman"
									width="0"
									height="0"
								/>
								<iframe
									data-v-a11a2958=""
									title="Map"
									loading="lazy"
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.829774960852!2d55.26992347712254!3d25.208962477703693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f428853023db3%3A0x6e63a9fe6b2d7cfe!2sAspin%20Commercial%20Tower%20-%20106%20Sheikh%20Zayed%20Rd%20-%20Trade%20Centre%20-%20Trade%20Centre%201%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sru!4v1710668111563!5m2!1sen!2sru"
									allowfullscreen=""
									loading="lazy"
									referrerpolicy="no-referrer-when-downgrade"
									style="border: 0px"
								></iframe>
							</div>
						</div>
					</main>
				</div>
			</div>
		</div>
		
		
		
		<div data-v-61485933="" id="success-modal" data-v-719c0bb5="" class="modal success hide" style="--b6ff6232: url('/modal-msg-bg.jpg')">
				<div data-v-61485933="" class="modal-content">
					<div data-v-61485933="" class="modal-top">
						<div data-v-61485933="" class="close-button" onclick="document.getElementById('success-modal').classList.toggle('hide');">
							<img data-v-61485933="" src="/icns/close.svg" style="vertical-align: middle; width: 2em">
						</div>
					</div>
					<div data-v-61485933="" style="padding-bottom: 2em">
						<div data-v-61485933="">
							<div data-v-719c0bb5="" class="modal-contact-messenger"><h1 data-v-719c0bb5="">Спасибо! <br> Ваше сообщение успешно отправлено</h1></div>
						</div>
					</div>
				</div>
			</div>
		
		<!-- Загрузка стилий для шрифта -->
		<script>
			const fontLink = document.createElement('link');
			fontLink.rel = 'stylesheet';
			fontLink.href = 'assets/optimization.css';
			
			document.fonts.ready.then(function() {
				document.head.appendChild(fontLink);
			});
		</script>

		<!-- Фикс формы zoom для ios систем -->
		<script>
			const customLabels = document.querySelectorAll('label[data-custom-date]')
			customLabels.forEach(makeCustomDateLabel)

			function makeCustomDateLabel(label) {
				const customInput = label.querySelector('.custom-input')
				const placeholder = customInput.innerText

				const input = label.querySelector('input');

				if (['date', 'time'].includes(input.type) === false) {
					return
				}

				input.addEventListener('focus', e => {
					e.target?.showPicker()
				})
				input.addEventListener('change', e => {
					const value = e.target.value
					if (value) {
						label.querySelector('.custom-input').innerText = value
					} else {
						label.querySelector('.custom-input').innerText = placeholder
					}
				})
			}
		</script>

		<script src="assets/slider.js"></script>
		<script src="assets/index.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@19.0.5/dist/lazyload.min.js"></script>
		<script>
			var myLazyLoad = new LazyLoad()
			myLazyLoad.update()
		</script>
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		<script>
$(".send_mail").on("submit", function(){
	$.ajax({
		url: '/mail.php',
		method: 'post',
		dataType: 'html',
		data: $(this).serialize(),
		success: function(data){
			$('.modal').addClass('hide');
			$('.success').removeClass('hide');
			return true;
		}
	});
	return false;
});
</script>
		
		
	</body>
</html>
