App.Address = DS.Model.extend({
	"city": DS.attr("string"),
	"cityIncorporated": DS.attr("string"),
	"country": DS.attr("string"),
	"county": DS.attr("string"),
	"state": DS.attr("string"),
	"streetAddress1": DS.attr("string"),
	"streetAddress2": DS.attr("string"),
	"zipCode": DS.attr("string"),
	"fullAddress": function(){
		return this.get('streetAddress1')+
			(this.get('streetAddress2')?", "+this.get('streetAddress2'):'')+
			(this.get('city')?", "+this.get('city'):'')+
			(this.get('state') || this.get('zipCode')?', ':'')+
			(this.get('state')?this.get('state'):'')+
			(this.get('zipCode') && this.get('state')?' '+this.get('zipCode'):(this.get('zipCode') && !this.get('state')?' '+this.get('zipCode'):''));
	}.property('streetAddress1', 'streetAddress2', 'city', 'state', 'zipCode')
});