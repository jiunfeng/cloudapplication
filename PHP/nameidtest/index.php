<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<script>
    function doTest() {
        //document.這是JS原生呼叫變數的方法
        var doTest_Id = document.getElementById("userId").value;
        console.log("byidJS__" + doTest_Id);
        var doTest_Name = document.getElementsByName("userId1");
        console.log("bynameJS__" + doTest_Name[0].value);
        //innerHTML 直接取欄位初始得值
        var doTest_tes = document.getElementById("tes").innerHTML;
        console.log("byidtes__" + doTest_tes);
        console.log("-----------------------------");

        //JQuery取值方法 宣告以＄開頭只是慣例，表示這是由JQ來的物件
        var $doTest_Id_jq = $("#userId").val();
        // alert($('#userId').val());
        console.log("byidJQ__" + $doTest_Id_jq);
        var $doTest_Name_jq = $("input[name='userId1']").val();
        console.log("bynameJQ__" + $doTest_Name_jq);
        console.log("-----------------------------");
        console.log(".val()____" + $("#testText").val());
        console.log(".val()____" + $("#testText").html());
        console.log(".val()____" + $("#testText").text());

        //php ajax實例
        // $.ajax(
        //     {
        //         url: "test.php",
        //         type:"post",
        //         dataType:"text",

        // })
    }
</script>

<body>
    <div class="container-xxl">
        <div class="col-2">測試輸入值</div>
        <div class="col-4"><input type="text" name="userId1" id="userId" size="100" onblur="doTest()">777</div>
        <!-- 重複使用相同name 並且呼叫 doTest該值無法被更改 -->
        <div class="col-4"><input type="text" name="userId1" id="userId1" size="100" onblur="doTest()"></div>
        <form action="" method="post">
            請輸入密碼:<input type="text" name="pwd"><br>
            請輸入密碼:<input type="text" name="username"><br>
            <input type="submit">
            <!-- submit1 -->
        </form>
    </div>
    <div class="container-sm" name="testText1" id="testText">Test text!!!<br><br><br><br><br></div>

    <form class="container-sm" method="post">
        <div class="container-sm">
            username[1]<input type="text" name="username[]" />
            username[2]<input type="text" name="username[]" />
            <br>
            username1 <input type="password" name="username1" />
            username1 <input type="password" name="username1" />
        </div>
        <br>
        <input type="submit" value="Submit" />
        <!-- submit2 -->
    </form>

</body>

</html>


<?php
/* form最外層 裡面會有 input會有不同元素  當type＝submit 表示表單內的input提交
    就可以讓這邊的php使用
    submit1 送 pwd username
    submit2 送 username password Submit
    所以當 使用 submit2 echo pwd會顯示未定義
*/
echo @$_POST["pwd"]; //有加@ 網頁loading時不會出現錯誤訊息

echo $_POST["username"][0] ?? '??';
echo $_POST["username"][1] ?? '??';
echo "---";
echo $_POST["username1"] ?? '??'; //若沒有在設計時加入[]將他作為陣列，只會取得最後一個username1

?>