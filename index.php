<?php
error_reporting(E_ALL|E_STRICT);
setlocale (LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');

ini_set('include_path',
      get_include_path()
      .PATH_SEPARATOR.'./lib'
      .PATH_SEPARATOR.'./app/models/'
 );

include "Zend/Loader.php";
Zend_Loader::loadClass('Zend_Controller_Front');

$controller = Zend_Controller_Front::getInstance();
$controller->throwExceptions(true);
$controller->setControllerDirectory('./app/controllers');
$controller->dispatch();
?>
