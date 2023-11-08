<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="這裡是放網站或網頁的描述，主要是給搜尋引擎搜尋用的">
    <meta name="keywords" content="php, java, mysql，給搜尋引擎關鍵字搜尋用的">
    <title>這是第一個php程式</title>
</head>

<body>
    <!--
        html的註解
        早期的charset為big5<br>
        大陸的編碼為gb2312
        <br>或<br/>:換行
        font size:預設為3 , 等於12pt
        style:代表使用css(樣式表)
        font color: 文字顏色,可用英文表示,也可用RGB三元色
        RGB: R:紅色, G:綠色  B:藍色 表示方式為#000000~#FFFFFF
    -->

    <?php
    //echo ("Hello"); 單行註解
    /*
        多行註解(不顯示在網頁上)
        2023.11.1 xxx單位xx先生 申請單編號:xxx
        \:跳脫字元
    */
    $userId = "A1234";
    $total = 100;
    //echo ($userId . "<br/><font color='red' size='10'>test</font>");
    echo ($userId . "<br/><font color=\"red\" size=\"10\">test</font>");
    ?>
    
    <br/>
    <font style="color:#6db5b5; font-size:16pt">紅色</font>
</body>

</html>