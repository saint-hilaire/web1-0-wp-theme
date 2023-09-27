<?php

wp_nav_menu(
	array(
		'theme_location' => $args['theme_location'],
		'menu_id'        => $args['menu_id'],
		'before'         => '<button type="button" class="web1-0-nav-button">',
		'after'          => '</button>',
	)
);
