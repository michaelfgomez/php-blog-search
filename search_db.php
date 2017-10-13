<?php
$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "php-lego-system";

foreach($db as $key => $value){
    define(strtoupper($key), $value); //uppercase the keys
}

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(!$con){
    //echo "We are connected";
    die("connection failed" . mysqli_error($con));
}

?>