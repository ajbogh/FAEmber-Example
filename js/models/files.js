App.Files = DS.Model.extend({
	'Files': DS.hasMany('file', {async: true})
});