<?php
if(isset($_POST['sign'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

try{
  $db = new PDO('mysql:host=localhost;dbname=sanple' , 'root' , 'yda474GAKUSEI');
  $sql = 'insert into users(username , password) values(? , ?)';
  $stmt = $db->prepare($sql);
  $stmt->execute(array($username , $password));
  $stmt = null;
  $db = null;

  header('Location: http://localhost/desktop5.php' );
  exit;
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

<h1>新規会員登録</h1>
<form action="" method="post">
    ユーザ名<input type="text" name="username" value=""></br>
    パスワード<input type="password" name="password" value=""></br>
    <input type="submit" name="sign" value="新規登録">

</form>

</body>
</html>