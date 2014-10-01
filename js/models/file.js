App.File = DS.Model.extend({
	'fileNumber': DS.attr("string"),
	'address': DS.belongsTo('address'),
	'closingDate': DS.attr("string"),
	'buyerShortName': DS.attr("string"),
	'sellerShortName': DS.attr("string"),
	'fileStatus': DS.belongsTo('fileStatus'),
	'fileType': DS.belongsTo('fileType'),
	'transactionType': DS.belongsTo('transactionType'),
	'underwriter':DS.belongsTo('underwriter'),
	'office':DS.belongsTo('office')
});