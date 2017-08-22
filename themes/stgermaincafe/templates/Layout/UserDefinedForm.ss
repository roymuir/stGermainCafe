<% if URLSegment == 'contact' %>
	<div class="row">
		<div class="col-sm-8">
			$Content
			<div class="contact-section">
				<h2>Contact Details</h2>
				<ul class="contact-details">
					<li class="phone"><a href="tel:$SiteConfig.Phone">$SiteConfig.Phone</a></li>
					<li class="email"><a href="mailto:$SiteConfig.Email">$SiteConfig.Email</a></li>
					<li class="address">$SiteConfig.Address</li>
				</ul>
			</div>
			<div class="contact-section">
				<h2>Opening Hours</h2>
				$SiteConfig.OpeningHoursFull
				</div>
			<div class="contact-section">
				<h2>Follow Us</h2>
				<ul>
					<li><a href="$SiteConfig.Facebook" target="_blank">Facebook</a></li>
					<li><a href="$SiteConfig.Instagram" target="_blank">Instagram</a></li>
				</ul>
			</div>
		</div>
		<div class="col-sm-4">
			<div id="form-box" class="form-box">
				<h2>General Enquiries</h2>
				$Form
			</div>
		</div>
	</div>
<% end_if %>