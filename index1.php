 <!DOCTYPE html>
<html>
<head  lang="en">
<meta charset="UTF-8">
<title>Basic caluculator</title>
</head>
<body style="background-color: cornflowerblue">
<img src="data:image/jpeg;base64,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" width="500">
<h1 STYLE="background-color:cyan"> <strong>MY FIRST CALCULATOR</strong>
</h1>
<form action="result.php">
<form>
<label for="first_number">enter first number</label>
<input id="first_number" type="text" name="bill" placeholder="first number herre"/>
<label for="second_number">enter second number</label>
<input type="second number" type="text"  name="clinton"placeholder="second number here"/><br>
<label>operation:<label>
<select name="steve">
   <option>add</option>
   <option>subtract</option>
   <option>multiplication</option>
   <option>divsion</option>
   <option>power</option>
   </select>
   <br>
   <input type="submit" method="post" style"..." value="calculator"/>
   
   
</form>
</body<
</html>