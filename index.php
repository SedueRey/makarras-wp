<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <title>Makarras</title>
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="icon.png">
    <link rel="apple-touch-icon-precomposed" href="icon.png">
    <meta name="apple-mobile-web-app-title" content="">
    <link type="text/plain" rel="author" href="humans.txt">
</head>
<body>
    <header id="mainheader">
    	Logo & Menú
    </header>
    <main>
        <section class="">
        	<?php for( $i = 0; $i < 5; $i++ ): ?>
        	<article>
                <h3 class="subtitle">Subtitulo gracioso y todas esas cosas</h3>
                <h2>
                    <a href="#">Titular de la noticia</a>
                </h2>
        		<aside>
        			Fecha, comentarios, tal
        		</aside>
        		<p>Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn’t worth discussing here, but the latter requires a closer look.</p>
    			<p>When using a baseline grid, the first thing you <a href="#">must decide</a> on is your baseline grid unit. You’ll commonly see baseline grid values of something like 20px, but where does a value like that come from?</p>
                <p><img src="http://40.media.tumblr.com/b0e6089fbc6ebb5f190cf7749bae0231/tumblr_ncff4ltbm41qztdg6o10_1280.jpg" width="550" /></p>
    			<p>As you might have guessed, most designers choose this unit arbitrarily. The problem with this approach is that the resulting baseline grid unit is not directly related to the primary font size, which is the most fundamental design element on the page.</p>
    			<p>Instead of relying on arbitrary selection, wouldn’t it be nice if there were a way to determine the perfect typography settings based on a given context?</p>
    			<p>As it turns out, the golden ratio provides us with a guide—a formula—for proper typesetting. Because of this, we can now set our type with absolute certainty in any situation! Better still, we can use this information about typography to make more informed decisions about all the spatial aspects of our designs, such as:</p>
    			<ul>
    			<li>The amount of whitespace that appears after each paragraph</li>
    			<li>Padding, margins, and other units of whitespace throughout the design</li>
    			<li>Headline line-heights in a given width</li>
    			<li>Any and all spatial properties that you wish to relate mathematically</li>
    			</ul>
    			<p>The power of golden ratio typography cannot be understated. By choosing the line-height of your primary text as your new “baseline unit”, you are effectively tying all the dimensions of your layout together with the golden ratio.</p>
    			<p>Just look at you, with all this newfound knowledge…the ancient Greeks would be proud :D</p>
    	
        	</article>	
        	<?php endfor; ?>
        </section>
</main>
</body>
</html>
