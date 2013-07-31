<?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/database/database.php");

		$sql ="TRUNCATE members";
		$sql2 = "TRUNCATE votes";
		$sql4 = "TRUNCATE contestants";
        $truncate = "TRUNCATE results";
        $truncate2 = "TRUNCATE preliminary_results";
		$sql3 = "INSERT INTO `contestants` VALUES (1,'Naomie',NULL,'Minoru','female','1'),(2,'Jolo',NULL,'Hermo','male','2'),(3,'Danica Joyce',NULL,'Villanueva','female','3'),(4,'Jewel',NULL,'Nadua','male','4'),(5,'Katharyn',NULL,'Mayo','female','5'),(6,'Nickolo',NULL,'Gonzales','male','6'),(7,'Nikkie',NULL,'Resuello','female','7'),(8,'Cedrick',NULL,'Trofeo','male','8'),(9,'Hannah Grace',NULL,'Parian','female','9'),(10,'Patrick',NULL,'Manalang','male','10'),(11,'Christine Aiselgi',NULL,'Deroca','female','11'),(12,'Rae',NULL,'Guevarra','male','12'),(13,'Sapphira Louise',NULL,'Calfoforo','female','13'),(14,'Luis',NULL,'Montaos','male','14')";
        $sql5 = "INSERT INTO `results` VALUES (1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,7,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,8,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,14,NULL,NULL,NULL,NULL,NULL,NULL,NULL)";
        $query4 = mysqli_query($con,$sql4);
        $query5 = mysqli_query($con,$sql5);
		$query = mysqli_query($con,$sql);
        $query2 = mysqli_query($con,$sql2);
        $query3 = mysqli_query($con,$sql3);
        $truncateq = mysqli_query($con,$truncate);
        $truncateq2 = mysqli_query($con,$truncate2);
        
        for($i=1;$i<15;$i++){
        $results = mysqli_query($con,"INSERT INTO results (contestant_id)
                VALUES ('$i')");
        $results2 = mysqli_query($con,"INSERT INTO preliminary_results (contestant_id)
                VALUES ('$i')");
         }
      	

        echo "TRUCATE MEMBERS(TBL) = OK"."<br/>";
        echo "TRUNCATE VOTES(TBL) = OK"."<br/>";
        echo "TRUNCATE CONTESTANTS(TBL) = OK"."<br/>";
        echo "INSERT CONTESTANTS INFORMATION ON CONTESTANTS(TBL) = OK"."<br/>";

?>