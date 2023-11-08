<!-- booststrap -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<?php
$server = "localhost";
$userName = "root";
$pwd = "";
$db = "php_mysql";
$conn = new mysqli($server, $userName, $pwd, $db); //連線資料庫
/* public __construct(
    ?string $hostname = null,
    ?string $username = null,
    ?string $password = null,
    ?string $database = null,
    ?int $port = null,
    ?string $socket = null
) */
if ($conn->connect_errno) {
    echo ("connect fault");
} else {
    echo ("success");
}

$sql = "SELECT userid,username FROM php_mysql.member";
$result = $conn->query($sql);
?>

<div class="container">
    <div class="col-2"><a href="samp02_JQuery_1102.php" class="btn btn-primary">新增</a> </div>
</div>
<div class="row col-sm-12 col-md-8 col-lg-4 col-xl-12"><!--控制表格 https://getbootstrap.com/docs/5.3/layout/grid/#example-->
    <table class="table table-bordered">
        <tr>
            <th>身分證</th>
            <td class="text-center text-danger bg-primary">姓名</td>
            <!-- 靠右 置中 -->
        </tr>
        <?php
        echo $conn->query('select now() as n;')->fetch_assoc()['n'];
        ?>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?><!-- 新增一個class作為us 並可刪除 -->
                <tr class="us<?php echo ($row["userid"]); ?>">

                    <td align=" center"><?php echo ($row["userid"]); ?></td>
                    <td align="center"><?php echo ($row["username"]); ?></td>
                    <!-- ?後面為要送到後端的參數及參數值
                若超過一個參數,用&連接,例如:edit.php?useid=A123&genfer=P&city=2 -->
                    <td class="text-center"><a href="edit.php?userid=<?php echo ($row["userid"]); ?>">修改</a></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger" onclick="doDelete('<?php echo ($row["userid"]); ?>')">刪除</button>
                    </td>
                </tr>
        <?php }
        } ?>
    </table>
</div>
<script>
    function doDelete(userId1) {
        console.log("delete");
        if (confirm("確定刪除[" + userId1 + "]?")) {
            console.log("delete");
            $.ajax({
                url: "delete.php",
                type: "get",
                dataType: "text",
                data: {
                    userId3: userId1,
                },
                success: function(msg) {
                    $("table tr.us" + userId1).remove();
                }
            });

        };
    }
</script>