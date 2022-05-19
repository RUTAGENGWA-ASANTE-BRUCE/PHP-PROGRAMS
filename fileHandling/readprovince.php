<?php 
$provinces=fopen("Province.txt","r") or die("Unable to open the file");
// fread($provinces,filesize("province.txt"));
while(!feof($provinces)){
    echo fgets($provinces);
    echo "<br/>";
}
fclose($provinces);
?>