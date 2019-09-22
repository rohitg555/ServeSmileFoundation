<!DOCTYPE html>
<html>
<head>
	<title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">S2F</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-sm-offset-6 col-sm-3">
			<h3>NGO form registration</h3>
			<form>
				<div class="form-group">
					<label for="name">NGO NAME <span class="mandatory">*</span></label>
					<input type="text" name="NGO name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="name">Aadhaar card no <span class="mandatory">*</span></label>
					<input type="number" name="Aadhaar card number" id="number" class="form-control">
				</div>
			</form>
			
		</div>
		
	</div>
</div>

</body>
</html>