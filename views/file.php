<script type="text/x-handlebars" id="file">
	<header class="top">
		<div class="buyer">
			<div>Buyer</div>
			<div>
				{{#if model.buyer.fullName}}
					{{model.buyer.fullName}}
				{{else}}
					—
				{{/if}}
			</div>
		</div>
		<div class="seller">
			<div>Seller</div>
			<div>
				{{#if model.seller.fullName}}
					{{model.seller.fullName}}
				{{else}}
					—
				{{/if}}
			</div>
		</div>
		<div class="property-address">
			<div>Property Address</div>
			<div>
				{{#if model.address.fullAddress}}
					{{model.address.fullAddress}}
				{{else}}
					—
				{{/if}}
			</div>
		</div>
		<div class="close-date">
			<div>Close Date</div>
			<div class="ng-binding">—</div>
		</div>
	</header>
	
	<header class="fileDetails">
		<div class="left">
			<input type="text" placeholder="JUMP TO SECTION..." data-jump-to="" class="jumpBox" autocomplete="off">
			<div class="vrule"></div>
			<div class="fileNumberCloseDate">
				<div class="fileNumber">{{model.fileNumber}}</div>
				<div class="close-date ng-binding ng-hide" data-ng-show="currentFile.ClosingDate"></div>
			</div>

			<div class="fileStatus">
				<span>Pending</span>
			</div>
		</div>
		
		<div class="right">
			<div class="vrule"></div>
			<button type="button" class="btn primary" data-ng-disabled="!hasChanges()" data-ng-click="saveChanges()" disabled="disabled">Save</button>
		</div>
	</header>
	<div class="file">
		<?php include('partials/generalinfo.php'); ?>

		<?php include('partials/address.php'); ?>
	</div>
</script>