<?php
function get_IP_address()
{
    foreach (array('HTTP_CLIENT_IP',
                   'HTTP_X_FORWARDED_FOR',
                   'HTTP_X_FORWARDED',
                   'HTTP_X_CLUSTER_CLIENT_IP',
                   'HTTP_FORWARDED_FOR',
                   'HTTP_FORWARDED',
                   'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $IPaddress){
                $IPaddress = trim($IPaddress); // Just to be safe

                if (filter_var($IPaddress,
                               FILTER_VALIDATE_IP,
                               FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                    !== false) {

                    return $IPaddress;
                }
            }
        }
    }
}
  
  $ip_Address = get_IP_address();
$loc=json_decode(file_get_contents("http://ip-api.com/json/$ip_Address"),true);
echo $loc['city'];
  
?>
<?php
/*
if(isset($_GET['order_id'])){
    $currentDateTime = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $conn = mysqli_connect("localhost", "root", "", "ecommerce");
    
    function get_IP_address()
{
    foreach (array('HTTP_CLIENT_IP',
                   'HTTP_X_FORWARDED_FOR',
                   'HTTP_X_FORWARDED',
                   'HTTP_X_CLUSTER_CLIENT_IP',
                   'HTTP_FORWARDED_FOR',
                   'HTTP_FORWARDED',
                   'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $IPaddress){
                $IPaddress = trim($IPaddress); // Just to be safe

                if (filter_var($IPaddress,
                               FILTER_VALIDATE_IP,
                               FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                    !== false) {

                    return $IPaddress;
                }
            }
        }
    }
}
  
  $IpAddress = get_IP_address();
$loc=json_decode(file_get_contents("http://ip-api.com/json/$IpAddress"),true);
$city=$loc['city'];

$options = ['Order Received','Dispatched', 'Processing', 'In transist','Out for delivery'];

// Convert PHP array to a JavaScript array
echo '<script>
    var options = ' . json_encode($options) . ';
    var message = "Please select an option:\\n";
    for (var i = 0; i < options.length; i++) {
        message += (i + 1) + ". " + options[i] + "\\n";
    }

    var userSelection = prompt(message, "1");

    if (userSelection !== null) {
        var selectedOption = options[userSelection - 1];
        alert("You selected: " + selectedOption);
    }
</script>';

    $orderId = $_GET['order_id'];
    $query = "INSERT INTO logs (ip, order_id, place, date, status) VALUES ('$ip', '$orderId', '$city', '$currentDateTime', '$status')";
    
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
}
*/?>
