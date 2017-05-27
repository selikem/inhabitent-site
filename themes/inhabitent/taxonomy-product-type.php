<?php
/**
 * The template for displaying the "product" post type archive page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="archive-container">
            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                    ?>
                </header><!-- .page-header -->
                <div class="product-grid">
                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="product-grid-item">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="thumbnail-wrapper">
                                <a href=<?php the_permalink()?>>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail( 'large' ); ?>
                                    <?php endif; ?>
                                </a> 
                            </div><!-- .entry-header -->

                             <div class="product-info">
                                <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
                                <span class="price">$<?php echo CFS()->get( 'price' ); ?></span>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->

                    </div>   
                    <?php endwhile; ?>
                    
                    <?php the_posts_navigation(); ?>
                    
                    <?php else : ?>

                        <?php get_template_part( 'template-parts/content', 'none' ); ?>

                    <?php endif; ?>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
