<?php
include "conn.php";

$userId = $_GET["userId3"];
$sql = "DELETE FROM member WHERE userid =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userId);
$stmt->execute();
$stmt->close();
$conn->close();
