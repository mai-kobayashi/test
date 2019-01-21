<!doctype html>
<html lang="ja">

<head>
<meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
<?php
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=kobayashi; host=localhost;","root","mysql");
    $stmt=$pdo -> query("select * from 4each_keijiban");
?>
    
    
   <header>
     <img src="4eachblog_logo.jpg">
     <ul class="menu">
         <li>トップ</li>
         <li>プロフィール</li>
         <li>4eachについて</li>
         <li>登録フォーム</li>
         <li>問い合わせ</li>
         <li>その他</li> 
     </ul>
     </header>
    
<main>
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        
        <form method="post" action="insert.php">
            <h2>入力フォーム</h2>
            
            <p>ハンドルネーム
            <br>
            <input type="text" name="name" size="50">
            </p>
            
            <p>タイトル
            <br>
            <input type="text" name="title" size="50">
            </p>
            
            <p>コメント
            <br>
            <textarea name="comments" rows="4" cols="70">
            </textarea>
            </p>
            
            <input type="submit" value="投稿する" class="button">
        </form>
        
        
<?php
        while($row = $stmt -> fetch()){
        
        echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<p>".$row['comments']."</p>";
        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
        echo "</div>";
            
        }
?>
        
        </div>

        
    <div class="right">
         <div class="contents">
         <h3>人気の記事</h3>
         <p>PHP オススメ本</p>
         <p>PHP MyAdminの使い方</p>
         <p>今人気のエディタ Top5</p>
         <p>HTMLの基礎</p>
         </div>
         
         <div class="contents">
         <h2>オススメリンク</h2>
         <p>インターノウス株式会社</p>
         <p>XAMPPのダウンロード</p>
         <p>Eclipseのダウンロード</p>
         <p>Brancketsのダウンロード</p>
         </div>
         
         <div class="contents">
         <h2>カテゴリ</h2>
         <p>HTML</p>
         <p>PHP</p>
         <p>MySQL</p>
         <p>JavaScript</p>
         </div>
     
     </div>
    
</main>

    
     <footer>
         copyright(c) internous | 4each blog is the one which provides A to Z zbout programing.
     </footer>
    
    
    
    
    
    
    
</body>

</html>