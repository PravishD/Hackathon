<?php
require_once "../backend/db_connect.php";
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO comment_tbl (message_submitted, comment_timestamp, flag,likes_num,dislikes_num,replied_by)
VALUES (:message_submitted, :comment_timestamp, :flag,:likes_num,:dislikes_num,:replied_by)");
$stmt->bindParam(':message_submitted', $comment);
$stmt->bindParam(':comment_timestamp', $commentDate);
$stmt->bindParam(':flag', $flag);
$stmt->bindParam(':likes_num',$likes);
$stmt->bindParam(':dislikes_num',$dislikes);
$stmt->bindParam(':replied_by',$replied);

$comment = $_POST["txt_comment"];
//$comment= "ejfddhfu";
$commentDate = $date_posted=strftime("%Y-%m-%d");
$flag = 0;
$likes =0;
$dislikes =0;
$replied=0;

$stmt->execute();

// For demonstration purposes, let's simply format the comment text
$formattedComment = '<div class="comment"><p>User: ' . htmlspecialchars($comment) . '</p></div>';

// Return the formatted comment text
echo $formattedComment;
?>