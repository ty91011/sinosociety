    
<h1 style="background-color: red">UNDER CONSTRUCTION UNTIL BUYERS DATABASE IS READY</h1>
<form class="pure-form pure-form-stacked" method="POST" action="/buyers">

	    <legend>Search Buyers</legend>

	    <div style="width: 800px; margin: auto">
	    We have reached out to over 10 million Chinese buyers and alredy have thousands of Chinese buyers and agents signed up in the first month.    
	    Please bear with us while we import their profiles.  Chinese buyers and agents who sign up for accounts from the Chinese site will be displayed on the U.S site.   
	    U.S agents can message them directly through send message button and the Chinese agent will receive it in the account admin and also be notified they got a message through email.
	    </div>
	    
	    <label for="name">Name</label>
	    <input id="name" name="name" type="text" placeholder="Name" required>

	    <label for="city">City</label>
	    <input id="city" name="city" type="text" required>

	    <label for="type">Buyer is a...</label>
		<?php
		$types = array(
		    "Home Owner", "Developer", "Regional Center", "Real Estate Agent", "Real Estate Broker", "Appraiser", "Home Inspector", "Contractor", "Developer", "Stager",
		    "Property Manager", "Title Agent", "Escrow Officer", "Loan Officer", "Attorney", "Architect", "Designer", "Other"
		);
		$i=0;
		foreach($types AS $type)
		{
		    $i++;
		    if($i%6 == 0)
		    {
			echo "<br>";
		    }
		    echo "<input type=checkbox>&nbsp;&nbsp$type&nbsp;&nbsp;";
		}
		?>
	    </select>
	    <br>
	    <button type="submit" class="pure-button pure-button-primary">Create Account</button>

    </form>