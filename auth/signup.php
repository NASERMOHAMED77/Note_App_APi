<?php
include"../connect.php";

$username=htmlspecialchars(strip_tags($_POST["username"]));
$email=htmlspecialchars(strip_tags($_POST["email"]));
$password=htmlspecialchars(strip_tags($_POST["password"]));
$stmt=$conn->prepare("INSERT INTO `user`( `username`, `email`, `password`) VALUES ('$username','$email','$password')");
$stmt->execute();
$count=$stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("statuts"=>"Error"));


}
?>

//INSERT INTO `user`(`id`, `username`, `email`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')