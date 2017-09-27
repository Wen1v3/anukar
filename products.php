<?php require("header.php"); ?>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Refrgeration</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-project">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
					<span>Want Some Cool Stuff</span>
					<h2>REFRIGERATION Services in Auckland</h2>
					<br>
					<p>We specialise in installations, breakdown repair & maintenance of all Commercial Refrigeration Equipment.</p>
					<p>AAVIS is one of the fastest growing refrigeration and air conditioning businesses servicing all of Auckland region</p>
					<p>With our emergency service, we are available for you 24 hours a day, seven days a week.</p>
				</div>
			</div>

			<div class="row">
				<?php
					$contents = ["Break down and repair", 
						"Process cooling", 
						"Temperature controlled and pressurized",
						"pack houses and food preparation areas",
						"Racked, chilled storage areas",
						"Bespoke systems for laboratory and other research environments",
						"Ultra Low Temperature cabinets for storing scientific samples",
						"Food Production Facilities - Cool Rooms",
						"Chilled Counter Displays - Multi Deck Cases - Island Site Freezers",
						"Frozen Food Displays - Bottle Coolers - Ice Makers",
						"Blast Chillers - Blast Freezers"];
					$i = 0;
					foreach ($contents as $content) {
						$i++;
						echo '<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeIn">';
						echo '<img src="images/work-' . ($i % 5 + 1) . '.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">';
						echo '<div style="position:relative; top:-90px; left:20px;"><h3 style="color:white; width:300px;">' . $content . '</h3></div>';
						echo '</div>';
					}
				?>
				<!--
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-1.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Clipboard Office</h3>
							<p>Web Design</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-2.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Smart Layers</h3>
							<p>Brand &amp; Identity</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-3.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Notepad Mockup</h3>
							<p>Illustration</p>
						</div>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-4.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Outline Ribbon</h3>
							<p>Web Design</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-5.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Food Icons Set</h3>
							<p>Brand &amp; Identity</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-6.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Business Card</h3>
							<p>Illustration</p>
						</div>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-1.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Clipboard Office</h3>
							<p>Web Design</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-2.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Smart Layers</h3>
							<p>Brand &amp; Identity</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-3.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Notepad Mockup</h3>
							<p>Illustration</p>
						</div>
					</a>
				</div>

				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-4.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Outline Ribbon</h3>
							<p>Web Design</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-5.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Food Icons Set</h3>
							<p>Brand &amp; Identity</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-6.jpg" alt="Free HTML5 Website Template by gettemplates.co" class="img-responsive">
						<div class="fh5co-copy">
							<h3>Business Card</h3>
							<p>Illustration</p>
						</div>
					</a>
				</div>
				
				<div class="col-md-12 text-center">
					<nav aria-label="Page navigation">
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li class="active"><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>

				!-->
			</div>
		</div>
		
	</div>
<?php require("footer.php"); ?>

