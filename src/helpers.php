<?php

if (! function_exists('jb_notification')) {
    function jb_notification($scope="Default", $message="Hello World")
    {
        $url = "http://health.james-ball.co.uk/notify/james-ball.co.uk/$scope/" . urlencode($message);

        $curlInit = curl_init($url);
    
        curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($curlInit, CURLOPT_HEADER, true);
        curl_setopt($curlInit, CURLOPT_NOBODY, true);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
    
        $response = curl_exec($curlInit);
    
        curl_close($curlInit);

        return $message;
    }
}
