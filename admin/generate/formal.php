<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php");

$query = mysqli_query($con, "SELECT * from members");
          $count = mysqli_num_rows($query);
                
        for($i=1;$i<($count + 1);$i++){
          $cid1 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='1'");
          $cid2 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='2'");
          $cid3 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='3'");
            $cid4 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='4'");
            $cid5 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='5'");
            $cid6 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='6'");
            $cid7 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='7'");
            $cid8 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='8'");
            $cid9 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='9'");
            $cid10 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='10'");
            $cid11 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='11'");
            $cid12 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='12'");
            $cid13 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='13'");
            $cid14 = mysqli_query($con, "SELECT * FROM votes WHERE member_id=$i and contestant_id='14'");

            $fetch1 = mysqli_fetch_array($cid1);
            $fetch2 = mysqli_fetch_array($cid2);
            $fetch3 = mysqli_fetch_array($cid3);
            $fetch4 = mysqli_fetch_array($cid4);
            $fetch5 = mysqli_fetch_array($cid5);
            $fetch6 = mysqli_fetch_array($cid6);
            $fetch7 = mysqli_fetch_array($cid7);
            $fetch8 = mysqli_fetch_array($cid8);
            $fetch9 = mysqli_fetch_array($cid9);
            $fetch10 = mysqli_fetch_array($cid10);
            $fetch11 = mysqli_fetch_array($cid11);
            $fetch12 = mysqli_fetch_array($cid12);
            $fetch13 = mysqli_fetch_array($cid13);
            $fetch14 = mysqli_fetch_array($cid14);
           
            $cs1 += $fetch1['formal_score'];
            $cs2 += $fetch2['formal_score'];
            $cs3 += $fetch3['formal_score'];
            $cs4 += $fetch4['formal_score'];
            $cs5 += $fetch5['formal_score'];
            $cs6 += $fetch6['formal_score'];
            $cs7 += $fetch7['formal_score'];
            $cs8 += $fetch8['formal_score'];
            $cs9 += $fetch9['formal_score'];
            $cs10 += $fetch10['formal_score'];
            $cs11 += $fetch11['formal_score'];
            $cs12 += $fetch12['formal_score'];
            $cs13 += $fetch13['formal_score'];
            $cs14 += $fetch14['formal_score'];
    }

    mysqli_query($con,"UPDATE results set formal_wear=$cs1 WHERE contestant_id='1'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs2 WHERE contestant_id='2'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs3 WHERE contestant_id='3'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs4 WHERE contestant_id='4'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs5 WHERE contestant_id='5'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs6 WHERE contestant_id='6'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs7 WHERE contestant_id='7'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs8 WHERE contestant_id='8'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs9 WHERE contestant_id='9'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs10 WHERE contestant_id='10'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs11 WHERE contestant_id='11'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs12 WHERE contestant_id='12'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs13 WHERE contestant_id='13'");
    mysqli_query($con,"UPDATE results set formal_wear=$cs14 WHERE contestant_id='14'");
         
       $counter = mysqli_query($con, "SELECT max(formal_wear) from results");   
       $told2 = mysqli_fetch_array($counter);
       $casual_max = $told2[0];   
       $edge = ($count)*100;
       echo $edge;

      $cs1_p = ($cs1/$edge)*0.2*100;
      $cs2_p = ($cs2/$edge)*0.2*100;
      $cs3_p = ($cs3/$edge)*0.2*100;
      $cs4_p = ($cs4/$edge)*0.2*100;
      $cs5_p = ($cs5/$edge)*0.2*100;
      $cs6_p = ($cs6/$edge)*0.2*100;
      $cs7_p = ($cs7/$edge)*0.2*100;
      $cs8_p = ($cs8/$edge)*0.2*100;
      $cs9_p = ($cs9/$edge)*0.2*100;
      $cs10_p = ($cs10/$edge)*0.2*100;
      $cs11_p = ($cs11/$edge)*0.2*100;
      $cs12_p = ($cs12/$edge)*0.2*100;
      $cs13_p = ($cs13/$edge)*0.2*100;
      $cs14_p = ($cs14/$edge)*0.2*100;

  mysqli_query($con,"UPDATE results set fw_res=$cs1_p WHERE contestant_id='1'");
    mysqli_query($con,"UPDATE results set fw_res=$cs2_p WHERE contestant_id='2'");
    mysqli_query($con,"UPDATE results set fw_res=$cs3_p WHERE contestant_id='3'");
    mysqli_query($con,"UPDATE results set fw_res=$cs4_p WHERE contestant_id='4'");
    mysqli_query($con,"UPDATE results set fw_res=$cs5_p WHERE contestant_id='5'");
    mysqli_query($con,"UPDATE results set fw_res=$cs6_p WHERE contestant_id='6'");
    mysqli_query($con,"UPDATE results set fw_res=$cs7_p WHERE contestant_id='7'");
    mysqli_query($con,"UPDATE results set fw_res=$cs8_p WHERE contestant_id='8'");
    mysqli_query($con,"UPDATE results set fw_res=$cs9_p WHERE contestant_id='9'");
    mysqli_query($con,"UPDATE results set fw_res=$cs10_p WHERE contestant_id='10'");
    mysqli_query($con,"UPDATE results set fw_res=$cs11_p WHERE contestant_id='11'");
    mysqli_query($con,"UPDATE results set fw_res=$cs12_p WHERE contestant_id='12'");
    mysqli_query($con,"UPDATE results set fw_res=$cs13_p WHERE contestant_id='13'");
    mysqli_query($con,"UPDATE results set fw_res=$cs14_p WHERE contestant_id='14'");