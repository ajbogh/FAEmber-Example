App.TransactionType = DS.Model.extend({
	"businessLineIds": null,
	"active": DS.attr("boolean"),
	"description": DS.attr("string"),
	"firmId": DS.attr("number"),
	"lookup": DS.attr("string"),
	"value": DS.attr("string"),
	"extra": DS.attr("string")
});