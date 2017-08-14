<div class="gallery-block block">
	<div id="links" class="row">
		<% loop GalleryImages %>
		    <div class="gallery-image col-xs-6 col-md-4 col-lg-3">
                <a href="$Image.Link" title="$Image.Title" data-gallery>
			        <img src="$Image.Fill(375,245).Link" alt="$Image.Title">
			    </a>
            </div>
		<% end_loop %>
	</div>
	<!-- BlueImp Gallery modal -->
	<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
	    <div class="slides"></div>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <ol class="indicator"></ol>
	</div>
</div>