<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form method="post" action="submit">
	@csrf
		Price of the order:<br>
		<input type="number" name="price">
		<br><br>
        Id of the user :<br>
		<input type="number" name="user_id">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>

</body>
</html>
