<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор</title>
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

	<div class="container calculator">
		<form method="POST" action="calc.php">
		  <div class="form-group">
		    <label for="number_one">Число №1</label>
		    <input type="text" class="form-control" placeholder="Введите число" name="count1">
		  </div>

		  <div class="form-group">
		    <label for="number_one">Число №2</label>
		    <input type="text" class="form-control" placeholder="Введите число" name="count2">
		  </div>

		  <div class="form-group">
		    <label for="result">Выберите операцию</label>
		    <select class="form-control" name="count3">
		      <option>+</option>
		      <option>-</option>
		      <option>*</option>
		      <option>/</option>
		    </select>
		  </div>

		  <button type="submit" class="btn btn-primary">Посчитать</button>
		</form>
	</div>
	
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>