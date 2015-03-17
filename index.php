<?php get_header(); ?>
        <section class="">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<article id="post-<?php the_ID(); ?>">
                <header>
                    <?php if( get_post_meta( $post->ID , 'subtitular', TRUE) ): ?>
                        <h3 class="subtitle">&laquo;<?php echo get_post_meta( $post->ID , 'subtitular', TRUE); ?>&raquo;</h3>
                    <?php endif; ?>
                    <h2>
                        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </h2>
                </header>
        		<aside>
        			<?php the_time('F jS, Y') ?>, <?php the_author_posts_link() ?>
        		</aside>
        		<?php the_content(); ?>
                <footer></footer>
        	</article>	
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </section>
        <aside class="sidebar"><?php dynamic_sidebar( 'Izquierda' ); ?></aside>
<?php get_footer(); ?>