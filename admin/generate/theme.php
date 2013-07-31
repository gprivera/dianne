<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php"); 


  $query = mysqli_query($con, "SELECT * from members");
  $count = mysqli_num_rows($query);

	for($i=1;$i<($count + 1);$i++){
		   		$tid1 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='1'");
		   	 	$tid2 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='2'");
		   	 	$tid3 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='3'");
		      	$tid4 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='4'");
		      	$tid5 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='5'");
		        $tid6 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='6'");
		        $tid7 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='7'");
		        $tid8 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='8'");
		        $tid9 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='9'");
		        $tid10 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='10'");
		        $tid11 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='11'");
		        $tid12 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='12'");
		        $tid13 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='13'");
		        $tid14 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='14'");

       			$fetch1t = mysqli_fetch_array($tid1);
       			$fetch2t = mysqli_fetch_array($tid2);
       			$fetch3t = mysqli_fetch_array($tid3);
       			$fetch4t = mysqli_fetch_array($tid4);
       			$fetch5t = mysqli_fetch_array($tid5);
       			$fetch6t = mysqli_fetch_array($tid6);
       			$fetch7t = mysqli_fetch_array($tid7);
       			$fetch8t = mysqli_fetch_array($tid8);
       			$fetch9t = mysqli_fetch_array($tid9);
       			$fetch10t = mysqli_fetch_array($tid10);
       			$fetch11t = mysqli_fetch_array($tid11);
       			$fetch12t = mysqli_fetch_array($tid12);
       			$fetch13t = mysqli_fetch_array($tid13);
       			$fetch14t = mysqli_fetch_array($tid14);

       			$ts1 += $fetch1t['theme_score'];
       			$ts2 += $fetch2t['theme_score'];
       			$ts3 += $fetch3t['theme_score'];
       			$ts4 += $fetch4t['theme_score'];
       			$ts5 += $fetch5t['theme_score'];
       			$ts6 += $fetch6t['theme_score'];
       			$ts7 += $fetch7t['theme_score'];
       			$ts8 += $fetch8t['theme_score'];
       			$ts9 += $fetch9t['theme_score'];
       			$ts10 += $fetch10t['theme_score'];
       			$ts11 += $fetch11t['theme_score'];
       			$ts12 += $fetch12t['theme_score'];
       			$ts13 += $fetch13t['theme_score'];
       			$ts14 += $fetch14t['theme_score'];
		}

    mysqli_query($con,"UPDATE results set theme_wear=$ts1 WHERE contestant_id='1'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts2 WHERE contestant_id='2'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts3 WHERE contestant_id='3'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts4 WHERE contestant_id='4'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts5 WHERE contestant_id='5'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts6 WHERE contestant_id='6'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts7 WHERE contestant_id='7'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts8 WHERE contestant_id='8'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts9 WHERE contestant_id='9'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts10 WHERE contestant_id='10'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts11 WHERE contestant_id='11'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts12 WHERE contestant_id='12'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts13 WHERE contestant_id='13'");
    mysqli_query($con,"UPDATE results set theme_wear=$ts14 WHERE contestant_id='14'");
     	   
		 
		  $counter = mysqli_query($con, "SELECT max(theme_wear) from results");   
       $told2 = mysqli_fetch_array($counter);
       $casual_max = $told2[0];   
       $edge = ($count)*100;
       echo $edge;
	

			$ts1_p = ($ts1/$edge)*0.2*100;
			$ts2_p = ($ts2/$edge)*0.2*100;
			$ts3_p = ($ts3/$edge)*0.2*100;
			$ts4_p = ($ts4/$edge)*0.2*100;
			$ts5_p = ($ts5/$edge)*0.2*100;
			$ts6_p = ($ts6/$edge)*0.2*100;
			$ts7_p = ($ts7/$edge)*0.2*100;
			$ts8_p = ($ts8/$edge)*0.2*100;
			$ts9_p = ($ts9/$edge)*0.2*100;
			$ts10_p = ($ts10/$edge)*0.2*100;
			$ts11_p = ($ts11/$edge)*0.2*100;
			$ts12_p = ($ts12/$edge)*0.2*100;
			$ts13_p = ($ts13/$edge)*0.2*100;
			$ts14_p = ($ts14/$edge)*0.2*100;

	mysqli_query($con,"UPDATE results set tw_res=$ts1_p WHERE contestant_id='1'");
    mysqli_query($con,"UPDATE results set tw_res=$ts2_p WHERE contestant_id='2'");
    mysqli_query($con,"UPDATE results set tw_res=$ts3_p WHERE contestant_id='3'");
    mysqli_query($con,"UPDATE results set tw_res=$ts4_p WHERE contestant_id='4'");
    mysqli_query($con,"UPDATE results set tw_res=$ts5_p WHERE contestant_id='5'");
    mysqli_query($con,"UPDATE results set tw_res=$ts6_p WHERE contestant_id='6'");
    mysqli_query($con,"UPDATE results set tw_res=$ts7_p WHERE contestant_id='7'");
    mysqli_query($con,"UPDATE results set tw_res=$ts8_p WHERE contestant_id='8'");
    mysqli_query($con,"UPDATE results set tw_res=$ts9_p WHERE contestant_id='9'");
    mysqli_query($con,"UPDATE results set tw_res=$ts10_p WHERE contestant_id='10'");
    mysqli_query($con,"UPDATE results set tw_res=$ts11_p WHERE contestant_id='11'");
    mysqli_query($con,"UPDATE results set tw_res=$ts12_p WHERE contestant_id='12'");
    mysqli_query($con,"UPDATE results set tw_res=$ts13_p WHERE contestant_id='13'");
    mysqli_query($con,"UPDATE results set tw_res=$ts14_p WHERE contestant_id='14'");