

<?php

include'../connect.php';
$id=htmlspecialchars(strip_tags($_POST['id']));

$stmt=$conn->prepare("DELETE FROM `notes` WHERE notes_id=$id");
$stmt->execute();
$count=$stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status"=>"Success"));
}else{
    echo json_encode(array("status"=>"Erorr"));

}

?>





