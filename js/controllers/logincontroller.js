App.LoginController = Ember.ObjectController.extend({
	needs: ['application'],
	loginFailed: false,
	isProcessing: false,
	actions: {
		auth: function(model){
			this.setProperties({
				'loginFailed': false,
				'isProcessing': true
			});

			var auth = this.store.find('auth', model);
			var self = this;
			auth.then(function(data){
				this.get('controllers.application').set('currentAuth', data);
				var firstObj = data.get('firstObject');
				localStorage.setItem("auth", JSON.stringify(firstObj.getProperties('id', 'expireTime')));

				var transition = this.get('controllers.application').get('lastLocation');
				var lastModel = this.get('controllers.application').get('lastModel');
				if(transition){
					if(lastModel){
						console.log("Transitioning with model: ", transition, lastModel);
						this.transitionToRoute(transition.targetName, lastModel);
					}else{
						console.log("Transitioning without model: ", transition);
						this.transitionToRoute(transition.targetName);
					}

					this.get('controllers.application').set('lastModel', null);
					this.get('controllers.application').set('lastLocation', "");
					return;
				}else{
					console.log("Transitioning to default location...");
					this.transitionToRoute('dashboard');
				}
			}.bind(this), function(err){
				console.log(err);
			}.bind(this));
		}
	}
});