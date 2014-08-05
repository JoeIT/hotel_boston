<?php
//I uncommented the 'extension=php_pdo_odbc.dll' and now it seems to work just fine.
//ini_set('extension', 'php_pdo_odbc.dll');

class IndexController extends Zend_Controller_Action {

	public function init() {
		/* Initialize action controller here */
	}

	public function indexAction() {
		$db = App_Util_DbManager::getInstance();
		
		$query = "SELECT * FROM clients";
		$this->view->result = $db->query($query);
	}
	
	public function saveclientinfoAction()
	{
		echo "Hello bitches";
		
	}
}

