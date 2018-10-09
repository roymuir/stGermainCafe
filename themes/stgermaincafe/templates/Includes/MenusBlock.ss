<div class="menus-block block">
	<div class="row">
	<% loop MenuCategories %>
		<div class="col-sm-<% if Pos = 1 %>8<% else_if Pos = 2 %>4<% else_if Pos = 3 %>4<% end_if %>">
			<div class="menu-category">
				<img src="$ThemeDir/images/st-germain-menu-logo.png" width="209" height="142" alt="St Germain Cafe">
				<h2>$Title</h2>
				<div class="row">
					<div class="col-sm-<% if Pos = 1 %>6<% else %>12<% end_if %>">
						<% loop MenuItems %>
							<div class="menu-item">
								<% if Name %>
								    <p class="menu-item-name"><strong>$Name</strong></p>
								<% end_if %>
								<% if Description %>
									<p class="menu-item-description">$Description</p>
								<% end_if %>
								<% if GlutenFree %>
								    <small class="menu-item-gluten">* Gluten Free</small>
								<% end_if %>
								<% if Vegetarian %>
								    <small class="menu-item-vegetarian">* Vegetarian</small>
								<% end_if %>
								<% if Vegan %>
								    <small class="menu-item-vegan">* Vegan</small>
								<% end_if %>
								<% if Price %>
								    <p class="menu-item-price">$Price.Nice()</p>
								<% end_if %>
								<% loop Extras %>
								    <p class="menu-item-extras">$Name $Price.Nice()</p>
								<% end_loop %>
							</div>
							<% if Pos = 7 %>
							    </div>
							    <div class="col-sm-6">
							<% end_if %>
						<% end_loop %>
					</div>
				</div>
			</div>
		</div>
	<% end_loop %>
	</div>
</div>