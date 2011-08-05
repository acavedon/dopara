<?php
class IndexController extends Zend_Controller_Action {

  public function indexAction() {

    /*
    $params = array('host' => 'localhost',
                    'username' =>'root',
                    'password' =>'',
                    'dbname' =>'test');
    include("Zend/Db/Adapter/Pdo/Mysql.php");
    $DB = new Zend_Db_Adapter_Pdo_Mysql($params);
    $DB->setFetchMode(Zend_Db::FETCH_OBJ);

    $sql = "SELECT * FROM `auth`";
    $result = $DB->fetchAssoc($sql);

print_r($result);
    */

    $this->view->title = 'Title Test';
    $this->view->body = 'This is a little test';
  }

  public function listAction() {

    /*
    $this->view->assign('title','Member List');
    $this->view->assign('description','Below, our members:');
    $this->view->assign('datas',$result);
     */
  }
}
?>
