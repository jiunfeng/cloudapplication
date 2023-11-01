<!-- booststrap -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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
        ?>
                <tr>
                    <td align="center"><?php echo ($row["userid"]); ?></td>
                    <td align="center"><?php echo ($row["username"]); ?></td>
                </tr>
        <?php }
        } ?>
    </table>
</div>