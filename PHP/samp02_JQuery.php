<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>表單</title>
</head>
<script>
    function doTest() {
        //let或var 設定變數名稱
        var userId = document.getElementById("userId").value;
        if (userId == "") {
            alert("請輸入身分證字號");
            return false;
        }
    }

    function doCheck() {
        let userId = $("#userId").val();
        alert("身分證:" + userId);
    }
</script>

<body>
    <div class="container">
        <form method="post" action="">
            <div class="row">
                <!--
                onblur:焦點移開時
                onkeyup:鍵盤放開時
                onkeydown:鍵盤按下時
                onkeypress:鍵盤按下放開時
                onclick:滑鼠按下
                -->
                <div class="col-2">身分證</div>
                <div class="col-4"><input type="text" name="userId" id="userId" size="30" required onblur="doCheck()"></div><!--onblur 表示使用者離開這個框後要做甚麼事情 這邊叫做 呼叫 doTest-->
            </div>
            <div class="row">
                <div class="col-2">密碼</div>
                <div class="col-4"><input type="password" name="pwd" id="pwd" required>
                </div>
                <div class="row">
                    <div class="col-2">性別</div>
                    <div class="col-4"><input type="radio" name="gender" id="gender1" value="M">男
                        <input type="radio" name="gender" id="gender2" value="F">女
                        <!-- radio 單選 checkbox 多選 seect:下拉表單: -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">姓名</div>
                    <div class="col-4"><input type="text" name="useName" id="userName"> </div>
                </div>
                <div class="row">
                    <div class="col-6 text-center"><input type="submit" class="btn btn-primary" value="確定"></div>
                    <!-- input type 使用button不會作用需要另外寫方法，submit則會直接使用上方的required -->
                </div>
        </form>
    </div>
</body>

</html>