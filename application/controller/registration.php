<?php
class registration extends Application {
	  
	function __construct() {
        $this->loadModel('model_registration');
    }

    function index() {
        $this->loadView('view_registration');
		
    }
	
}
?>