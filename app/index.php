<?php
  require_once 'connect.php';
  include 'vars.php';

  echo $twig->render('site/index.twig', array(
  	'brand'			=> '1',
  	'logo'			=> 'img/logo.png',
  	'video'			=> 'https://www.youtube.com/embed/H-7upfqm40w',
  	'title'			=> "Искусство<br><span class='color-brand-#{brand}'>быть первой</span>",
  	'subtitle'	=> 'Бесплатный видео-курс',
  	'name'			=> 'Марка Бартона',
  	'list'			=> array(
  		"Как выйти замуж за достойного мужчину?",
      "Почему ты любовница и как стать женой?",
      "Как пережить расставание и начать новую жизнь?",
      "ТОП-5 ошибок женщины в общении с мужчиной?",
      "Сожительство, что мешает создать семью?",
      "Как повысить самооценку?"
  	),
		'form' 			=> $form,
		'social'		=> $social
	));
?>