<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>表單</title>
</head>
<script>
    function doTest()
    {
        // let 或var設定變數名稱
        var userId = document.getElementById("userId").value;
        if (userId == "")
        {
            alert("請輸入身分證");
            return false;
        }

        var pwd = document.getElementById("pwd").value;
        if (pwd == "")
        {
            alert("請輸入身密碼");
            return false;
        }
        
        var userName = document.getElementById("userName").value;
        if (userName == "")
        {
            alert("請輸入姓名");
            return false;
        }
    }
    
    function doCheck()
    {
        // 取得userId輸入的值(jquery的用法， #表示id，#userId: id為userId)
        let userId = $("#userId").val();
        $("#userId").val(userId.toUpperCase());
        // $.ajax：jquery的用法，使用此方法，要先載入jquery
        $.ajax({
            // url: 到送到哪一個程式執行
            url: "checkMember.php",
            // type: 送到後端的方式(get, post, put, patch)
            type: "post",
            // dataType: 後端回傳回來的資料型態，通常為text, json，若無指定，則為text型態
            dataType: "text",
            // data: 要送到後端的資料
            data: {
                // 左邊的userId：後端要接收的參數名稱
                // 右邊的userId：要送到後端的資料，不一定要與左邊名稱相同
                // toUpperCase:轉換為大寫
                // toLowerCase:轉換為小寫
                userId: userId.toUpperCase()
                //userName: $("#userName").val()
            },
            // msg: 變數名稱，可自行命名，後端回傳回來的資料
            success: function(sss){
                // 這裡是後端回傳資料後要如何處理
                // msg !=0 : 傳回來的資料筆數不是0, 代表資料庫中有該筆userId存在
                if (sss != "0")
                {
                    // 在userIdMsg寫入html語法
                    $("#userIdMsg").html("<font color='red'>帳號已有人使用</font>");
                    // 將userId的輸入資料清空
                    $("#userId").val("");
                    // 將游標鎖定在userId欄位
                    $("#userId").focus();
                }else{
                    // 將userIdMsg的html語法清除
                    $("#userIdMsg").html("");
                }
            }
        });
    }
</script>
<body>
    <div class="container">
        <form method="post" action="samp03.php" onsubmit="return doTest()">
            <input type="hidden" name="id" value="456">
            <div class="row">
                <div class="col-2">身分證</div>
                <!--
                    onblur:焦點移開時
                    onkeyup:鍵盤放開時
                    onkeydown:鍵盤按下時
                    onkeypress:鍵盤按下放開時
                    onclick: 滑鼠按下時

                    表單輸入:
                    checkbox:多選
                    radio:單選
                    input type = text : 文字輸入框
                    select: 下拉式選單
                    textarea:可多行輸入
                    button:按鈕
                    hidden:隱藏欄位
                    col-sm:>576px px:螢幕上的一點,也稱為像素
                    col-md:768px
                    col-lg:992px
                    col-xl:1200px
                 -->
                <div class="col-sm-8 col-md-6 col-lg-4">
                    <input type="text" name="userId" id="userId" onblur="doCheck()">
                    <div id="userIdMsg"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-2">密碼</div>
                <div class="col-4"><input type="password" name="pwd" id="pwd" class="form-control"></div>
            </div>
            <div class="row">
                <div class="col-2">性別</div>
                <div class="col-4"><input type="radio" name="gender" required id="gender1" value="M" class="form-check-input">男 
                <input type="radio" name="gender" id="gender2" value="F" required>女
            </div>
            <div class="row">
                <div class="col-2">專長</div>
                <div class="col-4">
                    <input type="checkbox" name="pro[]" value="java" class="form-check-input">java &nbsp;  &nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="pro[]" value="php" class="form-check-input">php &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="pro[]" value="bootstrap" class="form-check-input">bootstrap
            </div>
            <div class="row">
                <div class="col-2">通訊地址</div>
                <div class="col-4">
                    <select name="city" class="form-control" required>
                        <option value="">請選擇縣市</option>
                        <option value="1">台中市</option>
                        <option value="2">台北市</option>
                        <option value="3">高雄市</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-2">自傳</div>
                <div class="col-8">
                    <textarea name="content" class="form-control" rows="5" cols="80"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-2">姓名</div>
                <div class="col-4"><input type="text" name="userName" id="userName" placeholder="請輸入姓名"></div>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <input type="submit" class="btn btn-primary" value="確定">
                    <!--
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp; 空格
                        a : 超連結  href：要連結的路徑及檔案
                        history.back(): javascript的回上一頁
                        history.back() = history.go(-1)
                        onclick: 點選
                    
                    <a href="samp01.php" class="btn btn-warning">取消</a>-->
                </div>
                <div class="col-3 text-start">
                    <a href="samp01.php" class="btn btn-warning">取消1</a>
                    <input type="button" class="btn btn-warning" onclick="history.back()" value="取消2">
                    <button type="button" class="btn btn-info" onclick="doBack()">取消3</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        function doBack()
        {
            //location.href = "samp01.php";
            history.back();
        }
    </script>
</body>

</html>