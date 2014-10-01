 App.FadeInView = Ember.View.extend({
	didInsertElement: function(){
		this.$().hide().fadeIn(150);
	}
});