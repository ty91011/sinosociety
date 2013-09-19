<form class="pure-form pure-form-stacked" method="POST" action="/account/update_action" style='text-align: left' enctype="multipart/form-data" accept-charset="utf-8" >
<table style="width: 800px; margin: auto">
    <tr style="veritcal-align: top;">
	<td style="border: 1px solid grey;">	     
	    <div style="float: left">
		<img src="<?=$this->session->userdata("photo");?>" style="width: 100px; height: 100px; border: 1px solid black">
		<br>
		<input type="file" name="userfile" id="file">
	    </div>
	    <div style="float: right; veritcal-align: top; width: 500px;text-align: left">
		<legend>Edit Your Profile</legend>

		<label for="name">Name</label>
		<input id="name" name="name" type="text" placeholder="Name" value="<?=$name;?>" required>

		<label for="email">Email</label>
		<input id="email" name="email" type="email" placeholder="Email" value="<?=$email;?>" required>

		<label for="password">New Password (5-15 characters)</label>
		<input id="password" name="password" type="password" placeholder="Password" >

		<label for="password2">Confirm password</label>
		<input id="password2" type="password" placeholder="Confirm Password" >

		<label for="phone">Phone</label>
		<input id="phone" name="phone" type="text" value="<?=$phone;?>" required>

		<label for="company">Company</label>
		<input id="company" name="company" type="text" value="<?=$company;?>" required>

		<label for="license">License Number</label>
		<input id="license" name="license" type="text" value="<?=$license;?>" required>

		<label for="location">Location</label>
		<input id="location" name="location" type="text" value="<?=$location;?>" required>

		<label for="state">State</label>
		<select id="state" name="state">
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
		<script>
		    
		    $('#state').val('<?=$state;?>');
		    </script>
		<label for="type">I am a...</label>
		<select id="type" name="type">
		    <?php
		    $types = array(
			"Home Owner", "Developer", "Regional Center", "Real Estate Agent", "Real Estate Broker", "Appraiser", "Home Inspector", "Contractor", "Developer", "Stager",
			"Property Manager", "Title Agent", "Escrow Officer", "Loan Officer", "Attorney", "Architect", "Designer", "Other"
		    );
		    foreach($types AS $type_option)
		    {
			echo "<option ";
			if($type_option == $type)
			{
			    echo "selected ";
			}
			echo "value='$type_option'>$type_option</option>\n";
		    }
		    ?>
		</select>
		<br>
		<button type="submit" class="pure-button pure-button-primary">Update Account</button>
	    </div>
	</td>
    </tr>
</table>
</form>