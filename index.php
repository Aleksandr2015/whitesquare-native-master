<?php get_header(); ?>
	<div id="wrapper">
		<header>
			<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Whitesquare logo"></a>
			<form name="search" action="#" method="get">
				<input type="text" name="q" placeholder="Search"><button type="submit">GO</button>
			</form>
		</header>
		
		<?php include (TEMPLATEPATH . '/nav.php'); ?>

		<div id="heading">
			<h1><?php the_title(); ?> - index.php</h1>
		</div>
				
		<aside>		
    		<?php get_sidebar(); ?>		
		</aside>
       
        <section>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </section>
	</div>
	<?php get_footer(); ?>