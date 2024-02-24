<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
</head>
<body>
    



<div class="nav">

    <a href="index.php"> Add Students </a> &nbsp; | &nbsp;
    <a href="records.php"> View Records </a>

</div>

<h1> Add Student Form </h1>

<form action="process.php" method="POST">

    <label> Firstname: </label> </br>
    <input type="text" name="fn" placeholder="Enter firstname here..." required> </p>

    <label> Lastname: </label> </br>
    <input type="text" name="ln" placeholder="Enter lastname here..." required> </p>

    <label> Section: </label> </br>
    <input type="text" name="sec" placeholder="Enter section here..." required> </p>

    <input type="submit" name="attendance" value="SUBMIT">
</form>




</body>
</html>