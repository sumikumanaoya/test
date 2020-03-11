<?php


session_start();
if(isset($_SESSION['id'])){
            
    header('Location:login.php');  
}

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ログインページ</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
      <header>
      <img src="4eachblog_logo.jpg">
      <div class="login"><a href="login.php">ログイン</a></div> 
      </header>
    <div class="login_box">
        <form action="mypage.php" method="post">
            <div class="form_contents">
                <div class="form_contentsItem">
                    <div class="mail">
                        <label>メールアドレス</label><br>
                  
                        <input type="text" class="formbox" size="40" name="mail" >
                    </div>
                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="password" name="password" class="formbox" size="40" >
                    </div>
                </div>
                <div class="loginbutton">
                    <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
    </div>
    <footer>©2018 InterNous.inc. All right reserved</footer>
</body>
</html>