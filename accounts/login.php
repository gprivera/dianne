<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php"); 
	session_start();
	$uid = $_SESSION['uid'];
	$uname = $_SESSION['name'];

		if($uid == ""){
		}else{
			echo "<script>document.location.href='logout.php'</script>";
		}
?>

<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_name." |";?>Login</title>
    <link rel="stylesheet" href="/css/google.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>



    <div id="login">
        <h2><span class="fontawesome-lock"></span>Sign In</h2>
        <form action="login.php" method="POST">
            <fieldset>
                <p><label>Username</label></p>
                <p><input type="text" name="username"></p>
                <p><label>Password</label></p>
                <p><input type="password" name="password"></p> 
                <p><input type="submit" value="Sign In"></p>
            <?php
                //initiate variables
                	$username = $_POST['username'];
	                $password = $_POST['password'];

		            $count_members ="SELECT count(*) from members WHERE username='$username' AND password='$password'";
		            $select_members = "SELECT id from members WHERE username='$username' AND password='$password'";
		            
		            $query_count_members = mysqli_query($con,$count_members);
		            $query_select_members = mysqli_query($con,$select_members);
		            
		            $result_count_members = mysqli_fetch_array($query_count_members);
		            $result_select_members = mysqli_fetch_array($query_select_members);

		            if($result_count_members[0] == 1){
		              $_SESSION['name'] = $username;
		              $_SESSION['uid'] = $result_select_members['id'];
		              echo "<script>document.location.href='index.php'</script>";
		            ?>
		               <a href="index.php"> sample </a>
		            <?php
		           		 }else{
		                echo"<CENTER><h3> FAILED </h3><CENTER>";    
		            }

           			 ?>

            </fieldset>
        </form>
    </div>
</body> 
</html>