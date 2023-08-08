<?php

include'../connect.php';
$id=htmlspecialchars(strip_tags($_POST['id']));

$stmt=$conn->prepare("SELECT * FROM notes WHERE notes_user='$id'");
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
$count=$stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status"=>"Success","notes"=>$data));
}else{
    echo json_encode(array("status"=>"Erorr"));

}

?>