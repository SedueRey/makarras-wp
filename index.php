<?php get_header(); ?>
        <section>
            <aside class="responsive_logo">
                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                    <span class="blogname"><?php bloginfo('name'); ?></span> <span class="blogdescription"><?php bloginfo('description'); ?></span>
                </a>
            </aside>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<article id="post-<?php the_ID(); ?>" class="post<?php the_category_unlinked(' '); ?>">
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
                    · <a href="<?php comments_link(); ?>"><?php comments_number('5mentarios','1 triste comentario','% han farfullado algo' );?></a>
                    <?php edit_post_link('editar', '', ''); ?>
                    <div class="avatar">
                        <?= get_avatar( get_the_author_id(), $size = '36' );  ?>
                    </div>
        		</aside>
        		<?php the_content(); ?>
                <footer>
                    <?php the_category(' ') ?> · <?php the_tags( '', ' , ', '' ); ?>
                </footer>
        	</article>	
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </section>
        <aside class="sidebar"><?php dynamic_sidebar( 'Izquierda' ); ?></aside>
<?php get_footer(); ?>