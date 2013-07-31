<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php");

session_start(); 
$_SESSION['uid'];
$_SESSION['name'];
//database Connection
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
 <div id="login">
 <center>
        <h2><span class="fontawesome-lock"></span>Facebook Votes</h2></center>
        <form action="facebook.php" method="POST">
            <fieldset>
            <?php
            	$query = mysqli_query($con,"Select * from contestants");
                  
            	while ($row = mysqli_fetch_assoc($query)) {
            		?><p><label>
                    <?php
                    echo $row['id'].". ".$row['firstname']." ".$row['surname']."</br>";
                    ?>
                  </label></p><p><input type="text" name=
                    <?php echo $row['id']; ?>
                  ></p>
                  
                  <?php } ?>              
                 <p><input type="submit" value="save"></p>
            </fieldset>
        </form>
        <?php

 
        for($i=1;$i<15;$i++){
           // echo "   ".$i."   ";
            //echo $_POST[$i]."</br>";
           
            $implement = mysqli_query($con,"UPDATE results set facebook_votes='$_POST[$i]' WHERE
            contestant_id='$i'");

        }
         
        
       

        ?>
    </div>

</body>

</body>
</html>