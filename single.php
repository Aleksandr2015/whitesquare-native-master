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
			<h1><?php the_title(); ?> - single.php</h1>
		</div>
				
		<aside>		
    		<?php get_sidebar(); ?>		
		</aside>
       
        <section>
       
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="block">
                    <div class="name"> 
                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                        <?php the_content(); ?>                         
                        Район: <h2><?php the_field('region'); ?></h2>                        
                        Этаж: <h2><?php the_field('floor'); ?></h2>
                    </div>
                                <?php 

                                $image = get_field('ph1');

                                if( !empty($image) ): ?>

                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                                <?php endif; ?>
                </div>
                <div style="height:20px;"></div>

            <?php endwhile; endif; ?>                      
            

            
        </section>
	</div>
	<?php get_footer(); ?>