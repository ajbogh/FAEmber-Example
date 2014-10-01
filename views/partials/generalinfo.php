<div id="GeneralInfo" class="formPlaceholder">
	<div class="formContainer">
		<form name="generalInfoForm" class="formBasic">
			<div class="formHeader">
				<div class="formIcon file generalInfo"></div>
				<h3>General Information</h3>
			</div>

			<div class="table">
				<div class="td50">
					<div class="formSection">
						<h3 class="formSectionHeader">Basics</h3>
						<div class="rowFluid">
							<label for="fileNumber" class="formLabel">File Number</label>
							<div class="formItem">
								{{input name="FileNumber" id="fileNumber" value=model.fileNumber}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="FileType" class="formLabel">File Type</label>
							<div class="formItem">
								{{input name="FileType" value=model.fileType.name}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="TransactionTypeId" class="formLabel">Transaction Type</label>
							<div class="formItem">
								{{input name="TransactionType" value=model.transactionType.description}}
							</div>
						</div>
						<div class="rowFluid">
							<label class="formLabel">Business Line</label>
							<div class="formItem">
								{{input name="BusinessLine" value=model.businessLine}}
							</div>
						</div>
						<div class="rowFluid">
							<label for="OfficeId" class="formLabel">Office</label>
							<div class="formItem">
								{{input name="Office" value=model.office.name}}
							</div>
						</div>
						<div class="rowFluid">
								<label class="formLabel">Title Officer</label>
								<div class="formItem">
									{{input name="TitleOfficer" value=model.titleOfficer}}
								</div>
						</div>
						<div class="rowFluid">
								<label for="EscrowOfficerId" class="formLabel">Escrow/Closing/Settlement Officer</label>
								<div class="formItem">
									{{input name="EscrowOfficer" value=model.escrowOfficer}}
								</div>
						</div>
					
						<div class="rowFluid">
							<label class="formLabel">Sales Representative</label>
							<div class="formItem">
								{{input name="SalesRepresentative" value=model.salesRepresentative}}
							</div>
						</div>
						<div class="rowFluid">
							<label class="formLabel">Alternate File No</label>
							<div class="formItem">
								{{input name="AlternateNumber" value=model.alternateNumber maxlength="32"}}
							</div>
						</div>
						
					</div>
					<div class="formDivider noMargin"></div>
					<div class="formSection formbb" id="underwriter-section">
						<div class="formSectionHeader">Underwriter</div>
						<div class="rowFluid">
							<label class="formLabel">Underwriter</label>
							<div class="formItem">
								{{input name="Underwriter" value=model.underwriter.name}}
							</div>
						</div>
						<div class="rowFluid">
							<label class="formLabel">Authorized Signatory</label>
							<div class="formItem">
								{{input name="SelectedSignatoryId" value=model.selectedSignatoryId}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>