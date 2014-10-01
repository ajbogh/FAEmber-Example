App.ModalDialogComponent = Ember.Component.extend({
	classNames: ['modalComponent'],
	actions: {
		close: function() {
			return this.sendAction();
		}
	}
});