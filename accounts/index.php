<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php"); 
	session_start();
	$uid = $_SESSION['uid'];
	$uname = $_SESSION['name'];

		if($uid == ""){
			echo "<script>document.location.href='logout.php'</script>";
			}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/google.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
	<title>Index</title>
</head>
<body>

<div id="dashboard">
<h2><CENTER><span class="fontawesome-top"></span>DASHBOARD</h2></CENTER>
	<CENTER>
	
	<h3><a href="/contestants/casual/index.php" class="myButton">CASUAL WEAR</a></h3>
	<h3><a href="/contestants/formal/index.php" class="myButton">FORMAL WEAR</a></h3>
	<h3><a href="/contestants/theme/index.php" class="myButton">THEME WEAR</a></h3>
	<h3><a href="/contestants/qna/index.php" class="myButton">QUESTION & ANSWER</a></h3>
	</CENTER>
	
	<center><FIELDSET>Logged in as: <?php echo $_SESSION['name'];?> | <a href="logout.php" class="a">logout</a></FIELDSET></center>
<div>
</body>
</html>