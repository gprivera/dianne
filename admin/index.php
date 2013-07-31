<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php");
session_start(); 
?>

<html>
<head>
<link rel="stylesheet" href="/css/google.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
	<title></title>
</head>
<body>
<?php
		$query = mysqli_query($con,"SELECT max(facebook_votes) from results");	
		$told = mysqli_fetch_array($query);
		$fb_max = $told[0];
		
		$query2 = mysqli_query($con,"SELECT max(piso_votes) from results");	
		$told2 = mysqli_fetch_array($query2);
		$piso_max = $told2[0];
?>

<center>
<h2>PEOPLE'S CHOICE</h2>
    <table id="hor-minimalist-a">
        <thead>
            <tr>
                <th scope="col">CONTESTANT #</th>
                <th scope="col">NAME</th>
                <th scope="col">FACEBOOK VOTES</th>
                <th scope="col">PISO VOTES</th>
                <th scope="col">TOTAL %</th>
            </tr>
        </thead>
        <tbody>
                        
         <?php
       		$query3 = mysqli_query($con, "SELECT * from results order by people_choice");
       		
            while ($row = mysqli_fetch_assoc($query3)) {
            		$query2 = mysqli_query($con, "SELECT * from contestants WHERE id='$row[id]'");
            		$fetch = mysqli_fetch_array($query2);
					$fbv = ($row['facebook_votes']/$fb_max)*(.05)*100;
                    echo "<tr><td>".$row['id']."</td>";
             		echo "<td>".$fetch["firstname"]." ".$fetch["surname"]."</td>";
             		echo "<td>".$row["facebook_votes"]."</td>";
             		echo "<td>".$row['piso_votes']."</td>";
             		echo "<td>".$row['people_choice']."</td>";
             		echo "</tr>";	
             		 }
			 ?>            
        </tbody>
    </table>
    </center>

<center>
<h2>CASUAL WEAR</h2>
    <table id="hor-minimalist-a">
        <thead>
            <tr>
                <th scope="col">CONTESTANT #</th>
                <th scope="col">NAME</th>
                <th scope="col">GENDER</th>
                <th scope="col">TOTAL %</th>
            </tr>
        </thead>
        <tbody>
                        
         <?php
       		$query3 = mysqli_query($con, "SELECT * from results order by cw_res desc");
       		
            while ($row = mysqli_fetch_assoc($query3)) {
            		$query2 = mysqli_query($con, "SELECT * from contestants WHERE id='$row[id]'");
            		$qw = mysqli_query($con, "SELECT * from results WHERE contestant_id='$row[id]'");
            		$rws = mysqli_fetch_array($qw);

            		$fetch = mysqli_fetch_array($query2);
					$fbv = ($row['facebook_votes']/$fb_max)*(.05)*100;
                    echo "<tr><td>".$row['id']."</td>";
             		echo "<td>".$fetch["firstname"]." ".$fetch["surname"]."</td>";
             		echo "<td>".$fetch["gender"]."</td>";
             		echo "<td>".$rws["cw_res"]."</td>";   		
             		echo "</tr>";	
             		 }
			 ?>            
        </tbody>
    </table>
    </center>


<center>
<h2>FORMAL WEAR</h2>
    <table id="hor-minimalist-a">
        <thead>
            <tr>
                <th scope="col">CONTESTANT #</th>
                <th scope="col">NAME</th>
                <th scope="col">GENDER</th>
                <th scope="col">TOTAL %</th>
            </tr>
        </thead>
        <tbody>
                        
         <?php
       		$query3 = mysqli_query($con, "SELECT * from results order by fw_res desc");
       		
            while ($row = mysqli_fetch_assoc($query3)) {
            		$query2 = mysqli_query($con, "SELECT * from contestants WHERE id='$row[id]'");
            		$qw = mysqli_query($con, "SELECT * from results WHERE contestant_id='$row[id]'");
            		$rws = mysqli_fetch_array($qw);

            		$fetch = mysqli_fetch_array($query2);
					$fbv = ($row['facebook_votes']/$fb_max)*(.05)*100;
                    echo "<tr><td>".$row['id']."</td>";
             		echo "<td>".$fetch["firstname"]." ".$fetch["surname"]."</td>";
             		echo "<td>".$fetch["gender"]."</td>";
             		echo "<td>".$rws["fw_res"]."</td>";   		
             		echo "</tr>";	
             		 }
			 ?>            
        </tbody>
    </table>
    </center>


<center>
<h2>THEME WEAR</h2>
    <table id="hor-minimalist-a">
        <thead>
            <tr>
                <th scope="col">CONTESTANT #</th>
                <th scope="col">NAME</th>
                <th scope="col">GENDER</th>
                <th scope="col">TOTAL %</th>
            </tr>
        </thead>
        <tbody>
                        
         <?php
       		$query3 = mysqli_query($con, "SELECT * from results order by tw_res desc");
       		
            while ($row = mysqli_fetch_assoc($query3)) {
            		$query2 = mysqli_query($con, "SELECT * from contestants WHERE id='$row[id]'");
            		$qw = mysqli_query($con, "SELECT * from results WHERE contestant_id='$row[id]'");
            		$rws = mysqli_fetch_array($qw);

            		$fetch = mysqli_fetch_array($query2);
					$fbv = ($row['facebook_votes']/$fb_max)*(.05)*100;
                    echo "<tr><td>".$row['id']."</td>";
             		echo "<td>".$fetch["firstname"]." ".$fetch["surname"]."</td>";
             		echo "<td>".$fetch["gender"]."</td>";
             		echo "<td>".$rws["tw_res"]."</td>";   		
             		echo "</tr>";	
             		 }
			 ?>            
        </tbody>
    </table>
    </center>



    <center>
<h2>OVERALL</h2>
    <table id="hor-minimalist-a">
        <thead>
            <tr>
                <th scope="col">CONTESTANT #</th>
                <th scope="col">NAME</th>
                <th scope="col">SOCIAL VOTES %</th>
                <th scope="col">CASUAL WEAR %</th>
                <th scope="col">FORMAL WEAR %</th>
                <th scope="col">THEME WEAR %</th>
                <th scope="col">QNA %</th>
                <th scope="col">TOTAL %</th>
            </tr>
        </thead>
        <tbody>
                        
         <?php
         	//$query = mysqli_query($con, "SELECT * from preliminary_results");
       		//$count = mysqli_num_rows($query);
       		//$count2 = mysqli_num_rows($query2);
       		
       		$korn = mysqli_query($con, "SELECT * from results");
       		while ($x = mysqli_fetch_assoc($korn)) {
       			$query = mysqli_query($con, "SELECT * from results WHERE id='$x[id]'");
       			$afetch = mysqli_fetch_array($query);
				$luis =  ($afetch['people_choice'])+($afetch['cw_res']) + ($afetch['fw_res']) + ($afetch['tw_res']) + ($afetch['qna_res']);
				mysqli_query($con,"UPDATE preliminary_results set score=$luis WHERE contestant_id='$x[id]'");
       		
       		}

       		$query3 = mysqli_query($con, "SELECT * from preliminary_results order by score desc");
       		
            while ($row = mysqli_fetch_assoc($query3)) {
            		$query2 = mysqli_query($con, "SELECT * from contestants WHERE id='$row[id]'");
            		$querky = mysqli_query($con, "SELECT * FROM results WHERE id='$row[id]'");
            		$q2 = mysqli_query($con, "SELECT * from preliminary_results WHERE id='$row[id]'");
            		$q3 = mysqli_fetch_array($q2);
            		$fetch = mysqli_fetch_array($query2);
            		$fetchq = mysqli_fetch_array($querky);
					echo "<tr><td>".$row['id']."</td>";
             		echo "<td>".$fetch["firstname"]." ".$fetch["surname"]."</td>";
             		echo "<td>".$fetchq["people_choice"]."</td>";
             		echo "<td>".$fetchq['cw_res']."</td>";
             		echo "<td>".$fetchq['fw_res']."</td>";
             		echo "<td>".$fetchq['tw_res']."</td>";
             		echo "<td>".$fetchq['qna_res']."</td>";
             		echo "<td>".$q3['score']."</td>";
             		echo "</tr>";	
             		 }
			 ?>            
        </tbody>
    </table>
    </center>



</body>
</html>



