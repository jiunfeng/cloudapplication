<?php
header("Content-type:text/html;charset=utf-8");
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="first,php,code"> <!--可以被收尋引擎找到的 -->
    <meta name="description" content="my first php code"><!--網頁收尋引擎下面會看到的描述 -->
    <title>first php code</title>
</head>

<body>
    <!-- 長註解 -->
    <?php
    $userID = "a1234";
    $total = 100;
    echo ($userID . "123" . "456"); //輸出文字用，要用再查
    echo ($userID . "<br/><font color=\"red\" size=\"15\">test</font>");
    ?><br>
    <font style="font-style:normal;color:#6db5b5;font-size:20pt">這是 font-style 的 normal 字體效果</font><br>
    <span style="font-style:MesloLGS NF;">這是 font-style 的 italic 字體效果</span><br>
    <span style="font-style:oblique;">這是 font-style 的 oblique 字體效果</span><br>
</body>

</html>