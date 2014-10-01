App.ApplicationRoute = Ember.Route.extend({
	beforeModel: function(transition){
		//this function fires on all page refreshes
		if(transition.targetName != "login"){
			this.controllerFor('application').set('lastLocation', transition);
		}

		//test if not logged in
		this.controllerFor('application').checkAuth();
	},
	afterModel: function(model){
		console.log("Setting lastModel", model);
		this.controllerFor('application').set('lastModel', model);
	},
	actions: {
		openModal: function(modalName, model) {
			console.log("Opening modal: "+modalName);
			this.controllerFor(modalName).set('model', model);
			return this.render(modalName, {
				into: 'application',
				outlet: 'modal'
			});
		},
		
		closeModal: function() {
			return this.disconnectOutlet({
				outlet: 'modal',
				parentView: 'application'
			});
		},

		logout: function(){
			this.controllerFor('application').set('currentAuth', null);
			localStorage.removeItem('auth');
			this.transitionTo('login');
		},

		openFile: function(model){
			this.controllerFor('application').set('currentFile', model);
			console.log(model.serialize());
			this.transitionTo('file', model);
		}
	}
});