<?php include("header.php"); ?>

<section class="s-search-list">

	<section>
		<form class="s-search-box" action="search.php" method="GET">
			<h1 class="s-search-title-list">Search Engine</h1>
			<input class="s-search-input" type="text" placeholder="Type something...">
		</form>
	</section>

	<section>		
		<div class="s-list">
			<?php for($i = 0; $i < 20; $i++ ){ ?>
				<div class="s-list-item">
					<h1 class="s-list-title">My Site</h1>
					<a href="#" class="s-list-link">www.mysite.com</a>
					<span class="s-list-description">Come and check out my website and everything it has to offer! We have articles, music, videos, and many other attractions for you to explore. Visit our website!</span>
					
				</div>
			<?php } ?>
		</div>
	</section>

</section>

<?php include("footer.php"); ?>