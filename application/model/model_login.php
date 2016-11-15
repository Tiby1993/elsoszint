<?php

/**
 * Class model_login
 * Login modell
 *
 * @var $objDb - Adatbázis kapcsolat
 *
 * @authot Turai Tibor, Gulyás Gergő
 */

class model_login extends Application {

	protected $objDb;
	function __construct() {
        // adatbázis csatlakozás
      try{
		  include 'database.php';
		  $cfg = "application/include/config.php";
	      $db = new database($cfg);
		  $this->objDb = $db->mysqli;
//		  $this->objDb = new mysqli('localhost', 'root', '', 'test');
      } catch(Exception $exc ) {
            echo $exc->getMessage();
      }
	  
	  //bejelentkezés, itt lehetne még használni védelmi fv-ket, hogy megelőzzük az sqlinjectiont és más egyebet.
	  if(!empty($_POST['user_name']) && !empty($_POST['passwd'])){
	$this->login($_POST['user_name'], $_POST['passwd']);
	  }
	  
 }
  //bejelentkezés metódus
    function login($user, $pass) {
        $query = "SELECT * FROM `users` WHERE `username`='".$user."' AND `password`='".md5($pass)."'";
		echo ( $query);
        if($sql = $this->objDb->query($query)) {
            var_dump($sql);
            $row = $this->objDb->mysqli_fetch_array($sql);
			//ha van ilyen user az adatbázisban, generálunk neki egy session_id-t amit db-ben tárolunk.
            if(!empty($row['id'])) {
                $_SESSION['id']=md5(rand(1,100));
                $sess_id = "UPDATE `users` SET `session_id` = '".$_SESSION['id']."' WHERE `username`='".$user."' AND `password`='".sha1($pass)."'";
                $this->objDb->mysqli_query($sess_id);
                //átdobjuk a profil oldalra
                header("Location: ".BASE_PATH."/profile/index");
			}        
		}
        else {
            echo "Nem sikerült a bejelentkezés!";
        }
    
	}
	//kijelentkezés metódus
	function logout(){
		if(!empty($_SESSION['id'])){
		echo "kijelentkezés";
		// kitöröljük db-ből a session_id-t és töröljük a munkamenetet is.
		$sess_id = "UPDATE `users` SET `session_id` = '0' WHERE `session_id` = '".$_SESSION['id']."'";
			$this->objDb->mysqli_query($sess_id);
		session_destroy();
		header("Location: ".BASE_PATH."/login/index");
		}
	}
}
?>
