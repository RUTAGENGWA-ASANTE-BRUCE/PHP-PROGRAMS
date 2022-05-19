<!DOCTYPE html>
<html>
    <head>
        <title>PHP File Upload</title>
        <style>
            .errorMessage3{
                margin-top:20px;
                background-color: greenyellow;
                color:darkgreen;
                text-align: center;
                height: 50px;
                padding: 25px;
                font-size: 20px;
                font-family: "Arial";
                font-weight: bold;
            }
            .errorMessage1{
                margin-top:20px;
                background-color: #BC544B;
                color:#710c04;
                text-align: center;
                height: 50px;
                padding: 25px;
                font-size: 20px;
                font-family: "Arial";
                font-weight: bold;
            }
            .errorMessage2{
                margin-top:20px;
                background-color: #db7093;
                color:darkred;
                text-align: center;
                height: 50px;
                padding: 25px;
                font-size: 20px;
                font-family: "Arial";
                font-weight: bold;
            }
            .imagesDiv{
                display: flex;
                flex-direction: row;
                margin-top: 20px;
                
            }
            .image{
                width: 300px;
                height:300px;
                object-fit: contain;
            }
        </style>
    </head>
    <body>
        <?php
        if(isset($_FILES['userFile'])){
            pre_r($_FILES); 
            $conn= mysqli_connect("localhost","root","","rca");
            $ext_error=false;
            $file_extension=explode(".",$_FILES['userFile']['name']);
            $fileName=$_FILES['userFile']['name'];
            $file_extension=end($file_extension);
            // pre_r($file_extension);
            //list of allowed extensions
            $extensions=array("jpg","jpeg","gif","png");
            
            $phpUploaderrors=array(
                0=>"There is no error, the file uploaded with success",
                1=>"The uploaded file exceeds the upladed_max_filesize directive i  php.ini",
                2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
                3=>"The uploaded file was only partially uploaded",
                4=>"No file was uploaded",
                6=>"Missing a temporary folder",
                7=>"Failed to write file to disk",
                7=>'a PHP extension  stopped the file upload',
            );

            if(!in_array($file_extension,$extensions)){
                $ext_error=true;
            }
            if($_FILES['userFile']['error']){
                echo "<p class='errorMessage1'>".$phpUploaderrors[$_FILES['userFile']['error']]."</p>";
            }
            elseif($ext_error){
                echo "<p class='errorMessage2'>Invalid file extension!</p>";
            }
            else{
                if(!$conn){
                    echo mysqli_connect_error();
                    }
                    $sql = "insert into uploadedImages(image) values('images/$fileName')";
                    $mysqlinsert = mysqli_query($conn, $sql);
                echo "<p class='errorMessage3'>success! Image has been uploaded</p>";
            }
            move_uploaded_file($_FILES['userFile']['tmp_name'],'images/'.$_FILES['userFile']['name']);
        }
     
        function pre_r($array){
           echo "<pre>";
           echo print_r($array);
           echo "</pre>";
        }
        ?>
        <Form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="userFile" />
            <input type="submit" />
        </Form>

        <div class="imagesDiv">
        <?php
        $addQuery=mysqli_query($conn,"SELECT * from uploadedImages");
        while($row=mysqli_fetch_assoc($addQuery)){
?>
<img src=<?php echo $row['image'] ?> alt='' class='image' >
<?php
                }    
                ?>
        </div>
    </body>
</html>