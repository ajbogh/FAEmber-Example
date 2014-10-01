App.RecentFiles = DS.Model.extend({
	'RecentFiles': DS.hasMany('recentFile', {async: true})
});