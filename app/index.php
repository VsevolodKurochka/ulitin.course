<?php
  require_once 'connect.php';
  include 'vars.php';

  $brand = '1';

  echo $twig->render('site/index.twig', array(
  	'brand'			=> $brand,
  	'logo'			=> 'img/logo.png',
  	'video'			=> 'https://www.youtube.com/embed/H-7upfqm40w',
  	'title'			=> "Искусство <br>быть первой",
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
    'form'      => array(
      'title'           => 'Запишитесь<br>на бесплатный<br>авторский курс<br>Марка Бартона',
      'items'           => $form,
      'campaign_token'  => 'ne4qg'
    ),
		'social'		=> $social
	));
?>