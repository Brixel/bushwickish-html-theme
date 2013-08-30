<?php include('header.php'); ?>
<style>
.question:hover{cursor: pointer;color:#68ADC3;}
.stickies{background: #F7F2CB;}
</style>
<section class="grid 1of1 content">

		<ul class="items">
			<li>
				<article class="latest-article-preview">
					<h1>
						<a href="#welcome" title="Welkom">Welkom</a>
					</h1>

					<p class="content">
						Wanneer je voor het eerst op deze pagina komt, dan bestaat de kans dat je niet weet wat een hackerspace nu eigenlijk is. De kans is dan ook groot dat er enkele misverstanden zullen zijn. Dus laten we duidelijk zijn.	
					</p>

					<h3 triggerfor="wat" class="question">Wat is een Hackerspace?</h3>
					<p id="wat" class="content answer">
						Het is een locatie waar gelijkgestemden kunnen samenwerken aan projecten. Vaak zijn dit electronica, informatica of gewoon kunstzinnige experimenten. Al dit experimenteren, of liever gezegd, hacken heeft maar één doel: de hackerspace upgraden tot een plaats die inspireert om nog leukere dingen te maken. Een locatie is 1 kant van het verhaal, aan de andere kant zijn er de leden en bezoekers, de échte bron van ideeën en kennis.
					</p>
					<h3 triggerfor="voorwie" class="question">Voor wie is de Hackerspace?</h3>
					<p id="voorwie" class="content answer">
						Eigenlijk is iedereen welkom! Heb je een vraag? Een idee? Wil je de sfeer eens komen opsnuiven? Kom gerust langs!
					</p>
<!--
					<a href="" title="" class="buttonlink">Read More</a>

					<footer>
						<small>
							Gepost op <time datetime="dateTime">vrijdag 30 augustus</time> door Brixel.
						</small>
					</footer>-->
				</article>

			</li>

			<hr />
<!-- START STICKIES -->

<li>
				<article class="article-preview force-grid sticky">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="#locatie" title="Locatie">Brixel zoekt een locatie</a>
						</h3>
						<footer>
							<small>
								Gepost op <time datetime="">Vrijdag 30 Augustus</time> door Brixel.
							</small>
						</footer>

					</div>
					<div class="grid 1of3 stick-to-grid remove-padding center">
						<a href="" title="" class="buttonlink">Lees Meer</a>
					</div>

					<p>Brixel Hackerspace Hasselt heeft het afgelopen jaar al enkele evenementen georganiseerd, uitstappen gedaan en we hebben quasi wekelijks een vergadering. Maar eigenlijk zitten we nog met 1 groot probleem: <b>We hebben nog geen vaste locatie</b>. We zijn haastig op zoek, maar tot nu toe zonder success.</p>
					<p>Heb jij een locatie ter beschikking? Of ken je iemand die een locatie ter beschikking heeft? Laat het ons weten! Zelfs als het slechts een tijdelijke locatie is!</p>
						
				</article>

			</li>

<!-- END STICKIES -->



			<hr />

			<!-- ALL THE POSTS -->
			<li>
				<article class="article-preview force-grid">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="#article" title="TweetBot">Tweetbot</a>
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
					<p>Een automatische tweetbot voor de hackerspace</p>
				</article>
			</li>

			<li>
				<article class="article-preview force-grid">
					<div class="grid 2of3 stick-to-grid remove-padding">
						<h3 class="remove-bottom">
							<a href="#article" title="TweetBot">Tweetbot</a>
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
					<p>Een automatische tweetbot voor de hackerspace</p>
				</article>
			</li>
			<!-- End loop -->
		</ul>


</section>

<?php include('footer.php'); ?>
