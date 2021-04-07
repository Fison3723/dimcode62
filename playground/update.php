<?php
include 'template/header.html';
require_once 'connectdb.php';;
$id = "";
$username = "";
$status = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {


    $id = $_GET["id"];
    $username = $_GET["username"];
    $status = $_GET["status"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $status = "";
    $id = $_GET["id"];
    $username = $_POST["username"];
    $status = $_POST["status"];
    $strSQL = "UPDATE user SET username='" . $username . "',status=" . $status . " WHERE id=" . $id;
    if (($username == "") && ($status == "")) {
        echo "ไม่สามารถเพิ่มข้อมูลได้1";
    } else {
        echo $strSQL;
        $result = $myconn->query($strSQL);
        if ($result) {
            echo "เพิ่มข้อมูลสำเร็จ";
        } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
}

?>

<body>
    <form action="update.php?id=<?= $id ?>" method="post">
        <table border="1">
            <tr>
                <td>username</td>
                <td><input type="text" name="username" value="<?= $username ?>"></td>
            </tr>
            <tr>
                <td>status</td>
                <td><input type="text" name="status" value="<?= $status ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
        <a href='insert.php'>เพิ่มผู้ใช้</a>
    <?php
    include 'template/header.html';
    ?>
    </form>
</body>

</html>