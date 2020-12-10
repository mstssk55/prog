<?php
session_start();

if(
    !isset($_POST["username"]) || $_POST["username"]==""||
    !isset($_POST["userpass"]) || $_POST["userpass"]==""
){
    exit('ParamError');
}


$username = $_POST["username"];
$userpass = $_POST["userpass"];

try{
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
};


$sql="INSERT INTO gs_chat(id,username,userpass)VALUES(NULL,:a1,:a2)";

$stmt = $pdo->prepare($sql);

$stmt->bindvalue(':a1',$username,PDO::PARAM_STR);
$stmt->bindvalue(':a2',$userpass,PDO::PARAM_STR);
$status = $stmt->execute();

if($status ==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: simple.php");
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["username"] = $username;

    exit;
}

?>

</script>

    
</body>
</html>