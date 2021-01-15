<?php
session_start();


try{
    $pdo = new PDO('mysql:dbname=mstssk55_gs;charset=utf8;host=mysql57.mstssk55.sakura.ne.jp','mstssk55','abc-12345');
}catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
};

$sql="SELECT * FROM gs_bm_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

$view = "";
if($status == false){

    $error=$stmt->errorInfo();
    exit("EroorQuery:".$erroor[2]);

}else{
    while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<tr class="item'.$result["id"].'" align="center">';
        $view .= '<td class="item_id">'.$result["id"].'</td>';
        $view .= '<td class="item_name">';
        $view .= '<a href="item.php?id='.$result["id"].'">';
        $view .= $result["country"].'</td>';
        $view .= '<td class="item_value">'.$result["text"].'</td>';
        $view .= '</tr>';

        

    }
};


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border = "1" width="800">
    <tr id="items" align="center">
        <th>国</th>
        <th>行きたい場所</th>
        <th>メモ</th>
        <th>その他</th>
    </tr>
    <!-- <tr id="item"> -->
        <?= $view ?>
    <!-- </tr> -->
</table>
<!-- <ul>
    <?= $view ?>
</ul> -->
    
</body>
</html>