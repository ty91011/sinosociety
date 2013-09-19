	
<form class="pure-form" action="/account/login" method='POST'>
    <legend>Log in to start marketing to Chinese</legend>
			Email <input type="email" name='email' style="width: 150px" placeholder="Email"><br>
			Password <input type="password" name='password' style="width: 150px" placeholder="Password"><br>
			<a href="#">Forgot Password</a><br>
			<button type="submit" class="pure-button pure-button-primary">Login</button><br>
			<button onclick="window.location='/signup'; return false;">Register</button>
		</form>