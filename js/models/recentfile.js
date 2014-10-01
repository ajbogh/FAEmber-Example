App.RecentFile = DS.Model.extend({
	'fileNumber': DS.attr("string"),
	'address': DS.belongsTo('address'),
	'closingDate': DS.attr("string"),
	'buyerShortName': DS.attr("string"),
	'sellerShortName': DS.attr("string"),
	'status': DS.belongsTo('status'),
	'transactionType': DS.belongsTo('transactionType')
});