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
?>