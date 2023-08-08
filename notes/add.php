<?php
include"../connect.php";

$notes_title=htmlspecialchars(strip_tags($_POST["notes_title"]));
$notes_image=htmlspecialchars(strip_tags($_POST["notes_image"]));
$notes_content=htmlspecialchars(strip_tags($_POST["notes_content"]));
$notes_user=htmlspecialchars(strip_tags($_POST["notes_user"]));
$stmt=$conn->prepare("INSERT INTO
 `notes`(  `notes_title`, `notes_content`,notes_image,notes_user) VALUES
  ('$notes_title','$notes_content','$notes_image','$notes_user')");
$stmt->execute();
$count=$stmt->rowCount();
if ($count>0) {
    echo json_encode(array("status" => "success"));
}else{
    echo json_encode(array("statuts"=>"Error"));


}
?>
