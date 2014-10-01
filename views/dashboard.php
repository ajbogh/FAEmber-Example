<script type="text/x-handlebars" id="dashboard">
	<div class="launchpad">
		<div class="clearfix">
			{{input name="searchField" class="searchField dark" placeholder="Existing File No." value=searchField}}
			<button class="primary right" {{action newFile}}>New File</button>
		</div>
		<h3 class="light recentFilesTitle">Recent Files</h3>

		<ul id="recentFiles" class="recentFiles">
			{{#each item in model}}
				<li {{action 'openFile' item}}>
					<div {{bind-attr class=":fileInfoContainer item.fileStatus"}}>
						<div class="rightSide">
							<div class="row1 clearfix">
								<div class="ot"><h1 class="file-number">{{item.fileNumber}}</h1></div>
								<div class="tt sans13regular">
									<span class="line1">{{item.address.fullAddress}}</span>
								</div>
							</div>
							<div class="row2 clearfix">
								<div class="ot left">
									<div class="clearfix sans10bold">Estimated Close Date</div>
									<div class="sans13regular">{{format-date item.closingDate 'MMM Do YYYY'}}</div>
								</div>
								<div class="ot left">
									<div class="clearfix sans10bold">Buyer/Borrower</div>
									<div class="sans13regular">{{item.buyerShortName}}</div>
								</div>
								<div class="ot left">
									<div class="clearfix sans10bold">Seller</div>
									<div class="sans13regular">{{item.sellerShortName}}</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			{{/each}}
		</ul>
	</div>
</script>