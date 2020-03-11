<?php
mb_internal_encoding("utf8");

session_start();


?>



<!doctype html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>マイページ登録</title>
 <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
 </head>
    <body>
 <header>
        <img src="4eachblog_logo.jpg">
        <div class="logout"><a href="log_out.php">ログアウト</a></div>
    </header>  
    <main>
    <div class="box">
        <h1>会員情報</h1>
        
        <div class="hello">
        <?php echo "こんにちは！ ".$_SESSION['name']."さん";?>
        </div>
        
        <div class="profile_pic">
         <img src="<?php echo $_SESSION['picture'];?>">
        </div>
         <form action="mypage_update.php" method="post" > 
        <div class="basic_info">
       
            <p>氏名： <input type="text" name="name" value="<?php echo $_SESSION['name'];?>"> </p>
        
            <p>メール：<input type="text" name="mail" value="<?php echo $_SESSION['mail'];?>">  </p>  
        
            <p>パスワード：<input type="password" name="password" value="<?php echo $_SESSION['password'];?>"></p>   
        </div> 
         
         <div class="comments">
           <input type="text" name="comments" value="<?php echo $_SESSION['comments'];?>">
         </div> 
            <input type="hidden" value="<?php echo rand(1,10);?>" name="form_mypage">
            <div class="hensyubutton">
              <input type="submit" class="submit_button" size="35" value="この内容に変更する">
            </div>       
        </form>
    
     </div>   
    </main>
        
    <footer>
    ⓒ2018 InterNous.inc.All rights reserved
　　 </footer>
    
    
    </body>

</html>