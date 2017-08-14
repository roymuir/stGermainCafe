<%-- <div class="home-images">
	<% loop RandomHomeImages %>
        $Image
	<% end_loop %>
</div> --%>

<div class="row">
	<div class="col-sm-4">
		<div class="home-highlight">
			<% with $Page(menus) %>
				<a href="$Link">$Image.CroppedImage(380,250)</a>
			    <h1>$Title</h1>
			    <p>$Description</p>
			    <a href="$Link" class="btn">View Our Menus</a>
			<% end_with %>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="home-highlight">
			<% with $Page(catering) %>
				<a href="$Link">$Image.CroppedImage(380,250)</a>
			    <h1>$Title</h1>
			    <p>$Description</p>
			    <a href="$Link" class="btn">View Our Catering Menus</a>
			<% end_with %>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="home-highlight">
			<% with $Page(gallery) %>
				<a href="$Link">$Image.CroppedImage(380,250)</a>
			    <h1>$Title</h1>
			    <p>$Description</p>
			    <a href="$Link" class="btn">View Our Gallery</a>
			<% end_with %>
		</div>
	</div>
</div>