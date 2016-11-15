<?php

class model_login extends Application {

	function __construct() {
        // adatbázis csatlakozás
      try{
      include 'database.php';
      $cfg = "application/include/config.php";
      new database($cfg);
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
        $query = "SELECT * FROM `users` WHERE `user`='".$user."' AND `password`='".sha1($pass)."'";
        if($sql = mysqli_query($query)) {
            $row = mysqli_fetch_array($sql);
			//ha van ilyen user az adatbázisban, generálunk neki egy session_id-t amit db-ben tárolunk.
            if(!empty($row['id'])) {
            $_SESSION['id']=sha1(rand(1,100));
			$sess_id = "UPDATE `users` SET `session_id` = '".$_SESSION['id']."' WHERE `user`='".$user."' AND `password`='".sha1($pass)."'";
			mysqli_query($sess_id);
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
			mysqli_query($sess_id);
		session_destroy();
		header("Location: ".BASE_PATH."/login/index");
		}
	}
}
?>
