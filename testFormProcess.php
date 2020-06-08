<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["submit"])){

            $username = $_POST["name"];
            $password = $_POST["password"];
            $min = 5;
            $max = 5; 
            
            $VIP_GUEST_LIST = ["Anna", "Koray", "Emma"];

            if(strlen($password) > $min && in_array($username, $VIP_GUEST_LIST) ){
                echo "Welcome Sir";
            } else {
                echo "problem occured. Password problem or you are not invited.";
            }

            

            
        }
    ?>
</body>
</html>