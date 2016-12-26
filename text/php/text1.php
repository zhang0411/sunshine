<?php
      $a = '';
      $b = '';
      $tag = '';
      $result = '';
   if(isset($_POST['submit'])){
       $a = $_POST['a'];
       $b = $_POST['b'];
       $tag = $_POST['tag'];
       if(!is_numeric($a)&&!is_numeric($b)){
           $result = '两边必须为数字';
       }elseif(!is_numeric($a)){
           $result = '第一个不是数字';
       }elseif(!is_numeric($b)){
           $result = '第二个不是数字';
       }
       if($result==''){
           switch ($tag) {
               case'+':
                   $result = $a + $b;
                   echo $result;
                   break;
               case'-':
                   $result = $a - $b;
                   break;
               case'*':
                   $result = $a * $b;
                   break;
               case'/':
                   if ($b != 0) {
                       $result = $a / $b;
                   } else {
                       $result = '除数不能为零';
                   }
                   break;
               case'%':
                   if ($b != 0) {
                       $result = $a % $b;
                   } else {
                       $result = '除数不能为零';
                   }
                   break;
           }
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
    <table>
        <tr>
            <td><input type="text" name="a" id="a" value="<?php echo $a ?>"></td>
            <td>
                <select name="tag">
                    <option value="+" <?php
                    if($tag=='+'){
                        echo "selected";
                    }
                    ?>>+</option>
                    <option value="-"  <?php
                    if($tag=='-'){
                        echo "selected";
                    }
                    ?>>-</option>
                    <option value="*"  <?php
                    if($tag=='*'){
                        echo "selected";
                    }
                    ?>>*</option>
                    <option value="/"  <?php
                    if($tag=='/'){
                        echo "selected";
                    }
                    ?>>/</option>
                    <option value="%"  <?php
                    if($tag=='%'){
                        echo "selected";
                    }
                    ?>>%</option>
                </select>
            </td>
            <td><input type="text" name="b"  value="<?php echo $b ?>"></td>
            <td><input type="submit" value="计算" name="submit"></td>
        </tr>
        <tr >
            <td colspan="4"><?php echo $result ?></td>
        </tr>
    </table>
    </form>
    </body>

</html>
