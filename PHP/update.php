<?php

$userId1 = $_POST["userid01"];
$city1 = $_POST["mobile01"];
$email = $_POST["email"];
$eee = $_POST["user001"];
include "conn.php";

$sql = "UPDATE member SET mobile=?,city=?,email=? WHERE userid=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $eee, $city1, $email, $userId1);
$stmt->execute();
$stmt->close();
$conn->close();

header("Location:linksql.php");
exit;
