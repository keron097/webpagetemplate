<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Varela+Round" rel="stylesheet" />
		<link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo esc_url(get_template_directory_uri()) ; ?>/fonts.css" rel="stylesheet" type="text/css" media="all" />
		<!--[if IE 6]>
		<link href="default_ie6.css" rel="stylesheet" type="text/css" />
		<![endif]-->
		
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
		<div id="wrapper">
			<div id="header-wrapper" style="background: url(<?php header_image(); ?>) 0 0 / 100% 100% ;">
				<div id="header" class="container">
					<div id="logo">
						<h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('title');?></a></h1>
						<p><?php bloginfo('description');?></p>
					</div>
					<div id="social">
						<ul class="contact">
							<li><a href="#" class="icon icon-twitter" title="Twitter"><span>Twitter</span></a></li>
							<li><a href="#" class="icon icon-facebook" title="Facebook"><span>Facebook</span></a></li>
							<li><a href="#" class="icon icon-pinterest" title="Pinterest"><span>Pinterest</span></a></li>
							<li><a href="#" class="icon icon-dribbble" title="Dribbble"><span>Dribbble</span></a></li>
							<li><a href="#" class="icon icon-google-plus" title="Google+"><span>Google+</span></a></li>
							<li><a href="#" class="icon icon-tumblr"title="Tumblr"><span>Tumblr</span></a></li>
							<li><a href="#" class="icon icon-rss"title="Rss"><span>Rss</span></a></li>
						</ul>
					</div>
				</div>
				<div id="menu" class="container">
					
					<?php 
					if(function_exists('wp_nav_menu'))
					{
						wp_nav_menu(array(
							'theme_location' => 'prodhanmenu'
						));
					}
					?>
					
					<!-- ul>li*6>a[href=# title accesskey=1]{Home}-->
					<!--<ul>
						<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
						<li><a href="#" accesskey="1" title="">Services</a></li>
					</ul>-->
				</div>
			</div>