<div id="PropertyAddress" class="formPlaceholder">
	<div class="formContainer">
		<form name="propertyAddressForm" class="formBasic">
			<div class="formHeader">
				<div class="formIcon file propertyAddress"></div>
				<h3>Property Address</h3>
			</div>

			<div class="table">
				<div class="td50">
					<div class="formSection">
						<div class="rowFluid">
							<label for="streetAddress1" class="formLabel">Street Address 1</label>
							<div class="formItem">
								{{input name="StreetAddress1" id="streetAddress1" value=model.address.streetAddress1}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="streetAddress2" class="formLabel">Street Address 2</label>
							<div class="formItem">
								{{input name="StreetAddress2" id="streetAddress2" value=model.address.streetAddress2}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="city" class="formLabel">City</label>
							<div class="formItem">
								{{input name="City" id="city" value=model.address.city}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="county" class="formLabel">County</label>
							<div class="formItem">
								{{input name="County" id="county" value=model.address.county}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="state" class="formLabel">state</label>
							<div class="formItem">
								{{input name="State" id="state" value=model.address.state}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="zipCode" class="formLabel">Zip Code</label>
							<div class="formItem">
								{{input name="ZipCode" id="zipCode" value=model.address.zipCode maxlength=10}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="country" class="formLabel">Country</label>
							<div class="formItem">
								{{input name="Country" id="country" value=model.address.country}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>