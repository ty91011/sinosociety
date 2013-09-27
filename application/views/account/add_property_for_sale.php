<!-- List for Sale -->
	<div class="row">
		<div class="large-12 columns">
		    <div class="row">
			<div class="large-10 columns">
			    <h1>List for Sale</h1>
			</div>
			<div class="large-2 columns">
			    <a href="/account/add_property_for_rent" class="small button round ">List for Rent</a>
			</div>
		    </div>
			<form>
				<fieldset>
					<legend>Listing Address</legend>

					<div class="row">
						<div class="large-4 columns">
							<label>Street Number</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-5 columns">
							<label>Street Name</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-3 columns">
							<label>Unit Number</label>
							<input type="text" placeholder="">
						</div>
					</div>

					<div class="row">
						<div class="large-3 columns">
							<label>City</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-3 columns">
							<label>State</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-3 columns">
							<label>Zip </label>
							<input type="text" placeholder="">
						</div>
						<div class="large-3 columns">
							<label>Country</label>
							<input type="text" placeholder="">
						</div>
					</div>

				</fieldset>
				<fieldset>
					<legend>Listing Information</legend>

					<div class="row">
						<div class="large-4 columns">
							<label>License Number</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-4 columns">
							<label>License State</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-4 columns">
							<label>???</label>
							<input type="text" placeholder="">
						</div>
					</div>

					<div class="row">
						<div class="large-3 columns">
							<label>Listing Price</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-3 columns">
							<label>Listing Type</label>
              <select>
                <option disabled="">Select...</option>
                <option>Resale</option>
                <option>New</option>
              </select>
						</div>
						<div class="large-3 columns">
							<label>Property Type</label>
              <select>
                <option disabled="">Select...</option>
                <option>Single Family Home</option>
                <option>Condo</option>
                <option>Townhouse etc</option>
              </select>
						</div>
            <div class="large-3 columns">
            <label>Date Listed</label>
              <div class="row collapse">
                <div class="small-10 columns">
                  <input type="text" placeholder="Value">
                </div>
                <div class="small-2 columns">
                  <span class="postfix radius"><a href="#">CAL</a></span>
                </div>
              </div>
            </div>
					</div>

					<div class="row">
						<div class="large-2 columns">
							<label>Bedrooms</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-2 columns">
							<label>Bathrooms</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-3 columns">
							<label>Square Feet</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-3 columns">
							<label>Lot Size</label>
							<input type="text" placeholder="">
						</div>
						<div class="large-2 columns">
							<label>Year Built</label>
							<input type="text" placeholder="">
						</div>
					</div>

					<div class="row">
						<div class="large-12 columns">
							<label>Description</label>
							<textarea placeholder=""></textarea>
						</div>
					</div>

					<div class="row">
						<div class="large-12 columns">
							<label>Property Listing URL</label>
							<input type="text" placeholder="Enter the Web address where consumers can find more information about this specific property.">
						</div>
					</div>

					<div class="row">
						<div class="large-2 columns">
						  <img src="http://placehold.it/200x200&text=Add Photos" />
						</div>
						<div class="large-2 columns">
						  <img src="http://placehold.it/200x200&text=Add Photos" />
						</div>
						<div class="large-2 columns">
						  <img src="http://placehold.it/200x200&text=Add Photos" />
						</div>
						<div class="large-2 columns">
						  <img src="http://placehold.it/200x200&text=Add Photos" />
						</div>
						<div class="large-2 columns">
						  <img src="http://placehold.it/200x200&text=Add Photos" />
						</div>
						<div class="large-2 columns">
						  <img src="http://placehold.it/200x200&text=Add Photos" />
						</div>
					</div>

          <hr/>

					<div class="row">
            <div class="large-4 columns">
              <label for="checkbox1"><input type="checkbox" id="checkbox1" class="hidden-field" onchange="fluctuate(this, 1.00);"><span class="custom checkbox"></span> Map ($1 USD) <a href="#" class="small button secondary">Get Location</a></label>
            </div>
						<div class="large-8 columns">
              <label for="checkbox2"><input type="checkbox" id="checkbox2" class="hidden-field" onchange="fluctuate(this, 1.00);"><span class="custom checkbox"></span> Video/Virtual Tour ($1 USD) <a href="#" class="small button secondary">Load URL</a></label>
						</div>
					</div>

					<div class="row">
						<div class="large-4 columns">
              <label for="checkbox3"><input type="checkbox" id="checkbox3" class="hidden-field" onchange="fluctuate(this, 10.00);"><span class="custom checkbox"></span> Priority Listing ($10 USD)<br/>Appears at top of search results.</label>
						</div>
						<div class="large-8 columns">
              <label for="checkbox4"><input type="checkbox" id="checkbox4" class="hidden-field" onchange="fluctuate(this, 25.00);"><span class="custom checkbox"></span> Featured Listing ($25 USD)<br/>Appears on front page of website in rotating position.</label>
						</div>
					</div>

				</fieldset>
</form>
					<div class="row">
						<div class="large-6 columns text-right">
							<h2><small>Your fees so far:</small> $<span id="total">0.00</span></h2>
						</div>
						<div class="large-6 columns">
						    <form method="post" action="/account/property_preview" id="form2">
							<input type='hidden' name='cost' id='cost'>
              <a  href="#" onclick="$('#cost').val($('#total').html()); $('#form2').submit(); return false;" class="large button round">Review &amp; Post</a>
						    </form>
						</div>
					</div>

			
		
		</div>
	</div>

<!-- End List For Sale -->
     
     
     
<script>
    function fluctuate(element, value)
    {
	if(element.checked)
	{
	    total = $('#total').html()
	    total = Number(total) + value;
	    $('#total').html(total.toFixed(2));
	}
	else
	{
	    total = $('#total').html()
	    total = Number(total) - value;
	    $('#total').html(total.toFixed(2));	    
	}
    }
</script>