<?php
            include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php");


            $query = mysqli_query($con,"SELECT max(facebook_votes) from results"); 
            $told = mysqli_fetch_array($query);
            $fb_max = $told[0];
        
            $query_piso = mysqli_query($con,"SELECT max(piso_votes) from results"); 
            $told2 = mysqli_fetch_array($query_piso);
            $piso_max = $told2[0];
       		$query3 = mysqli_query($con, "SELECT * from results order by id");
       		
            while ($row = mysqli_fetch_assoc($query3)) {
            		$query2 = mysqli_query($con, "SELECT * from contestants WHERE id='$row[id]'");
            		$fetch = mysqli_fetch_array($query2);
					$piso = ($row['piso_votes']/$piso_max)*(.05)*100;
					$fbv = ($row['facebook_votes']/$fb_max)*(.05)*100;            		
             		$d3 = ($piso+$fbv);

             	
             		          	          
            	$implement = mysqli_query($con,"UPDATE results set people_choice='$d3' WHERE contestant_id='$row[id]'");
    

             		 }


?> 