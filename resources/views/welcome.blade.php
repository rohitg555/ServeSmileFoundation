@include('include.app')
@include('include.header')
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <h3>Log In</h3>
            <form action="/login" method="POST">
                {{ csrf_field() }}
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <a href="{{ url('/create_account') }}">Create an account</a><br>
            <a href="{{ url('/forgot_password') }}">Forgot password?</a>
        </div>
    </div>
</div>

</body>
</html>