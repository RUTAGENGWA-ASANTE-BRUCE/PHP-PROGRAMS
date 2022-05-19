<?php
$conn=mysqli_connect("localhost","root","","rca") or die("Unable to connect to database");
if(!$conn){
    echo "No connection availble";
}
else{
    $villages=mysqli_query($conn,"select * from villages");
    $villages2=fopen("villages2.txt","a") or die("Unable to open file");
    if($villages){
        while($row=mysqli_fetch_assoc($villages)){
            // $villagesIn=fgets($villages2);
            $villageId=$row['villageId'];
            $cellId=$row['cellId'];
            $villageName=$row['villageName'];
            $newVillages=$villageId.",".$cellId.",".$villageName."\n";
            fwrite($villages2,$newVillages);
    }
    fclose($villages2);
}
}



?>