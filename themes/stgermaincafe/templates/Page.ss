<% include Header %>

<% include Nav %>

<div class="main-content" id="content">
	<% if Image %>
	    <div class="page-image-header">
			$Image
		</div>
	<% end_if %>
	<% if URLSegment == 'contact' %>
	    <div class="page-image-header">
	    	<div id="map"></div>
		</div>
	<% end_if %>
	<div class="page-title-header">
		<div class="container">
			<h1 class="page-title">$Title</h1>
			<p class="page-intro">$PageIntro</p>
		</div>
	</div>
	<div class="container">
		$Layout
	</div>
</div>

<% include Footer %>