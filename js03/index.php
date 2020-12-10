<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
    <form method="post" action="login_act.php">
        <label>名前: <input type="text" name="lid"></label><br>
        <label>PW: <input type="text" name="lpw"></label><br>
        <input type="submit" value="ログイン">
    </form>
    
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
            <legend>ユーザー登録</legend>
            <label>名前: <input type="text" name="username"></label><br>
            <label>パスワード: <input type="text" name="userpass"></label><br>
            <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>

</body>
</html>