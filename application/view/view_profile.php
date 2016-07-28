<html>
    <head>
   <title>Login</title>
    <link rel="stylesheet" href="../application/include/style.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
 </head>
 <body>
 	<div class="profile">
		<div class="header"><p><?php echo $data['user'];?></p></div>
		<div class="pic"><img src="../application/include/avatar.png"></div>
		<div class="data">
		<table>
		  <tr>
			<td>E-mail:</td>
			<td><?php echo $data['email'];?></td>
		  </tr>
		  <tr>
			<td>Város:</td>
			<td><?php echo $data['city'];?></td>
		  </tr>
		  <tr>
			<td>Utca:</td>
			<td><?php echo $data['street'];?></td>
		  </tr>
		  <tr>
			<td>Teljes név:</td>
			<td><?php echo $data['full_name'];?></td>
		  </tr>
		</table>
		</div>	
	</div>
	</form>
 </body>
</html>