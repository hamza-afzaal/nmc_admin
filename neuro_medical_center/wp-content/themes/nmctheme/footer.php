





<!-- Start of an excellent footer -->


	<footer id="myFooter" class="theme-gradiant">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h2 class="logo"><a href="#"> <img src="<?php echo get_theme_file_uri('images/ico-title-white.png') ?>" width="100%" /> </a></h2>
				</div>
				<div class="col-sm-2">
					<h5>Get started</h5>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Sign up</a></li>
						<li><a href="#">Downloads</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<h5>About us</h5>
					<ul>
						<li><a href="#">Company Information</a></li>
						<li><a href="<?php site_url('/contact-us') ?>">Contact us</a></li>
						<li><a href="#">Reviews</a></li>
					</ul>
				</div>
				<div class="col-sm-2">
					<h5>Support</h5>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Help desk</a></li>
						<li><a href="#">Forums</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<div class="social-networks">
						<a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
						<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="google"><i class="fab fa-youtube"></i></a>
					</div>
					<button onclick="location.replace('<?php echo site_url('/contact-us')?>')" type="button" class="btn btn-default">Contact us</button>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d639.3512215348106!2d74.33877849746911!3d31.534992014538943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904ebf34a84e3%3A0xde3a32f8df5cf08d!2sNeuro+Medical+Center!5e0!3m2!1sen!2s!4v1530259686053" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<p>Copyrights &copy;2018 Neuro Medical Center. All rights reserved. </p>
		</div>
	</footer>






	<button id="scrollToTop" title="Go to top"><i class="fas fa-angle-up"></i></button>












<?php wp_footer(); ?>
</body>
</html>






<!-- <footer class="site-footer">

<div class="site-footer__inner container container--narrow">

  <div class="group">

    <div class="site-footer__col-one">
      <h1 class="school-logo-text school-logo-text--alt-color"><a href="#"><strong>Fictional</strong> University</a></h1>
      <p><a class="site-footer__link" href="#">555.555.5555</a></p>
    </div>

    <div class="site-footer__col-two-three-group">
      <div class="site-footer__col-two">
        <h3 class="headline headline--small">Explore</h3>
        <nav class="nav-list">
          <ul>
            <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Campuses</a></li>
          </ul>
        </nav>
      </div>

      <div class="site-footer__col-three">
        <h3 class="headline headline--small">Learn</h3>
        <nav class="nav-list">
        <?php 
                wp_nav_menu(array(
                    'theme_location'=>'footermenuone'
                ))
            ?>
           <ul>
            <li><a href="#">Legal</a></li>
            <li><a href="<?php echo site_url('/privacy-policy') ?>">Privacy</a></li>
            <li><a href="#">Careers</a></li>
          </ul> 
        </nav>
      </div>
    </div>

    <div class="site-footer__col-four">
      <h3 class="headline headline--small">Connect With Us</h3>
      <nav>
        <ul class="min-list social-icons-list group">
          <li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
          <li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </nav>
    </div>
  </div>

</div>
</footer> -->
