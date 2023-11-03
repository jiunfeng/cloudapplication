<?php
/*
前端form的method=post 用$_POST
前端form的method=GET 用$_GET

*/
$id = $_POST["id"];
$ids = $_REQUEST["id"];
$userId = $_POST["userId"];
$userName = $_POST["userName"];
$gender = $_POST["gender"];
$city = $_POST["city"];

$content = $_POST["content"];
/*
str_replace
第一個參數為取代的文字
第二個參數為要置換的文字
第三個參數為文字的來源
\n:輸入框的換行符號
\r\n:輸入框的換行符號 r:return 回到最前端(左邊) n:new line 新的一行
*/
$content1 = str_replace("1", "2", $content);
echo ($content1 . "<br/>");

// $str = "Hellp World!";
// $pro = $_POST["pro"];

if (!empty($_POST["pro"])) {
    $pro = $_POST["pro"];
    foreach ($pro as $data) {
        echo ($data . "<br/>");
    }
}


//link sql
$server = "localhost";
$userNameSql = "root";
$pwd = "";
$db = "php_mysql";
$conn = new mysqli($server, $userNameSql, $pwd, $db);
$sql_insert = "INSERT INTO member (userid,username,city) VALUES('$userId','$userName','$city');";
$conn->query($sql_insert);
$conn->close();

/* // prepared statment 較安全的sql方法
$server = "localhost";
$userNameSql = "root";
$pwd = "";
$db = "php_mysql";
$conn = new mysqli($server, $userNameSql, $pwd, $db);
$sql = "INSERT INTO member (userid,username,city) VALUES(?,?,?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $userId, $userName, $city); //綁定參數  s:sting 文字 i:integer 數字 bind_param:綁定參數
$stmt->execute();

$stmt->close();
 */
header("Location: samp02_JQuery_1102.php");
exit;
