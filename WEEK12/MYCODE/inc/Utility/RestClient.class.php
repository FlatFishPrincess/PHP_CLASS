<?php 
    class RestClient{

        // this function class the rest API
        static function call($method, $callData){

            //Assemble an array with the request type
            $requestHeader = array('requesttype' => $method);

            $data = array_merge($requestHeader, $callData);

            // Assemble the options to pass to the stram creation
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => $method,
                    'content' => http_build_query($data)
                )
            );

            // generate context 
            $context = stream_context_create($options);
            $result = file_get_contents(API_URL, false, $context);
            return $result;
        }
    }
   
?>