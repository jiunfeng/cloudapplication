<?php
/*
前端form 的method = post 用$_POST, 大寫(注意有底線)
前端form 的method = get 用$_GET, 大寫

或者用$_REQUEST, 大寫
*/
$id = $_POST["id"];
$ids = $_REQUEST["id"];

$userId = $_POST["userId"];
$userName = $_POST["userName"];
$gender = $_POST["gender"];
$city = $_POST["city"];

$content = $_POST["content"];
/* str_replace: 
    第一個參數為被取代的文字
    第二個參數為要置換的文字
    第三個參數為文字的來源
    \n: 輸入框的換行符號
    \r\n:輸入框的換行符號 r:return 回到最前端(左邊) n:new line 新的一行
*/
$content = str_replace("\n", "<br/>", $content);

$str = "Hello World!";
//echo(str_replace("Hello", "Yes", $str));

// !empty : 驚嘆號+empty: 如果不是空的，代表有勺選
// !:不等於
if (!empty($_POST["pro"]))
{
    $pro = $_POST["pro"];
    // as :取別名, 將每一筆的pro用data取代
    // foreach:每一筆
    foreach($pro as $data)
    {
        echo($data . "<br/>");
    }
}

include "conn.php";
// 這種方式會造成駭客寫入有害資料
//$sql = "INSERT INTO member(userId, userName, city) VALUES('".$userId."','".$userName."', ".$city.")";
//$conn->query($sql);

// prepared statement
$sql = "INSERT INTO member(userId, userName, city) VALUES(?, ?, ?)";
// 準備sql語法
$stmt = $conn->prepare($sql);
// s:string 文字
// i:integer 數字
// bind_param:綁定參數
$stmt->bind_param("ssi", $userId, $userName, $city);
// execute:執行sql語法
$stmt->execute();
// stmt->close() : 關閉 prepared stratment
$stmt->close();
// conn->close(): 關閉資料庫連線
$conn->close();

header("Location: samp01.php");
exit;
?>