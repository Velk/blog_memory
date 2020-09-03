<?php
get_header();
?>

<div class="article-thumbnail">
    <?php the_post_thumbnail('post-thumbnail')?>
</div>


<div class="main single container article-content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <p class="post-info">
	                <?php the_terms( get_the_ID() , 'type-contenu' ); ?> posté le <?php the_date(); ?> dans <?php the_category(' et '); ?> par <?php the_author(); ?>.
                </p>
                <h1 class="post-title"><?php the_title(); ?></h1>

                <div class="post-content">
					<?php the_content(); ?>
                </div>
                <div class="post-comments">
					<?php comments_template(); ?>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>


<?php get_footer(); ?>
