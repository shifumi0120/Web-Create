<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>サイト・タイトル画面</title>
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

<p style="text-align: right">
<input type="button" onclick="location.href='./site.php'" value="メニューへ" class="example">
</p>

<img src="title_take_5.png">

</div>
</body>
</html>