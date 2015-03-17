</main>
<?php wp_footer(); ?>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/jquery.lazyload.min.js"></script>
<script type="text/javascript">
	$(function() {
	    $("img.deferload").lazyload(); 
	    $('.close', '#search').on('click', function(){
	    	$("#search").toggleClass('opened').toggleClass('closed');
	    	return false;
	    });
	    $('.nav-toggler').on('click', function(){
	    	$("#mainheader").toggleClass('opened');
	    	return false;
	    });
	});
</script>
</body>
</html>