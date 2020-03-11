<?php

session_start();
if(isset($_SESSION['id'])){
    header("Location:login.php");
}

?>


<!DOCTYPE HTML>
<html lang="ja">
     <head>
       <meta charset="utf-8">
         <title>マイページ登録</title>
         <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
<body>
   <header>
    <img src="4eachblog_logo.jpg">
    <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    <main>
        <p style="color:red;">入力された内容が間違っています。</p>
        
        <form action="mypage.php" method="post">
            <div class="form_contents">
                <div class="mail">
                <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" 
						   name="mail">
                
                
                </div>
                <div class="password">
                <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40"
						   name="password">
                
                </div>
                <div class="loginbutton">
                 <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>         
            
        </form>
            

    </main>
<footer>
  ⓒ2018 InterNous inc. All rights reserved
</footer>    
    
</body>
    
    


</html>