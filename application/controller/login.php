<?php
class login extends Application {
	  
	function __construct() {
        $this->loadModel('model_login');
    }

    function index() {
        $this->loadView('view_login');
		
    }
	
	function logout() {
		$this->logout();
	}
	
}
?>