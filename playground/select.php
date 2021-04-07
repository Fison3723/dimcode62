<?php
include 'template/header.html';
require_once 'connectdb.php';

$strSQL = "SELECT id, username, status FROM user";
$result = $myconn->query($strSQL);


?>

<body>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <td> ลำดับ</td>
            <td> ชื่อผู้ใช้</td>
            <td> สถานะ</td>
            <td> แก้ไข</td>
            <td> ลบ</td>
        </tr>
        <thead class="thead-dark">
            
        <?php
        while ($row = $result->fetch_array()) {
            //echo $row["username"] . "<br>";
        ?>
            <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["username"]?></td>
                <td><?php echo $row["status"]?></td>
                <td><a href="update.php?id=<?php echo $row["id"]?>&username=<?php echo $row["username"]?>&status=<?php echo $row["status"]?>"><i class="fas fa-cog"></i></td>
                <td><a href="delete.php?id=<?php echo $row["id"] ?>"><i class="fas fa-trash"></i></a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href='insert.php'>เพิ่มผู้ใช้</a>
    <?php
    include 'template/header.html';
    ?>
</body>


</html>