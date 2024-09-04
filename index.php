<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Home</title>
</head>
<body>
<div id="mainwrapper">

  <header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and 3 navigation links. 
    ****************************************************************************-->
    <div id="logo"><a href="#"><img src="pic/logo.png" width="50px" height="50px"> ระบบลงทะเบียน-รายงานผลการแข่งขันกีฬาสี</a></div>
    <nav> <a href="index.php" title="Link"><i class="fas fa-house"></i>Home</a> 
    	<a href="login.php" title="Link"><i class="fa-solid fa-lock"></i>Log in</a> </nav>
  </header>

<div class="container">
  <section>
  	
  		<div class="sport">
  			<div class="head-sp">
  			<p>
  				<i class="fa-brands fa-github"> รายการแข่งขัน</i>
  			</p>

  			<ul class="cate">
  				<li><a href="#">Football</a></li>
  				<li><a href="#">Footsul</a></li>
  				<li><a href="#">Basketball</a></li>
  				<li><a href="#">Volleyball</a></li>
  			</ul>
  			</div>
  		</div>
  	
  </section>

  <aside>
  	
  		<div class="login-group-1">
			<h3>Log in</h3>

			<form method="post" class="login-form">
				<div>
				<label for="login-user">Username :</label><br>
				<input type="text" name="user"  id="login-user" class="box" placeholder="Enter your username"><br>
				</div>
				<div>
				<label for="login-pass">Password :</label><br>
				<input type="password" name="pass"  id="login-pass" class="box" placeholder="Enter your password"><br>
				</div>
				<div >
				<input type="submit" name="submit"  class="btn" value="Log in">
				</div>
			</form>
		</div>
	</div>
  </aside>

  <footer>
  	<div id="footerbar"><p>Copyright @Samakkhiwittayakhom School. | All Has Reserved.</p></div>
  </footer>
</div>
</body>
</html>