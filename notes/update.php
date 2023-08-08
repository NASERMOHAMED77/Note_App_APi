<?php
include"../connect.php";

$notes_title=htmlspecialchars(strip_tags($_POST["notes_title"]));
$id=htmlspecialchars(strip_tags($_POST["id"]));
$notes_content=htmlspecialchars(strip_tags($_POST["notes_content"]));
$stmt=$conn->prepare("UPDATE  `notes` SET  notes_title='$notes_title' , notes_content='$notes_content'
WHERE notes_id='$id'");
$stmt->execute();
$count=$stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("statuts"=>"Error"));


}
?>
