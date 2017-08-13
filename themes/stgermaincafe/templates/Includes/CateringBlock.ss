<div class="catering-block block">
	<% loop CateringCategories %>
		<h3 class="catering-category">$Title</h3>
		<% loop CateringOptions %>
			<% if Name %>
			    <p><strong>$Name</strong> <% if Price %>$Price.Nice() $Unit<% end_if %></p>
			<% end_if %>
			<% if CateringItems %>
				<ul>
				    <% loop CateringItems %>
					    <li>$Name</li>
					<% end_loop %>
				</ul>
			<% end_if %>
			<% if GlutenFree %>
			    <p><small>* Gluten Free</small></p>
			<% end_if %>
			<% if Vegetarian %>
			    <p><small>* Vegetarian</small></p>
			<% end_if %>
		<% end_loop %>
	<% end_loop %>
</div>