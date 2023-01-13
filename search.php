<?php get_header(); ?>
<?php the_search_query(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink();?>"><?php the_title();?></a>
<?php endwhile; ?>
<?php else:?>
<p>Sonuç bulunamadı </p>	
<?php endif; ?>
<?php get_footer(); ?>