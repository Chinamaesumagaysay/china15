<?php
    include "conn.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Records Page</title>
</head>
<body>





<div class="nav">

    <a href="index.php"> Add Students </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records </a>

</div>

<h1> List of Students</h1>

    <table border="5px solid">
        <tr>
            <td> Id </th>
            <td> Firstname </td>
            <td> Lastname </td>
            <td> Section </td>
            <td> Action 1 </td>
            <td> Action 2 </td>
        </tr>

        <tr>
            <?php
            $getdata = mysqli_query($conn, "SELECT * FROM student");
            while($row = mysqli_fetch_array($getdata)){
                ?>
        <tr>

            <td> <?php echo $row['id'];?></td>
            <td> <?php echo $row['fn'];?></td> 
            <td> <?php echo $row['ln'];?></td>
            <td> <?php echo $row['section'];?></td> 
            <td> <a href="update.php"> Update </a> </td>
            <td> <a href="delete.php"> Delete </a> </td>
        </tr>
            <?php
            }
            ?>
        

        
    </table>




    
</body>
</html>