<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title>
        	<?php
        		// This gives you a nice page title in the top bar of your browser. WordPress curates this title automatically. For the home page it looks different than for single posts or pages. Of course you can customize the behaviour. Just look up ”wp_title” with your favorite search-engine.
        		wp_title();
        	?>
        </title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <?php
        	// Gets the URL of the stylesheet of your theme automagically.
        	$stylesheet_url = get_stylesheet_uri();
        	// We save it to a variable and use it two lines after this comment.
        ?>
        <link rel="stylesheet" href="<?php echo $stylesheet_url; ?>" type="text/css" media="screen" />
        <?php
        	// This gives you all the crazy internal WordPress stuff (some of the stuff can be safely deactivated in the functions.php once you're there) and all plugin styles and scripts that are registered to be put into the head of your website.
        	wp_head();
        ?>
    </head>
    <body>
		<div id="wrapper">
			<div id="header">
				<h1>
					<?php
						// This displays the title of your website, set under ”settings“ in the WP backend.
						bloginfo('title')
					?>
				</h1>
			</div>
			<div id="content">
				<?php
					// Okay, so here we get to the actual content. We just want to display posts if there are any, right? So let's check.
					if(have_posts()) {
				?>
					<?php
						// WordPress tells us that there are posts. We want to show all of them. So we just loop over them.
						while(have_posts()) {
					?>
						<article>
							<?php
								// We need to tell WordPress to prepare the post for us. This is making it available for the two nice methods following.
								the_post();
							?>
							<h2>
								<?php
									// Wait a sec! What if this is a page? Let's check.
									if(is_page()) {
										// Okay, display the page title differently. Just for kicks.
								?>
										<em>This is a page:</em> <?php the_title(); ?>
								<?php
									} else {
										// Okay, just echo the title of the post here.
										the_title();
									}
								?>
							</h2>
							<div class="post_content">
								<?php
									// Display the formatted post or page content here.
									the_content();
								?>
							</div>
						</article>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="sidebar">
				<?php
					// Display a sidebar here in case it is activated. We are looking for a sidebar here that is named ”sidebar-home“.
					if ( is_active_sidebar( 'sidebar-home' ) ) {
						dynamic_sidebar( 'sidebar-home' );
					}
				?>
			</div>
			<div id="footer">
				<?php // Here you could add some footer content. ?>
			</div>
		</div>
    </body>
</html>