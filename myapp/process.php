    <?php

$conn= mysqli_connect("localhost","root","","rca");
if(!$conn){
    echo mysqli_connect_error();
    
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table {
             background-color:lightblue;
             padding:10px;
             width:80%;
             margin:auto;
            }
            button {
                background-color: black;
                color: white;
                padding: 3px;
                border-radius: 6px;
            }
            button:hover{
                background-color:darkblue;
                color:black;
            }
            img{
                width:100px;
                height: 100px;
                border-radius: 50%;
                object-fit: cover;
            }
            a{
                text-decoration: none;
                color:white;
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>FirstName</th>
                <th>lastName</th>
                <th>Gender</th>
                <th>Role</th>
                <th>Update</th>
                <th>delete</th>
            </tr>";
<?php
        $addQuery=mysqli_query($conn,"SELECT * from mis_users");
        while($row=mysqli_fetch_assoc($addQuery)){
?>
                   <tr>
                       <td><?=$row["id"];?></td>
                       <td><img src='<?php echo $row["image"]?>' alt="" ></td>
                       <td><?php echo $row["firstName"];?></td>
                       <td><?php echo $row["lastName"];?></td>
                       <td> <?php echo $row["gender"]?></td>
                       <td> <?php echo $row["role"]?></td>

                       <td><button class="button"><a href="update.php?id=<?php echo $row["id"];?>">update</a></button></td>
                       <td><button class="button"><a href="./process.php?id=<?php echo $row["id"];?>">delete</a></button></td>
                    </tr>
                    
                    
                    <?php
                }    
                ?>
</table>
</body>
</html>