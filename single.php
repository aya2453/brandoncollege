<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

    <section id="main">
    	<header class="page-header" style="margin-bottom:2em;">
      	<div class="container">
      	<h1 class="header-title">Blog</h1>
        </div>
      </header>
      <div class="page-wrap">
				<div class="container clear">
        	<div class="page-contents col-9 left mobile-full">
          	<div class="main-contents-wrap">              
            	<!--post-->
							<?php while ( have_posts() ) : the_post(); ?>
              <article class="news-post clear">
                <div class="news-date-wrap left">
                  <span class="news-date"><?php echo get_post_time('d'); ?></span>
                  <span class="news-month"><?php echo get_post_time('M'); ?></span>
                </div>
                <div class="news-cont col-10 right">
                  <div class="clear post-title"><!--<i class="icon-pencil"></i>--><a href=""><?php the_title(); ?></div>
                  <div class="post-meta">
                  <i class="icon-tags"></i> <span class="meta-cat"><a href=""></a>, <a href="">Classes</a>, <a href="">Beyonce</a></span>
                  
                  </div>
                  <div class="post-contents"><p> <?php the_content(); ?></p></div>
                </div>
              </article>
              <!--postEND-->
<?php endwhile; ?>
 
  
  		<?php get_sidebar(); ?>
    <section class="apply-bottom">
      <div class="container">
        <a href="#">ENROLL IN A COURSE AT BRANDON COLLEGE⇒</a>
      </div>
    </section>
    <!--applybottomEND-->


<?php get_footer(); ?>