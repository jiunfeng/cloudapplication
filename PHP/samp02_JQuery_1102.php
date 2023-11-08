<html>
<!-- name與id的差別 https://dotblogs.com.tw/maplenote/2014/07/21/146024  -->

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

    /*     function doCheck() {
            let userId = $("#userId1").val();
            alert("身分證:" + userId);
        }//跳出警告訊息 */

    function doCheck() {
        //取得userId輸入的值(jequery用法，#表示id #userId: id 為userId)
        let userId = $("#userId").val();
        //$.ajax:jquery的用法，使用此方法要先載入JQuery
        $.ajax({
            url: "checkMember_1103.php",
            type: "post", //type:送到後端的方式(get,post)
            dataType: "text", //dataType 後端回傳回來的資料型態，通常為text,json
            data: {
                userId: userId,
                // userName: $("#userName").val()
                // 左邊:後端要接收的參數名稱
                // 右邊:要送到後端的名稱不一定要相同
                // toUpperCase:轉換大寫
                // toLowerCase:轉換小寫
            }, //data:要送到後端的資料

            //msg: 變數名稱，可自行命名
            success: function(msg) {
                if (msg != "0") {
                    $("#userIdMsg").html("<font color='red'>帳號已經有人使用</font>");
                    $("#userId").val("");
                    $("#userId").focus();
                } else {
                    $("#userIdMsg").html("");
                }
                //後端回傳資料後如何處理
            }
        });
    }
</script>

<body>
    <div class="container">
        <form method="post" action="samp03_1103.php"><!--用get明碼傳輸危險而且資料長度短 通常都用post-->
            <input type="hidden" name="id" value="456">
            <div class="row">
                <!--
                onblur:焦點移開時
                onkeyup:鍵盤放開時
                onkeydown:鍵盤按下時
                onkeypress:鍵盤按下放開時
                onclick:滑鼠按下

                表單輸入:
                checkbox:多選
                radio:單選
                input type =text :文字輸入框
                select:下拉式選單
                textarea:可多行輸入
                button:按鈕
                hidden:隱藏欄位
                col-sm:>576px
                col-md:768px
                col-ld:992px
                col-xl:1200px
                (預設斷點 可參考https://bootstrap5.hexschool.com/docs/5.0/layout/grid/)
                -->
                <div class="col-2">身分證</div>
                <div class="col-sm-5"><input type="text" name="userId" id="userId" class="form-control" required onblur="doCheck()">
                    <div id="userIdMsg"></div>
                </div><!--onblur 表示使用者離開這個框後要做甚麼事情 這邊叫做 呼叫 doTest-->
                <!-- bootstrap的話每列分成12 col-4  表示用長度2 -->
                <!--<div class="col-4"><input type="text" name="userId" id="userId1" size="30" required onblur="doCheck()"></div> 未使用bootstrap自己設定size 上方式使用bootstrap 沒打size預設12-->
            </div>
            <div class="row"><!--class=row 表示同一列 -->
                <div class="col-2">密碼</div>
                <div class="col-4"><input type="password" name="pwd" id="pwd" required>
                </div>
                <div class="row">
                    <div class="col-2">性別</div>
                    <div class="col-4"><input type="radio" name="gender" id="gender1" value="M" class="form-check-input" required>男
                        <input type="radio" name="gender" id="gender2" value="F">女
                        <!-- radio 單選 checkbox 多選 seect:下拉表單: -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">專長</div><!--陣列使用方式-->
                    <div class="col-4">
                        <input type="checkbox" name="pro[]" value="java" class="form-check-input">java &nbsp;<!--空格意思 -->
                        <input type="checkbox" name="pro[]" value="php" class="form-check-input">php &nbsp;
                        <input type="checkbox" name="pro[]" value="bootstrap" class="form-check-input">bootstrap &nbsp;
                    </div>
                </div>
                <div class="row"><!--下拉式選單-->
                    <div class="col-2">通訊地址</div>
                    <div class="col-4">
                        <select name="city" class="form-control" required><!--如果前端要控制才需要給id 否則可以不給-->
                            <option value="">請選擇縣市</option><!--預設欄位-->
                            <option value="1">台中市</option>
                            <option value="台北市">台北市</option>
                            <option>高雄市</option><!--不填value表示  value=高雄市-->
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">自傳</div>
                    <div class="col-8"><textarea name="content" class="form-control" rows="5"></textarea></div>
                </div>
                <div class="row">
                    <div class="col-2">姓名</div>
                    <div class="col-4"><input type="text" name="userName" id="userName" placeholder="請輸入姓名" required> </div> <!--JQuery直接使用placeholder就可以做檢查 -->
                </div>
                <div class="row">
                    <div class="col-6 text-center"><input type="submit" class="btn btn-primary" value="確定">
                        <!-- a 超連結用 href 要連結的路徑或檔案
                        &nbsp; 空格
                        -->
                        <a href="linksql.php" class="btn btn-warning">取消</a>
                        <!-- 取消的另外一種寫法 功能上相同但<button>靈活性更廣泛可以放一張圖讓使用者點擊之類的功能而不是像input單純只能給個value就執行 js
                        history.back():javascript的回上一頁
                        history.back()=history.go(-1)要回到上幾個頁面
                        onclick:點選
                    <input type="button" class="btn btn-warning" onclick="history.back()" value="取消">
                    <button type="button" class="btn btn-warning" onclick="doBack()">取消</button>
                    <script>
                        function doBack(){
                            history.back();
                        }
                    </script>
                    -->
                    </div>
                    <!-- input type 使用button不會作用需要另外寫方法，submit則會直接使用上方的required -->
                </div>
        </form>
    </div>
</body>

</html>