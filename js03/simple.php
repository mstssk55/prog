<?php
session_start();
include("funcs.php");
loginCheck();
$pdo = db_connect();
$stmt = $pdo->prepare("SELECT*FROM gs_chat");
$status = $stmt->execute();
$view="";
$array_uid=array();
if($status ==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        if($result["username"] != $_SESSION["username"]){
            $view.='<li id=people_item1 class="people_line">';
            $view.='<img src="" id="eye'.$result["id"].'" class="people_eye" alt="">';
            $view.='<p class="people_name">';
            $view.=$result["username"];
            $view.='</p>';
            $view.="</li>";
            array_push($array_uid,$result["id"]);
        }
    }
}
$json_array = json_encode( $array_uid , JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
$uname = $_SESSION["username"];
$json_uname = json_encode( $uname , JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
$uid = $_SESSION["id"];
$json_uid = json_encode( $uid , JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Chatアプリ</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- コンテンツ表示画面 -->


<!-- 宛先一覧 ------------------------------------------------------------------>
<section id="chat">
    <div id="people">
        <ul id="people_list">
            <?=$view?>
        </ul>
    </div>

<!-- メッセージ欄---------------------------------------------------------------- -->
    <div id="message">
        <div id="output"></div>
        <div class="form">
            <textarea name="comment" id="text" class="" cols="100" rows="5"></textarea>
            <button id="send">送信</button>
        </div>
    </div>

<!-- その他欄--------------------------------------------------------------------- -->
    <div id="other">
        <div id="your">
            <img src="" id="u_icon" alt="">
            <p class="username"><?=$_SESSION["username"]?></p>
        </div>
        <input type="file" id="btn_upload" value="アップロード">
        <button id="up">登録する</button>
    </div>
</section>



<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- JQuery -->


<!--** 以下Firebase **---------------------------------------------------------------------------->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-storage.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBSoUh-TzJMdvsK7S4lk1KkfXCLUHTnCI8",
    authDomain: "gschat-c0f85.firebaseapp.com",
    databaseURL: "https://gschat-c0f85.firebaseio.com",
    projectId: "gschat-c0f85",
    storageBucket: "gschat-c0f85.appspot.com",
    messagingSenderId: "972368324309",
    appId: "1:972368324309:web:8125db2ac0a53fad11645c",
    measurementId: "G-6BXMDKS8Z0"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<!--** Firebaseここまで **---------------------------------------------------------------------------->



<script>
// アイコンの使用-------------------------------------------------------
    // php変数の変換--------------------------------------
    const js_uname = JSON.parse('<?=$json_uname?>');
    const js_uid = JSON.parse('<?=$json_uid?>');
    const js_array = JSON.parse('<?=$json_array?>');
    // -------------------------------------
    // firebase storageのURL取得 ユーザー画像--------------------------------------------------
    let send_icon = "";

    const u_icon = firebase.storage().ref().child('users/eye'+js_uid+'.jpg');
    u_icon.getDownloadURL().then(function(url){
        document.getElementById("u_icon").src = url;
        send_icon = url;
    });
    let to_send="";
$("body").on("click","#people_item1",function(){
    newPostRef.off("child_added");

    $("dl").remove();
    to_send = $(this).children("p").text();
    console.log(to_send);
    newPostRef.on("child_added",function(data){
        var v = data.val();
        var k = data.key; 
        function chat(){
            function chat_item(a){
                let str ='<dl id="'+k+'" class="chat'+a+'">'
                str +='<dt class="from from'+a+'">'
                str +='<img src="'+v.eye+'"class="chat_icon '+a+'" width="50">'
                str +='<div class="nd">'
                str +='<span class="chat_uname '+a+'">'+v.username+'</span>'
                str +='<span class="chat_date">'+v.date+'</span>'
                str +='</div>'
                str +='</dt>'
                str +='<dd>'
                str += v.text
                str +='</dd>'
                str +='</dl>'
                $("#output").append(str);
            };
            if(v.username == js_uname){
                chat_item("right");
                $(".right").hide();
                $(".fromright").css("justify-content","flex-end");
            }else{
                chat_item();
            };
        };
        if(v.username == js_uname && v.to ==to_send){
            chat();
            console.log("は")
        };
        if(v.username == to_send && v.to == js_uname){
            chat();
        };

    });
    $("#people_item1").off("click");

});
    function message(){
        let now = new Date();
        let year = now.getFullYear();
        let month = now.getMonth()+1;
        let date = now.getDate();
        let hour = now.getHours();
        let min = now.getMinutes();
        const submitdate = year+"/"+month+"/"+date+" "+hour+":"+min ;

        newPostRef.push({
            username:js_uname,
            text:$("#text").val(),
            date:submitdate,
            eye:send_icon,
            to:to_send
        });
        $("#text").val("");
    };

    var newPostRef = firebase.database().ref();
    $("#send").on("click",function(){
        message();
        console.log("あ")
    });
    $("#text").on("keydown",function(e){
        if(e.keyCode ==13){
            message();
            console.log("い")

        };
    });

    newPostRef.on("child_added",function(data){
        var v = data.val();
        var k = data.key; 
        function chat(){
            function chat_item(a){
                let str ='<dl id="'+k+'" class="chat'+a+'">'
                str +='<dt class="from from'+a+'">'
                str +='<img src="'+v.eye+'"class="chat_icon '+a+'" width="50">'
                str +='<div class="nd">'
                str +='<span class="chat_uname '+a+'">'+v.username+'</span>'
                str +='<span class="chat_date">'+v.date+'</span>'
                str +='</div>'
                str +='</dt>'
                str +='<dd>'
                str += v.text
                str +='</dd>'
                str +='</dl>'
                $("#output").append(str);
            };
            if(v.username == js_uname){
                chat_item("right");
                $(".right").hide();
                $(".fromright").css("justify-content","flex-end");
            }else{
                chat_item();
            };
        };
        if(v.username == js_uname && v.to ==to_send){
            chat();
        };
        if(v.username == to_send && v.to == js_uname){
            chat();
        };

    });


    // $(window).on('load', function() {
    //     const scroll = $('#output').get(0).sclollHeight;

    //     console.log(scroll)
    //     $('#output').scrollTop(scroll)
    //     let target = document.getElementById('#output');
    //     target.scrollTop = target
    //     // target.scrollIntoView(false);

    // });



// firebase storageへの画像登録--------------------------------------------------
    document.getElementById('up').addEventListener('click',function(){
        const files = document.getElementById('btn_upload').files;
        const image = files[0];
        console.log(image);
        const ref = firebase.storage().ref().child('users/eye'+js_uid+'.jpg');
        ref.put(image).then(function(snapshot){
        });

    });

// firebase storageのURL取得 友達画像--------------------------------------------------


    for( let i = 0; i<js_array.length; i++){
        document.getElementById('eye'+js_array[i]).src = 'imgs/default.png';
        const user_eye = firebase.storage().ref().child('users/eye'+js_array[i]+'.jpg');
        user_eye.getDownloadURL().then(function(url){
            document.getElementById('eye'+js_array[i]).src = url;
        });

    };

    // for( let i = 0; i<js_array.length; i++){
    //     const user_eye = firebase.storage().ref().child('users/eye'+js_array[i]+'.jpg');
    //     user_eye.getDownloadURL().then(function(url){
    //         document.getElementById('eye'+js_array[i]).src = url;
    //     }).catch(function(error){
    //         const def = firebase.storage().ref().child('users/default.jpg');
    //         def.getDownloadURL().then(function(url){
    //             document.getElementById('eye'+js_array[i]).src = url;
    //         };


    //     });

    // };




</script>
</body>
</html>
































