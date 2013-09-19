<!-- Profile -->
  <div class="panel">
    <div class="row">
      <div class="large-3 columns">
        <img style="width: 300px" src="<?=$this->session->userdata("photo");?>" /><br/>
        <a href="/account/edit#photo" class="small button secondary expand">Edit Photo</a><br/><a href="/account/edit" class="small button secondary">Edit Profile</a>
      </div>
      <div class="large-9 columns">
        <p class="small-6 columns">Name: <?=$name;?></p>
        <p class="small-6 columns">Email: <?=$email;?></p>
        <p class="small-6 columns">Location: <?=$location;?></p>
	<p class="small-6 columns">State: <?=$state;?></p>
        <p class="small-6 columns">I am a <strong><?=$type;?></strong></p>
        <p class="small-6 columns">License #: <?=$license;?></p>
        <p class="small-4 columns">Email: <?=$email;?></p>
        <p class="small-4 columns">Phone: <?=$phone;?></p>
        <p class="small-4 columns">Company: <?=$company;?></p>
      </div>

    </div>
  </div>
<!-- End Profile -->

<div class="row">
    <div class="large-6 columns text-center">
	<a href="/account/listings" class="button round ">Current Listings / Advertisements</a>
    </div>
    <div class="large-6 columns text-center">
	<a href="/buyers/search" class="button round ">Search Buyers</a>
    </div>
</div>

<!-- Submit Listing -->
<div class="row">
    <div class="large-6 columns">
	<img src="http://placehold.it/800x200&text=Preview Example" />
	<h4>Listing Service</h4>
	<p>Have a property to sell / rent?</p>
	<p>Thousands of Chinese investors look through our listings looking for investment opportunities.</p>
	<h6>Recommended for: Home Sellers, Listing Agents, Developers, and Regional Centers</h6>
	<a href="/account/add_property_for_sale" class="small button round ">Submit a Listing</a>
    </div>
    <div class="large-6 columns">
	<img src="http://placehold.it/800x200&text=Preview Example" />
	<h4>Professional Service Ads</h4>
	<p>Just want to Market yourself and your professional Services?</p>
	<p>Not only do our Chinese investors look for properties on our site, they also look for professionals in the industry to assist them with all their real estate needs.</p>
	<h6>Recommended for: Real Estate Agents, Escrow Agents, Home Inspectors, Title Agents, Property Managers, Loan Agents, Attorneys, Contractors, Designers, Architects, Appraisers, Stager and other real estate professionals</h6>
	<a href="#" class="small button  round ">Submit a Professional Advertisement</a>
    </div>
</div>


  <div class="row">
		<div class="large-6 columns">
			<img src="http://fs.signazon.com/Templates/540/TemplateIcon/540-large.png?ts=635043925440000000" style="width: 800px; height: 200px;"/>
			<h4>Banner Advertisements</h4>
			<p>Looking for that extra exposure?</p>
			<p>Considering a custom Banner Advertisement to Marketing your property, project, or professional service.</p>
			<h6>Recommended for: All Real Estate related professionals and Eb-5 Projects</h6>
			<a href="#" class="small button  round ">Submit a Banner</a>
		</div>
		<div class="large-6 columns">
			<img src="http://www.jobboardmount.com/help/images/7/7c/Indeed_xml.jpg" style="width: 800px; height: 200px;"/>
			<h4>Data Feed</h4>
			<p>Need to list a lot of properties?</p>
			<p>Data feeds are the most efficient way to submit multiple listings for rent or sale. You can authorize MLS to send a listing feed on your behalf.</p>
			<h6>Recommended for: Power users.</h6>
			<a href="#" class="small button  round ">Submit a Data Feed</a>
		</div>

  </div>

<!-- End Submit Listing -->