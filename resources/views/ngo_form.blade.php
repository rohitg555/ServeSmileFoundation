@include('include.app')
@include('include.header')
<div class="container">
	<div class="row">
		<div class="col-sm-offset-6 col-sm-3">
			<h3>Donation form</h3>
		<form action="/donationForm" method="POST">
        {{csrf_field()}}
				<div class="form-group">
					<label for="name">NGO NAME <span class="mandatory">*</span></label>
					<select class="form-control" name="ngo_name">
						@foreach($clients as $client)
							<option value="{{$client->ngo_name}}">{{$client->ngo_name}}</option>
						@endforeach
					</select>

					<!-- <input type="text" name="ngo_name" id="name" class="form-control"> -->
				</div>
				<div class="form-group">
					<label for="name">Aadhaar card no <span class="mandatory">*</span></label>
					<input type="number" name="aadhaar_card_no" id="number" class="form-control">
				</div>
        <div class="form-group">
          <label for="email">Email<span class="mandatory">*</span></label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="number">Mobile number<span class="mandatory">*</span></label>
          <input type="number" name="mobile_number" id="number" class="form-control">
        </div>
        <div class="form-group">
          <label for="number">Amount<span class="mandatory">*</span></label>
          <input type="number" name="amount" id="number" class="form-control">
        </div>
        <button class="btn btn-success">Submit</button>
			</form>
			
		</div>
		
	</div>
</div>

</body>
</html>