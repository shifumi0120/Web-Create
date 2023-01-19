<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>サイト・メニュー画面</title>
<style>
.example{
    font-size: 200%;
}

.gradient { 
	background:linear-gradient(#56C500, #fff); 
	height: 700px;
	border: 1px solid #333;
}
</style>

</head>
<body>
<div class="gradient">
<font size="7">
3pt チーム　卒業制作ホームページ
</font>
<hr></hr>

<font size="7">
<p style="text-align: left">
<a href="page2.php">・TOP</a>
</p>
</font>

<font size="7">
<p style="text-align: left">
<<<<<<< HEAD
<a href="page2.php">・ゲームについて</a>
=======
<a href="作品紹介.php">・ゲームについて</a>
>>>>>>> 作品紹介
</p>
</font>

<font size="7">
<p style="text-align: left">
<a href="page2.php">・メンバー紹介</a>
</p>
</font>

<font size="7">
<p style="text-align: left">
<a href="page2.php">・ログイン</a>
</p>
</font>

<p style="text-align: right">
<input type="button" onclick="history.back()" value="戻る" class="example">
</p>

</div>
</body>
</html>