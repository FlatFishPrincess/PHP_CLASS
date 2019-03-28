<?php

class RestClient    {

    static function call($method)  {

        switch ($method)    {
            case "GET":
            case "POST":
            case "PUT":
            case "DELETE":  
            //Reference: https://stackoverflow.com/questions/5647461/how-do-i-send-a-post-request-with-php
            $data = array('requesttype' => $method, 
                'key2' => 'value2');

            // use key 'http' even if you send the request to https://...
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => $method,
                    'content' => http_build_query($data)
                )
            );

            $context  = stream_context_create($options);
            $result = file_get_contents(API_URL, false, $context);

            break;

        }
        
        
        return $result;

    }

}

?>