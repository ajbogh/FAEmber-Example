App.Auth = DS.Model.extend({
	user: DS.belongsTo('user', { 'async': true }),
	expireTime: DS.attr('number')
});