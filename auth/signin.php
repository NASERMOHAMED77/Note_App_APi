<?php
include"../connect.php";

$email=htmlspecialchars(strip_tags($_POST["email"]));
$password=htmlspecialchars(strip_tags($_POST["password"]));
$stmt=$conn->prepare("SELECT * FROM user WHERE `password`=$password AND email=$email");

$stmt->execute();
$data= $stmt->fetch(PDO::FETCH_ASSOC);

$count=$stmt->rowCount();
if ($count>0) {
$data;
    echo json_encode(array("status" => "success","data"=>
    $data
));
}else{
    echo json_encode(array("statuts"=>"Error"));
}
?>
