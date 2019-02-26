<!DOCTYPE html>
<html>
<head>
	<title>Từ điển</title>
</head>
<body>
	<h1>Dictionary</h1>
	<form action="dictionary" method="post">
		@csrf
		<table>
			<p>
				<input type="text" name="word" placeholder="Nhập tiếng anh">
			</p>
			<p>
				<input type="submit" name="submit" value="Dịch">
			</p>
		</table>
	</form>

</body>
</html>