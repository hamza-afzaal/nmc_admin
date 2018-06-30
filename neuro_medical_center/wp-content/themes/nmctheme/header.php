<!doctype HTML>

<!doctype html>
<html>
<head <?php language_attributes() ?>>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light nmc--header-navbar" data-spy="affix" data-offset-top="197">
			<a class="navbar-brand" href="<?php echo site_url() ?>">
				<img src="<?php echo get_theme_file_uri('images/ico-title.png');?>" height="40" />
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item <?php if(get_post_type() == 'post') { echo 'active';} ?>">
						<a class="nav-link" href="<?php echo site_url('/blog') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Our Staff</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About Us</a>
					</li>
				</ul>
				<form id="nav--search" class="my-2 my-lg-0">
					<input type="search" placeholder="Search">
				</form>
			</div>
		</nav>

	</header>
<!-- <header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Neuro</strong> Medical Center</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <ul>
            <li class="<?php if(is_page('about-us') or wp_get_post_parent_id(0)==9){ echo 'current-menu-item'; } ?>" ><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li class="<?php if(get_post_type() == 'event' or is_page('past-events')) echo 'current-menu-item'; ?>" ><a href="<?php echo get_post_type_archive_link('event') ?>">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li class="<?php if(get_post_type() == 'post') { echo 'current-menu-item';} ?>" ><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header> -->