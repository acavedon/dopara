<?php
error_reporting(E_ALL|E_STRICT);
setlocale (LC_ALL, 'pt_BR');
date_default_timezone_set('America/Sao_Paulo');

ini_set('include_path',
      get_include_path()
      .PATH_SEPARATOR.'./lib'
      .PATH_SEPARATOR.'./app/models/'
 );

require_once 'Zend/Loader.php';
require_once 'Zend/Registry.php';
require_once 'Zend/Db/Adapter/Pdo/Mysql.php';
require_once 'Zend/Config.php';

$config = new Zend_Config(require 'lib/config.php');

$title  = $config->appName;
$params = $config->database->toArray();

// set title
Zend_Registry::set('title',$title);

// credits
$arrName = array('Alexandre Cavedon');
Zend_Registry::set('credits',$arrName);

// db connection
$DB = new Zend_Db_Adapter_Pdo_Mysql($params);
$DB->setFetchMode(Zend_Db::FETCH_OBJ);
Zend_Registry::set('DB',$DB);

// set controllers
Zend_Loader::loadClass('Zend_Controller_Front');
$controller = Zend_Controller_Front::getInstance();
$controller->throwExceptions(true);
$controller->run('./app/controllers');
?>
