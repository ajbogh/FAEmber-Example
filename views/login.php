<script type="text/x-handlebars" id="login">
<div class="loginContainer">
	<div class="loginPanel">
		<form action="/Auth" method="post">
			
			<div class="loginLogo"></div>
			
			<div id="pleaseSignIn">Please Sign In</div>
			{{input required="" name="Username" autocapitalize="off" autocorrect="off" placeholder="Username" value=model.username}}
			{{input type="password" name="Password" placeholder="Password" maxlength=30 value=model.password}}
			<button id="signInBtn" class="primary" {{action 'auth' model}}>Sign In</button>
			<!--<input autocapitalize="off" autocorrect="off" data-val="true" data-val-required="The Username field is required." id="username" name="Username" placeholder="Username" type="text" value="">
				<input data-val="true" data-val-required="The Password field is required." id="Password" maxlength="30" name="Password" placeholder="Password" type="password">
				<input id="signInBtn" type="submit" class="btn inverse primary" value="Sign In">-->
			<div class="rememberMeBox">
				<input type="checkbox" id="RememberUsername" name="RememberUsername" value="True"><label for="RememberUsername">Remember Username</label>
			</div>
		</form>
	</div>
	<div id="forgot">
		<a id="resetLink" class="alternate link" {{action 'ForgotCredentials'}}>Forgot your Username/Password?</a>
	</div>

	<div class="legal inverse">
		<p class="legalStrong">AUTHORIZED USE ONLY.</p>
		<p>This system is restricted to authorized First American users only. Unauthorized users are prohibited from signing in. Unauthorized access to this system is subject to civil, criminal and/or administrative penalties.  Use may be logged and monitored.  Use of this system constitutes acknowledgement of acceptable use policy.</p>
		<p>
			<!-- TODO: make these modals, not actions. -->
			<a {{action 'PrivacyPolicy'}}>Privacy Policy</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a {{action 'TermsOfUse'}}>Terms of Use</a>
		</p>
		<p>©2013 First American Financial Corporation and/or its affiliates.  All rights reserved.</p>
	</div>
</div>
</script>