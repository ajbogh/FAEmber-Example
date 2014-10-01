App.ApplicationController = Ember.ObjectController.extend({
	needs: ['application'],
	currentFile: null,
	currentAuth: null,
	lastLocation: "",
	lastModel: null,
	files: [],
	showTabs: function(){
		//returns true or false if the tabs should be visible.
		return !!(this.get('currentAuth') && this.get('currentFile'));
	}.property('currentAuth', 'currentFile'),
	filesChanged: function() {
		//TODO: ...
		console.log("files changed, execute tab layout handler");
	}.observes('files.@each'),
	checkAuth: function(){
		if(!this.get('currentAuth')){
			console.log("-----------no currentAuth");
			var auth = localStorage.getItem("auth");
			if(auth){
				console.log("-----------Found localStorage auth");
				auth = JSON.parse(auth);
				if(new Date(auth.expireTime*1000) < new Date()){
					//reauth
					console.log("Reauthenticating...");
					auth = this.store.find('auth', auth);
					var self = this;
					auth.then(function(data){
						self.get('controllers.application').set('currentAuth', data);
						var firstObj = data.get('firstObject');
						localStorage.setItem("auth", JSON.stringify(firstObj.getProperties('id', 'expireTime')));	
					});
				}else{
					//must be a page refresh
					auth = this.store.find('auth', auth);
					var self = this;
					auth.then(function(data){
						self.get('controllers.application').set('currentAuth', data);
						var firstObj = data.get('firstObject');
						localStorage.setItem("auth", JSON.stringify(firstObj.getProperties('id', 'expireTime')));	
					});
				}
			}else{
				return this.transitionToRoute('login');	
			}
		}else{
			console.log("------------currentAuth valid", this.get('currentAuth'));
			var firstObj = this.get('currentAuth').get('firstObject');
			console.log("------firstObj", firstObj);
			var props = firstObj.getProperties('id', 'expireTime');
			if(new Date(props.expireTime*1000) < new Date()){
				auth = this.store.find('auth', props);
				var self = this;
				auth.then(function(data){
					self.get('controllers.application').set('currentAuth', data);
					firstObj = data.get('firstObject');
					localStorage.setItem("auth", JSON.stringify(firstObj.getProperties('id', 'expireTime')));	
				});
			}
			console.log(props.expireTime);
		}
	},
	actions: {
		selectTab: function(model){
			this.get('controllers.application').set('currentFile', model);
			this.transitionToRoute('file', model.get('id'));
		}
	}
});