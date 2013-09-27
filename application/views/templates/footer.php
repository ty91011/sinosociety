<!-- Modals -->
<!-- Create Free Account -->
	<div id="freeAcct" class="reveal-modal">
		<div class="row">
			<div class="large-7 columns">
				<h4>Create Your Free Account</h4>
			</div>
			<div class="large-5 columns text-right">
				<p>Already have one? <a href="#" class="small button success round" data-reveal-id="signIn">Login</a></p>
			</div>
		</div>

		<a class="close-reveal-modal">&#215;</a>

			<div class="row">
				<div class="large-12 columns">
					<a href="#" class="small button secondary">Sign in with Facebook</a> <strong>OR</strong>
				</div>
			</div>

			<form method="POST" action="/signup/submit" id="submit-form">
				<div class="row">
					<div class="large-12 columns">
						<label>Name</label>
						<input name="name" type="text" placeholder="">
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>Email</label>
						<input name="email" type="text" placeholder="">
					</div>
				</div>

				<div class="row">
					<div class="large-6 columns">
						<label>Password (5-15 characters)</label>
						<input name="password" type="password" placeholder="">
					</div>
					<div class="large-6 columns">
						<label>Confirm Password</label>
						<input name="password2" type="password" placeholder="">
					</div>
				</div>

				<div class="large-12 columns">
					<label>I am a...</label>
					<select name="type">
					    <?
					    $types = array(
						"Home Owner",
						"Developer",
						"Regional Center",
						"Real Estate Agent",
						"Real Estate Broker",
						"Appraiser",
						"Home Inspector",
						"Contractor",
						"Developer",
						"Stager",
						"Property Manager",
						"Title Agent",
						"Escrow Officer",
						"Loan Officer",
						"Attorney",
						"Architect",
						"Designer",
						"Other",

					    );
					    foreach($types AS $type)
					    {
						if($type == "Real Estate Agent")
						{
						    $select = "selected";
						}
						else 
						{ 
						    $select = ""; 
						}
						echo "<option value='$type' $select>$type</option>\n";
					    }
					    ?>
					</select>
				</div>

				<div class="row">
					<div class="large-12 columns text-center">

						<a href="#" class=" button round " onclick="$('#submit-form').submit()">Create Profile</a>

						<p>By signing up, you agree to our <a target="_blank" href="/terms">Terms of Service</a> and <a target="_blank" href="/privacy">Privacy Policy</a>.</p>

					</div>
				</div>

			</form>

	</div>
<!-- End Free Account Form -->
<!-- Signin -->
	<div id="signIn" class="reveal-modal">
		<div class="row">
			<div class="large-7 columns">
				<h4>Log In <small>to start marketing to Chinese</small></h4>
			</div>
			<div class="large-5 columns text-right">
				<p><a href="#" class="small button secondary round" data-reveal-id="freeAcct">Sign Up</a></p>
			</div>
		</div>

		<a class="close-reveal-modal">&#215;</a>

			<form>
				<div class="row">
					<div class="large-12 columns">
						<label>Email</label>
						<input name="email" type="text" placeholder="">
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>Password</label>
						<input type="password" name="password" placeholder="">
						<p><small><a href="#">Forgot password?</small></p>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns text-center">
						<a href="#" class="button round">Login</a>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns text-center">
						<strong>OR</strong> <a href="#" class="small button secondary">Sign in with Facebook</a>
					</div>
				</div>

			</form>
	</div>
<!-- End Signin Form -->
<!-- End Modals -->


  <!-- Footer -->

  <footer class="row">
  <div class="large-12 columns"><hr />
      <div class="row">

        <div class="large-6 columns">
            <p>&copy; Copyright 2013 SinoSociety</p>
        </div>

        <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="/terms">Terms & Conditions</a></li>
              <li><a href="/privacy">Privacy</a></li>
            </ul>
        </div>

      </div>
  </div>
  </footer>
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '/js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="/js/foundation.min.js"></script>

  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>