<?php

$err_msg = "";

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

try{
  $db = new PDO('mysql:host=localhost;dbname=sanple' , 'root' , 'yda474GAKUSEI');
  $sql = 'select count(*) from users where username=? and password=?';
  $stmt = $db->prepare($sql);
  $stmt->execute(array($username , $password));
  $result = $stmt->fetch();
  $stmt = null;
  $db = null;

if($result[0] != 0){
   header('Location: http://localhost/desktop5_5_5.php' );
  exit;
}
else{
$err_msg = "パスワードかユーザ名が違います";
}

}
catch(PDOException $e){
  echo $e->getMessage();
  exit;
}

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<title>Hello shop</title>
<body>
<h1>ログイン画面</h1>
<form action="" method="post">
  <?php
   if($err_msg !== null && $err_msg !== ''){
    echo $err_msg,"<br>";
  } ?>
    ユーザ名<input type="text" name="username" value=""></br>
    パスワード<input type="password" name="password" value=""></br>
    <input type="submit" name="login" value="ログイン">

</form>
<a href="desktop5_sign.php">新規登録</a>
</body>
</html>