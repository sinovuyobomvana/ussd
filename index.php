<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];


if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Welcome to the TBC service\n";
     $response  = "CON Select your action from the menu below:\n\n";
    $response .= "1. Start trip\n";
    $response .= "2. Check running total\n";
    $response .= "3. End trip";

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Select your trip details:\n\n";
    $response .= "1. Njoli - Greenacres\n";
    $response .= "2. Njoli - Summerstrand\n";
    $response .= "0. Back";

} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
//     $response = "END Your phone number is ".$phoneNumber;
    
    $response = "CON Your trip has been started.\n";
    $response = "CON Select your action from menu below:\n";
    $response .= "1. Check running total";
    $response .= "2. End";

} else if($text == "1*1") { 
         $response = "CON Your TBC running balance for Njoli - Greenacres \n";
//     // This is a second level response where the user selected 1 in the first instance
//     $accountNumber  = "ACC1001";

//     // This is a terminal request. Note how we start the response with END
//     $response = "END Your account number is ".$accountNumber;

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
