<?php
    $dbHost='localhost';
    $dbUser='root';
    $dbPwd='';
    $dbName='db_assets_log';

    $conn=new mysqli($dbHost,$dbUser,$dbPwd,$dbName);
    if($conn -> connect_error){
        die(strtoupper(('database connection error')));
    }
    
?>