@include('include.app')
@include('include.header')
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