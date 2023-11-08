<?php
include_once "conn.php";

$userId = $_REQUEST["userId"];
$sql = "SELECT * FROM member WHERE userId = ?";
$stmt = $conn->prepare($sql);
// s:string 文字
// bind_param:綁定參數
$stmt->bind_param("s", $userId);
// execute:執行sql語法
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
//echo($user["userName"]);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="container">
    <div class="row">
        <form mehod="post" action="update.php">
            <input type="hidden" name="userId" value="<?php echo ($userId); ?>">\
            <table class="table table-bordered boder border-danger">
                <tr>
                    <td class="col-2 text-center">姓名</td>
                    <td class="col-4">
                        <input type="text" name="userName" value="<?php echo ($user["userName"]); ?>">
                    </td>
                </tr>
                <tr>
                    <td class="col-2 text-center">手機</td>
                    <td class="col-4">
                        <input type="text" name="mobile" value="<?php echo ($user["mobile"]); ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" value=" 確 定" class="btn btn-primary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>