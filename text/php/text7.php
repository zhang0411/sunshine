<?php
session_start();
$result = [];
if($_SESSION['user']){
$result=$_SESSION['user'];
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $row = [$name,$age];
    $result[] = $row;
    $_SESSION['user']=$result;
}
if(isset($_POST['delete'])){
    array_pop($result);
    $_SESSION['user']=$result;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
    <form action="" method="post">
        姓名:<input type="text" name="name"><br>
        年龄：<input type="text" name="age"></br>
        <input type="submit" name="submit">
        <table>
            <tr>
                <td>编号</td>
                <td>姓名</td>
                <td>年龄</td>
            </tr>
            <?php
            foreach($result as $key=>$row){

                echo "<tr>";
                echo "<td>".($key+1)."</td>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "</tr>";
            }

            ?>

        </table>
        <input type="submit" name="delete" value="删除">
    </form>
    </body>
</html>