KOPAJ doksi
A rendszer felépítése : 
Egy htaccess file segítségével minden http kérést átirányítunk az index.php-nak. Az index.php ezután ellenőrzi a linket ami alapján meg fogja hívni a routert (base.php) ami majd meghívja számunkra a szükséges rétegeket.
XAMP-al dolgoztunk.
Konfigurációs fileok : /include/config.php, index : base_paht változó, path változó,.htacces file.
adatbázis : users.sql
Linkek : -.-profile/index
	-.-registration/index
	-.-login/index
	-.-login/logout
Az index  lemaradása a link végéről is okozhat hibát. 
