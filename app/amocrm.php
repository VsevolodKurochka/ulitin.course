<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('hamtim-amocrm.php');

$responsible_user_id = 2876512; //id ответственного по сделке, контакту, компании

$amo = new HamtimAmocrm('info@markbarton.ru', '05bcbbb4c6b1330bfd0b80895e8ffa59039d3062', 'adminmarkbartonru');

if(!$amo->auth) die('Нет соединения с amoCRM');

//все примеры запросов на https://developers.amocrm.ru/rest_api/


//получаем список сделок в работе
$pathСontact = '/private/api/v2/json/contacts/set';

//если передается пустой массив fields, то данные post не передаются в заголовке запроса
$fieldsСontact['request']['contacts']['add'][] = array(
	'name'	=> $_POST['first_name'],
	'linked_leads_id' => array('1486336'), //id сделки
	'responsible_user_id' => $responsible_user_id, //id ответственного
	'custom_fields'=>array(
		array(
			'id' => '110283',
			'values' => array(
				array(
					'value' => $_POST['phone'],
					'enum' => '224139'
				)
			)
		),
		array(
			'id' => '110285',
			'values' => array(
				array(
					'value' => $_POST['email'],
					'enum' => '224151'
				)
			)
		)
	)
);
//1486336
//делаем запрос
$contacts = $amo->q($pathСontact, $fieldsСontact);
	
if(!$contacts) die('Сделок в работе не найдено');

//выводим дамп с сделками из ответа
// echo '<pre>';	
// print_r($contacts);
// echo '</pre>';


//создаем новую сделку
// $path = '/private/api/v2/json/leads/set';
// $fields['request']['leads']['add']=array(
// 	array(
// 		'name'=>'Название сделки',
// 		'status_id'=>12345,#id статуса, обязательное поле
// 		//'responsible_user_id'=>12345,#id Отвественного
// 		'tags' => 'создано с помощью hamtim.ru', #Теги
// 	)
// );
//$leadAnswer = $amo->q($path, $fields);