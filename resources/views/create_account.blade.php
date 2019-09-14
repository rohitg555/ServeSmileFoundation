<!DOCTYPE html>
<html>
<head>
    <title>S2F || Log In ::</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style type="text/css">
      .mandatory {
        color: #f00;
      }
    </style>
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
        <div class="col-sm-offset-3 col-sm-6">
            <h3>Crate an account</h3>
            <form action="/register" method="POST">
                {{ csrf_field() }}
              <div class="form-group">
                <label for="email">Name <span class="mandatory">*</span></label>
                <input type="text" class="form-control" name="name" id="email" required="required">
              </div>
              <div class="form-group">
                <label for="email">Email <span class="mandatory">*</span></label>
                <input type="email" class="form-control" name="email" id="email" required="required">
              </div>
              <div class="form-group">
                <label for="email">Mobile <span class="mandatory">*</span></label>
                <input type="number" class="form-control" name="mobile" id="email" required="required">
              </div>

              <div class="form-group">
                <label for="pwd">Password <span class="mandatory">*</span></label>
                <input type="password" class="form-control" id="pwd" name="password" required="required">
              </div>
              <div class="form-group">
                <label for="pwd">Confirm Password <span class="mandatory">*</span></label>
                <input type="password" class="form-control" id="pwd" name="confirm_password" required="required">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <a href="{{ url('/') }}">Login</a><br>
        </div>
    </div>
</div>

</body>
</html>