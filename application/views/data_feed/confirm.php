<?php
?>
<form method="post" action="/data_feed/add_listings" id="data_feed_confirm_form">

	<div class="row">
	        <h2>Confirm the listings</h2>
		<div class="large-12 columns">
		    <?
			foreach($listings AS $listingKey => $listing)
			{
			?>
		    <div class="row">
			<fieldset>
			<div class="large-1 columns">
			    <input type="checkbox" checked name="listings[<?=$listingKey;?>][enabled]">
			</div>
			<div class="large-3 columns">
			    <img src="<?=$listing[16];?>">
			</div>
			    <div class="large-8 columns">
				<div class="row">
				    <div class="large-12 columns">
					<ul>
					    <? foreach($listing AS $key => $value)
					    {
						echo "<li>" . $titles[$key] . ": " . $value . "</li>\n";
						echo "<input type=hidden name='listings[$listingKey][$key]' value='$value'>";
					    }
					    ?>
					</ul>
				    </div>
				</div>
			    </div>
			</fieldset>
		    </div>
		    
			<?
			}
		    ?>
		    
		</div>
	</div>
	<div class="row">
	    <div class="large-2 columns">
		<a href="#" onclick="$('#data_feed_confirm_form').submit()" class="small button round ">Submit Listings</a>
	    </div>	    
	</div>
</form>

