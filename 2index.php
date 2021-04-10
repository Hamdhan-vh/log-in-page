<!doctype html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="2style.css">
</head>
<body>
<form action="2login.php" method="post">


<h2>LOGIN</h2>
<?php if (isset($_GET['error'])){?>
<p class="error"><?php echo $_GET['error']; ?> </p>
<?php } ?>

<label>User Name</label>
<input type="text" name="uname" placeholder="Enter your UserName">

<label>Password</label>  
<input type="password" name="password" placeholder="Enter you Password">

<button type="submit">Login</button>
</form>
</body>
</html>