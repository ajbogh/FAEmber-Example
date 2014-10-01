/**
 * Helpers are functions that can be used in Handlebars templates to format the output.
 */
Ember.Handlebars.registerBoundHelper('format-date',function(date, format) {
	if(!date){ return date; } //if it's null return null
	return moment(date).format(format);
});

Ember.Handlebars.helper('json', function(context) {
	console.log(JSON.stringify(context));
	return JSON.stringify(context);
});

Ember.Handlebars.helper('falsey', function(context) {
	return (context?"true":"false")+" - "+(typeof context)+" - "+context;
});