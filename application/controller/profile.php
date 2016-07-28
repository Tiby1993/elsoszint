<?php
class profile extends Application {
	  
	function __construct() {
        $this->loadModel('model_profile');
    }

    function index() {
		$data = $this->model_profile->profile($_SESSION['id']);
        $this->loadView('view_profile',$data);
    }
	
}
?>