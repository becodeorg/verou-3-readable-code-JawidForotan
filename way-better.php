<?php

// Order pizza

function orderPizza($pizzaType, $client) {

echo 'Creating new order... <br>';

$toPrint = "";
$address ="";
$toPrint .= $pizzaType;
$price = calculateCosts($pizzaType);

    if($client == 'koen')
    {
        $address = 'a yacht in Antwerp';
    } elseif ($client== 'manuele')
    {
        $address = 'somewhere in Belgium';
    } elseif ($client == 'students') {
        $address = 'BeCode office';
    }
    $toPrint .=   " pizza should be sent to " . $client . ". <br>The address: {$address}.";
    echo $toPrint."<br/>";
    echo"The bill is €".$price.".<br>";
    echo "Order finished.<br><br>";
}

// Calculate cost

function calculateCosts($pizzaType){
    $cost = 0;

    if ($pizzaType == 'margherita') {
        $cost = 5;
    }
    else if($pizzaType == 'golden'){
            $cost = 100;
        }else if($pizzaType == 'calzone'){
                $cost = 10;
            } else if ($pizzaType == 'hawaii') {
            throw new Exception('Computer says no');
        }
    return $cost;
}

// Order pizza to all

function orderPizzaToAll(){
            $test= 0;
            orderPizza('calzone', 'koen');
            orderPizza('margherita', 'manuele');
            orderPizza('golden', 'students');
}

function makeAllHappy($do_it) {
if ($do_it == true) {
        orderPizzaToAll();
    } else {
        echo "No pizza at all";
    }
}

//makeAllHappy(true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order pizza</title>
</head>
<body>
    <h1>
     <?php
    makeAllHappy(true);
    ?>
    </h1>
    
    
</body>
</html>