<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>请输入标题内容和日期：</p>
<form action="" method="post">
    新闻标题：<input name="title" type="text" /></br>
    新闻内容：<input name="content" type="text"  /></br>
    新闻时间：<input name="time" type="text"  /></br>
    <button type="submit"> 提交</button>
</form>
</body>
<?php
$title = $_POST["title"];
$content = $_POST["content"];
$time = $_POST["time"];
$array = [$title,$content,$time];
$select = implode(",", $array);
echo $select;
?>
</html>