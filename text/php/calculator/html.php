
<!--1：写一个计算器具备加减乘除除余五种功能 要求验证是不是为空-->
<!--是不是数字最后做出来的样式 注意还要实现点击计算按钮后你输入的数字还要保留在框中-->
<!--不能为空(因为你一点击按钮提交 页面就刷新了)---此题可以考虑最后做-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #result{
            width: 600px;
            height: 40px;
            border: 1px solid #ccc;
            text-align: left;
        }
    </style>
</head>
    <body>
      <div id="inputBox">
          <form action="" method="post">
              <input type="text" name="a" id="a">
              <select name="option" id="option">
                  <option value="+">+</option>
                  <option value="-">-</option>
                  <option value="*">*</option>
                  <option value="/">/</option>
                  <option value="%">%</option>
              </select>
              <input type="text" id="b" name="b">
              <button type="submit" name="submit" id="submit">计算</button>
          </form>
      </div>
      <div id="result"></div>
    </body>
<script src="jisuan.js"></script>
<?php
if(isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["option"])){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $option = $_POST["option"];
    $result = "";
    echo "<script>"."a.value = '{$a}';"."b.value = '{$b}';"."option.value = '{$option}';"."</script>";
    if(!is_numeric($a)&&!is_numeric($b)) {
    $result .= "两边必须填写数字";
    }elseif(!is_numeric($a)){
        $result.="第一个不是数字";
    }elseif(!is_numeric($b)) {
        $result .= "第二个不是数字";
    }else{
        $a=$a-0;
        $b=$b-0;
        switch($option){
            case"+";
                $result=$a+$b;
                break;
            case"-";
                $result=$a-$b;
                break;
            case"*";
                $result=$a+$b;
                break;
            case"/";
                if($b==0){
                    $result.="除数不能为零";
                }else{
                    $result=$a/$b;
                }
                break;
            case "%";
                if(!is_int($a)||!is_int($b)){
                    $result.="求余运算符两边必须是整数";
                }else{
                    $result=$a%$b;
                }
                break;
            default;
                break;
        }
    }
    if(is_numeric($result)){
        echo "<script> result.innerText=null; result.innerText='结果为：{$a}{$option}{$b} = {$result}';</script>";
    }else{
        echo "<script>result.innerText='{$result}';</script>";
    }
}
?>
</html>