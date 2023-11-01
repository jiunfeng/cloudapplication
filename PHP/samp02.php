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
</script>

<body>
    <div class="container">
        <form method="post" action="" onsubmit="return doTest()">
            <div class="row">
                <div class="col-2">身分證</div>
                <div class="col-4"><input type="text" name="userId" id="userId" size="30" onblur="doTest()"></div><!--onblur 表示使用者離開這個框後要做甚麼事情 這邊叫做 呼叫 doTest-->
            </div>
            <div class="row">
                <div class="col-2">密碼</div>
                <div class="col-4"><input type="password" name="pwd" id="pwd">
                </div>
                <div class="row">
                    <div class="col-2">姓名</div>
                    <div class="col-4"><input type="text" name="useName" id="userName"> </div>
                </div>
                <div class="row">
                    <div class="col-6 text-center"><input type="button" class="btn btn-primary" value="確定"></div>
                </div>
        </form>
    </div>
</body>

</html>