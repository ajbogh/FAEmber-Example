App.Email = DS.Model.extend({
	"address": DS.attr('string'),
	"isPrimary": DS.attr('boolean'),
	"note": DS.attr('string'),
	"type": DS.belongsTo('emailType')
});