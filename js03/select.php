<?php
session_start();
include("funcs.php");
loginCheck();

$pdo = db_connect();

$stmt = $pdo->prepare("SELECT*FROM gs_chat");
$status = $stmt->execute();

$view="";
if($status ==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view.="<p>";
        $view.='<a href="u_view.php?id='.$result["id"].'">';
        $view.=$result["username"];
        $view.="</a>";
        $view.="  ";
        $view.='<a href="delete.php?id='.$result["id"].'">';
        $view.="削除";
        $view.="</a>";
        $view.="</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="logout.php">ログアウト</a>
    </header>

<h1>a</h1>
<div><?=$view?></div>
    
</body>
</html>