<?php
class IndexController extends Zend_Controller_Action {

  public function indexAction() {
    $this->view->title = 'Title Test';
    $this->view->body = 'This is a little test';
  }
}
?>
