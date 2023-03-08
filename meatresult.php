<meta charset="utf8">

<?php
if(isset($_POST["id"])){



$id = $_POST["id"];
$name = $_POST["name"];
$will = $_POST["yes"];
$day = $_POST["day"];

echo "你的學號為".$id."<br/>";
echo "你的名子為".$name."<br/>";
echo "你願意參加系烤<br/>";
if($day=="0230"){
    echo "你有在看日期嗎<br/>";
}else if($day=="0314"){
    echo "你想在03/14參加<br/>";
}else{
    echo "你想在03/16參加<br/>";
}
}else{
    echo "資料輸入錯誤";
}


?>