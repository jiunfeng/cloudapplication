<?php
include_once "conn.php";

$userid = $_GET["userid"]; //超連結都是用GET
$sql = "SELECT * FROM member WHERE userid =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $userid);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <form method="post" action="update.php">
            <input type="hidden" name="userid01" value="<?php echo ($userid); ?>">
            <table class="table table-bordered border border-danger">
                <tr>
                    <td class="col-2">email</td>
                    <td class="col-4">
                        <input type="text" name="email" value="<?php echo ($user["email"]); ?>">

                </tr>
                <tr>
                    <td class="col-2">姓名</td>
                    <td class="col-4">
                        <input type="text" name="user001" value="<?php echo ($user["city"]); ?>">

                </tr>
                <tr>
                    <td class="col-2">手機</td>
                    <td class="col-4">
                        <input type="text" name="mobile01" value="<?php echo ($user["city"]); ?>">
                    </td>

                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <input type="submit" value="確 定" class="btn btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>