<nav class="main-nav" id="nav">
	<div class="container">
		<ul class="clearfix">
			<% loop Menu(1) %>
			<li class="$LinkingMode"><a href="$Link">$MenuTitle</a></li>
			<% end_loop %>
		</ul>
	</div>
</nav>