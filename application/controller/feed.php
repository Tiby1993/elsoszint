<?php
class feed extends Application {
    protected $model;

	function __construct() {
        $this->model = $this->loadModel('model_feed');
    }

    function index() {
        $data = $this->model->getAllFeed();
        $this->loadView('view_feed',$data);
    }
	
}
?>