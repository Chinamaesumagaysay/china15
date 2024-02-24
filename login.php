<?php

$host="localhost";
$user="root";
$password="";
$db="users";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username= '".$username."' AND password='".$password."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    
    if($row["usertype"]=="admin")
    {
        header("location:adminhome.php");
    }

    else
    {
        echo"username or password incorrect";
       
    }

    
    
}




?>








<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<style>


     body{ 
    background-image:url(img/blue.jpg);
    background-size: cover; 
    font-family: sans-serif;
      
    .header{
        border: 5px solid;
        text-align: center;
        font-size: 30px;
        font-family: verdana;
        background-color: yellow;
      
      }

      .main-img{
        border: 5px solid;
      }
        .menu{
        padding: 20px;
        background-color: black;
      }

      .menu a{
        color: white;
        text-decoration: none;
        font-size: 20px;
        font-family: tahoma;
        margin-right: 50px;
      }

      .menu a:hover{
        color: red;
      }

      .content{
        border: 5px solid;
        margin-bottom: 200px;
      }

      .content .cont1{
        text-align: center;
        float: left;
        width: 50%;
        padding-top: 30px;
      }
    </style>

</head>
<body>
    
    

<center>
    


    </style>
<div class="main-img">
        <h1> LOGIN FORM </h1>
    
   
    <br><br><br><br>
    <div style="background-color:skyblue; width: 500px;">
    <br><br>

        <form action="#" method="POST">

    <div>
        <label>username</label>
        <input type="text" name="username" required>
    </div>
    <br><br>

    <div>
        <label>password</label>
        <input type="password" name="password" required>
    </div>

    <br><br>

    <div>

        <input type="submit" value="Login">
    </div>
</form>

<br><br>


</div>

    </center>

</body>
</html>