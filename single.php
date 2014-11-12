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
 			<?php while ( have_posts() ) : the_post(); ?>
    	<header class="page-header" style="margin-bottom:2em;">
      	<div class="container">
      	<h1 class="header-title"><?php the_title();?></h1>
        </div>
      </header>
      <!--pagewrap-->
      <div class="page-wrap">
        <!--container-->
				<div class="container">
          <div class="row clear">
            <div class="col-9 col mobile-full">
            	<section class="bd-section">
                <!--post-->
                <article class="news-post clear">
                  <div class="news-date-wrap left">
                    <span class="news-date"><?php echo get_post_time('d'); ?></span>
                    <span class="news-month"><?php echo get_post_time('M'); ?></span>
                  </div>
                  <div class="news-cont col-10 right">
                    <div class="clear post-title"><?php the_title(); ?></div>
                    <div class="post-meta">
                    <i class="icon-tags"></i> <span class="meta-cat"><a href=""></a>, <a href="">Classes</a>, <a href="">Beyonce</a></span>
                    
                    </div>
                    <div class="post-contents"><p> <?php the_content(); ?></p></div>
                  </div>
                </article>
                <!--postEND-->
							<?php endwhile; ?>
              </section>
              
            </div>
            <!--maincolEND-->
            
      
      
 
  
  		<?php get_sidebar(); ?>
    <section class="apply-bottom">
      <div class="container">
        <a href="#">ENROLL IN A COURSE AT BRANDON COLLEGE⇒</a>
      </div>
    </section>
    <!--applybottomEND-->


<?php get_footer(); ?>