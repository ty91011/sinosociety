<!-- Create Profile Account -->
<div class="row">
  <div class="large-8 columns">
  
  <div class="row">
    <div class="large-7 columns">
      <h4>Complete Your Free Profile</h4>
    </div>
  </div>

    <div class="row">
      <div class="large-12 columns">
        <p>Your profile showcases your expertise to millions of potential clients.</p>
      </div>
    </div>

    <form id="update-action" class="pure-form pure-form-stacked" method="POST" action="/account/update_action" style='text-align: left' enctype="multipart/form-data" accept-charset="utf-8" >

      <div class="row">
        <div class="large-12 columns">
          <label>Photo</label>
          <img src="http://placehold.it/120x120&text=Profile" />
	  <input type="file" name="userfile" id="file">
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <label>Name</label>
          <input value="<?=$user['name'];?>" type="text" placeholder="" disabled>
          <input name="name" value="<?=$user['name'];?>" type="hidden" placeholder="">
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <label>Email</label>
          <input name="email" value="<?=$user['email'];?>" type="text" placeholder="" disabled>
	  <input name="email" value="<?=$user['email'];?>" type="hidden" placeholder="">
        </div>
      </div>

      <div class="row">
        <div class="large-9 columns">
          <label>Location</label>
          <input type="text" name="location" placeholder="">
        </div>
        <div class="large-3 columns">
	    <label for="state">State</label>
	    <select id="state"  name="state">
		    <option value="AL">Alabama</option>
		    <option value="AK">Alaska</option>
		    <option value="AZ">Arizona</option>
		    <option value="AR">Arkansas</option>
		    <option value="CA">California</option>
		    <option value="CO">Colorado</option>
		    <option value="CT">Connecticut</option>
		    <option value="DE">Delaware</option>
		    <option value="DC">District Of Columbia</option>
		    <option value="FL">Florida</option>
		    <option value="GA">Georgia</option>
		    <option value="HI">Hawaii</option>
		    <option value="ID">Idaho</option>
		    <option value="IL">Illinois</option>
		    <option value="IN">Indiana</option>
		    <option value="IA">Iowa</option>
		    <option value="KS">Kansas</option>
		    <option value="KY">Kentucky</option>
		    <option value="LA">Louisiana</option>
		    <option value="ME">Maine</option>
		    <option value="MD">Maryland</option>
		    <option value="MA">Massachusetts</option>
		    <option value="MI">Michigan</option>
		    <option value="MN">Minnesota</option>
		    <option value="MS">Mississippi</option>
		    <option value="MO">Missouri</option>
		    <option value="MT">Montana</option>
		    <option value="NE">Nebraska</option>
		    <option value="NV">Nevada</option>
		    <option value="NH">New Hampshire</option>
		    <option value="NJ">New Jersey</option>
		    <option value="NM">New Mexico</option>
		    <option value="NY">New York</option>
		    <option value="NC">North Carolina</option>
		    <option value="ND">North Dakota</option>
		    <option value="OH">Ohio</option>
		    <option value="OK">Oklahoma</option>
		    <option value="OR">Oregon</option>
		    <option value="PA">Pennsylvania</option>
		    <option value="RI">Rhode Island</option>
		    <option value="SC">South Carolina</option>
		    <option value="SD">South Dakota</option>
		    <option value="TN">Tennessee</option>
		    <option value="TX">Texas</option>
		    <option value="UT">Utah</option>
		    <option value="VT">Vermont</option>
		    <option value="VA">Virginia</option>
		    <option value="WA">Washington</option>
		    <option value="WV">West Virginia</option>
		    <option value="WI">Wisconsin</option>
		    <option value="WY">Wyoming</option>
		</select>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns">
          <label>Phone</label>
          <input type="text" name="phone" placeholder="">
        </div>
      </div>

      <div class="row">
        <div class="large-6 columns">
          <label>Company</label>
          <input type="text" name="company" placeholder="">
        </div>
        <div class="large-6 columns">
          <label>License Number</label>
          <input type="text" name="license" placeholder="" required>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns text-center">
          <a href="#" class=" button round " onclick="$('#update-action').submit()">Complete</a>
        </div>
      </div>

    </form>
  </div>

  <div class="large-4 columns">
    <img src="http://placehold.it/600x400&text=Header" />
    <p>Need help?</p>
    <h4>888-555-1212</h4>
    <p>Monday through Friday<br/>9am - 5pm PST<br/> Saturday and Sunday<br/>10am - 3pm PST</p>
  </div>
</div>
<!-- End Free Profile Form -->
