<?php

class model_profile extends Application {

	function __construct() {
        // adatbázis csatlakozás
	try{
      include 'database.php';
      $cfg = "application/include/config.php";
      new database($cfg);
      } catch(Exception $exc ) {
            echo $exc->getMessage();
      }
	$this->profile($_SESSION['id']);
    }
	// profil adatok lekérdezése id session_id alapján
function profile($id) {
   $data;
   $query = "SELECT * FROM `users` WHERE `session_id` = '".$id."'";
    if($sql = mysql_query($query)) {
		$data = mysql_fetch_assoc($sql); 
    } else {  
     throw new Exception ("Nem vagy bejelentkezve");
	}
    return $data;
	}
}
