<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="trail_web_3.php" method="post">
        <label>P_id_1</label>
        <input type="number" required name="p_id_1"/>
        <br>
        <label>p_id_2</label>
        <input type="number" required name="p_id_2"/>
        <br>
        <label>Message</label>
        <input type="text" required name="message"/>
        <br>
        <label>Link</label>
        <input type="text" required name="link"/>
        <input type="submit" name="submit"/>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $b_p_id=$_POST['p_id_1'];
        $r_p_id=$_POST['p_id_2'];
        $message=$_POST['message'];
        $link=$_POST['link'];
        $conn=mysqli_connect("localhost","root","","ecommerce");
        echo $b_p_id."<br>";
        echo $r_p_id."<br>";
        echo $message."<br>";
        echo $link."<br>";
        $conn->query("Insert into association(b_p_id,r_p_id,message,link) values($b_p_id,$r_p_id,'$message','$link')");
    }
?>