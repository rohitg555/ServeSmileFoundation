@include('include.app')
@include('include.header')
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <h3>Crate an account</h3>
            <form action="/ngo_store" method="POST">
                {{ csrf_field() }}
              <div class="form-group">
                <label for="name">NGO Name:<span class="mandatory">*</span></label>
                <input type="text" class="form-control" name="ngo_name" id="name" required="required">
              </div>
              <div class="form-group">
                <label for="name">Full Name:<span class="mandatory">*</span></label>
                <input type="text" class="form-control" name="full_name" id="name" required="required">
              </div>
              <div class="form-group">
                <label for="email">Email:<span class="mandatory">*</span></label>
                <input type="email" class="form-control" name="email" id="email" required="required">
              </div>
              <div class="form-group">
                <label for="email">Alternate Email:</label>
                <input type="email" class="form-control" name="alternate_email" id="email">
              </div>
              <div class="form-group">
                <label for="email">Mobile:<span class="mandatory">*</span></label>
                <input type="number" class="form-control" name="mobile" id="email" required="required">
              </div>
              <div class="form-group">
                <label for="email">Alternate Mobile:</label>
                <input type="number" class="form-control" name="alternate_mobile" id="email">
              </div>
              <div class="form-group">
                <label for="Address">Address:</label>
                <textarea class="form-control" rows="5" id="Address" name="address"></textarea>
              </div> 
              <label>disaster:</label>
              <div class="checkbox">
                <label><input type="checkbox" name="disaster[]"  value="Earthquake">Earthquake.</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" name="disaster[]" value="Floods">Floods</label>
              </div>
              <div class="checkbox disabled">
                <label><input type="checkbox" name="disaster[]" value="Acid_Attack_Victim">Acid_Attack_Victim</label>
              </div>
              <div class="checkbox disabled">
                <label><input type="checkbox" name="disaster[]" value="Tsunami">Tsunami</label>
              </div> 
              <div class="form-group">
                <label for="pwd">Password:<span class="mandatory">*</span></label>
                <input type="password" class="form-control" id="pwd" name="password" required="required">
              </div>
              <div class="form-group">
                <label for="pwd">Confirm Password:<span class="mandatory">*</span></label>
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