<?php
    /*$conn=mysqli_connect("localhost","root","","ecommerce");
    $res=$conn->query("Select * from products");
    while($rw=mysqli_fetch_assoc($res)){
        $a=$rw['p_id'];
        $b=$rw['category'];
        $c="Other ".substr($rw['category'], 0, strpos($rw['category'],"_"))." products are waiting for your purchase";
        $d=$rw['category'].".php";
        echo $a."<br>";
        echo $b."<br>";
        echo $c."<br>";
        echo $d."<br>";
        #break;
        $conn->query("Insert into association(b_p_id,message,link) values($a,'$c','$d')");
    }
    echo"Completed";*/
    /*$conn=mysqli_connect("localhost","root","","ecommerce");
    $a=array(5,6,9,13);
    $b=array("search_result.php?search=hand+gripper&button_search=","search_result.php?search=dumb+bell&button_search=",
            "search_result.php?search=roller&button_search=","search_result.php?search=stress+ball&button_search=");
    $c=array("Power in your hands – build strength, boost confidence!","Power in your hands – build muscle, boost confidence, break limits!"
    ,"Roll your way to a stronger core – power, control, and results!","Squeeze the stress away – calm mind, strong grip!");
    for($i=0;$i<4;$i++){
        for($j=0;$j<4;$j++){
            if($i!=$j){
                $conn->query("Insert into association(b_p_id,message,link) values($a[$i],'$c[$j]','$b[$j]')");
            }
        }
    }*/
    $currentDate = new DateTime();
    $cur=$currentDate->format('Y-m-d');
    echo $cur."<br>";
    echo"Completed";
?>