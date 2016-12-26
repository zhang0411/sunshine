<?php
/**
 * Created by PhpStorm.
 * User: xiaotingzhang
 * Date: 2016/12/24
 * Time: 22:37
 */
if(isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["option"])){
    $a = $_POST["a"];
    $b = $_POST["b"];
    $option = $_POST["option"];
    $result = "";
    echo "<script>"."a.value = '{$a}';"."b.value = '{$b}';"."option.value = '{$option}';"."</script>";
    if(!is_numeric($a)||!is_numeric($b)){
        $result.="运算符两边必须是数字";
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
        echo "<script>result.innerText='结果为：{$a}{$option}{$b} = {$result}';</script>";
    }else{
        echo "<script>result.innerText='{$result}';</script>";
    }
}
?>