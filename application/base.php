<?php
class Application {
  var $uri;
  var $model;

    function __construct($uri) {
    $this->uri = $uri;
  }
    //meghívjuk a kontrollert 
    function loadController($class) {
    $file = "application/controller/".$this->uri['controller'].".php";
    if(!file_exists($file)) die();
      require_once($file);
      $controller = new $class();
     if(method_exists($controller, $this->uri['method'])) {
        $controller->{$this->uri['method']}($this->uri['var']);
      } else {
        $controller->index();
      }
	}

    // betöltjük a nézetet
     function loadView($view,$data) {
    require_once('view/'.$view.'.php');
  } 
  
     //betöltjük a modell-t
 function loadModel($model) {
    require_once('model/'.$model.'.php');
    $this->$model = new $model;
  }
}

?>