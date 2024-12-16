<?php
$db_host = 'localhost';
$db_user = 'root';     
$db_pass = '';         
$db_name = 'tech_gadget_lk';  

$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>