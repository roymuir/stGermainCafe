<nav class="main-nav" id="nav">
	<div class="container">
		<div class="row">
			<div class="logo col-xs-2">
				<a href="/"><img src="$ThemeDir/images/st-germain-header-logo.png" width="160" height="40" alt="St Germain Cafe"></a>
			</div>
			<ul class="nav-items col-xs-10">
				<% loop Menu(1) %>
				<li class="$LinkingMode"><a href="$Link">$MenuTitle</a></li>
				<% end_loop %>
			</ul>
		</div>
	</div>
</nav>