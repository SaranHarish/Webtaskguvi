<!DOCTYPE html>
<html>
<head>
<title></title>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="update.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/css/form.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<link rel="stylesheet" href="css/css/form.css">
<link rel="stylesheet" href="css/css/scss1.css">
<link rel="stylesheet" href="css/css/scss.css">
</head>
<body>

<?php include ("session.php")  ?>

<br>
<br>

<div class="container">
<form >
<div class="row">
<div class="col-25">
<label for="fname"></label>
</div>
<div class="col-75">
<input type="hidden" id="username" value="<?php echo $user ?>">
</div>
</div>
<div class="form-group">
<label for="exampleInputEmail1">date of birth</label>
<input type="text" class="form-control" id="dob"  placeholder="Enter dob.." required>
</div>
<div class="form-group">
<label >Age</label>
<input type="text" class="form-control" id="age"  placeholder="Enter age" required>

</div>
<div class="form-group">
<label >number</label>
<input type="text" class="form-control" id="number"  placeholder="Enter number" required>

</div>
<div class="row">
<button type="submit" id="over">Submit</button>
</div>
</form>
</div>
 <center><p id="msg"></p>
 </center>
</body>
</html>
