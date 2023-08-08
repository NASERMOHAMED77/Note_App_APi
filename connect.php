<?php
$dns="mysql:host=localhost;dbname=test1";
$user="root";
$pass="";
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"
);
try {
    $conn=new PDO($dns,$user,$pass,$option);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    //throw $th;
    echo $e->getMessage();
}
?>