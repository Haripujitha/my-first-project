
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Verification Code</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
        }
        h2 {
            margin-bottom: 15px;
        }
        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        button {
            width: 50%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        #just{
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            margin-bottom: 10px;

        }
        #just:hover{
            background-color: #007BFF;
        }
    </style>
</head>
<body>
    <form action="sign_up_2.php" method="post" enctype="multipart/form-data">
        <?php
        session_start();
        echo"
    <div class=\"container\">
        <h2>Enter the OTP</h2>
        <button id='just' disabled>{$_SESSION['email']}</button><br>
        <input type=\"text\" name='otp' id=\"userContact\" placeholder=\"Enter the OTP\" required>
        <button name='submit' value='submit'>submit";
        echo"</button>
    </div>";  
    ?>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        if(((int)$_POST['otp'])==$_SESSION['otp']){
            echo "<script>alert('Registration sucessfull');</script>";
            $_SESSION['otp']=null;
      header('Location:sign_up.php');
        }else{
            session_destroy();
            header('Location:sign_up_1.php');
        }
    }
?>
