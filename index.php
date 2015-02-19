<?php get_header(); ?>
        <section class="">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<article>
                <header>
                    <h3 class="subtitle">Subtitulo gracioso y todas esas cosas</h3>
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
<?php get_footer(); ?>