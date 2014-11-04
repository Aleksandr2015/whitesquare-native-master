		<?php

        $second = array(
            'theme_location'  => 'second',
            'menu'            => 'second',
            'container'       => 'nav',
            'container_class' => 'navbar-second',
            'container_id'    => 'second_navbar',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul class="aside-menu">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        );

        wp_nav_menu( $second );

        ?>

<!--
            <nav>
				<ul class="aside-menu">
					<li class="active">Сайдбар</li>
					<li><a href="/donec/">DONEC TINCIDUNT LAOREET</a></li>
					<li><a href="/vestibulum/">VESTIBULUM ELIT</a></li>
					<li><a href="/etiam/">ETIAM PHARETRA</a></li>
					<li><a href="/phasellus/">PHASELLUS PLACERAT</a></li>
					<li><a href="/cras/">CRAS ET NISI VITAE ODIO</a></li>
				</ul>
			</nav>
-->
