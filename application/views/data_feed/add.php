<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


	<div class="row">
		<div class="large-12 columns">
		    <div class="row">
			<div class="large-10 columns">
			    <h1>Import Data Feed</h1>
			</div>
			<div class="large-2 columns">
			    <a href="#" class="small button round ">Help</a>
			</div>
		    </div>
			<form>
				<fieldset>
					<legend>Instructions</legend>

					<div class="row">
					    <div class="large-12 columns">
						<ul>
						    <li>First Row must designate 19 fields <strong>in order</strong>:
							For Sale,
							address,
							city,
							state,
							zip_code,
							agent,
							agent_email,
							agent_phone,
							bathrooms,
							bedrooms,
							square_feet,
							year,
							broker,
							broker_email,
							broker_phone,
							create_time,
							image_url,
							lot_size,
							mls_id
 </li>
						    <li>Upload as many listings as you want</li>
						    <li>Please upload .CSV documents only</li>
						    <li>Please adhere to 2MB Limit (<a href="mailto:datafeed@sinosociety.com">Contact us for bigger files</a>)</li>
						</ul>
					    </div>
					</div>

				</fieldset>
			</form>
		</div>
		<div class="large-12 columns">
		    <div class="row">
			<form method="post" action="/data_feed/add_action" id="data_feed_form"  enctype="multipart/form-data" accept-charset="utf-8">
				<fieldset>
					<legend>Upload</legend>

					<div class="row">
					    <div class="large-12 columns">
						<input type="file" name="datafeed" >
						<br>
						<a href="#" onclick="$('#data_feed_form').submit()" class="small button round ">Upload</a>
					    </div>
					</div>

				</fieldset>
			</form>
		</div>	    
	</div>