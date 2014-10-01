<script type="text/x-handlebars" id="components/modal-dialog">
	{{#view App.FadeInView contentBinding="this" class="modalView"}}
	<div class="overlay" {{action "close"}}> 
	</div>

	{{yield}}

	{{/view}}
</script>