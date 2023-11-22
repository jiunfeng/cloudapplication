<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>後臺管理系統</title>
</head>
<script>
    function check() {
        let userId = document.getElementById("managerId");
        let pwd = document.getElementById("pwd");
        if (userId.value == "") {
            userId.focus();
            alert(userId.value);
            document.getElementById("userIdMsg").innerHTML = "<font color='red'>請輸入帳號</font>";
            return false;
        } else {
            document.getElementById("userIdMsg").innerHTML = "";
        }
        if (pwd.value == "") {
            pwd.focus();
            alert("123");
            document.getElementById("pwdMsg").innerHTML = "<font color='red'>請輸入密碼</font>";
            return false;

        } else {
            document.getElementById("pwdMsg").innerHTML = "";
        }
    }
</script>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center text-primary">後臺管理系統</div>
        </div>
        <div class="row">
            <div class="text-center">
                <form action="doLogin" method="post" onsubmit="return check()">
                    <!-- {{ csrf_field() }} -->
                    @csrf
                    <div class="row">
                        <div class="col-4 col-sm-3 col-md-2">帳號</div>
                        <div class="col-8 col-sm-9 col-md-10">
                            <input type="text" class="form-control" name="managerId" id="managerId" value="{{old('managerId')}}">
                            <div id="userIdMsg"></div>
                            @if($errors->has("account"))
                            <div class="text-danger">{{$errors->first("account")}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-3 col-md-2">密碼</div>
                        <div class="col-8 col-sm-9 col-md-10">
                            <input type="password" class="form-control" name="pwd" id="pwd">
                            <div id="pwdMsg"></div>
                            @if($errors->has("pwd"))
                            {{$errors->first("pwd")}}
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 col-sm-3 col-md-2"></div>
                        <div class="col-8 col-sm-9 col-md-10">
                            <input type="submit" class="btn btn-primary" value="確定">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>