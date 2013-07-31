<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php"); ?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title><?php echo $site_name." |";?>Register User</title>
    <link rel="stylesheet" href="/css/google.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <div id="login">
        <center><h2><span class="fontawesome-lock"></span>USER ADD</h2></center>
        <form action="register.php" method="POST">
            <fieldset>
                <p><label>USERNAME</label></p>
                <p><input type="text" name="username"></p>  
                <p><label>Password</label></p>
                <p><input type="password" name="password"></p> 
                <p><input type="submit" value="Regsiter"></p>
    <?php
            
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    $query_contestants = mysqli_query($con,"Select * from contestants");
                               
                    if ($username ==""){}
                        else{
                        $implement = mysqli_query($con,"INSERT INTO members (username, password)
                        VALUES ('$username', '$password')");
            
                    $count_contestants = mysqli_num_rows($query_contestants);
                    $uid = $count_contestants+1;

                    $query_members = mysqli_query($con,"Select * from members");
                    $count_members = mysqli_num_rows($query_members);
                    $uid = $count_members;
                                    
                    for($i=1;$i<($count_contestants+1);$i++){
                        $contestants = mysqli_query($con,"INSERT INTO votes (member_id, contestant_id)
                        VALUES ('$uid','$i')");
                     }
                     
                  if (!$implement){
                      echo "FAILED".mysql_error();
                  }else{
                      echo"<CENTER><h3> SUCCESS </h3><CENTER>";  
                      echo "<script>document.location.href='register.php'</script>";
                        }
                     }
    ?>
            </fieldset>
        </form>
    </div> 

    <center>
    <table id="hor-minimalist-a">
        
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
                        
        <?php
            $query_members = mysqli_query($con,"Select * from members");
            while ($row = mysqli_fetch_assoc($query_members)) {
                    echo "<tr><td>".$row["id"]."</td>";
                    echo "<td>".$row["username"]."</td>";
                    echo "<td>".$row["password"]."</td></tr>";
            }
        ?>
           
        </tbody>
    </table>
    </center>
</body> 
</html>
