<?php
session_start();
$lid =$_POST["lid"];
$lpw = $_POST["lpw"];


try{
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
};


$sql="SELECT*FROM gs_chat WHERE username =:lid AND userpass=:lpw";

$stmt = $pdo->prepare($sql);

$stmt->bindvalue(':lid',$lid);
$stmt->bindvalue(':lpw',$lpw);
$status = $stmt->execute();

if($status ==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    $val = $stmt->fetch();
    if( $val["id"] !=""){
        $_SESSION["chk_ssid"] =session_id();
        $_SESSION["username"] =$val["username"];
        $_SESSION["id"] = $val["id"];
        header("Location: simple.php");

    }else{
        header("Location: index.php");
    }
    exit;
}

?>