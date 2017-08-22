<% include Header %>

<% include Nav %>

<div class="main-content" id="content">
	<% if Image %>
	    <div class="page-image-header">
	    	<div class="page-image-img" style="background-image:url($Image.Link)"></div>
		</div>
	<% end_if %>
	<% if URLSegment == 'contact' %>
	    <div class="page-image-header">
	    	<div id="map"></div>
		</div>
	<% end_if %>
	<% if URLSegment != 'Security' && URLSegment != 'home' && URLSegment != 'page-not-found' %>
		<div class="page-title-header">
			<div class="container">
				<h1 class="page-title">$Title</h1>
				<p class="page-intro">$PageIntro</p>
			</div>
		</div>
	<% end_if %>
	<% if URLSegment == 'home' %>
		<div class="page-image-header">
			<div class="home-logo-container">
				<div class="home-logo">
					<img src="$ThemeDir/images/st-germain-home-logo.png" width="300" height="204" alt="St Germain Cafe">
				</div>
				<div class="home-buttons">
					<a href="/contact" class="btn full">Visit Us Today</a>
					<a href="/menus" class="btn full">Visit Our Menus</a>
				</div>
			</div>
			<div class="page-image-img" style="background-image:url(<% loop RandomHomeImages %>$Image.Link<% end_loop %>)"></div>
		</div>
	<% end_if %>
	<div class="container content">
		$Layout
	</div>
</div>

<% include Footer %>