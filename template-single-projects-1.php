<?php
/**
 * WP Post Template: Свой шаблон записи
 **/
?>

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
                        <p><?php the_content(); ?></p>                         
                    </div>
                </div>
                <div style="height:20px;"></div>

            <?php endwhile; endif; ?>                            
            
            <?php $posts = get_posts ("category=1&orderby=date"); ?> 
            <?php if ($posts) : ?>
            <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                <div class="block">
                    <div class="name"> 
                        <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
                        <p><?php the_excerpt(); ?></p> 
                        <a href="<?php the_permalink() ?>">Смотреть подробно</a>
                    </div>
                </div>
                <div style="height:20px;"></div>

            <?php endforeach; ?>
            <?php endif; ?>
            
        </section>
	</div>
	<?php get_footer(); ?>