<?php
/**
 * The template for the home page.
 *
 * @package RED_Starter_Theme
 */
 $args= array(
     'post_type'=> 'post',
     'posts_per_page'=> 3
 );

 $products = new WP_Query($args);
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="home-hero" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)), url('<?php the_post_thumbnail_url('large')?>') no-repeat top; background-size: cover, cover;">
                <img src="<?php echo get_template_directory() ?>/images/inhabitent-logo-full.svg" alt="Inhabitent full logo" class="logo">
            </section>
            <section class="product-info">
                <?php $product_types = get_terms(array('taxonomy' => 'product-type', 'hide_empty' => 0));
                    if(!empty($product_types)&& !is_wp_error($product_types)) :?>
                    <?php foreach($product_types as $product_type) :?>
                        <?php echo $product_type->description?>
                        <a class="green-btn" href="<?php echo get_term_link($product_type);?>"><h3><?php echo $product_type->name?> Stuff</h3></a>
                    <?php endforeach;?>
                <?php endif; ?>

            </section>
            <section class="latest-entries">
            <h2>Inhabitent Journal</h2>
            <ul>
                <?php if ( $products->have_posts() ) : ?>
                    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                        <li>
                            <div class="thumbnail-wrapper">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="product-info-wrapper">
                                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                                <h3><?php the_title()?></h3>
                                <a class="black-btn" href="<?php the_permalink()?>">Read Entry</a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <h2>Nothing found!</h2>
                <?php endif; ?>
            </ul>
            </section>
            <section class="adventures">

            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
