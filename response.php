<?php
if (!empty($_POST["name"]) && !empty($_POST["studentid"]) && !empty($_POST["volunteer"])){
    $name=$_POST["name"];
    $studentid=$_POST["studentid"];
    $volunteer=$_POST["volunteer"];
    echo "妳/妳的名字是：" .$name. "<br>";
    echo "妳/你的學號是：" .$studentid. "<br>";
    echo "妳/妳是否參加系烤：".$volunteer. "<br>";
    echo "填寫完成";
}else{
    echo"資料輸入不完整";
}
?>