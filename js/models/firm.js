App.Firm = DS.Model.extend({
	"name": DS.attr("string"),
	"logoDataURL": DS.attr("string"),
	"status": DS.attr("string"),
	"timeout": DS.attr("number")
});