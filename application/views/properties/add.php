<div id="signup_form" style='margin-left: auto; margin-right: auto; width: 500px'>
    <form class="pure-form pure-form-stacked" method="POST" action="/property/add_action" style='text-align: left'>

	    <legend>Add Your Property Listing</legend>

	    <label for="name">Name</label>
	    <input id="name" name="name" type="text" placeholder="Name" required>
	    
	    <label for="email">Email</label>
	    <input id="email" name="email" type="email" placeholder="Email" required>

	    <label for="password">Password (5-15 characters)</label>
	    <input id="password" name="password" type="password" placeholder="Password" required>
	    
	    <label for="password2">Confirm password</label>
	    <input id="password2" type="password" placeholder="Confirm Password" required>

	    <label for="city">City</label>
	    <input id="city" name="city" type="text" required>
	    
	    <label for="state">State</label>
	    <select id="state"  name="state">
		<option>AL</option>
		<option>CA</option>
		<option>IL</option>
	    </select>
	    
	    <label for="type">I am a...</label>
	    <select id="type" name="type">
		<?php
		$types = array(
		    "Home Owner", "Developer", "Regional Center", "Real Estate Agent", "Real Estate Broker", "Appraiser", "Home Inspector", "Contractor", "Developer", "Stager",
		    "Property Manager", "Title Agent", "Escrow Officer", "Loan Officer", "Attorney", "Architect", "Designer", "Other"
		);
		foreach($types AS $type)
		{
		    echo "<option value='$type'>$type</option>\n";
		}
		?>
	    </select>
	    <br>
	    <button type="submit" class="pure-button pure-button-primary">Create Account</button>

    </form>
    <br><br><br>
</div>