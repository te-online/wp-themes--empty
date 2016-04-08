<?php

// Register the sidebar to make it available in the WordPress backend for customization under ”Design“ -> ”Widgets“. There you can add widgets to this sidebar and they will be displayed whereever you place the sidebar in your theme.
register_sidebar( array(
	// A simple name for display in the backend. (Look up what the __ function does in the WordPress codex. It's interesting.)
	'name'          => __( 'Sidebar Homepage' ),
	// A unique id that we are using in the theme file to load specifically this sidebar.
	'id'            => "sidebar-home",
	// A neat description for the backend.
	'description'   => 'This is a nice sidebar on my frontpage.',
	// A CSS class to add to the sidebar wrapper.
	'class'         => '',
	// The HTML tag that will be used to wrap Widgets.
	'before_widget' => '<div class="sidebar-widget">',
	'after_widget'  => '</div>',
) );

?>