<?php


if(!empty($_POST) && $_POST['brief_submit']){
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	exit;
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title>BRIEF</title>
	<link href="http://fonts.googleapis.com/css?family=Roboto:500,700,400,300" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
  <!-- HERO-картинка -->
  <div class="hero">
    <div class="hero-wrap">
    	<section class="hero-data">
    	  <h1 class="hero-title">Бріф</h1>
    	  <p class="hero-description">Опитувальна анкета, яка дає виконавцю можливість зібрати важливі данні та чіткіше зрозуміти графічні, технічні та інші важливі аспекти проекта.</p>
    	  <a href="#brief-wrap" class="hero-button">Заповнити форму</a>
    	</section>
    </div>
  </div>
  <section id="brief-wrap">
  	<h2 class="brief-title">Бріф на розробку сайта для ресторану <b class="brief-title--bold">«Anastacia»</b></h2>
  	<p class="brief-notice">Заповніть, будь ласка, поля нижче приведеної форми.</p>
  	<form method="post">
  	  <!-- Раздел "Інформація по ресторану" -->
      <section>
      	<h3 class="brief-subtitle">Інформація по ресторану</h3>
        <input class="brief-input" name="full_name" type="text" placeholder="Повна назва ресторану"/>
        <input class="brief-input" name="full_address" type="text" placeholder="Повна адреса ресторану"/>
        <textarea class="brief-textarea" name="contacts" cols="30" rows="6" wrap="soft" placeholder="Вкажіть всі можливі контактні дані, за допомогою яких користувач зможе з вами зв’язатись: тел. мобільний/стаціонарний, e-mail, skype... Також вкажіть імена контактних осіб, якщо це важливо."></textarea>
        <textarea class="brief-textarea" name="staff" cols="30" rows="6" wrap="soft" placeholder="Перелічіть персонал ресторану по іменам та посадам."></textarea>
        <textarea class="brief-textarea" name="competitors_differences" cols="30" rows="6" wrap="soft" placeholder="Наведіть ключові відмінності від конкурентів, які можна виділити."></textarea>
        <textarea class="brief-textarea" name="dishes_group" cols="30" rows="6" wrap="soft" placeholder="Перелічіть всі групи страв, що є в наявності в меню."></textarea>
        <div class="brief-item">
        	<p class="brief-item-title">Збираєтесь фотографувати свої страви?</p>
        	<span class='brief-item-choice'>
	          <label>
	        	  Так:
	        	  <input type="radio" name="create_dishes_photo" value="yes"/>
	          </label>
	        </span>
	        <span class='brief-item-choice'>
	          <label>
	        	  Ні:
	        	  <input type="radio" name="create_dishes_photo" value="no"/>
	          </label>
	        </span>
        </div>
        <div class="brief-item">
        	<p class="brief-item-title">Є потреба виводити в меню інгрідієнти страв?</p>
        	<span class='brief-item-choice'>
	          <label>
	        	  Так:
	        	  <input type="radio" name="food_composition" value="yes"/>
	          </label>
	        </span>
          <span class='brief-item-choice'>
	          <label>
	        	  Ні:
	        	  <input type="radio" name="food_composition" value="no"/>
	          </label>
	        </span>
        </div>
      </section>
		  <section>
		  	<h3 class="brief-subtitle">Цільова аудиторія</h3>
		  	<textarea class="brief-textarea" name="target_audience" cols="30" rows="6" wrap="soft" placeholder="Опишіть вашу цільову аудиторію. Вкажіть їх характерні риси, особливості тощо."></textarea>
		  	<textarea class="brief-textarea" name="key_action" cols="30" rows="6" wrap="soft" placeholder="Яку ключову дію повинен здійснити користувач на сайті?"></textarea>
		  	<div class="brief-item brief-item--width100">
		  	  <p class="brief-item-title">Виберіть основні мови, які повинен підтримувати інтерфейс сайту</p>
		  	  <!-- START! Список языков -->
		  	  <span class='brief-item-choice'>
		  	  	<label class='brief-item-choice' title="Вибір цього пункту призведе до підключення великої кількості лишнього функціоналу">
						  Всі
						  <input name='multilanguage[]' type='checkbox' value='All'>
						</label>
		  	  </span>
		  	  <span class='brief-item-choice'>
					  <label>
					    Англійська
					    <input name='multilanguage[]' type='checkbox' value='English'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Португальська
					    <input name='multilanguage[]' type='checkbox' value='Portuguese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Іспанська
					    <input name='multilanguage[]' type='checkbox' value='Spanish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Німецька
					    <input name='multilanguage[]' type='checkbox' value='German'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Французька
					    <input name='multilanguage[]' type='checkbox' value='French'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Італійська
					    <input name='multilanguage[]' type='checkbox' value='Italian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Польська
					    <input name='multilanguage[]' type='checkbox' value='Polish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Українська
					    <input name='multilanguage[]' type='checkbox' value='Ukrainian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Руська
					    <input name='multilanguage[]' type='checkbox' value='Russian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Білоруська
					    <input name='multilanguage[]' type='checkbox' value='Belarusian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Грузинська
					    <input name='multilanguage[]' type='checkbox' value='Georgian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Латиська
					    <input name='multilanguage[]' type='checkbox' value='Lettish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Литовська
					    <input name='multilanguage[]' type='checkbox' value='Lithuanian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Естонська
					    <input name='multilanguage[]' type='checkbox' value='Estonian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Турецька
					    <input name='multilanguage[]' type='checkbox' value='Turkish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Китайська
					    <input name='multilanguage[]' type='checkbox' value='Chinese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Японська
					    <input name='multilanguage[]' type='checkbox' value='Japanese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Корейська
					    <input name='multilanguage[]' type='checkbox' value='Korean'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Грецька
					    <input name='multilanguage[]' type='checkbox' value='Greek'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Болгарська
					    <input name='multilanguage[]' type='checkbox' value='Bulgarian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Угорська
					    <input name='multilanguage[]' type='checkbox' value='Hungarian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Словацька
					    <input name='multilanguage[]' type='checkbox' value='Slovak'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Турецька
					    <input name='multilanguage[]' type='checkbox' value='Turkish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Чеська
					    <input name='multilanguage[]' type='checkbox' value='Czech'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Шведська
					    <input name='multilanguage[]' type='checkbox' value='Swedish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Хорватська
					    <input name='multilanguage[]' type='checkbox' value='Croatian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Азербайджанська
					    <input name='multilanguage[]' type='checkbox' value='Azerbaijani'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Албанська
					    <input name='multilanguage[]' type='checkbox' value='Albanian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Арабська
					    <input name='multilanguage[]' type='checkbox' value='Arabic'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Вірменська
					    <input name='multilanguage[]' type='checkbox' value='Armenian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Африкаанс
					    <input name='multilanguage[]' type='checkbox' value='Afrikaans'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Баскійська
					    <input name='multilanguage[]' type='checkbox' value='Baskiyska'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Бенгальська
					    <input name='multilanguage[]' type='checkbox' value='Bengali'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Бірманська
					    <input name='multilanguage[]' type='checkbox' value='Burmese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Боснійська
					    <input name='multilanguage[]' type='checkbox' value='Bosnian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Валлійська
					    <input name='multilanguage[]' type='checkbox' value='Welsh'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    В'єтнамська
					    <input name='multilanguage[]' type='checkbox' value='Vietnamese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Галісійська
					    <input name='multilanguage[]' type='checkbox' value='Galician'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Гуджараті
					    <input name='multilanguage[]' type='checkbox' value='Gujarati'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Данська
					    <input name='multilanguage[]' type='checkbox' value='Danish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Зулу
					    <input name='multilanguage[]' type='checkbox' value='Zulu'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Іврит
					    <input name='multilanguage[]' type='checkbox' value='Hebrew'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Ігбо
					    <input name='multilanguage[]' type='checkbox' value='Igbo'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Їдиш
					    <input name='multilanguage[]' type='checkbox' value='Yiddish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Індонезійська
					    <input name='multilanguage[]' type='checkbox' value='Indonesian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Ірландська
					    <input name='multilanguage[]' type='checkbox' value='Irish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Ісландська
					    <input name='multilanguage[]' type='checkbox' value='Icelandic'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Йоруба
					    <input name='multilanguage[]' type='checkbox' value='Yoruba'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Казахський
					    <input name='multilanguage[]' type='checkbox' value='Kazakh'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Каннада
					    <input name='multilanguage[]' type='checkbox' value='Kannada'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Каталонська
					    <input name='multilanguage[]' type='checkbox' value='Catalan'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Креольська
					    <input name='multilanguage[]' type='checkbox' value='Creole'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Кхмерська
					    <input name='multilanguage[]' type='checkbox' value='Khmer'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Лаоська
					    <input name='multilanguage[]' type='checkbox' value='Lao'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Латинська
					    <input name='multilanguage[]' type='checkbox' value='Latin'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Македонська
					    <input name='multilanguage[]' type='checkbox' value='Macedonian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Малагасійська
					    <input name='multilanguage[]' type='checkbox' value='Malagasy'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Малайська
					    <input name='multilanguage[]' type='checkbox' value='Malay'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Малаялам
					    <input name='multilanguage[]' type='checkbox' value='Malayalam'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Мальтійська
					    <input name='multilanguage[]' type='checkbox' value='Maltese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Маорі
					    <input name='multilanguage[]' type='checkbox' value='Maori'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Маратхі
					    <input name='multilanguage[]' type='checkbox' value='Marathi'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Монгольська
					    <input name='multilanguage[]' type='checkbox' value='Mongolian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Непальська
					    <input name='multilanguage[]' type='checkbox' value='Nepalese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Нідерландська
					    <input name='multilanguage[]' type='checkbox' value='Dutch'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Норвезька
					    <input name='multilanguage[]' type='checkbox' value='Norwegian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Пенджабська
					    <input name='multilanguage[]' type='checkbox' value='Punjabi'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Перська
					    <input name='multilanguage[]' type='checkbox' value='Persian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Русинська
					    <input name='multilanguage[]' type='checkbox' value='Rusyn'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Себуанська
					    <input name='multilanguage[]' type='checkbox' value='Cebuano'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Сербська
					    <input name='multilanguage[]' type='checkbox' value='Serbian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Сесото
					    <input name='multilanguage[]' type='checkbox' value='Sesotho'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Сингальська
					    <input name='multilanguage[]' type='checkbox' value='Sinhalese'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Словенська
					    <input name='multilanguage[]' type='checkbox' value='Slovenian'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Сомалі
					    <input name='multilanguage[]' type='checkbox' value='Somali'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Суахілі
					    <input name='multilanguage[]' type='checkbox' value='Swahili'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Тагальська
					    <input name='multilanguage[]' type='checkbox' value='Tagalog'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Таджицька
					    <input name='multilanguage[]' type='checkbox' value='Tajik'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Тайська
					    <input name='multilanguage[]' type='checkbox' value='Thai'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Тамільська
					    <input name='multilanguage[]' type='checkbox' value='Tamil'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Телугу
					    <input name='multilanguage[]' type='checkbox' value='Telugu'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Узбецька
					    <input name='multilanguage[]' type='checkbox' value='Uzbek'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Урду
					    <input name='multilanguage[]' type='checkbox' value='Urdu'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Фінська
					    <input name='multilanguage[]' type='checkbox' value='Finnish'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Хауса
					    <input name='multilanguage[]' type='checkbox' value='Hausa'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Хінді
					    <input name='multilanguage[]' type='checkbox' value='Hindi'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Хмонг
					    <input name='multilanguage[]' type='checkbox' value='Hmong'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Чева
					    <input name='multilanguage[]' type='checkbox' value='Cheva'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Есперанто
					    <input name='multilanguage[]' type='checkbox' value='Esperanto'>
					  </label>
					</span>
					<span class='brief-item-choice'>
					  <label>
					    Яванська
					    <input name='multilanguage[]' type='checkbox' value='Javanese'>
					  </label>
					</span>
		  	  <!-- END! Список языков -->
		  	</div>
		  </section>
		  <section>
		  	<h3 class="brief-subtitle">Дизайн</h3>
		  	<textarea class="brief-textarea" name="good_site" cols="30" rows="6" wrap="soft" placeholder="Вкажіть адреси сайтів, дизайн яких вам подобається (не обов'язково компаній з ресторанної індустрії)."></textarea>
		  	<textarea class="brief-textarea" name="bad_site" cols="30" rows="6" wrap="soft" placeholder="Вкажіть адреси сайтів, дизайн яких вам не подобається (не обов'язково компаній з ресторанної індустрії)."></textarea>
		  	<textarea class="brief-textarea" name="site_impressions" cols="30" rows="6" wrap="soft" placeholder="Опишіть враження, яке повинен справляти дизайн на відвідувача?"></textarea>
		  	<textarea class="brief-textarea" name="design_wishes" cols="30" rows="6" wrap="soft" placeholder="Інші уточнення/побажання: фірмовий стиль, шрифти, кольори тощо"></textarea>
		  </section>
  	  <input class="brief-submit" type="submit" value="ok" name="brief_submit"/>
  	</form>
  </section>
</body>
</html>