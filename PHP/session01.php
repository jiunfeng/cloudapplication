<?php
session_start();

// 暫存在server(伺服器)端的資料
$_SESSION["uuu"] = "session test";
$_SESSION["userId"] = "A132";
//寫入使用者的資料，可以設定生命週期
$_COOKIE["XXX"] = "XXXXX";

echo ($_SESSION["uuu"]);

//清除單一session
unset($_SESSION["uuu"]);
unset($_SESSION["userId"]);

//全部清除
session_destroy();
