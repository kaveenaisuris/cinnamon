<?php
$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="purervzo_cinnamondb";
/*setting db values to constants */
foreach($db as $key=>$value){
    define(strtoupper($key),$value);
}
$connection =mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);





    
    
?>    