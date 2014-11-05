<?php


get_header(); ?>

		<!--page-main-->
    <section id="main">
    	<header class="page-header" style="margin-bottom:2em;">
<?php while ( have_posts() ) : the_post(); ?>      	
			<div class="container">
      	<h1 class="header-title"><?php the_title(); ?></h1>
        </div>
      </header>
      <!--pagewrap-->
      <div class="page-wrap">
        <!--container-->
				<div class="container clear">
		<?php the_content(); ?>
        </div>
        <!--containerEND-->
      </div>
      <!--pagewrapEND-->
    </section>
    <!--page-mainEND-->
<?php endwhile; ?>



<?php get_footer(); ?>