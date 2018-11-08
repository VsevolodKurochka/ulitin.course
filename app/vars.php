<?php
	$form = array(
		array(
			'name'	=> 'first_name',
			'value'	=> '',
			'type'	=> 'text',
			'attributes' 			=> array(
				'placeholder' 	=> 'Имя',
				'class' 				=> 'form__control',
				'required'			=> 'required'
			)
		),
		array(
			'name'	=> 'email',
			'value'	=> '',
			'type'	=> 'email',
			'attributes' 			=> array(
				'placeholder' 	=> 'Email',
				'class' 				=> 'form__control',
				'required'			=> 'required'
			)
		),
		array(
			'name'	=> 'custom_mobile_phone',
			'value'	=> '',
			'type'	=> 'phone',
			'attributes' 			=> array(
				'placeholder' 	=> 'Телефон',
				'class' 				=> 'form__control'
			)
		)
	);

	$social = array(
		array(
			'image'	=> 'img/icon-inst.svg',
			'link'	=> 'https://www.instagram.com/markbarton_mb/'
		),
		array(
			'image'	=> 'img/icon-vk.svg',
			'link'	=> 'https://vk.com/mark_barton'
		),
		array(
			'image'	=> 'img/icon-fb.svg',
			'link'	=> 'https://www.facebook.com/markbartonrf/'
		),
		array(
			'image'	=> 'img/icon-youtube.svg',
			'link'	=> 'https://www.youtube.com/channel/UCdliAx3gHPrWju5VPetxWEw'
		)
	);
?>