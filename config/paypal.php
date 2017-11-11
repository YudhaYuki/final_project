<?php

return array(
/** set your paypal credential **/
'client_id' =>'AQ1Up95TEBdekfyI6eTk4yjFFnp7o0uoCcfZLEaaOq-sUeLvGsocd4fr6dIX0cCU4k4p9_pa9tN4mLsy',
'secret' => 'EMZRAsHqW3BGPvhbLK9A2u9-9Am_13Ix2QE9zm26n3X-OIh6vcrFp5ukMrBp2hIVxxZkCyZ_DcQlJoO7',
/**
* SDK configuration 
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);