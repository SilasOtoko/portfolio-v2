<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
      <script src="https://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
</head>
<body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="<?php bloginfo( 'template_directory' ); ?>/img/close.svg" alt="Close Button"></a>

		<div id="sidebar">
			<nav>
				<div class="mobile-navigation">
					<h4>Main</h4>
					<?php

						$defaults = array(
							'container' => false,
							'div' => false,
							'theme_location' => 'main-menu',
						);

						wp_nav_menu( $defaults );

					?>

				</div>
			</nav>
		</div>
	</div>
  <header class="main-header clearfix">

		<div onclick="openNav()" class="toggle-sidebar">
			<img src="<?php bloginfo( 'template_directory' ); ?>/img/hamburger-menu.svg" alt="hamburger icon">
		</div>

		<div class="page-heading-wrapper">
			<div class="page-heading">
				<h1>Hello!</h1>
				<h3>My name is Josiah Schaefer.</h3>
			</div>
		</div>

	</header>
