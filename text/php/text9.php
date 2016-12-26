<?php
$arr = array('tom'=>'100','jack'=>'90','jane'=>'60');
$result ='';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    if(isset($arr[$name])){
       $result = $arr[$name];
        echo "<script>alert('".$name."成绩为".$result."')</script>";
    }else{
        echo "<script>alert('用户名不存在')</script>";
    }
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
        <p>输入名字：</p>
        姓名：<input type="text" name="name"></br>
        <input type="submit" name="submit">
    </form>
    </body>
</html>
