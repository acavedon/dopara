<?php
require_once 'Zend/Auth.php';
require_once 'Zend/Auth/Adapter/DbTable.php';

class UserController extends Zend_Controller_Action {

  public function indexAction() {
    print 'aqui';
  }

  public function authAction() {
  }

  public function loginformAction() {
    $request = $this->getRequest();
    $this->view->assign('action', $request->getBaseURL()."/user/auth");
    $this->view->assign('title', 'Login Form');
    $this->view->assign('username', 'User Name');
    $this->view->assign('password', 'Password');
  }

}
?>
