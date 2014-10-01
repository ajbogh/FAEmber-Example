App.Store = DS.Store.extend({
	revision: 12,
});

App.ApplicationAdapter = DS.RESTAdapter.extend({
	namespace: 'mocks',
	host: 'http://localhost',
	ajax: function(url, type, hash) {
		url = url+".php";
		console.log("Calling service URL: ", url);
		
		if (!hash) {
			hash = {};
		}
		hash.beforeSend = function(xhr) {
			xhr.setRequestHeader("Authorization", "Token " + window.sessionToken);
		};
		return this._super(url, type, hash);
	}
});
