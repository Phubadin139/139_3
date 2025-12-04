<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP request </title>
</head>
<body>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        NAME<input type="text" name="fname"><br>
        Last name<input type="text" name="lname"><br>
        <input type="submit" value="submit">
    </form>

    <?php 
    if($_SERVER['REQUEST_METHOD'] == "GET")  {
        if(isset($_GET['fname']) && isset( $_GET['lname'])) {
        $name = $_GET['fname'];
        $lname = $_GET['lname'];
        if(empty($name)) {
            echo "name is empty";
        }
        else{
            echo $name." ".$lname;
        }
    }
    }
    ?>
</body>
</html>