<div class="catering-block block">
	<% loop CateringCategories %>
		<h3 class="catering-category">$Title</h3>
		<% loop CateringOptions %>
			<% if Image %>
			    $Image.SetRatioSize(300,200)
			<% end_if %>
			<% if Name %>
			    <p><strong>$Name</strong> <% if Price > 0 %>$Price.Nice() <% if SecondaryPrice > 0 %>- $SecondaryPrice.Nice()<% end_if %> $Unit<% end_if %> <% if Minimum > 0 %>(Minimum $Minimum people)<% end_if %> <% if Serves > 0 %>(Serves approximately $Serves people)<% end_if %> <% if Extra > 0 %>($Extra.Nice() per extra person)<% end_if %></p>
			<% end_if %>
			<% if Description %>$Description<% end_if %>
			<% if CateringItems %>
				<ul>
				    <% loop CateringItems %>
					    <li>$Name</li>
					    <% if GlutenFree %>
					    	<small>* Gluten Free</small>
						<% end_if %>
						<% if Vegetarian %>
						    <small>* Vegetarian</small>
						<% end_if %>
						<% if Vegan %>
						    <small>* Vegan</small>
						<% end_if %>
					    <% if CateringSubItems %>
					    	<ul>
						        <% loop CateringSubItems %>
						            <li>$Name</li>
						            <% if GlutenFree %>
								    	<small>* Gluten Free</small>
									<% end_if %>
									<% if Vegetarian %>
									    <small>* Vegetarian</small>
									<% end_if %>
									<% if Vegan %>
									    <small>* Vegan</small>
									<% end_if %>
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
		<% end_loop %>
	<% end_loop %>
</div>