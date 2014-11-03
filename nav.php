		<?php

        $primary = array(
            'theme_location'  => 'primary',
            'menu'            => 'primary',
            'container'       => 'nav',
            'container_class' => 'navbar',
            'container_id'    => 'primary_navbar',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="top-menu">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );

        wp_nav_menu( $primary );

        ?>

		
<!-- Уже не нужен
		
		<nav>
			<ul class="top-menu">
				<li><a href="/home/">HOME</a></li>
				<li class="active">ABOUT US</li>
				<li><a href="/services/">SERVICES</a></li>
				<li><a href="/partners/">PARTNERS</a></li>
				<li><a href="/customers/">CUSTOMERS</a></li>
				<li><a href="/projects/">PROJECTS</a></li>
				<li><a href="/careers/">CAREERS</a></li>
				<li><a href="/contact/">CONTACT</a></li>
			</ul>
		</nav>
		
-->
