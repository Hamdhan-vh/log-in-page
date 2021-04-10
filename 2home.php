<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>
<!doctype html>
<head>
<title>HOME</title>
<link rel="stylesheet" type="text/css" href="2style.css">
</head>
<body>
<h1>hello , <?php echo $_SESSION['name']; ?></h1>

<a href="2logout.php">Logout</a>
</form>
</body>
</html>

<?php
}else{
	header("location: 2index.php");
	exit();
}
	?>