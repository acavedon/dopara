<?php
error_reporting(E_ALL|E_STRICT);
setlocale (LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');

// seta os path e faz os requires
ini_set('include_path',
   '.'.PATH_SEPARATOR.'./lib'
      .PATH_SEPARATOR.'./app/models/'
      .PATH_SEPARATOR.get_include_path);

include "Zend/Loader.php";
Zend_Loader::loadClass('Zend_Controller_Front');

// abre o front controller (detecta a base url e redireciona)
$controlador = Zend_Controller_Front::getInstance();
$controlador->throwExceptions(true);
$controlador->setControllerDirectory('./app/controllers'); // seta diretório com nossos controllers

// roda o sistema
$controlador->dispatch();
?>
