App.User = DS.Model.extend({
	"firstName": DS.attr("string"),
	"lastName": DS.attr("string"),
	"middleName": DS.attr("string"),
	"agentNetPassword": DS.attr("string"),
	"agentNetUserName": DS.attr("string"),
	"businessTitle": DS.attr("number"),
	"contactInfo":  DS.belongsTo('address'),
	"defaultOffice": DS.belongsTo('office'),
	"firm": DS.belongsTo('firm'),
	"newPassword1": DS.attr("string"),
	"newPassword2": DS.attr("string"),
	"oldPassword": DS.attr("string"),
	"photoDataURL": DS.attr("string"),
	"roles": DS.hasMany("role"),
	"username": DS.attr("string")
});