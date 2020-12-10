<?php
function h($val){
    return htmlspecialchars($val,ENT_QUOTES);
}
function loginCheck(){
    if(!isset($_SESSION["chk_ssid"])||
    $_SESSION["chk_ssid"]!=session_id()){
        echo "LOGIN ERROR";
        exit();
    }else{
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    }

}


function db_connect(){
    try{
        $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    }catch(PDOException $e){
        exit('DbConnectError:'.$e->getMessage());
    };
    return $pdo;
    
}

?>