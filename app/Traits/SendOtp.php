<?php


namespace Jivoni\Traits;

trait SendOtp {

	public function sendTheOtp($phone, $otp) {

		 $authKey = "179537A8dc5PRixK59e43aea";

              
        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = "Jivoni";

        //Your message to send, Add URL encoding here.
        $message = urlencode("OTP for mobile verification is $otp. Please do not share it with anyone.");

        //Define route 
        $route = "4";
        //Prepare you post parameters
        $postData = array(
          'authkey' => $authKey,
          'mobiles' => $phone,
          'message' => $message,
          'sender' => $senderId,
          'route' => $route
        );

        //API URL
        $url="https://control.msg91.com/api/sendhttp.php";

        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));


        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);

        //Print error if any
        if(curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }

        curl_close($ch);
	}

}