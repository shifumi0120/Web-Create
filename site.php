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
<div class="gradient">
</head>
<body>

<font size="7">
<?php
echo '<font color="black">';
echo '<b>3pt チーム　卒業制作ホームページ</b>';
echo '</font>';
?>
</font>
<?php
echo '<hr></hr>';
?>

<font size="7">
<?php
echo "<a href="."title.php".">・TOP</a>";
echo "<br />";
echo "<br />";

echo "<a href="."作品紹介.php".">・ゲームについて</a>";
echo "<br />";
echo "<br />";
echo "<a href="."メンバー紹介.php".">・メンバー紹介</a>";
echo "<br />";
echo "<br />";
echo "<a href="."desktop5.php".">・ログイン</a>";
echo "<br />";
?>
</font>

<p style="text-align: right">
<input type="button" onclick="history.back()" value="戻る" class="example">
</p>

</div>
</body>
</html>