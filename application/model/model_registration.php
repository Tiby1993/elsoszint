<?php

class model_registration extends Application {

  function __construct() {
        // adatbázis csatlakozás
      try{
      include 'database.php';
      $cfg = "application/include/config.php";
      new database($cfg);
      } catch(Exception $exc ) {
            echo $exc->getMessage();
      }
	  
	  //csak a két jelszó eggyezést vizsáltam, ide kellene még több ellenőrzés + szűrni a beít tartalmakat sql injection miatt.
	  if(!empty($_POST)){
		  if($_POST['passwd'] == $_POST['repasswd']){
		  $this->reg($_POST['user_name'], $_POST['passwd'],  $_POST['email'],$_POST['street'],$_POST['city'], $_POST['full_name']);			  
		}
		else {echo "A két jelszó nem eggyezik !";}
	  }
 }
  //regisztráció modul.
function reg($username, $passwd, $email, $street, $city, $full_name){
	$query = "INSERT INTO `users` (`user`, `password`, `email`, `street`, `city`, `full_name`) VALUES ('".$username."', '".sha1($passwd)."', '".$email."', '".$street."', '".$city."','".$full_name."');";  
	if($sql = mysql_query($query)) {
		echo "ok";
	} else {
	  throw new Exception ("Error: Can not excute te query");
	}
}
}
?>
