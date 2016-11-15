<?php
class feed extends Application {
	  
	function __construct() {
        $this->loadModel('model_feed');
    }

    function index() {
        $this->loadView('view_feed',$data);
    }
	
}
?>