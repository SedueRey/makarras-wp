<?php // Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'kubrick'); ?></p>
			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'odd';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
    <div><a name="comments"></a></div>
	<h3><?php comments_number('5mentarios', 'Un triste comentario', '% Chorradas al viento');?> <?php printf('en &#8220;%s&#8221;', the_title('', '', false)); ?></h3>
	<ol class="commentlist">
	<?php foreach ($comments as $comment) : ?>
		<li class="<?php echo $oddcomment; ?> <?= get_comment_author(); ?>" id="comment-<?php comment_ID() ?>">
        	<div class="metacomment">
				<div class="commentavatar"><?php echo get_avatar( $comment, 32 ); /*twittAvatars('32', 'r'); */?></div>
                <small><a href="#comment-<?php comment_ID() ?>" title="" rel="noFollow"><?php comment_date('j/n/Y'); ?> a las <?php comment_time('H:i:s'); ?></a><? if (function_exists('pri_print_browser')){ pri_print_browser('','', true, '', false);} ?> <?php comment_type('', ' | Trackback', ' | Pingback'); ?><br />
                <a name="comment-<?php comment_ID() ?>"></a>Puestos a decir tonterias, <?php comment_author_link(); ?> ha dicho que... 
                <?php edit_comment_link('Editar','&nbsp;&nbsp;',''); ?></small>
            </div>
			<div class="commentcontent">
			<?php if ($comment->comment_approved == '0') : ?>
			<p><em>A&uacute;n no se ha validado tu comentario. Paciencia</em></p>
			<?php endif; ?>
                <div class="commenttext">
                <?php comment_text() ?>
                </div>
			</div>
		</li>
	<?php
		/* Changes every other comment to a different class */
		$oddcomment = ( empty( $oddcomment ) ) ? 'odd' : '';
	?>
	<?php endforeach; /* end for each comment */ ?>
	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<? /*!-- If comments are closed. */ ?>
		<div class="comments"><h3>Comentarios cerrados</h3>
		<p>Los comentarios de esta entrada, seguro que gracias a alg&uacute;n desaprensivo o a que esta nota es ya m&aacute;s vieja de lo que se 
		pueda imaginar, est&aacute;n cerrados. </p>
		<p>Si por alg&uacute;n motivo, raz&oacute;n o circunstancia crees que tienes algo importante que decirnos, ale, al correo.</p>
		</div>

<?php endif; ?>
<?php endif; ?>
<?php if ( $post-> comment_status == 'open') : ?>
<a name="respond"></a>
<div class="comments">
<form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<h3>Seguro que puedes decir alguna chorrada</h3>
<p><input type="text" name="author" id="author" class="styled" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<input type="hidden" name="comment_post_ID"  value="<?php echo $id; ?>" />
<input type="hidden" name="redirect_to"  value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" />
<label for="author"><small>Nombre</small></label></p>
<p><input type="text" name="email" id="email"  class="styled" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Correo (No ser&aacute; publicado)</small></label></p>
<p><input type="text" name="url"  class="styled" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>P&aacute;gina web</small></label></p>
<h4>XHTML que puedes poner</h4>
<p>a <b>b</b> <strong>strong</strong> quote blockquote br cite li ul img <i>i</i> <em>em</em> <strike>strike</strike></small></p>
<p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea>
</p>
<?php if ('none' != get_settings("comment_moderation")) { ?>
	<p><small><strong>Advertencia:</strong> Los comentarios se pasan por el filtro <a href="http://akismet.com/">Akismet</a>, si no llega a publicarse, h&aacute;znoslo saber.</small></p>
<?php } ?>
<input name="submit" type="submit" id="submit" class="btBuscar" tabindex="5" value="Comentar" />
</form>
</div>
<?php endif; ?>