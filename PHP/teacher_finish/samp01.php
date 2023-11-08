<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<?php
require_once "conn.php";

if ($conn->connect_error) {
    //echo("連線失敗");
} else {
    //echo("success");
}

//$sql = "SELECT userId, userName FROM member ORDER BY userId DESC, mobile, userName DESC";
$sql = "SELECT userId, userName FROM member";
$result = $conn->query($sql);
?>
<div class="container">
    <div class="row">
        <div class="col-2"><a href="samp02.php" class="btn btn-primary">新增</a></div>
    </div>
    <div class="row col-sm-12 col-md-8 col-lg-4 col-xl-12">
        <table class="table table-bordered">
            <tr class="table-secondary">
                <th class="text-center">身分證</th>
                <td class="text-center text-danger">姓名</td>
                <td class="text-center">修改</td>
                <td class="text-center">刪除</td>
            </tr>
            <?php
            // num_rows:筆數
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr class="us<?php echo ($row["userId"]); ?>">
                        <td align="center"><?php echo ($row["userId"]); ?></td>
                        <td align="center"><?php echo $row["userName"]; ?></td>
                        <!-- 
                            ?後面為要送到後端的參數及參數值 
                            = (等於)的左邊為參數名稱, 右邊為參數值
                            若超過一個參數, 用&連接, 例如：edit.php?useId=A123&gender=F&city=2
                        -->
                        <td class="text-center">
                            <a href="edit.php?userId=<?php echo ($row["userId"]); ?>" class="btn btn-success">修改</a>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger" 
                             onclick="doDelete('<?php echo ($row["userId"]); ?>')">刪除</button>
                        </td>
                    </tr>
            <?php
                }
            } ?>
        </table>
    </div>
</div>
<script>
    function doDelete(userId)
    {
        if (confirm("確定刪除[" + userId + "]?"))
        {
            $.ajax({
                url: "delete.php",
                type: "get",
                data:{
                    userId: userId
                },
                success: function(msg)
                {
                    $("table tr.us" + userId).remove();
                }
            })
        }
    }
</script>