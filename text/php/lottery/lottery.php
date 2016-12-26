<?php
$result = [];
if(isset($_POST['submit'])){
    for($i=0;$i<5;$i++){
        $arr=[];
        do{
            $a = mt_rand(0,36);
            $arr[] = $a;
            $arr = array_unique($arr);
        }while(count($arr)!=7);
        $result[]=$arr;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        #box{
            margin: 40px auto;
            width: 400px;
            height: 400px;
            position: relative;
        }
        #lottery{
            text-align: center;
            width: 400px;
            height: 50px;
            line-height: 50px;
            background: #cccccc;
            color: #ffffff;
        }
        input{
            width: 300px;
            height: 50px;
            color: red;
            text-align: center;
            line-height: 50px;
            position: absolute;
            left: 50%;
            margin-left: -150px;
            top: 0;
            background: lightskyblue;
        }
        #result{
            width: 400px;
            height: 350px;
            background: lightskyblue;
            position: absolute;
            bottom: 0;
        }
        #result div{
            left: 50px;
            bottom: 100px;
            position: absolute;
        }
    </style>
</head>
<body>
    <div id="box">
        <div id="lottery">福利彩票号码自动生成器</div>
            <div id="result">
                <form action="" method="post">
                    <input type="submit" name="submit" value="单击生成新号码">
                </form>
                <div>
                    <?php
                    foreach ($result as $key=>$arr){
                        $str = implode(',',$arr);
                        echo "第".($key+1)."注:".$str."<br>";
                    }
                    ?>
                </div>

            </div>
    </div>
</body>

</html>