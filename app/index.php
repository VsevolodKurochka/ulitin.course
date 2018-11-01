<?php
  require_once 'connect.php';
  include 'vars.php';

  echo $twig->render('site/index.twig', array(
  	'brand'			=> '1',
		'form' 			=> $form,
		'social'		=> $social
	));
?>