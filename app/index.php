<?php
  require_once 'connect.php';
  include 'form.php';

  echo $twig->render('site/index.twig', array(
		'form' => $form,
		'brand'	=> '1',
	));
?>