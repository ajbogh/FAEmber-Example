App.Router.map(function() {
	this.route("dashboard");
	this.route("contact");
	this.route("logout");
	this.route("login");
  	this.resource('file', { path: '/file/:id' });
});

App.Router.reopen({
  location: 'hash'
});