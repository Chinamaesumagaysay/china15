<?php
include "conn.php";

//this program is for add students

if(isset($_POST['add_students'])){

    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $sec = $_POST['sec'];

    $insert = mysqli_query($conn, "INSERT INTO student VALUES ('0','$fn','$ln','$sec')");

    if($insert_tbl_list == true){
        ?>
        
        <script>
            alert("data is Successfully Inserted!");
            window.location.href="index.php";

        </script>
        <?php
    }else{
        ?>

        <script>
            alert("Data is not Inserted!\nPlease try again!");
            window.location.href="index.php";
        </script>
        <?php

    }
}
        


?>