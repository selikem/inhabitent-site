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

 $products = get_posts($args);
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="home-hero" style="background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)), url('<?php the_post_thumbnail_url('large')?>') no-repeat top; background-size: cover, cover;">
                <img src="<?php echo get_template_directory_uri() ?>/images/inhabitent-logo-full.svg" alt="Inhabitent full logo" class="logo">
            </section>
            <section class="product-info">
                <h2>Shop Stuff</h2>
                <div class="product-type-items">
                    <?php $product_types = get_terms(array('taxonomy' => 'product-type', 'hide_empty' => 0));
                        if(!empty($product_types)&& !is_wp_error($product_types)) :?>
                        <?php foreach($product_types as $product_type) :?>
                            <div class="product-type-item">
                                <img src="<?php echo get_template_directory_uri()?>/images/<?php echo $product_type->name ?>.svg" alt="term-logo">
                                <p><?php echo $product_type->description?></p>
                                <p><a class="green-btn"  href="<?php echo get_term_link($product_type);?>"><?php echo $product_type->name?> Stuff</a></p>
                            </div>
                        <?php endforeach;?>
                    <?php endif; ?>
                </div>
            </section>
            <section class="latest-entries">
                <h2>Inhabitent Journal</h2>
                <ul>
                    <?php foreach ( $products as $post ) : setup_postdata( $post ); ?>
                        <li>
                            <div class="thumbnail-wrapper">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('large'); ?>
                                <?php endif; ?>
                            </div>
                            <div class="post-info-wrapper">
                                <p><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
                                <a href="<?php the_permalink()?>"><h3><?php the_title()?></h3></a>
                                <a class="black-btn" href="<?php the_permalink()?>">Read Entry</a>
                            </div>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>
            </section>
            <section class="adventures">
                <h2>Adventures</h2>
                <div class="adventure-row adventure-row-1">
                    <div class="adventure-item adventure-item-1" style="background: linear-gradient( 0deg, rgba(0,0,0,0.35), rgba(0,0,0,0.35)) no-repeat, url('<?php echo get_template_directory_uri()?>/images/adventure-photos/canoe-girl.jpg') no-repeat center; background-size: cover, cover;">
                        <div class="adventure-info">
                            <h2>Getting Back to Nature in a Canoe</h2>
                            <a class="white-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="adventure-col">
                        <div class="adventure-item adventure-item-2" style="background: linear-gradient( 0deg, rgba(0,0,0,0.35), rgba(0,0,0,0.35)) no-repeat, url('<?php echo get_template_directory_uri()?>/images/adventure-photos/beach-bonfire.jpg') no-repeat center; background-size: cover, cover;">
                            <div class="adventure-info">
                                <h2>A Night with Friends at the Beach</h2>
                                <a class="white-btn" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="adventure-row adventure-row-2">
                            <div class="adventure-item adventure-item-3" style="background: linear-gradient( 0deg, rgba(0,0,0,0.35), rgba(0,0,0,0.35)) no-repeat, url('<?php echo get_template_directory_uri()?>/images/adventure-photos/mountain-hikers.jpg') no-repeat center; background-size: cover, cover;">
                                <div class="adventure-info">
                                    <h2>Taking in the View at Big Mountain</h2>
                                    <a class="white-btn" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="adventure-item adventure-item-4" style="background: linear-gradient( 0deg, rgba(0,0,0,0.35), rgba(0,0,0,0.35)) no-repeat, url('<?php echo get_template_directory_uri()?>/images/adventure-photos/night-sky.jpg') no-repeat center; background-size: cover, cover;">
                                <div class="adventure-info">
                                    <h2>Star-Gazing at the Night Sky</h2>
                                    <a class="white-btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="see-more">
                    <a href="#" class="green-btn">More Adventures</a>
                </p>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
