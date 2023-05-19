<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'config.php'; 

$file = "./options.json.txt";
$json = json_decode(file_get_contents($file), true);

foreach ($json as $select)
{
    // print_r($select);
    foreach ($select as $option)
    {
        print_r($option);
    }
}


?>