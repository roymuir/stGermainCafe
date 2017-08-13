<div class="testimonials-block block">
	<div class="row">
		<% loop Testimonials %>
			<div class="col-sm-<% if Pos = 1 || Pos = 7 || Pos = 11 || Pos = 17 %>8 large<% else %>4<% end_if %>">
				<blockquote class="testimonial quote">
					<p class="testimonial-description">$Description</p>
				    <footer class="blockquote-footer">
				    	<p class="testimonial-name">$Title</p>
				    	<% if Position %>
				    	    <p class="testimonial-position">$Position</p>
				    	<% end_if %>
				    	<% if Location %>
				    	    <p class="testimonial-location">$Location</p>
				    	<% end_if %>
				    </footer>
			    </blockquote>
		    </div>
		    <% if Pos = 2 || Pos = 5 || Pos = 7 || Pos = 10 || Pos = 12 || Pos = 15 || Pos = 17 %>
			    </div>
			    <hr>
			    <div class="row">
			<% end_if %>
		<% end_loop %>
	</div>
</div>