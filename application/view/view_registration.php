<html>
 <head>
   <title>Regisztráció</title>
    <link rel="stylesheet" href="../application/include/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
 </head>
 <body>
	
	<h1>Regisztráció</h1>
	<div class="container">
		<form id="registration" action="" method="post">
		<div class="input-group">
			<span class="input-group-addon"><i class="demo-icon icon-user" ></i></span>
			<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Felhasználónév">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon"><i class="demo-icon icon-key" aria-hidden="true"></i></span>
			<input type="password" class="form-control" name="passwd" id="passwd" placeholder="Jelszó">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon"><i class="demo-icon icon-key" aria-hidden="true"></i></span>
			<input type="password" class="form-control" name="repasswd" id="repasswd" placeholder="Jelszó mégegyszer">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon"><i class="demo-icon icon-mail-alt" aria-hidden="true"></i></span>
			<input type="text" class="demo-icon icon-mail-alt" name="email" id="email" placeholder="E-mail">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon"><i class="demo-icon icon-street-view" aria-hidden="true"></i></span>
			<input type="text" class="demo-icon icon-location" name="street" id="street" placeholder="Utca">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon"><i class="demo-icon icon-location" aria-hidden="true"></i></span>
			<input type="text"  name="city" id="city" placeholder="Város">
		</div>
		
		<div class="input-group">
			<span class="input-group-addon"><i class="demo-icon icon-male" aria-hidden="true"></i></span>
			<input type="text"  name="full_name" id="full_name" placeholder="Teljes név">
		</div>
		
			<button type="submit" class="button">Submit</button>
	</div>
	</form>
 </body>
</html>
