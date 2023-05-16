<!DOCTYPE html>
<html lang="en">
<head>
	<title>library- Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="bookname">bookname</label>
			<input type="text" name="bookname" id="bookname">
			</p>

			
<p>
			<label for="publishername">publishername</label>
			<input type="text" name="publishername" id="publishername">
			</p>

			
<p>
			<label for="publisherage">publisherage</label>
			<input type="number" name="publisherage" id="publisherage">
			</p>

<p>
			<label for="pageno">pageno</label>
			<input type="number" name="pageno" id="pageno">
			</p>

			
<p>
			<label for="publishdate">publishdate</label>
			 <input type="date" id="publishdate" name="publishdate">
			</p>

			
<p>
			<label for="booktype">booktype</label>
                        <input type="checkbox" name="booktype[]" value="Scie-fi">Scie-fi
      			<input type="checkbox" name="booktype[]" value="Novel">Novel
      			<input type="checkbox" name="booktype[]" value="Drama">Drama
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
