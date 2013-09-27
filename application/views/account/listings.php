<!-- Listing for Sale / Rent -->

  <div class="large-12 columns">
    <h2>Listing for Sale/Rent</h2>

<?
    foreach($properties AS $property)
    {
?>
    <!-- Start of Listing for Sale / Rent -->
  <div class="panel">
    <div class="row">
      <div class="large-2 columns">
        <img src="<?=$property['property_listing_url'];?>" />
      </div>
      <div class="large-8 columns">
        <p class="small-6 columns">For Sale</p>
        <p class="small-6 columns">Date: <?=$property['date_listed'];?></p>
        <p class="small-12 columns">Price: <?=$property['listing_price'];?></p>
        <p class="small-12 columns">Listing Type: <?=$property['listing_type'];?></p>
        <p class="small-12 columns">Address: <?=$property['address'];?></p>
	<p class="small-4 columns">City: <?=$property['city'];?></p>
        <p class="small-4 columns">State: <?=$property['state'];?></p>
	<p class="small-4 columns">Zipcode: <?=$property['zipcode'];?></p>
        <p class="small-12 columns">Property Type</p>
        <p class="small-6 columns">Bed: <?=$property['bedrooms'];?></p>
        <p class="small-6 columns">Bath: <?=$property['bathrooms'];?></p>
        <p class="small-6 columns">Built: <?=$property['year_built'];?></p>
        <p class="small-6 columns">Sq.ft: <?=$property['square_feet'];?></p>
      </div>
	<div class="large-2 columns text-center">
	    <a href="/account/listings_full" class="small button round">Enhance Listing</a>
	    <a href="#" class="small button round alert" onclick="confirm('Are you sure you want to cancel this listing?');">Cancel Listing</a>
	</div>
    </div>
  </div>
    <hr />
    <!-- End of Listing for Sale / Rent -->
<?
    }
?>

