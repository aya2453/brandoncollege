<?php

/*Theme Name:Courses*/

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
				<div class="container">
          <div class="row clear">
            <div class="col-9 col mobile-full">
            	<section class="bd-section"><?php the_content(); ?></section>
              
            </div>
            <!--sidebar-->
            <aside class="col-3 col mobile-full">
              <div class="sidebar-wrap">
                <h4 class="main-heading"><span>Location</span></h4>
                <div class="sidebar-nav-wrap">
                  <ul class="sidebar-nav">
                    <li><a href="">Intensive English</a></li>
                    <li><a href="">Business English</a></li>
                    <li><a href="">TOEFL Preparation</a></li>
                    <li><a href="">GeneralEnglish</a></li>
                    <li><a href="">Cambridge Course</a></li>
                    <li><a href="">Communication Skills</a></li>
                    <li><a href="">Private Classes</a></li>
                  </ul>
                  
                </div>
              </div>
            </aside>
            <!--sidebar-->
          </div>
          <!--rowEND-->
        </div>
        <!--containerEND-->
      </div>
      <!--pagewrapEND-->
      <section class="apply-bottom">
        <div class="container">
          <a href="#">ENROLL IN A COURSE AT BRANDON COLLEGE⇒</a>
        </div>
      </section>
      <!--applybottomEND-->
    </section>
    <!--page-mainEND-->
<?php endwhile; ?>



<?php get_footer(); ?>