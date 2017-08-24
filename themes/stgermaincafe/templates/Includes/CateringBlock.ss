<div class="catering-block block">
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<div class="catering-about">
				$About
			</div>
			<div class="catering-how-to-order">
				<h4>How to order</h4>
				$HowToOrder
			</div>
			<% loop CateringCategories %>
				<div class="catering-category">
					<% if Image %>
					    $Image.SetRatioSize(378,250)
					<% end_if %>
					<div class="catering-category-inner">
						<h2>$Title</h2>
						<% loop CateringOptions %>
							<div class="catering-option">
								<% if Name %>
								    <p class="catering-option-name"><strong>$Name</strong></p>
								<% end_if %>
								<% if Description %><p class="catering-option-description">$Description</p><% end_if %>
								<% if CateringItems %>
									<ul>
									    <% loop CateringItems %>
										    <li>
										    	<p>$Name</p>
										    	<% if GlutenFree %>
										    		<small>* Gluten Free</small>
												<% end_if %>
												<% if Vegetarian %>
												    <small>* Vegetarian</small>
												<% end_if %>
												<% if Vegan %>
												    <small>* Vegan</small>
												<% end_if %>
										    </li>
										    <% if CateringSubItems %>
										    	<ul>
											        <% loop CateringSubItems %>
											            <li>
											            	<p>$Name</p>
												            <% if GlutenFree %>
														    	<small>* Gluten Free</small>
															<% end_if %>
															<% if Vegetarian %>
															    <small>* Vegetarian</small>
															<% end_if %>
															<% if Vegan %>
															    <small>* Vegan</small>
															<% end_if %>
														</li>
											        <% end_loop %>
										        </ul>
										    <% end_if %>
										<% end_loop %>
									</ul>
								<% end_if %>
								<% if GlutenFree %>
								    <small>* Gluten Free</small>
								<% end_if %>
								<% if Vegetarian %>
								    <small>* Vegetarian</small>
								<% end_if %>
								<% if Vegan %>
								    <small>* Vegan</small>
								<% end_if %>
								<p class="catering-option-price"><% if Price > 0 %>$Price.Nice() <% if SecondaryPrice > 0 %>- $SecondaryPrice.Nice()<% end_if %> $Unit<% end_if %></p>
								<p class="catering-option-disclaimers"><% if Minimum > 0 %>(Minimum $Minimum people)<% end_if %> <% if Serves > 0 %>(Serves approximately $Serves people)<% end_if %> <% if Extra > 0 %>($Extra.Nice() per extra person)<% end_if %></p>
							</div>
						<% end_loop %>
					</div>
				</div>
				<% if Pos = 2 %>
				    </div>
				    <div class="col-sm-6 col-md-4">
				<% else_if Pos = 5 %>
				    </div>
				    <div class="col-sm-6 col-md-4">
				<% end_if %>
			<% end_loop %>
			$Content
			<div id="catering-form" class="form-box">
				<h2>Catering Enquiries</h2>
				$Top.Form
			</div>
		</div>
	</div>
</div>