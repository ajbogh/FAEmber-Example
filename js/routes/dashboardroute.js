App.DashboardRoute = Ember.Route.extend({
	beforeModel: function(transition){
		this.controllerFor('application').set('lastLocation', transition);
	},
	model: function() {
		return this.store.find('file');
	},
	afterModel: function(model) {
		this.controllerFor('application').checkAuth();
	},
	setupController: function(controller, model){
		this._super(controller, model);
		this.controllerFor('application').set('files', model);
	}
});