<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type=text],input[type=password]{
            width: 95%;
        }
        .Content{
            width: 400px;
            border: 1px solid  black;
            background-color: cyan;
            padding: 10px;
            
        }

        .Center{
            text-align: center;
        }

        .Message{
            color: green;
            text-align: center;
        
        }
    </style>
</head>
<body>
    <?php
        function validate($data){
            if(strlen($data['Username']) < 16){
                $err="";
                if((trim($data['Username']) == 'admin') && trim($data['Password']) == 'admin') {
                    $err .= "Correct";
                    return $err;
                }

                if((trim($data['Username']) != 'admin') && trim($data['Password']) != 'admin') {
                    $err .= "Username and Password Incorrect";
                    return $err;
                }

                if(trim($data['Username']) != 'admin') {
                    $err .= "Username Incorrect";
                    return $err;
                }

                if(trim($data['Password']) != 'admin'){
                    $err .= "Password Incorrect";
                    return $err;
                }
            }
            
            $err = "Username Not over 16";
        }
        if($_GET['submit'] == "Sign In"){
            $Username = $_GET['Username'];
            $Password = $_GET['Password'];
            $message = validate($_GET);
        }
        else{
            $Username = "";
            $Password = "";
            $message = "erroe message";
        }
    ?>
    <form action="" method="get">
        <div class="Content">
            <h3 class="Center">Login </h3>
            <br>Username:</br>
            <input type="text" name="Username" placeholder="Username" value="<?php print_r($Username)?>">*
            <br>Password</br>
            <input type="password" name="Password" placeholder="Password" valud="<?php print_r($Password)?>">*<br/><br/>
            
            <div class="Center">
                <button type="submit" name="submit" value="Sign In">Sign In</button>
                <button type="submit" name="Reset"value="Reset">Reset</button>
                
            </div>
            <input type="checkbox" checked="checked" name="remember">Remember me
            <a href="url" style="float:right;">Sign up</a>

            <div class="Message">
                <?php print_r($message)?>

            </div>
            
        </div>   


    </form>
    
    
</body>
</html>


