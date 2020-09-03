


    <!-- Début de la page -->

    <?php get_header(); ?>


<aside id="sticky-social">
    <ul>
        <li><a href="#" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
        <li><a href="#" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
        <li><a href="#" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
        <li><a href="#" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>
        <li><a href="#" class="entypo-video" target="_blank"><span>Youtube</span></a></li>
    </ul>
</aside>
    <div>
    </div>

    <div id="carouselExampleIndicators" class="carousel carousel-header slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">






	        <?php
	        $recentPosts = new WP_Query();
	        $sticky = get_option('sticky_posts');
	        $args = array(
		        'showposts' => 1,
		        'post__in' => $sticky,
		        'caller_get_posts' => 1,
		        'orderby' => 'date',
	        );
	        $recentPosts->query($args);
	        while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
		        <?php if ( has_post_thumbnail()) : ?>




		        <?php endif; ?>
	        <?php endwhile; ?>




            <div class="carousel-item active">


                <img src="<?php echo get_template_directory_uri(); ?>/src/img/img6.jpg" class="d-block w-100" alt="...">


                <div class="carousel-content" >
                    <h2 class="carousel-title">A LA UNE</h2>
                    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title()?></h3>
                    <p> <?php the_excerpt();?></p>
                </div>

            </div>




            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/alaunes_photo2.png" class="d-block w-100" alt="...">

                <div class="carousel-content">
                    <h2 class="carousel-title">A LA UNE</h2>
                    <h3>Title</h3>
                    <p>In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura</p>
                </div>
            </div>




            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/alaunes_photo3.png" class="d-block w-100" alt="...">

                <div class="carousel-content">
                    <h2 class="carousel-title">A LA UNE</h2>
                    <h3>Title</h3>
                    <p>In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura</p>
                </div>
            </div>





        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="filter">



        <div class="select ">
	        <?php wp_dropdown_categories( 'show_option_none=Catégories ' ); ?>
            <script type="text/javascript">
                <!--
                var dropdown = document.getElementById("cat");
                function onCatChange() {
                    if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                        location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
                    }
                }
                dropdown.onchange = onCatChange;
                -->
            </script>


            <div class="select_arrow">
            </div>
        </div>
        <div class="select ">

            <select>
		        <?php
		        $tax_terms = get_terms('type-contenu', array('hide_empty' => '0'));
		        foreach ( $tax_terms as $tax_term ):
			        echo '<option href="#" value="'.$tax_term->name.'">'.$tax_term->name.'</option>';
		        endforeach;
		        ?>


            </select>
            <div class="select_arrow">
            </div>
        </div>
    </div>
    <div class="board">
        <?php if (have_posts()):
            while (have_posts()): the_post(); ?>
                <div class="card">
                        <!--défaut-->
                        <div class="card-header">
                            <?php the_post_thumbnail("medium")?>
                            <div class="card-theme">
                                <?php the_category()?>
                            </div>
                            <div class="card-title-overlay">
                                <p><?php the_title();?></p>
                                <?php print apply_filters( 'taxonomy-images-queried-term-image', '' ); ?>

	                            <?php the_terms( get_the_ID() , 'type-contenu' ); ?>
                            </div>
                        </div>
                        <!--onHover-->
                        <div class="card-body">

                            <a href="<?php the_permalink(); ?>"
                            <h5 class="card-title"><?php the_title();?></h5>
	                        <?php the_terms( get_the_ID() , 'type-contenu' ); ?>

                            <p class="card-text" > <?php the_excerpt(); ?> </p>
                            </a>
                        </div>
                </div>
          <?php  endwhile;
        else :
            echo "Il n'y a pas d'article sur votre site";
        endif;
        ?>
    </div>
    </div>
    </div>

    </div>
    <?php get_footer(); ?>





