<!DOCTYPE html>
<html>
<head>
<title>Olimpiai honlap</title>
<link rel="stylesheet" href="../application/include/style.css">
<center><canvas id=c1 width=400 height=200></canvas>
<script>
    ctx = c1.getContext('2d')

    ctx.fillRect(0, 0, 400, 400)
    ctx.fillStyle = '#FFF'
    ctx.fillRect(10, 10, 400-20, 200-20)

    var X = 75, W = 50, G = 20
    ctx.lineWidth = 10
    var colors = ['blue', 'black', 'red', 'yellow', 'green']
    var args = [
        [X,X,W],
        [X+W+W+G,X,W],
        [X+W+W+G+W+W+G,X,W],
        [X+W+G/2,X+W,W],
        [X+W+G/2+W+W+G,X+W,W]]

    while (colors.length > 0) {
        ctx.strokeStyle = colors.shift()
        ctx.beginPath()
        ctx.arc.apply(ctx, args.shift().concat([0,Math.PI*2,true]))
        ctx.stroke()
    }
</script>
<ul>
  <li><a href="/elsoszint/login/index/">Kezdőlap</a></li>
  <li><a href="/elsoszint/feed/index">Hírfolyam</a></li>
  <li><a href="#contact">Rólunk</a></li>
  <li><a href="#about">Bejelentkezés</a></li>
</ul></head>
<body>
<br />
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
	<br />
	<footer>
<ul>
  <li><a href="#home">Kezdőlap</a></li>
  <li><a href="#news">Hírfolyam</a></li>
  <li><a href="#contact">Rólunk</a></li>
  <li><a href="#about">Bejelentkezés</a></li>
</ul>
</footer>
 </body>
</html>
 </body>
</html>
