<nav class="main-nav" id="nav">
	<div class="container">
		<div class="row">
			<div class="logo col-xs-9 col-sm-3">
				<a href="/"><img src="$ThemeDir/images/st-germain-header-logo.png" width="160" height="40" alt="St Germain Cafe"></a>
			</div>
			<ul class="nav-items col-xs-3 col-sm-9">
				<% loop Menu(1) %>
				<li class="$LinkingMode"><a href="$Link">$MenuTitle</a></li>
				<% end_loop %>
			</ul>
			<div class="mobile-menu col-xs-3">
				<div id="menu-button">
			  		<a href="#">
			  			<div></div>
			  			<div></div>
			  			<div></div>
			  		</a>
				</div>
				<div class="overlay overlay-data">
			  		<a href="" class="overlay-close">CLOSE</a>
				    <ul>
				    	<li class="$LinkingMode"><a href="/">Home</a></li>
						<% loop Menu(1) %>
						<li class="$LinkingMode"><a href="$Link">$MenuTitle</a></li>
						<% end_loop %>
				    </ul>
				</div>
			</div>
		</div>
	</div>
</nav>