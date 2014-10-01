App.LoginRoute = Ember.Route.extend({
	model: function(){ 
		return {
			username: "",
			password: ""
		}; 
	}
});