<?php include('header.php'); ?>

<section class="grid 1of1 content">

		<ul class="items">
			<li>
				<article class="latest-article-preview">
					<h1>
						<a href="" title="">Latest Article Title</a>
					</h1>

					<p class="content">
						<?php echo "this is the markdown"; ?>
						
					</p>

					<a href="" title="" class="buttonlink">Read More</a>

					<footer>
						<small>
							Posted <time datetime="dateTime">dateTime</time> by Author.
						</small>
					</footer>
				</article>
			</li>

			<hr />

			<!-- ALL THE POSTS -->
			<li>
				<article class="article-preview force-grid">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="" title="">Article Title</a>
						</h3>

						<footer>
							<small>
								Posted <time datetime="">DateTime</time> by Author.
							</small>
						</footer>
					</div>
					<div class="grid 1of3 stick-to-grid remove-padding center">
						<a href="" title="" class="buttonlink">Read</a>
					</div>
				</article>
			</li>
			<!-- End loop -->
		</ul>


</section>

<?php include('footer.php'); ?>
