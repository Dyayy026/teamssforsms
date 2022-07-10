<?php
try {
    $message = $_POST;

    
    //   The message variable will be an array 
    //   with the following sample content
     
      $message = [
        "secret" => "Webhook secret pass",
        "name" => "Contact name, false if unknown",
        "phone" => "Contact number, E164 format",
        "message" => "Message content here",
        "receive_date" => "Date received on device"
      ];
     
     

    // Before acknowledging the message, you should first verify 
    // if it's really coming from our platform. 
    // Use the web hook secret password to verify messages

    $secret = "f50f6f32ff605baf44483fcecceaba83fc3f9362";

    if($message["secret"] == $secret):
    	// Verified, reply to phone number using the API send endpoint
    	// Read the API guide for more info

        echo $message;
    else:
    	// Message not verified, ignore or log
        echo 'Error code: 600';
    endif;
} catch (Exception $e) {
    // Something went wrong
}
?>

<h1><?php echo $message;?></h1>

