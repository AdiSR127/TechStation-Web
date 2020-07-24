<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <?php
    if(isset($_POST["password"])){
        
                $name = $_POST["name"];
                $id = $_POST["email"];
                $pass = $_POST["password"];
                echo "Name is " . $name . "<br>";
                echo "Email id is ". $id . "<br>";
                echo "Password is ". $pass . "<br>";
        
    }
    else{
        header("location:index.php");
    }
     ?>
</body>
</html>