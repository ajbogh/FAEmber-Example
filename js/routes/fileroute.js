App.FileRoute = Ember.Route.extend({
	beforeModel: function(transition){
		this.controllerFor('application').set('lastLocation', transition);
	},
	model: function(params){
		var recentFiles = this.store.find('file');
		//var files = this.store.find('file', {id: params.id});
		var root = Ember.RSVP.defer();
		var self = this;
		recentFiles.then(function(result){
			root.resolve(self.store.getById('file', params.id));
		});
		this.controllerFor('application').set('currentFile', root.promise);
		this.controllerFor('application').set('files', recentFiles);
		return root.promise;
	},
	afterModel: function(model){
		this.controllerFor('application').set('lastModel', model);
		this.controllerFor('application').checkAuth();
	}
});