App.PhoneNumber = DS.Model.extend({
	"extension": DS.attr('string'),
	"isPrimary": DS.attr('boolean'),
	"note": DS.attr('string'),
	"number": DS.attr('string'),
	"type": DS.belongsTo('phoneNumberType')
});