<script type="text/x-handlebars">
	<!-- The main application layout. -->
	<a {{action goToLink 'dashboard'}} {{bind-attr class=":logo currentAuth::hide"}}>
		<img class="logo" src="images/shell/logo-cliq-small.png">
	</a>

	<nav {{bind-attr class=":globalNav currentAuth::hide showTabs::tall"}}>
		<div id="globalNavTop">
			<ul>
				<li id="homeBtn">
					{{#link-to 'dashboard' title="Home"}}{{/link-to}}
				</li>
			</ul>
		</div>
		<div id="globalNavBottom">
			<ul>
				<li id="profileBtn"><a href="#" {{action 'openModal' 'contact' model bubble=false}}></a></li>
				<li id="toolsBtn"><a href="#" {{action 'openModal' 'contact' model bubble=false}}></a></li>
				<li id="contactBtn"><a href="#" {{action 'openModal' 'contact' model bubble=false}}></a></li>
				<li id="logoutBtn"><a href="#" {{action 'logout' bubble=false}}></a></li>
			</ul>
			<span id="version"></span>
		</div>
	</nav>

	<nav {{bind-attr class=":fileTabs showTabs::hide :tabs"}}>
		<!-- TODO: make this a component -->
		<div class="tabGutterBottomBorder"></div>
		<ul>
		{{#each tab in files}}
			<li {{action 'selectTab' tab}}>
				<span class="icon iconRemove" {{action 'remove'}}></span>
				<span class="text">{{tab.fileNumber}}</span>
			</li>
		{{/each}}
		</ul>
	</nav>

	<div class="main">
		<!-- outlet represents each of the handlebar views defined by IDs and routes -->
		{{outlet}}
	</div>
	{{outlet modal}}
</script>