<?php
 $conn=mysqli_connect("localhost","root","","rca");
 if(!$conn){
     echo "Unable to connect ";
    }
else{
    $villages=fopen("Village.txt","r") or die("Unable to open file");
    while(!feof($villages)){

        $line= fgets($villages);
        $village=explode(",",$line);
        // remove unnecessary spaces
        $villageId=trim($village[0]);
        $cellId=trim($village[1]);
        $villageName=trim($village[2]);
        echo $villageId . " " . $cellId . " " .$villageName;
        
        $query=mysqli_query($conn,"insert into villages(villageId,cellId,villageName) values('$villageId','$cellId','$villageName')");
        if($query){
            echo "<br />";
            echo "Village with Id=".$villageId;
            echo "Data added successfully";
            echo "<br />";
        }
    }
    fclose($villages);
}

    
?>